<?php /* Smarty version Smarty-3.1.15, created on 2015-05-20 15:38:01
         compiled from "view/course/uploadform.html" */ ?>
<?php /*%%SmartyHeaderCode:272074147555c37cff23833-55774586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d0eb4b981f8c93c816cebec24a38b41b232b2ca' => 
    array (
      0 => 'view/course/uploadform.html',
      1 => 1432111073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272074147555c37cff23833-55774586',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555c37cff2e1b0_03341262',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c37cff2e1b0_03341262')) {function content_555c37cff2e1b0_03341262($_smarty_tpl) {?><script>
$(document).ready(function() {
	$('#deskripsi').summernote({
		height: 200
	});
})	


</script>
<!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
	<h1 class="page-header text-overflow">Upload File</h1>

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
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
course/courselist">Course</a></li>
	<li class="active">Upload File</li>
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
					<h3 class="panel-title">Input Form</h3>
				</div>
	
				<!--Horizontal Form-->
				<!--===================================================-->
				<form class="form-horizontal">
					<div class="panel-body">
						<div class="form-group">
							<label class="col-sm-3 control-label">File Name</label>
							<div class="col-sm-4">
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">File Type</label>
							<div class="col-sm-4">
								<select class="selectpicker">
									<option>ebook</option>
									<option>video</option>
								</select> 
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Status File</label>
							<div class="col-sm-4">
								<select class="selectpicker">
									<option>login</option>
									<option>free</option>
								</select> 
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Material</label>
							<div class="col-sm-4">
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Course Name</label>
							<div class="col-sm-4">
								<select class="selectpicker">
									<option>login</option>
									<option>free</option>
								</select> 
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Upload File</label>
							<div class="col-sm-4">
								<div class="input-group">
		                			<span class="input-group-btn">
		                   				<span class="btn btn-primary btn-file">
		                        		Browse <input type="file" multiple>
		                    			</span>
		                			</span>
            						<input type="text" class="form-control" readonly>
        						</div>
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
	
	
</div>
<!--===================================================-->
<!--End page content-->

<?php }} ?>
