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
	src: url('<?=URL::base(TRUE, FALSE)?>assets/fonts/gillsansmt.eot');
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
		@media only screen and (max-width:480px){ img{width: 100%; height: auto;}.box-row td{padding: 10px !important;}h2{font-size: 24px!important;} h2 span{font-size: 16px!important;}}
	</style>	
</head>
	<body>				
		<table border="0" cellpadding="0" cellspacing="0"  align="center" style="max-width:600;background-color:#ffffc1;text-align:center;">
			<tr Style="background-color:#e12258;width:100%;">
				<td colspan="2"><img src="<?=URL::base(TRUE, FALSE)?>assets/img/logo.png" style="text-align:center;"></td>
			</tr>
			<tr Style="background-color:#e12258;width:100%;">
				<td colspan="2"><h2 style="text-align:center;font-family:'GilgongoKaps-Regular';font-size:50px; color:#ffffc1;letter-spacing:8px; margin:0;padding:0;">Ajándék<span style="font-family:'GilgongoMutombo-Regular';font-size:35px;">kupon</span></h2></td>
			</tr>
			<tr >
				<divstyle=" margin:6px 0;">
				<td colspan="2" style="background: url(<?=URL::base(TRUE, FALSE)?>assets/img/design_bg2.png) repeat-x; height:47px; margin:5px 0;"></td>
				</div>
			</tr>
			<tr style="width:100%;" class="box-row">
				<td  style="width:50%; border:6px solid #e12258; padding:15px; text-align:left;font-family: 'gillsansmt'; color:#e12258;">
					<div style="font-size:18px">Kinek:</div>
					<div style="margin:10px 0 10px 5px;font-size:14px"><?=$to?></div>
					<div style="font-size:18px;">Kitől:</div>
					<div style="margin:10px 0 0 5px;font-size:14px"><?=$from->customer_lastname.' '.$from->customer_firstname?></div>
				</td>
				<td style="width:50%;border:6px solid #ffffc1;text-align:left;padding:15px; background-color:#e12258;font-family: 'gillsansmt'; color:#ffffc1;">
					<div style="">Kuponkód:</div>
					<div style="margin:10px 0 10px 5px;"><?=$coupon?></div>
					<div style="font-size:18px">Érvényes:</div>
					<div style="margin:10px 0 0 5px;"><?php
                            $date = strtotime(date('Y-m-d'));
                            $final = date("Y-m-d", strtotime("+1 month", $date));
                            echo $final;
                        ?></div>
				</td>
			</tr>
			<tr style=" width:100%;">
				<td  colspan="2" style=" text-align: center; padding-top:8px;"><img src="<?=URL::base(TRUE, FALSE)?>assets/img/main_bg.png" width="336" height="123"></td>
			</tr>
		</table>
	</body>
</html>