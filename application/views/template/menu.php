<?php
$menus = array();
$menus = array(
    '/' => array('Fooldal', 'home'),
    '/hogyan/' => array('Hogyan Mukodik', 'hogyan'),
    '/tamogass' => array('Tamogass TE', 'tamogass'),
    'http://blog.goodiebox.hu' => array('Blog', 'blog'),
    '/gyik' => array('GYIK', 'gyik'),
    '/kapcsolat' => array('Kapcsolat', 'kapcsolat'),
);
//}
if (!$menus)
    return;
?>
<nav>
    <ul>
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
    </ul>
</nav>
<div class="clear"></div>