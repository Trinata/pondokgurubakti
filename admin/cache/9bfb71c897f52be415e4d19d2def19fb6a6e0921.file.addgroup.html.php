<?php /* Smarty version Smarty-3.1.15, created on 2015-05-19 14:04:44
         compiled from "view/course/addgroup.html" */ ?>
<?php /*%%SmartyHeaderCode:1090710241555ae0397e2f26-77222317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bfb71c897f52be415e4d19d2def19fb6a6e0921' => 
    array (
      0 => 'view/course/addgroup.html',
      1 => 1432019081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1090710241555ae0397e2f26-77222317',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555ae0397ec945_58990783',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ae0397ec945_58990783')) {function content_555ae0397ec945_58990783($_smarty_tpl) {?><script>
$(document).ready(function() {
	$('#deskripsi').summernote({
		height: 200
	});
})	


</script>
<!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
	<h1 class="page-header text-overflow">Create Group</h1>

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
course">Course Group</a></li>
	<li class="active">Add Group</li>
</ol>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--End breadcrumb-->

<!--Page content-->
<!--===================================================-->
<div id="page-content">
	
	<div class="row">
		<div class="col-sm-8">
			<div class="form-group form-group-lg">
				<div class="col-sm-12" style="margin-bottom:30px">
					<input type="text" placeholder="Enter Group Name" class="form-control">
				</div>

				<div class="col-sm-12">
				    <div class="input-group">
		                <span class="input-group-btn">
		                    <span class="btn btn-primary btn-file">
		                        Browse image <input type="file" multiple>
		                    </span>
		                </span>
            			<input type="text" class="form-control" readonly>
        			</div>
				</div>

				<div class="col-sm-12">
					<div class="panel">
						<div class="panel-body">
		
							<!--Summernote-->
							<!--===================================================-->
							<div id="deskripsi"></div>
							<!--===================================================-->
							<!-- End Summernote -->
		
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Publish</h3>
				</div>
	
				<!--Horizontal Form-->
				<!--===================================================-->
				<form class="form-horizontal">
					<div class="panel-body">
						<div class="form-group">
							<div class="col-sm-3">
								<button class="btn btn-default">Save Draft</button>
							</div>
							<div class="col-sm-9 text-right">
								<button class="btn btn-default">Preview</button>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Status</label>
							<div class="col-sm-9">
								<select class="selectpicker">
									<option>Draft</option>
									<option>Publish</option>
									<option>Unpublish</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Publish</label>
							<div class="col-sm-9">
								<div class="input-group date">
									<input type="text" class="form-control">
									<span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-footer text-right">
						<button class="btn btn-info" type="submit">Publish</button>
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
