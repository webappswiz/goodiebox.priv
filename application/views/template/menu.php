<?php
$auth = Auth::instance();
$menus = array();
$menus = array(
    '/' => array('Fooldal', 'home'),
    '/hogyan/' => array('Hogyan Mukodik', 'hogyan'),
    '/tamogass' => array('Tamogass TE', 'tamogass'),
    'http://blog.goodiebox.hu' => array('Blog', 'blog'),
    '/gyik' => array('GYIK', 'gyik'),
    '/kapcsolat' => array('Kapcsolat', 'kapcsolat'),
);
if($auth->logged_in()){
    $menus['user_account'] = array('Arcél','arcél');
    $menus['user_session/logout'] = array('Logout','logout');
} else {
    $menus['user_session/login'] = array('Belépés','login');
}
//}
if (!$menus)
    return;
?>
        <?php
        foreach ($menus as $uri => $data) {
            $class = ''; //active
            if (isset($active_menu) && $active_menu === $data[1]) {
                $class = 'class = "selected"';
            }
            echo "<li $class>";
            echo HTML::anchor($uri, $data[0]);
            echo '</li>';
        }
        ?>