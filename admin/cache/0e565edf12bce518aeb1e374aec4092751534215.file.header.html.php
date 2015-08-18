<?php /* Smarty version Smarty-3.1.15, created on 2015-08-18 06:44:15
         compiled from "./view/template/header.html" */ ?>
<?php /*%%SmartyHeaderCode:23029930255237acd839928-14633199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e565edf12bce518aeb1e374aec4092751534215' => 
    array (
      0 => './view/template/header.html',
      1 => 1439855053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23029930255237acd839928-14633199',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55237acd8419e5_09569064',
  'variables' => 
  array (
    'basedomain' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55237acd8419e5_09569064')) {function content_55237acd8419e5_09569064($_smarty_tpl) {?>
<!--NAVBAR-->
<!--===================================================-->
<header id="navbar">
	<div id="navbar-container" class="boxed">

		<!--Brand logo & name-->
		<!--================================-->
		<div class="navbar-header">
			<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
" class="navbar-brand">
				<img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
images/logo.png" alt="Logo" class="brand-icon">
				<div class="brand-title">
					<span class="brand-text">Pdk Guru Bakti</span>
				</div>
			</a>
		</div>
		<!--================================-->
		<!--End brand logo & name-->


		<!--Navbar Dropdown-->
		<!--================================-->
		<div class="navbar-content clearfix">
			<ul class="nav navbar-top-links pull-left">

				<!--Navigation toogle button-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<li class="tgl-menu-btn">
					<a class="mainnav-toggle" href="#">
						<i class="fa fa-navicon fa-lg"></i>
					</a>
				</li>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End Navigation toogle button-->


				<!--Messages Dropdown-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End message dropdown-->




				<!--Notification dropdown-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End notifications dropdown-->



				

			</ul>
			<ul class="nav navbar-top-links pull-right">

				<!--User dropdown-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<li id="dropdown-user" class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
						<span class="pull-right">
							<img class="img-circle img-user media-object" src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
images/ava/av1.png" alt="Profile Picture">
						</span>
						<div class="username hidden-xs"><?php echo $_smarty_tpl->tpl_vars['admin']->value['username'];?>
</div>
					</a>


					<div class="dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default">

						<!-- User dropdown menu -->
						<ul class="head-list">
							<li>
								<a href="#">
									<i class="fa fa-user fa-fw fa-lg"></i> Profile
								</a>
							</li>
							<li>
								<a href="#">
									<span class="badge badge-danger pull-right">9</span>
									<i class="fa fa-envelope fa-fw fa-lg"></i> Messages
								</a>
							</li>
							<li>
								<a href="#">
									<span class="label label-success pull-right">New</span>
									<i class="fa fa-gear fa-fw fa-lg"></i> Settings
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-question-circle fa-fw fa-lg"></i> Help
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-lock fa-fw fa-lg"></i> Lock screen
								</a>
							</li>
						</ul>

						<!-- Dropdown footer -->
						<div class="pad-all text-right">
							<a href="logout.php" class="btn btn-primary">
								<i class="fa fa-sign-out fa-fw"></i> Logout
							</a>
						</div>
					</div>
				</li>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End user dropdown-->

			</ul>
		</div>
		<!--================================-->
		<!--End Navbar Dropdown-->

	</div>
</header>
<!--===================================================-->
<!--END NAVBAR--><?php }} ?>
