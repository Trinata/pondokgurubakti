<?php /* Smarty version Smarty-3.1.15, created on 2015-06-04 14:01:08
         compiled from "view/news/addnews.html" */ ?>
<?php /*%%SmartyHeaderCode:743355125548f26bf186d3-98124327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d0c74d5e5508be3208228843d8630d998c76c8e' => 
    array (
      0 => 'view/news/addnews.html',
      1 => 1432624380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '743355125548f26bf186d3-98124327',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5548f26bf29af0_02941148',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5548f26bf29af0_02941148')) {function content_5548f26bf29af0_02941148($_smarty_tpl) {?><script>
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
				<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
news/inputnews" method="post" enctype="multipart/form-data">
					<div class="panel-body">

						<div class="form-group">
							<label class="col-sm-2 control-label">Judul</label>
							<div class="col-sm-7">
								<input type="text" name="judul" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Publish</label>
							<div class="col-sm-3">
								<div class="input-group date">
									<input type="text" class="form-control" name="publish">
									<span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Foto</label>
							<div class="col-sm-7">
								<input type="file" name="gambar">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Brief</label>
							<div class="col-sm-9">
								<textarea name="brief" id="brief"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">News</label>
							<div class="col-sm-9">
								<textarea name="isi" id="isi"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Status</label>
							<div class="col-sm-9">
								<input type="radio" name="status" id="status1" value="0"> Unpublish &nbsp &nbsp &nbsp
								<input type="radio" name="status" id="status2" value="1"> Publish
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
