<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 16:30:05
         compiled from "app/view/akun/page_register.html" */ ?>
<?php /*%%SmartyHeaderCode:1291809164556008bc66eff0-85584587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f873265876bd7c0d2c0b4f327a5a7daba82df58' => 
    array (
      0 => 'app/view/akun/page_register.html',
      1 => 1433669339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1291809164556008bc66eff0-85584587',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556008bc7f99a4_38848451',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556008bc7f99a4_38848451')) {function content_556008bc7f99a4_38848451($_smarty_tpl) {?><section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-md-8" style="background-color:#AF0096">
				<div class="row">
					<div class="col-md-1" style="padding-top:20px">
						<div style="color:#FFFFFF;background-color:#73496E;padding:10px">
							<i class="fa fa-file-text fa-3"></i>
						</div>
					</div>
					<div class="col-md-10"  style="color:#FFFFFF;height:300px">
						<h1  style="color:#FFFFFF">PENDAFTARAN E-LEARNING </h1>
						Petunjuk Pendaftaran Kursus : 
						<ol type="1">
							<li>Lorem ipsum dolor sit amet, consectetu</li>
							<li>Lorem ipsum dolor sit amet, consectetu</li>
							<li>Lorem ipsum dolor sit amet, consectetu</li>
							<li>Lorem ipsum dolor sit amet, consectetu</li>
							<li>Lorem ipsum dolor sit amet, consectetu</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/img/data/waktukuis.JPG"/>
			</div>

		</div>
	</div>
	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
register/signup" class="form-horizontal" onsubmit="return checkBefore()">
				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
				    <div class="col-sm-6">
				    	<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
				    	<input type="text" class="form-control" placeholder="Name..." name="name"/>
				    </div>
				    </div>
				  </div>
				 <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
				    <div class="col-sm-6">
				    	<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
				    	<input type="text" class="form-control" placeholder="Username..." name="username"/>
				    </div>
				    </div>
				  </div>
				 <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				    <div class="col-sm-6">
				    	<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
				    	<input type="text" class="form-control" placeholder="Email..." name="email"/>
				    </div>
				    </div>
				  </div>
				 <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
				    <div class="col-sm-6">
				    	<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
				    	<input type="text" class="form-control" placeholder="Password..." name="password"/>
				    </div>
				    </div>
				  </div>
				 <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Confirm Password</label>
				    <div class="col-sm-6">
				    	<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
				    	<input type="text" class="form-control" placeholder="Confirm Password..." name="repassword"/>
				    </div>
				    </div>
				  </div>
				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Tempat Lahir</label>
				    <div class="col-sm-6">
				    	<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-hospital-o"></i></span>
				    	<input type="text" class="form-control" placeholder="Tempat Lahir..." name="tempatlahir"/>
				    </div>
				    </div>
				  </div>
				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Lahir</label>
				    <div class="col-sm-6">
				    	<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar"></i></span>
				    	<input type="text" class="form-control" placeholder="Tanggal Lahir..." name="tanggallahir"/>
				    </div>
				    </div>
				  </div>
				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Pendidikan</label>
				    <div class="col-sm-6">
				    	<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-mortar-board"></i></span>
				    	<input type="text" class="form-control" placeholder="Pendidikan..."/ name="pendidikan">
				    </div>
				    </div>
				  </div>

				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Institusi</label>
				    <div class="col-sm-6">
				    	<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-university"></i></span>
				    	<input type="text" class="form-control" placeholder="Institusi..." name="institusi"/>
				    </div>
				    </div>
				  </div>

				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Pekerjaan</label>
				    <div class="col-sm-6">
				    	<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-briefcase"></i></span>
				    	<input type="text" class="form-control" placeholder="Pekerjaan..." name="jenispekerjaan"/>
				    </div>
				    </div>
				  </div>

				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Handphone</label>
				    <div class="col-sm-6">
				    	<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
				    	<input type="text" class="form-control" placeholder="Handphone..." name="hp"/>
				    </div>
				    </div>
				  </div>

				  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					     <input type="reset" value="Kosongkan" class="btn btn-default">
			   			<input type="submit" value="Mendaftar" id="tmbl" class="btn btn-primary" name="btnDaftar">
					    <input type="hidden" name="token" value="1">
					    </div>
					  </div>
				</form>
			</div>
			<div class="col-md-3">
				&nbsp;
			</div>

		</div>
	</div>
	</section><?php }} ?>
