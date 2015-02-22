<?php
$auth = Auth::instance();
$menus = array();
$menus = array(
    '/' => array('Főoldal', 'home'),
    '/hogyan/' => array('Hogyan működik?', 'hogyan'),
    '/kutyusaink' => array('Kutyusaink', 'kutyusaink'),
    'http://blog.goodiebox.hu' => array('Blog', 'blog'),
    '/gyik' => array('GYIK', 'gyik'),
    '/kapcsolat' => array('Kapcsolat', 'kapcsolat'),
);
if($auth->logged_in()){
    $menus['user_account'] = array('Profilom','arcél');
    $menus['user_session/logout'] = array('Kilépés','logout');
} else {
    $menus['user_session/login'] = array('Belépés','login');
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