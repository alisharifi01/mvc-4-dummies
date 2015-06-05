
<!doctype html>
<html>
<head>

<title>سایت فلان</title>

<!-- META -->
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="auther" content="ali sharifi">
<meta name="google-site-verification" content="jR0mJO8qvckMb6T0-0vCd6ZfV9ahjUhNF3pPiHXxrOQ" />
<meta name="Keywords" content="">
<meta name="description" content="">
<META name="ROBOTS" CONTENT="ALL" >


<link rel="shortcut icon" type="image/ico" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="css/detection.css">
<link rel="stylesheet" type="text/css" href="assets/js/slide_show/engine1/style.css" />
<!--[if IE]><!-->

<link rel="stylesheet" type="text/css" href="assets/css/desktop.css">
<link rel="stylesheet" type="text/css" href="assets/css/IE.css">
<!--<![endif]-->
<!--[if IE 8]><!-->

<link rel="stylesheet" type="text/css" href="assets/css/desktop.css">

<link rel="stylesheet" type="text/css" href="assets/css/ie8.css">
<!--<![endif]-->
<!--[if IE 9]><!-->

<link rel="stylesheet" type="text/css" href="assets/css/desktop.css">

<link rel="stylesheet" type="text/css" href="assets/css/ie9.css">
{block name="css"}{/block}
<!--<![endif]-->
<!--[if !IE]><!-->
<script async>  
if (/*@cc_on!@*/false) {  
    document.documentElement.className+=' ie10';  
}  
</script>

<link rel="stylesheet" type="text/css" href="assets/css/detection.css">

<!--<![endif]-->
<script async>
if (window.opera)     
{
   document.documentElement.className += ' opera';
}
if (window.chrome)     
{
   document.documentElement.className += ' chrome';
  
}
</script>

<!-- SCRIPTS -->
<script src="assets/js/jquery.js"></script>


<script>
	$(document).ready(function(e) {
		
    });
</script>
{block name="js"}{/block}
</head>
<body>

<div  class="topnav_gradient topBar_black">
		<a href="{$SITE_ROOT_URL}/" class="topnav_btn">صفحه نخست</a>
        <a href="{$SITE_ROOT_URL}/login" class="topnav_btn">ورود</a>
        <a  href="{$SITE_ROOT_URL}/register" class="topnav_btn">ثبت نام</a>
	
</div>
<div id="container">
	<div id="header">
         <a id="logo">
         </a>
         <div id="website_title" class="orange_color">
         	فلان سایت ، مکانی برای فلان کار شما
         </div>
         <div id="search_header">
         	<div id="header_search_button"></div>
            
         	<input name="search_header_input"  placeholder="جستجو ..." type="text">
         </div>
         
     
</div>
	
   
  <div id="main_area"> 
   <!-- leftside=<aside> ... but IE8 and earlier not support -->
        <div id="leftside">
          	
            {block name="main"}{/block}
				
        </div>
        <div id="rightside">
        <!-- sub_nav=<nav> ... but IE8 and earlier not support -->
      
<div id="sub_nav" class="border_gray"> 
	<div class="bar_narrow"></div>
  <ul>
      {foreach $shops as $shop}
          <li >
              <h1>
                  <a href="{$SITE_ROOT_URL}/products?shop_id={$shop['id']}"><strong> {$shop['name']}</strong>
                  </a>
              </h1>
          </li>
      {/foreach}
    </ul>
</div>
            <div class="ad_box border_gray">
            	<div class="bar_narrow"></div>
            	
            </div>
            <div class="ad_box border_gray">
            	<div class="bar_narrow"></div>
            	
            </div>
        </div>
    </div>
	<div id="footer" class="footer_gradient">	
           کلیه حقوق وبسایت محفوظ میباشد &copy;
           <br><br>
           برای اطلاعات بیشتر با شماره تلفن <span class="orange_color">3333314</span> تماس بگیرید
</div>
	<br>
    
</div>
<br><br>
</body>
</html>
