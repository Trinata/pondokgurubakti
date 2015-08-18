<?php /* Smarty version Smarty-3.1.15, created on 2015-04-07 13:23:06
         compiled from "./view/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:251204026552377ca0e0f88-77562213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd064259dbd57878c55967c97fc189d9b7462e5cb' => 
    array (
      0 => './view/sidebar.html',
      1 => 1428206454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251204026552377ca0e0f88-77562213',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'key' => 0,
    'val' => 0,
    'basedomain' => 0,
    'value' => 0,
    'no' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_552377ca141ef2_94455899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552377ca141ef2_94455899')) {function content_552377ca141ef2_94455899($_smarty_tpl) {?>
<div id="sidebar-wrapper" class="collapse sidebar-collapse">
	
	<div id="search">
		<form>
			<input class="form-control input-sm" type="text" name="search" placeholder="Search..." />

			<button type="submit" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
		</form>		
	</div> <!-- #search -->

	<nav id="sidebar">		
		
		<ul id="main-nav" class="open-active">			
			
			<?php if ($_smarty_tpl->tpl_vars['menu']->value) {?>
			<?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(1, null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>

				<li class="dropdown ">
					<a href="javascript:;">
						<i class="fa fa-user"></i>
						<?php echo $_smarty_tpl->tpl_vars['key']->value;?>

						<span class="caret"></span>
					</a>				
					<ul class="sub-nav">
						<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['val']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['menuPath'];?>
">
								<i class="<?php echo $_smarty_tpl->tpl_vars['value']->value['menuIcon'];?>
"></i> 
								<?php echo $_smarty_tpl->tpl_vars['value']->value['menuDesc'];?>

							</a>
						</li>
						<?php } ?>
					</ul>
				</li>
				<?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
			<?php } ?>

			<?php }?>
		</ul>
				
	</nav> <!-- #sidebar -->

</div> <!-- /#sidebar-wrapper --><?php }} ?>
