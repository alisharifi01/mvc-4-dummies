<?php /* Smarty version Smarty-3.1.19, created on 2015-03-13 19:54:39
         compiled from "C:\xampp\htdocs\making-framework\mvc-4-dummies\views\templates\simple-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31075550328037c2948-87671248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5344bae12fb5f909a7faa9e385846df98b2e6fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\making-framework\\mvc-4-dummies\\views\\templates\\simple-form.tpl',
      1 => 1426270620,
      2 => 'file',
    ),
    '5e37a032cb19696f21f33667a6e8a95ea22e7e91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\making-framework\\mvc-4-dummies\\views\\templates\\layout.tpl',
      1 => 1426270789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31075550328037c2948-87671248',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55032803a10608_59996844',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55032803a10608_59996844')) {function content_55032803a10608_59996844($_smarty_tpl) {?><!DOCTYPE html>
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
        <form action="simple-form" method="post">
            <input type="text" name="foo" placeholder="write something"/>
            <br/>
            <input type="submit"/>
            <hr/>
            <?php if (isset($_smarty_tpl->tpl_vars['inputPosted']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['inputPosted']->value;?>

            <?php }?>
        </form>
    </div>

    </div>
</body>
</html><?php }} ?>
