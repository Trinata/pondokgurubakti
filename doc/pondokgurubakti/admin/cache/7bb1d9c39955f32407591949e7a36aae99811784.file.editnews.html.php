<?php /* Smarty version Smarty-3.1.15, created on 2015-06-04 15:39:51
         compiled from "view/news/editnews.html" */ ?>
<?php /*%%SmartyHeaderCode:193831977555700ed7f2fb15-86834413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bb1d9c39955f32407591949e7a36aae99811784' => 
    array (
      0 => 'view/news/editnews.html',
      1 => 1432624380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193831977555700ed7f2fb15-86834413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55700ed80b1f61_56759955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55700ed80b1f61_56759955')) {function content_55700ed80b1f61_56759955($_smarty_tpl) {?><script>
$(document).ready(function() {
	$('#brief').summernote({
		height: 200
	});
	$('#isi').summernote({
		height: 200
	});
})	
</script>
<!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<style>
	        .form-horizontal .control-label{
	            text-align: left;
	        }
	        .col-sm-2 {
	            text-align: left;
	        }

  		</style>	

<div id="page-title">
	<h1 class="page-header text-overflow">Create News</h1>

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
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
">Home</a></li>
	<li class="active">Add News</li>
</ol>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--End breadcrumb-->

<!--Page content-->
<!--===================================================-->
<div id="page-content">
	
	<div class="row">

	<div class="col-sm-12">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Publish</h3>
				</div>
	
				<!--Horizontal Form-->
				<!--===================================================-->
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
					<div class="panel-body">

						<div class="form-group">
							<label class="col-sm-2 control-label">Judul</label>
							<div class="col-sm-7">
								<input type="text" name="judul" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>
">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Author</label>
							<div class="col-sm-7">
								<input type="text" name="author" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['author'];?>
">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-2 control-label">Publish</label>
							<div class="col-sm-3">
								<div class="input-group date">
									<input type="text" class="form-control" name="publish" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['posted'];?>
">
									<span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Foto</label>
							<div class="col-sm-7">
								<img src="../../../public_assets/<?php echo $_smarty_tpl->tpl_vars['data']->value['gambar'];?>
" width="500" height="300">
								<br><br><input type="file" name="gambar">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Brief</label>
							<div class="col-sm-9">
								<textarea name="brief" id="brief"><?php echo $_smarty_tpl->tpl_vars['data']->value['brief'];?>
</textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">News</label>
							<div class="col-sm-9">
								<textarea name="isi" id="isi"><?php echo $_smarty_tpl->tpl_vars['data']->value['isi'];?>
</textarea>
							</div>
						</div>

					

						<div class="form-group">
							<label class="col-sm-2 control-label">Status</label>
							<div class="col-sm-9">
								<input type="radio" name="status" value="0" id="status1" <?php if (($_smarty_tpl->tpl_vars['data']->value['status']==0)) {?> checked=""<?php }?>> Unpublish &nbsp &nbsp &nbsp

								<input type="radio" name="status" value="1" id="status1" <?php if (($_smarty_tpl->tpl_vars['data']->value['status']==1)) {?> checked=""<?php }?>> Publish

							</div>
						</div>

					</div>
					<div class="panel-footer text-right">
						<button class="btn btn-info" type="submit">Save</button>
					</div>
				</form>
				<!--===================================================-->
				<!--End Horizontal Form-->
	
			</div>
		</div>
		
	
	
</div>
<!--===================================================-->
<!--End page content-->

<?php }} ?>
