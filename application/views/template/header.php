<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= URL::title($title); ?></title>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <?php
        foreach (Media::styles() as $file => $type) {
            echo HTML::style($file, array('media' => $type)), PHP_EOL;
        }
        echo Media::inline_style();
        ?>
        <script>
            var url_base = '<?php echo URL::base(true, true) ?>';
        </script>
        <?php
        foreach (Media::scripts() as $file) {
            echo HTML::script($file), PHP_EOL;
        }
        echo Media::inline_script();
        ?>
    </head>
    <body>
        <div class="container">
            <header>
                <div class="logo">
                    <a href="<?=URL::base(TRUE, FALSE)?>"><img src="<?=URL::base(TRUE, FALSE)?>/assets/img/logo.png" alt="goodybox"></a>
                </div> <!--End logo-->
                <div class="social-right">
                    <ul>
                        <li><a href="#"><img src="<?=URL::base(TRUE, FALSE)?>/assets/img/facebook-btn.jpg" alt="facebook"></a></li>
                        <li><a href="#"><img src="<?=URL::base(TRUE, FALSE)?>/assets/img/twitter-btn.jpg" alt="twitter"></a></li>
                        <li><a href="#">
                                <a href="claim-gift.html"><button type="button" class="top-btn rounded">Ajándékbeváltás</button></a>
                            </a></li>
                    </ul>
                </div> <!--End social-right-->
            </header>
            <div class="clear"></div>
