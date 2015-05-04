<?php /* Smarty version Smarty-3.1.18, created on 2015-05-04 15:08:58
         compiled from "C:\xampp\htdocs\data\themes\Basic-dark\tpl_common\top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1038755476f6af28f59-90567274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d5a93bd3df1ed282ccdad8fa1e5569755c1fe04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\themes\\Basic-dark\\tpl_common\\top.tpl',
      1 => 1430221331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1038755476f6af28f59-90567274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'TEMPLATE_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55476f6b030d77_84354065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55476f6b030d77_84354065')) {function content_55476f6b030d77_84354065($_smarty_tpl) {?><?php if (!is_callable('smarty_function_W')) include 'C:\\xampp\\htdocs/data/functions\\function.W.php';
?><div class="container-narrow">
    <?php echo smarty_function_W(array('name'=>'languageDropDownBox'),$_smarty_tpl);?>

</div>  
<div class="container-narrow shadow">
  <div class="pad margin-top-big">
    <div class="navbar-wrapper">
      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_HOME']->value;?>
/img/logo.png"></a>
          <?php echo smarty_function_W(array('name'=>'menuDroppy'),$_smarty_tpl);?>

        </div>
        <div class="subslide hidden-phone">
         <?php echo smarty_function_W(array('name'=>'sliderBootstrap','imagesBucket'=>737,'count'=>7,'width'=>802,'height'=>300,'fit'=>'smart'),$_smarty_tpl);?>

         </div>
      </div>
    </div>
  </div>
  <div class="navigation">
   <?php echo smarty_function_W(array('name'=>'navigation'),$_smarty_tpl);?>

  </div>
</div><?php }} ?>
