<?php
$auth = Auth::instance();
$menus = array();
$menus = array(
    '/' => array('Főoldal', 'home'),
    '/hogyan/' => array( __('Hogyan működik?'), 'hogyan'),
    '/kutyusaink' => array( __('Kutyusaink'), 'kutyusaink'),
    'http://blog.goodiebox.hu' => array( __('Blog'), 'blog'),
    '/gyik' => array( __('GYIK'), 'gyik'),
    '/kapcsolat' => array( __('Kapcsolat'), 'kapcsolat'),
    '/media' => array( __('Média'), 'media'),
    '/partnerek' => array( __('Partnereink'), 'partnerek'),
);
if($auth->logged_in()){
    $menus['user_account'] = array( __('Profilom'),'arcél');
    $menus['user_session/logout'] = array( __('Kilépés'),'logout');
} else {
    $menus['user_session/login'] = array( __('Belépés'),'login');
}
if (!$menus)
    return;
?>
        <?php
        foreach ($menus as $uri => $data) {
            $class = ''; //active
            if (isset($active_menu) && $active_menu === $data[1]) {
                $class = 'class = "selected"';
            }
            echo "<li>";
            echo HTML::anchor($uri, $data[0],array($class));
            echo '</li>';
        }
        ?>