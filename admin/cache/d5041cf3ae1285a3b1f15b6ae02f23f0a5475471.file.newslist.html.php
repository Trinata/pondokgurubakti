<?php /* Smarty version Smarty-3.1.15, created on 2015-05-05 23:36:03
         compiled from "view/news/newslist.html" */ ?>
<?php /*%%SmartyHeaderCode:2513818505548e9ed8df634-56115564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5041cf3ae1285a3b1f15b6ae02f23f0a5475471' => 
    array (
      0 => 'view/news/newslist.html',
      1 => 1430843761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2513818505548e9ed8df634-56115564',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5548e9ed8f1db2_35051455',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5548e9ed8f1db2_35051455')) {function content_5548e9ed8f1db2_35051455($_smarty_tpl) {?><script>
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
	<h1 class="page-header text-overflow">News List</h1>

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
	<li class="active">News List</li>
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
			<h3 class="panel-title">Table of News List</h3>
		</div>
		<div id="create-toolbar" class="table-toolbar-left">
			<button class="btn btn-info btn-labeled fa fa-pencil-square-o">Create</button>
		</div>
		<div id="separator-toolbar" class="table-toolbar-left">&nbsp;</div>
		<div id="delete-toolbar" class="table-toolbar-left">
			<button id="demo-dt-delete-btn" class="btn btn-danger btn-labeled fa fa-times">Delete</button>
		</div>
		<div class="panel-body">
			<table id="newslist" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Title</th>
						<th>Brief</th>
						<th class="min-tablet">Status</th>
						<th class="min-tablet">Author</th>
						<th class="min-desktop">Created Date</th>
						<th class="min-desktop">Posted Date</th>
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
					</tr>
					<tr>
						<td>Title 2</td>
						<td>Accountant</td>
						<td style="color:red">Unpublished</td>
						<td>John Doe</td>
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
