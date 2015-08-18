<?php /* Smarty version Smarty-3.1.15, created on 2015-05-20 13:33:36
         compiled from "view/course/courselist.html" */ ?>
<?php /*%%SmartyHeaderCode:1621661228555c286876cfd7-39041146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1cb7be46cd3a76a54cd6163b72fe961ee330b7a' => 
    array (
      0 => 'view/course/courselist.html',
      1 => 1432103613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1621661228555c286876cfd7-39041146',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555c286877f3b7_56118312',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c286877f3b7_56118312')) {function content_555c286877f3b7_56118312($_smarty_tpl) {?><script>
$(window).on('load', function() {

	// Datatables
	// Row selection and deletion (multiple rows)
	// -----------------------------------------------------------------
	var rowDeletion = $('#newslist').DataTable({
		"responsive": true,
		"language": {
			"paginate": {
			  "previous": '<i class="fa fa-angle-left"></i>',
			  "next": '<i class="fa fa-angle-right"></i>'
			}
		},
		"dom": '<"toolbar">frtip'
	});

	$('#create-toolbar').appendTo($("div.toolbar"));
	$('#separator-toolbar').appendTo($("div.toolbar"));
	$('#delete-toolbar').appendTo($("div.toolbar"));

	$('#newslist tbody').on( 'click', 'tr', function () {
		$(this).toggleClass('selected');
	} );

	$('#demo-dt-delete-btn').click( function () {
		rowDeletion.row('.selected').remove().draw( false );
	} );
})	
</script>

<!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
	<h1 class="page-header text-overflow">Course</h1>

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
	<li class="active">Course</li>
</ol>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--End breadcrumb-->

<!--Page content-->
<!--===================================================-->
<div id="page-content">
	
	<!-- Row selection and deletion (multiple rows) -->
	<!--===================================================-->
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title">Table of Available Course</h3>
		</div>
		<div id="create-toolbar" class="table-toolbar-left">
			<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
course/addcourse"><button class="btn btn-info btn-labeled fa fa-pencil-square-o">Create</button></a>
		</div>
		<div id="separator-toolbar" class="table-toolbar-left">&nbsp;</div>
		<div id="delete-toolbar" class="table-toolbar-left">
			<button id="demo-dt-delete-btn" class="btn btn-danger btn-labeled fa fa-times">Delete</button>
		</div>
		<div class="panel-body">
			<table id="newslist" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Course Name</th>
						<th>Type</th>
						<th class="min-tablet">Group</th>
						<th class="min-tablet">Schedule</th>
						<th class="min-tablet">Quota</th>
						<th class="min-tablet">Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Title 1</td>
						<td>Optional/Required/Hirarki</td>
						<td>Grup 1</td>
						<td>2011-04-25</td>
						<td> N/A </td>
						<td style="color:green">Active</td>
					</tr>
					<tr>
						<td>Title 2</td>
						<td>Optional/Required/Hirarki</td>
						<td>Grup 2</td>
						<td>2011-04-25</td>
						<td>30</td>
						<td style="color:red">Unactive</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!--===================================================-->
	<!-- End Row selection and deletion (multiple rows) -->
	
	
</div>
<!--===================================================-->
<!--End page content-->

<?php }} ?>
