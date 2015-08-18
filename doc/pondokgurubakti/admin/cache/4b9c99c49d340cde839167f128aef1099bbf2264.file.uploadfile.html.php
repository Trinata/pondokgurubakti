<?php /* Smarty version Smarty-3.1.15, created on 2015-05-20 14:29:16
         compiled from "view/course/uploadfile.html" */ ?>
<?php /*%%SmartyHeaderCode:606491825555c3395d5cf06-64283621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b9c99c49d340cde839167f128aef1099bbf2264' => 
    array (
      0 => 'view/course/uploadfile.html',
      1 => 1432106887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '606491825555c3395d5cf06-64283621',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555c3395d684c1_98968459',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c3395d684c1_98968459')) {function content_555c3395d684c1_98968459($_smarty_tpl) {?><script>
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
	<h1 class="page-header text-overflow">Upload Files</h1>

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
	<li class="active">Upload Files</li>
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
			<h3 class="panel-title">Table of Files</h3>
		</div>
		<div id="create-toolbar" class="table-toolbar-left">
			<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
course/uploadfile"><button class="btn btn-info btn-labeled fa fa-pencil-square-o">Upload</button></a>

		</div>
		<div id="separator-toolbar" class="table-toolbar-left">&nbsp;</div>
		<div id="delete-toolbar" class="table-toolbar-left">
			<button id="demo-dt-delete-btn" class="btn btn-danger btn-labeled fa fa-times">Delete</button>
		</div>
		<div class="panel-body">
			<table id="newslist" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>File Name</th>
						<th>File Type</th>
						<th class="min-tablet">Status File</th>
						<th class="min-tablet">Material</th>
						<th class="min-desktop">Course Name</th>
						<th class="min-desktop">Course Group</th>
						<th class="min-desktop">Create Time</th>
						<th class="min-desktop">Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Title 1</td>
						<td>System Architect</td>
						<td style="color:green">Published</td>
						<td>John Doe</td>
						<td>2011-04-25</td>
						<td>2011-04-25</td>
						<td>2011-04-25</td>
						<td>2011-04-25</td>
					</tr>
					<tr>
						<td>Title 2</td>
						<td>Accountant</td>
						<td style="color:red">Unpublished</td>
						<td>John Doe</td>
						<td>2011-07-25</td>
						<td>2011-07-25</td>
						<td>2011-07-25</td>
						<td>2011-07-25</td>
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
