<?php /* Smarty version Smarty-3.1.15, created on 2015-08-18 06:46:11
         compiled from "view/gallery/addalbum.html" */ ?>
<?php /*%%SmartyHeaderCode:79740547755d27243958c40-89797498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a60a6e8f520992ece68794694c77bd3334f103df' => 
    array (
      0 => 'view/gallery/addalbum.html',
      1 => 1433669340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79740547755d27243958c40-89797498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55d272439c6115_68340925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d272439c6115_68340925')) {function content_55d272439c6115_68340925($_smarty_tpl) {?><script>
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
					<h3 class="panel-title">Create Album</h3>
				</div>
	
				<!--Horizontal Form-->
				<!--===================================================-->
				<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
gallery/inputalbum" method="post" enctype="multipart/form-data">
					<div class="panel-body">

						<div class="form-group">
							<label class="col-sm-2 control-label">Nama Album</label>
							<div class="col-sm-7">
								<input type="text" name="nm_album" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-2 control-label">Cover Album</label>
							<div class="col-sm-7">
								<input type="file" name="cover_album">
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
<!--End page content--><?php }} ?>
