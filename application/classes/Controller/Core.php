<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Core template wich extends functionality of Controller_Template
 *
 */
class Controller_Core extends Controller_Base_Core {

    /**
     *  check Acl access (true means do the check)
     * @var bool
     */
    protected $check_access = TRUE;

    public function before() {

        parent::before();
        $this->template->active_menu = 'home';
        //$this->check_access();
        $this->current_user = Auth::instance()->logged_in() ? Auth::instance()->get_user() : NULL;
        if ($this->current_user) {
            $lang_id = $this->current_user->lang;
            if ($lang_id == 1) {
                I18n::lang('hu');
                $lang = Cookie::set('lang', 'hu');
            } else {
                I18n::lang('en');
                $lang = Cookie::set('lang', 'en');
            }
        } else {
            $lang = Cookie::get('lang', 'hu');
            I18n::lang($lang);
        }
    }

    /**
     * check access for current request
     * @throws HTTP_Exception_403
     */
    protected function check_access() {
        if (!$this->request->is_initial() || !$this->check_access)
            return TRUE;

        if (Auth::instance()->logged_in())
            return TRUE;

        if (!$this->request->is_ajax()) {
            Cookie::set('auth_redirect_url', $this->request->url() . http_build_query($this->request->query()));
            return self::redirect($this->config_item('user_login_uri'));
        } else {
            throw new HTTP_Exception_403('Access deny');
        }
    }

    public function append_js($name) {
        Base_Media::instance()->append_script($name);
    }

}
