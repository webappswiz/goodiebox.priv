<?php

$menus = array();
$menus = array(
    '/admin' => array('Dashboard', 'dashboard'),
    '/admin/orders' => array('Orders', 'orders'),
    '/admin/users' => array('Users', 'users'),
    '/admin/templates' => array('Templates', 'templates'),
    '/admin/shelters' => array('Shelters', 'shelters'),
);
if (!$menus)
    return;
?>
<?php

foreach ($menus as $uri => $data) {
    $class = ''; //active
    if (isset($active_menu) && $active_menu === $data[1]) {
        $class = 'class = "active"';
    }
    echo "<li $class>";
    echo HTML::anchor($uri, $data[0]);
    echo '</li>';
}
?>