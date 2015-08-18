<?php /* Smarty version Smarty-3.1.15, created on 2015-08-18 07:03:31
         compiled from "./view/template/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:194498491755237acd846a63-22243080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad8c6fb973e01c4d534fc5ed74a51f3a5437e207' => 
    array (
      0 => './view/template/sidebar.html',
      1 => 1439856208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194498491755237acd846a63-22243080',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55237acd84b8b4_93119148',
  'variables' => 
  array (
    'page' => 0,
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55237acd84b8b4_93119148')) {function content_55237acd84b8b4_93119148($_smarty_tpl) {?>
<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
	<div id="mainnav">

		<!--Shortcut buttons-->
		<!--================================-->
		
		<!--================================-->
		<!--End shortcut buttons-->


		<!--Menu-->
		<!--================================-->
		<div id="mainnav-menu-wrap">
			<div class="nano">
				<div class="nano-content">
					<ul id="mainnav-menu" class="list-group">
						
						<li class="list-header">Home</li>

						<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='home') {?>active-link<?php }?>">
							<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value/'home';?>
">
								<i class="fa fa-dashboard"></i>
								<span class="menu-title">
									Dashboard
								</span>
							</a>
						</li>

						<!--Category name-->
						<li class="list-header">About Pondok Guru Bakti</li>
			
						<!--Menu list item-->
						<li>
							<a href="#">
								<i class="fa fa-newspaper-o"></i>
								<span class="menu-title">News</span>
								<i class="arrow"></i>
							</a>
			
							<!--Submenu-->
							<ul class="collapse <?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='news') {?>in<?php }?>">
								<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['function']=='addnews') {?>active-link<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
news/addnews">Add News</a></li>
								<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='news'&&$_smarty_tpl->tpl_vars['page']->value['function']=='index') {?>active-link<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
news">News List</a></li>
							</ul>
						</li>
						<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='gallery') {?>active-link<?php }?>">
							<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
gallery">
								<i class="fa fa-picture-o"></i>
								<span class="menu-title">
									Gallery
								</span>
							</a>
						</li>
			
						<li class="list-divider"></li>
			
						<!--Category name-->
						<li class="list-header">Booking</li>
			
						<!--Menu list item-->
						<li>
							<a href="#">
								<i class="fa fa-pencil-square-o"></i>
								<span class="menu-title">Manage Booking</span>
								<i class="arrow"></i>
							</a>
			
							<!--Submenu-->
							<ul class="collapse <?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='course') {?>in<?php }?>">
								<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='course'&&$_smarty_tpl->tpl_vars['page']->value['function']=='index') {?>active-link<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
course">List Booking</a></li>
								<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='course'&&$_smarty_tpl->tpl_vars['page']->value['function']=='courselist') {?>active-link<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
course/courselist">Add Booking</a></li>
							
							</ul>
						</li>

						<li class="list-divider"></li>
			
						<!--Category name-->
						<li class="list-header">User</li>
			
						<!--Menu list item-->
						<li>
							<a href="#">
								<i class="fa fa-group"></i>
								<span class="menu-title">Manage Users</span>
								<i class="arrow"></i>
							</a>
			
							<!--Submenu-->
							<ul class="collapse <?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='user') {?>in<?php }?>">
								<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='user'&&$_smarty_tpl->tpl_vars['page']->value['function']=='index') {?>active-link<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
user">User list</a></li>
							</ul>
						</li>
					</ul>

				</div>
			</div>
		</div>
		<!--================================-->
		<!--End menu-->

	</div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->
<?php }} ?>
