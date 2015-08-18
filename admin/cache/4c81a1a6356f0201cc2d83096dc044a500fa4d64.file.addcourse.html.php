<?php /* Smarty version Smarty-3.1.15, created on 2015-05-20 15:38:48
         compiled from "view/course/addcourse.html" */ ?>
<?php /*%%SmartyHeaderCode:1544142928555c2a111d37a6-20214721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c81a1a6356f0201cc2d83096dc044a500fa4d64' => 
    array (
      0 => 'view/course/addcourse.html',
      1 => 1432111104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1544142928555c2a111d37a6-20214721',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555c2a111e5bd9_69118126',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c2a111e5bd9_69118126')) {function content_555c2a111e5bd9_69118126($_smarty_tpl) {?><script>
$(document).ready(function() {
	$('#deskripsi').summernote({
		height: 200
	});
})	


</script>
<!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
	<h1 class="page-header text-overflow">Create Course</h1>

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
	<li class="active">Add Course</li>
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
							<label class="col-sm-3 control-label">Course Name</label>
							<div class="col-sm-4">
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Course Explanation</label>
							<div class="col-sm-6">
								<textarea rows="5" class="form-control"></textarea> 
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Course Type</label>
							<div class="col-sm-4">
								<select class="selectpicker">
									<option>optional</option>
									<option>hirarchy</option>
									<option>required</option>
								</select> 
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Start Date</label>
							<div class="col-sm-4">
								<div class="input-group date">
									<input type="text" class="form-control">
									<span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">End Date</label>
							<div class="col-sm-4">
								<div class="input-group date">
									<input type="text" class="form-control">
									<span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Quota</label>
							<div class="col-sm-4">
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Group Course</label>
							<div class="col-sm-4">
								<select class="selectpicker">
									<option>optional</option>
									<option>hirarchy</option>
									<option>required</option>
								</select> 
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
