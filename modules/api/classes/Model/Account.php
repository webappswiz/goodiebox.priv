<?php

class Model_Account extends ORM {

    protected $_table_name = 'api_user_sessions';

    public function existsAccount($login = '') {
        $account = DB::select()->from('users')->where('username', '=', $login)->execute()->current();
        if (sizeof($account) < 1)
            return false;
        return $account;
    }

    public function registerSession($user_id = '') {
        $result = $this->where('user_id', '=', $user_id)->find_all()->current();
        if (!empty($result->ssid)) {
            $session_id = $result->ssid;
        } else {
            $session_id = session_id();
            $this->user_id = $user_id;
            $this->ssid = $session_id;
            $this->save();
        }

        return $session_id;
    }

    public function checkLoginPass($user_id = '', $password = '') {
        $account = DB::select()->from('users')->where('id', '=', $user_id)->and_where('password', '=', $password)->execute()->current();
        return $account;
    }

    public function getAccountByLogin($login) {
        $account = $this->where('login', '=', $login)->find();
        return $account;
    }

    public function getUsernameById($userID) {
        $account = $this->select('username')->where('userID', '=', $userID)->find();
        return $account->username;
    }

}
