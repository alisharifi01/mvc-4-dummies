<?php /* Smarty version Smarty-3.1.19, created on 2015-06-05 14:14:21
         compiled from "C:\xampp\htdocs\php-adv-4\code\fw\views\templates\front\products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3166455718f84511709-77535989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7d57b9adf19291c990d2107f8dcaf46a5c475a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php-adv-4\\code\\fw\\views\\templates\\front\\products.tpl',
      1 => 1433506405,
      2 => 'file',
    ),
    '024aa4e28f324d94190b743e6c161beaa7524f41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php-adv-4\\code\\fw\\views\\templates\\layout\\master.tpl',
      1 => 1433484622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3166455718f84511709-77535989',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55718f845a9ca3_50874332',
  'variables' => 
  array (
    'SITE_ROOT_URL' => 0,
    'shops' => 0,
    'shop' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55718f845a9ca3_50874332')) {function content_55718f845a9ca3_50874332($_smarty_tpl) {?>
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

    <style>
        .products-list{
            margin: 0 auto;
            border: 1px solid #000;
            width:300px;
            display: block;
            margin-top: 20px;
        }
        .products-list li{
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }

    </style>

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

</head>
<body>

<div  class="topnav_gradient topBar_black">
		<a href="<?php echo $_smarty_tpl->tpl_vars['SITE_ROOT_URL']->value;?>
/" class="topnav_btn">صفحه نخست</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_ROOT_URL']->value;?>
/login" class="topnav_btn">ورود</a>
        <a  href="<?php echo $_smarty_tpl->tpl_vars['SITE_ROOT_URL']->value;?>
/register" class="topnav_btn">ثبت نام</a>
	
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
          	
            
    <ul class="products-list">
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_ROOT_URL']->value;?>
/product?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a> </li>
        <?php } ?>
    </ul>

				
        </div>
        <div id="rightside">
        <!-- sub_nav=<nav> ... but IE8 and earlier not support -->
      
<div id="sub_nav" class="border_gray"> 
	<div class="bar_narrow"></div>
  <ul>
      <?php  $_smarty_tpl->tpl_vars['shop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shops']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shop']->key => $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->_loop = true;
?>
          <li >
              <h1>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_ROOT_URL']->value;?>
/products?shop_id=<?php echo $_smarty_tpl->tpl_vars['shop']->value['id'];?>
"><strong> <?php echo $_smarty_tpl->tpl_vars['shop']->value['name'];?>
</strong>
                  </a>
              </h1>
          </li>
      <?php } ?>
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
<?php }} ?>
