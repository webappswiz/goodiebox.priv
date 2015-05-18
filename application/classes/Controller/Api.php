<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_API extends Controller_Core {

    protected $check_access = FALSE;

    public function action_check() {
        $email = Arr::get($_REQUEST, 'email');

        if (!$email) {
            echo json_encode(array('error' => 'email incorrect'));
        } else {
            $user = ORM::factory('User')
                    ->where('username', '=', $email)
                    ->or_where('email', '=', $email)
                    ->find();
            if ($user->loaded()) {
                echo json_encode(array('msg' => '1'));
            } else {
                echo json_encode(array('msg' => '0'));
            }
        }
        $this->render_nothing();
    }

    public function action_checkCode() {
        $coupon_code = Arr::get($_REQUEST, 'code');
        if (!$coupon_code) {
            echo json_encode(array('error' => 'incorrect code'));
        } else {
            $code = ORM::factory('Coupons')
                    ->where('coupon', '=', $coupon_code)
                    ->find();
            $code1 = ORM::factory('CouponCodes')
                    ->where('coupon_code', '=', $coupon_code)
                    ->find();
            if ($code->loaded()) {
                echo json_encode(array('msg' => '1'));
            } elseif ($code1->loaded()) {
                $code1->count = $code1->count + 1;
                $code1->save();
                echo json_encode(array('msg' => '2'));
            } else {
                echo json_encode(array('msg' => '0'));
            }
        }
        $this->render_nothing();
    }

    public function action_removePuppy() {
        $puppy_id = (int) Arr::get($_REQUEST, 'dog_id');
        $puppy = ORM::factory('Puppy')
                ->where('id', '=', $puppy_id)
                ->and_where('user_id', '=', $this->current_user->id)
                ->find();
        if ($puppy->loaded()) {
            $puppy->delete();
            echo 0;
        } else {
            echo 1;
        }
        $this->render_nothing();
    }

}
