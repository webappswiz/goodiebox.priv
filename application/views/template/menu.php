<?php
$auth = Auth::instance();

$menus = array();
//if ($auth->logged_in()) {
    $menus = array(
        '/' => array('Fooldal', 'home'),
        '/hogyan/' => array('Hogyan Mukodik','hogyan'),
        '/tamogass' => array('Tamogass TE','tamogass'),
        'http://finance-invest.biz.ua' => array('Blog','blog'),
        '/gyik' => array('GYIK','gyik'),
        '/kapcsolat' => array('Kapcsolat','kapcsolat'),
        '/users/registration' => array('Register','register'),
    );
//}
if (!$menus)
    return;
?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <?php
                    foreach ($menus as $uri => $data) {
                        $class = ''; //active
                        if (isset($active_menu) && $active_menu === $data[1]) {
                            $class = 'class = "active"';
                        }
                        if($uri=='profiles'){
                        echo "<li $class id=\"profiles\">";
                        echo '<a class="profiles">'.$data[0].'</a>';
                        echo '</li>';
                        } else{
                            echo "<li $class>";
                            echo HTML::anchor($uri, $data[0]);
                            echo '</li>';
                        }
                    }
                    ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
