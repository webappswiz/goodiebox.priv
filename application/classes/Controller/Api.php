<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_API extends Controller_Core {

    protected $check_access = FALSE;

    public function before()
    {
        parent::before();
        if ($this->request->action() === 'login')
            return;
        $this->user = NULL;
        $ssid = $this->request->jpost('ssid');
        if (!$ssid) {
            $this->render_json(array(
                "error" => "ssid not exists",
                "code" => "00001",
            ));
            return;
        }
        $token = ORM::factory('User_Token')
                ->with('user')
                ->where('token', '=', $ssid)
                ->find();
        if (!$token->loaded()) {
            $this->render_json(array(
                "error" => "ssid not exists",
                "code" => "00001",
            ));
            return;
        }
        $this->user = $token->user;
    }

    private function check_input($body, $params)
    {
        $body = json_decode($body);
        foreach ($params as $param) {
            if (!isset($body->$param) || empty($body->$param)) {
                $this->render_json(array(
                    "error" => "Data not found",
                    "code" => "00002",
                ));
                return FALSE;
            }
        }
        return TRUE;
    }

    private function android_push($token, $ids, $type)
    {
        $key = 'AIzaSyCdWhudnBGn51NPpLkSGtVz59MKQhqjgGg';
        $url = 'https://android.googleapis.com/gcm/send';
        $fields = array(
            'registration_ids' => $registatoin_ids,
            'data' => $message,
        );

        $headers = array(
            'Authorization: key=' . $key,
            'Content-Type: application/json'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);
    }

    private function ios_push($tokens, $body)
    {
        $push = new ApnsPHP_Push(
                ApnsPHP_Abstract::ENVIRONMENT_PRODUCTION, APPPATH . '/certificates/ck.pem'
        );
        $push->connect();
        foreach ($tokens as $token) {
            $message = new ApnsPHP_Message($token);
            $message->setCustomIdentifier(sprintf("Message-Badge-%03d", rand(1, 10000)));
            $message->setBadge(0);
            $message->setText($body);
            $push->add($message);
        }
        $push->send();
        $push->disconnect();
        $aErrorQueue = $push->getErrors();
        if (!empty($aErrorQueue)) {
            foreach ($aErrorQueue as $error) {
                $dev_token = $error['MESSAGE']->_aDeviceTokens;
                //$model = ORM::factory('Token')->where('token', '=', $dev_token[0])->find();
                //$model->delete();
            }
        }
    }

    public function action_login()
    {
        if ($this->check_input($this->request->body(), array('username', 'password')) === FALSE) {
            return;
        }
        $username = $this->request->jpost('username');
        $password = $this->request->jpost('password');
        $user = ORM::factory('User', array('username' => $username));
        if (!$user->loaded()) {
            $this->render_json(array(
                "error" => "User does not exist",
                "code" => "00003",
            ));
            return;
        }
        if ($user->password != md5($password)) {
            $this->render_json(array(
                "error" => "Password incorrect",
                "code" => "00004",
            ));
            return;
        }
        $token = ORM::factory('User_Token');
        $token->user_id = $user->id;
        $token->expires = gmmktime(0, 0, 0, 31, 12);
        $token->save();
        $this->render_json(array(
            'msg' => 'Ok',
            'code' => '10001',
            'data' => array(
                'ssid' => $token->token
            ),
            'user' => array(
                'user_id' => $user->id,
                'username' => $user->username,
                'email' => $user->email,
            )
        ));
    }

    public function action_logout()
    {
        if (!$this->user)
            return;
        $ssid = $username = $this->request->jpost('ssid');
        $token = ORM::factory('User_Token')
                ->with('user')
                ->where('token', '=', $ssid)
                ->find();
        if ($token->loaded()) {
            $token->delete();
            $this->render_json(array(
                'msg' => 'Ok',
                'code' => '10001',
            ));
            return;
        }
    }

    public function action_index()
    {
        if (!$this->user)
            return;
        $ssid = $this->request->jpost('ssid');
        $this->render_json(array(
            'msg' => 'Ok',
            'code' => '10001',
        ));
    }
}
