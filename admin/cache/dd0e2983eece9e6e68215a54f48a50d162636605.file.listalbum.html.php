<?php /* Smarty version Smarty-3.1.15, created on 2015-08-18 06:45:54
         compiled from "view/gallery/listalbum.html" */ ?>
<?php /*%%SmartyHeaderCode:158931654455d27232c2a686-04497640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd0e2983eece9e6e68215a54f48a50d162636605' => 
    array (
      0 => 'view/gallery/listalbum.html',
      1 => 1433669340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158931654455d27232c2a686-04497640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
    'data' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55d27232cd9e27_11711869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d27232cd9e27_11711869')) {function content_55d27232cd9e27_11711869($_smarty_tpl) {?><script>
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
	<h1 class="page-header text-overflow">Album Gallery</h1>

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
	<li class="active">Gallery</li>
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
			<h3 class="panel-title">List of Album Gallery</h3>
		</div>
		<div id="create-toolbar" class="table-toolbar-left">
			<a class="btn btn-info btn-labeled fa fa-pencil-square-o" href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
gallery/addalbum">Create</a>
		</div>
		<div id="separator-toolbar" class="table-toolbar-left">&nbsp;</div>
		<div class="panel-body">
			<table id="newslist" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Album Name</th>
						<th>Album Cover</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php if (!empty($_smarty_tpl->tpl_vars['data']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
			<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['val']->value['nm_album'];?>
</td>
			<td><img src="../public_assets/<?php echo $_smarty_tpl->tpl_vars['val']->value['cover_album'];?>
" width="500" height="300"></td>
			<td><a id ="demo-dt-delete-btn" class="btn btn-success btn-labeled fa fa-pencil-square-o" href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
gallery/getgallery/?id_album=<?php echo $_smarty_tpl->tpl_vars['val']->value['id_album'];?>
">View Photo</a></td>
			</tr>
			<?php } ?>
			<?php }?>
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
