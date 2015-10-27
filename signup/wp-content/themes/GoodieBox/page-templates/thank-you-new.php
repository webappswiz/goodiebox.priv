<?php
/**
 * Template Name: Thank you Page HU new
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GoodieBox</title>

<link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<style type="text/css">
ul { padding:0px; margin:0px;}
.dog img { width:100%; max-width:100%;}
.socials{
  margin:0px auto; 
  padding:0 0px 0 0;
  overflow:hidden;
  width:177px;
}
.socials ul{
  float:left;
  margin:0px 0px 18px;
  list-style-type:none;
}
.socials li{
  float:left;
  margin:0 3px 0 0;
}
.socials li a{
  display:block;
  width:177px;
  height:25px;
  outline:none;
  margin-bottom:6px;
  text-indent:-200px;
 
}
.socials li.fb a{
	 background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/fb-icon.png) no-repeat 0 0px;
  
}
.socials li.twt a{
   background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/twt-icon.png) no-repeat;
}
.socials li.fb-like a{
  background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/twt-icon.png) no-repeat;
}
.socials li.twt-like a{
  background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/fb-icon.png) no-repeat 0 0px;
}


.flags{
	width:100px;
	margin:0px auto; 
  padding:0px 0px 0 0;
  overflow:hidden; 
}
.flags ul{
  float:left;
  margin:0px 0px 20px;
  list-style-type:none;
}
.flags li{
  float:left;
  margin:0 3px 0 0;
}
.flags li a{
  display:block;
  width:45px;
  height:25px;
  outline:none;
  margin-left:2px;
}
.flags li.hu a{
  background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/hu-flag.png) no-repeat;
}
.flags li.eng a{
  background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/eng-flag.png) no-repeat 0 0px;
}


h1.page-title {
	font-style: italic;
	font-size: 36px;
	font-family: 'Petit Formal Script';
}
/*.header { background-image:url("<?php echo get_stylesheet_directory_uri(); ?>/images/thank/header.jpg"); background-repeat:no-repeat; background-size: auto 228px; display:block}*/
.header { position:relative;}
.header .pic{  width:100%; position:relative; }
.header .pic img{max-width:100%; width:100%}

.header .desc{ width:280px;text-align:center; font-weight:bold; float:left; position:absolute; left:15%; top:59%;}
.header-right { float:right; width:180px; margin-right:20px; position:absolute; right:0%; top:5%;}
table td {
	font-size:18px;
}

td.footer { padding-left:20px; color:#333; font-family: 'Petit Formal Script'; font-size:13px; background-position:0% 100%;}
.footer a { color:#333; text-decoration:none;  font-family: 'Petit Formal Script';}
.footer a:hover { text-decoration:underline; }
a { text-decoration:none;}
a:hover { text-decoration:underline}
.rows-2 img { vertical-align: middle;}


@media screen and (max-width: 900px) {
	.header .desc{ width:280px;text-align:center; font-weight:bold; float:left; position:absolute; left:15%; top:55%;}
.header-right { float:right; width:180px; margin-right:20px; position:absolute; right:0%; top:5%;}
}

@media screen and (max-width: 600px) {
	.header .desc{ width:100%;text-align:center; font-weight:bold; float:left; position:absolute; left:0%; top:30%;}
.header-right { float:none; width:180px; margin-right:20px; position:relative; right:0%; bottom:15%; margin:10px auto; }
}
@media screen and (max-width: 480px) {
	.header .desc{ width:100%;text-align:center; font-weight:bold; float:left; position:relative; left:0%; top:0%; margin-bottom:10px;}
.header-right { float:none; width:180px; margin-right:20px; position:relative; right:0%; top:15%; margin:10px auto; }
}
	
	
	
</style>


<script>

window.fbAsyncInit = function(){
FB.init({
    appId: '764361780253904', status: true, cookie: true, xfbml: true }); 
};
(function(d, debug){var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];if   (d.getElementById(id)) {return;}js = d.createElement('script'); js.id = id; js.async = true;js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";ref.parentNode.insertBefore(js, ref);}(document, /*debug*/ false));
function postToFeed(title, desc, url, image){
var obj = {method: 'feed',link: url, picture: 'http://goodiebox.hu/logo.jpg',name: title,description: desc};
function callback(response){}
FB.ui(obj, callback);
}
</script>
</head>

<body>
<table style="max-width:1020px" width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td class="header">
      <div class="pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thank/header.jpg" /></div>
      
    <div class="desc">Meglepetés csomag kutyusodnak minden hónapban</div>
    
  <div class="header-right">
            
            <div class="flags">
            <ul>
						
						<li class="hu"><a href="/home/"></a></li>
                        <li class="eng"><a href="/home-en/"></a></li>
						
			</ul>
            </div>
                   
				<div class="socials">
                
                
					<ul>
						
						 <li class="twt"><a class="twitter popup" href="http://twitter.com/share">Tweet</a></li>
                      <!-- <li class="fb"><a href="https://twitter.com/goodieboxhu"></a></li> -->
                      <li class="fb"><a href="http://goodiebox.hu/home/" data-title="Goodie" data-desc="Goodie" class="btnShare">Share</a></li>
                      
                      
<script>                        
				$('.btnShare').click(function(){
elem = $(this);
postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'), elem.data('image'));

return false;
});
</script>

<script>
  $('.popup').click(function(event) {
    var width  = 575,
        height = 400,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    = this.href,
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height +
                 ',top='    + top    +
                 ',left='   + left;
    
    window.open(url, 'twitter', opts);
 
    return false;
  });
</script>
		
					</ul>
                    
                   
				</div>
                </div>
                
                
    </td>
  </tr>
  <tr>
    <td height="80" align="center"><h1 class="page-title">Kedves gazdi!</h1></td>
  </tr>
  <tr>
    <td><table width="70%" border="0" cellpadding="0" cellspacing="0" align="center">
      <tr>
        
        <td width="100%" colspan="3"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td><strong>A feliratkozás sikeresen megtörtént. E-mail címedre elküldtük az első hírlevelünket!</strong></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
         <tr>
                <td class="rows-2">A <strong>Goodiebox</strong>ra már nem kell sokáig várnod, addig is kövess minket <a href="https://www.facebook.com/goodieboxhu"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thank/fb-icon.png" /></a> -on és <a href="https://www.twitter.com/goodieboxhu"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thank/twt-icon.png" /></a> -en!</td>
              </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="180" class="dog"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thank/rows-1l.jpg" /></td>
          </tr>
          
          
         
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="30" background="<?php echo get_stylesheet_directory_uri(); ?>/images/thank/footer.jpg" class="footer"> Copyright 2014  | <a href="http://goodiebox.hu">www.goodiebox.hu</a></td>
  </tr>
</table>
</body>
</html>
