<?php /* Smarty version Smarty-3.1.15, created on 2015-06-04 15:39:31
         compiled from "view/news/listnews.html" */ ?>
<?php /*%%SmartyHeaderCode:127239294855700ec3378040-64566527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7775ce696a54c39af0065d15e08ec7df5115af7' => 
    array (
      0 => 'view/news/listnews.html',
      1 => 1432624380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127239294855700ec3378040-64566527',
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
  'unifunc' => 'content_55700ec36e6537_06914684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55700ec36e6537_06914684')) {function content_55700ec36e6537_06914684($_smarty_tpl) {?><script>
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
			<a class="btn btn-info btn-labeled fa fa-plus" href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
news/addnews">Create</a>
		</div>
		<div id="separator-toolbar" class="table-toolbar-left">&nbsp;</div>
		<div class="panel-body">
			<table id="newslist" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Title</th>
						<th class="min-tablet">Author</th>
						<th class="min-desktop">Posted Date</th>
						<th>Brief</th>
						<th class="min-desktop">Status</th>
						<th class="min-tablet">Action</th>
					</tr>
				</thead>
				<tbody>
				<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
			<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['val']->value['judul'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['val']->value['posted'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['val']->value['brief'];?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['val']->value['status']==0) {?> <font style="color:red">Unpublish </font> <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['status']==1) {?> <font style="color:blue"> Publish </font><?php }?></td>
			<td>
			<table> 
			<tr>
			<td>
				<a id ="demo-dt-delete-btn" class="btn btn-success btn-labeled fa fa-pencil-square-o" href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
news/editnews/?id_news=<?php echo $_smarty_tpl->tpl_vars['val']->value['id_news'];?>
">Edit</a></td>
			<td>	
				<a id ="demo-dt-delete-btn" class="btn btn-danger btn-labeled fa fa-times" href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
news/deletenews/?id_news=<?php echo $_smarty_tpl->tpl_vars['val']->value['id_news'];?>
">Delete</a></td>
				</tr>
				</table>
			</td>	
			</tr>
			<?php } ?>
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
