<?php /* Smarty version Smarty-3.1.19, created on 2015-03-13 19:53:44
         compiled from "C:\xampp\htdocs\making-framework\mvc-4-dummies\views\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101835503276cde23b4-14628565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c711082ec5174ba19bc6ed0ba4a91591dc3b178b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\making-framework\\mvc-4-dummies\\views\\templates\\home.tpl',
      1 => 1426270045,
      2 => 'file',
    ),
    '5e37a032cb19696f21f33667a6e8a95ea22e7e91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\making-framework\\mvc-4-dummies\\views\\templates\\layout.tpl',
      1 => 1426270789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101835503276cde23b4-14628565',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5503276d0c05d7_38019983',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5503276d0c05d7_38019983')) {function content_5503276d0c05d7_38019983($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    
  <script>    
        $(function(){
            //
        });
   </script>

    <title>MVC 4 Dummies</title>
</head>
<body>
    <div id="container">
        
    <div style="text-align: center">
        <h1><?php echo $_smarty_tpl->tpl_vars['greeting']->value;?>
</h1>
    </div>

    </div>
</body>
</html><?php }} ?>
