<?php /* Smarty version Smarty-3.1.18, created on 2015-05-04 15:08:59
         compiled from "C:\xampp\htdocs\data\widgets\languageDropDownBox\languageDropDownBoxView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1659255476f6b08b955-28284657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '558467a817d2ec6019c1fd366fad08e18e97ed6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\data\\widgets\\languageDropDownBox\\languageDropDownBoxView.tpl',
      1 => 1429905112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1659255476f6b08b955-28284657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'HOME' => 0,
    'icon' => 0,
    'data' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55476f6b27e065_19429983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55476f6b27e065_19429983')) {function content_55476f6b27e065_19429983($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['params']->value['class']=='') {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['class'] = 'language-select-box';?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['params']->value['showIcons']=='') {?><?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value['showIcons'] = true;?><?php }?>
<div class="btn-group">
	<?php if (isset($_smarty_tpl->tpl_vars['icon'])) {$_smarty_tpl->tpl_vars['icon'] = clone $_smarty_tpl->tpl_vars['icon'];
$_smarty_tpl->tpl_vars['icon']->value = pagesDB::getMainImageEkey(@constant('LANG'),'icon'); $_smarty_tpl->tpl_vars['icon']->nocache = null; $_smarty_tpl->tpl_vars['icon']->scope = 0;
} else $_smarty_tpl->tpl_vars['icon'] = new Smarty_variable(pagesDB::getMainImageEkey(@constant('LANG'),'icon'), null, 0);?>  
  	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
image/<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
/100/100/original/">  <span class="caret"></span>
  	</button>
<ul class="dropdown-menu languagedropdown" role="menu">
    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['pagesDB']->getPagesByParent('0',null,'position ASC','*',null,null,true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
    	<?php if (isset($_smarty_tpl->tpl_vars['icon'])) {$_smarty_tpl->tpl_vars['icon'] = clone $_smarty_tpl->tpl_vars['icon'];
$_smarty_tpl->tpl_vars['icon']->value = pagesDB::getMainImageEkey($_smarty_tpl->tpl_vars['lang']->value->id,'icon'); $_smarty_tpl->tpl_vars['icon']->nocache = null; $_smarty_tpl->tpl_vars['icon']->scope = 0;
} else $_smarty_tpl->tpl_vars['icon'] = new Smarty_variable(pagesDB::getMainImageEkey($_smarty_tpl->tpl_vars['lang']->value->id,'icon'), null, 0);?>
		<li>
			<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value->urlKey;?>
">
				<?php if (!empty($_smarty_tpl->tpl_vars['icon']->value)&&$_smarty_tpl->tpl_vars['params']->value['showIcons']) {?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
image/<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
/100/100/original/">
				<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['lang']->value->name;?>

			</a>
		</li>
	<?php } ?>
</ul>
</div><?php }} ?>
