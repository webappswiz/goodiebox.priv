<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0">
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->	
        <style>
            @font-face {
                font-family: 'gillsansmt';
                src: url('fonts/gillsansmt.eot');
                src: local('<?=URL::base(TRUE, FALSE)?>assets/fonts/gillsansmt'), url('<?=URL::base(TRUE, FALSE)?>assets/fonts/gillsansmt.woff') format('woff'), url('<?=URL::base(TRUE, FALSE)?>assets/fonts/gillsansmt.ttf') format('truetype');}
            @font-face {
                font-family:'GilgongoKaps-Regular';
                src: url('<?=URL::base(TRUE, FALSE)?>assets/fonts/GilgongoKaps_latin+latin-ext_gdi.eot');
                src: url('<?=URL::base(TRUE, FALSE)?>assets/fonts/GilgongoKaps_latin+latin-ext_gdi.eot?#iefix') format('embedded-opentype'),
                    url('<?=URL::base(TRUE, FALSE)?>assets/fonts/GilgongoKaps_latin+latin-ext_gdi.woff') format('woff'),
                    url('<?=URL::base(TRUE, FALSE)?>assets/fonts/GilgongoKaps_latin+latin-ext_gdi.ttf') format('truetype'),
                    url('<?=URL::base(TRUE, FALSE)?>assets/fonts/GilgongoKaps_latin+latin-ext_gdi.svg#GilgongoKaps-Regular') format('svg');}
            @font-face {
                font-family:'GilgongoMutombo-Regular';
                src: url('<?=URL::base(TRUE, FALSE)?>assets/fonts/GilgongoMutombo_latin+latin-ext_gdi.eot');
                src: url('<?=URL::base(TRUE, FALSE)?>assets/fonts/GilgongoMutombo_latin+latin-ext_gdi.eot?#iefix') format('embedded-opentype'),
                    url('<?=URL::base(TRUE, FALSE)?>assets/fonts/GilgongoMutombo_latin+latin-ext_gdi.woff') format('woff'),
                    url('<?=URL::base(TRUE, FALSE)?>assets/fonts/GilgongoMutombo_latin+latin-ext_gdi.ttf') format('truetype'),
                    url('<?=URL::base(TRUE, FALSE)?>assets/fonts/GilgongoMutombo_latin+latin-ext_gdi.svg#GilgongoMutombo-Regular') format('svg');}
            .box{width:290px; height:145px; float:left;font-family: 'gillsansmt';letter-spacing:2px;}
            @media only screen and (max-width:640px){.logo img, .bottom-bg img{width: 100%; height: auto;} .box{float: none;margin: 0 auto;}}
            @media only screen and (max-width:460px){span{display: block;}}
            @media only screen and (max-width:320px){.box{width:278px;}}
        </style>	
    </head>
    <body style="margin:0;">
        <div style="max-width:600px; background:#feffc0; margin:0 auto; color:#feffc0;">
            <header style="background:#e02158; height:180px; text-align:center;">
                <div class="logo"><img src="<?=URL::base(TRUE, FALSE)?>assets/img/logo_email.png"></div>
                <p style="font-family:'GilgongoKaps-Regular';font-size:50px;margin:0 0 20px 0;letter-spacing:8px;">Ajándék<span style="font-family:'GilgongoMutombo-Regular';font-size:35px;">kupon</span></p>
            </header>
            <div style="background: url(<?=URL::base(TRUE, FALSE)?>assets/img/design_bg.png) repeat-x; height:34px; margin:5px 0;"></div>
            <div class="box" style="border:5px solid #e02158; background-color:#feffc0;color:#e02158;">
                <div style="padding:15px;">
                    <div style="font-size:18px">Kinek:</div>
                    <div style="margin:10px 0 10px 5px;font-size:14px"><?=$from->customer_firstname.' '.$from->customer_lastname?></div>
                    <div style="font-size:18px;">Kitől:</div>
                    <div style="margin:10px 0 0 5px;font-size:14px"><?=$to?></div>
                </div>
            </div>
            <div class="box" style="border:5px solid #feffc0;background-color:#e02158;font-size:18px;">
                <div style="padding:15px;">
                    <div style="">Kuponkód:</div>
                    <div style="margin:10px 0 10px 5px;"><?=$coupon?></div>
                    <div style="font-size:18px">Érvényes:</div>
                    <div style="margin:10px 0 0 5px;">
                        <?php
                            $date = strtotime(date('Y-m-d'));
                            $final = date("Y-m-d", strtotime("+1 month", $date));
                            echo $date;
                        ?>
                    </div>
                </div>
            </div>
            <div style="clear:both;"></div>
            <div class="bottom-bg"style="text-align:center;margin-top:8px;"><img src="<?=URL::base(TRUE, FALSE)?>assets/img/main_bg.png"></div>
        </div>
    </body>
</html>