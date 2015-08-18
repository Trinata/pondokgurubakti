<?php /* Smarty version Smarty-3.1.15, created on 2015-04-07 17:59:49
         compiled from "view/produk/inputproduk.html" */ ?>
<?php /*%%SmartyHeaderCode:25316266855238b76272745-38384513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '306ad8c87605f776f9e71b1304993109b0a19f3b' => 
    array (
      0 => 'view/produk/inputproduk.html',
      1 => 1428404334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25316266855238b76272745-38384513',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55238b7627a673_03704664',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55238b7627a673_03704664')) {function content_55238b7627a673_03704664($_smarty_tpl) {?><!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
	<h1 class="page-header text-overflow">Tambah Data Produk</h1>

	<!--Searchbox-->
	<div class="searchbox">
		<div class="input-group custom-search-form">
			<input type="text" class="form-control" placeholder="Search..">
			<span class="input-group-btn">
				<button class="text-muted" type="button"><i class="fa fa-search"></i></button>
			</span>
		</div>
	</div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--End page title-->

<!--Breadcrumb-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<ol class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li><a href="#">Produk</a></li>
	<li class="active">Tambah Produk</li>
</ol>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--End breadcrumb-->

<!--Page content-->
<!--===================================================-->
<div id="page-content">
	
	<div class="row">
		<div class="col-lg-9">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Form Input Data</h3>
				</div>
	
	
				<!-- BASIC FORM ELEMENTS -->
				<!--===================================================-->
				<div class="panel-body form-horizontal form-padding">
	
					<!--Static-->
					<div class="form-group">
						<label class="col-md-3 control-label">Jenis Produk</label>
						<div class="col-md-9">
							<select class="selectpicker" name="articletype">
								<option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['articleType']==1) {?>selected<?php }?>>Batik</option>
								<option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['articleType']==2) {?>selected<?php }?>>Busana</option>
								<option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value['articleType']==3) {?>selected<?php }?>>Gamis</option>
							</select>
						</div>
					</div>
	
					<div class="form-group">
						<label class="col-md-3 control-label" for="demo-text-input">Title</label>
						<div class="col-md-9">
							<input type="text" name="title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" data-required="true"/>
						</div>
					</div>
	
					<div class="form-group">
						<label class="col-md-3 control-label" for="demo-email-input">Brief</label>
						<div class="col-md-9">
							<input type="text" name="brief" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['brief'];?>
" />
						</div>
					</div>
	
					<div class="form-group">
						<label class="col-md-3 control-label" for="demo-password-input">Deskripsi</label>
						<div class="col-md-9">
							<div id="deskripsi"></div>
						</div>
					</div>
	
					<div class="form-group">
						<label class="col-md-3 control-label" for="demo-password-input">Additional Information</label>
						<div class="col-md-9">
							<div id="add-info"></div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label" for="demo-password-input">Review</label>
						<div class="col-md-9">
							<div id="review"></div>
						</div>
					</div>
				</div>
				<div class="panel-footer text-right">
					<button class="btn btn-info" type="submit">Submit</button>
				</div>
				<!--===================================================-->
				<!-- END BASIC FORM ELEMENTS -->
	
	
			</div>
		</div>



		<div class="col-lg-3">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Attribute</h3>
				</div>
				<div class="panel-body">

					<p>Post Date</p>
					<div id="demo-dp-component">
						<div class="input-group date">
							<input type="text" class="form-control" name="postdate" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['posted_date'];?>
">
							<span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
						</div>
					</div>
					
					<br>

					<p>Expire Date</p>
					<div id="demo-dp-component">
						<div class="input-group date">
							<input type="text" class="form-control" name="expiredate" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['posted_date'];?>
">
							<span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
						</div>
					</div>

					<br>
					
					<p>Size</p>

					<input type="text" name="size" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['data']['size'];?>
" />

					<br>

					<p>Category</p>
					<input type="text" name="category" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['data']['category'];?>
" />

					<br>

					<p>Color</p>
					<input type="text" name="color" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['data']['color'];?>
" />

					<br>

					<p>Quantity</p>
					<input type="text" name="quantity" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['data']['quantity'];?>
" />
				</div>	
			</div>

			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Upload Image</h3>
				</div>
				<div class="panel-body">

					<!--Dropzonejs-->
					<!--===================================================-->
					<form id="demo-dropzone" action="#" class="dropzone">
						<div class="dz-default dz-message">
							<div class="dz-icon icon-wrap icon-circle icon-wrap-md">
								<i class="fa fa-cloud-upload fa-3x"></i>
							</div>
							<div>
								<p class="dz-text">Drop files to upload</p>
								<p class="text-muted">or click to pick manually</p>
							</div>
						</div>
						<div class="fallback">
							<input name="file" type="file" multiple />
						</div>
					</form>
					<!--===================================================-->
					<!-- End Dropzonejs -->

				</div>
			</div>

		</div>


	</div>
</div>
<!--===================================================-->
<!--End page content-->

<!--===================================================-->
<!--END CONTENT CONTAINER-->
<?php }} ?>
