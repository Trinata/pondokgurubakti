<?php /* Smarty version Smarty-3.1.15, created on 2015-04-07 14:36:33
         compiled from "view/produk/produk.html" */ ?>
<?php /*%%SmartyHeaderCode:683908896552382851419a8-22699850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd06b6e7faf41f4b1ba12c4430e74ff9da3d228ae' => 
    array (
      0 => 'view/produk/produk.html',
      1 => 1428392191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '683908896552382851419a8-22699850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5523828515e4e7_90791365',
  'variables' => 
  array (
    'basedomain' => 0,
    'data' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5523828515e4e7_90791365')) {function content_5523828515e4e7_90791365($_smarty_tpl) {?><!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
	<h1 class="page-header text-overflow">List Produk</h1>

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
	<li><a href="#">Home</a></li>
	<li><a href="#">produk</a></li>
	<li class="active">List Produk</li>
</ol>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--End breadcrumb-->

<!--Page content-->
<!--===================================================-->
<div id="page-content">
	
	<!-- Row selection and deletion (multiple rows) -->
	<!--===================================================-->
	<div class="panel">
		<div id="demo-custom-toolbar" class="table-toolbar-left">
		<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
article/addarticle"><button class="btn btn-default btn-labeled fa fa-plus">Add new</button></a>
			<button id="demo-dt-delete-btn" class="btn btn-danger btn-labeled fa fa-times">Delete</button>
		</div>
		<div class="panel-body">
			<table id="demo-dt-delete" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Title</th>
						<th>Categori</th>
						<th class="min-tablet">Status</th>
						<th class="min-tablet">Created Date</th>
						<th class="min-desktop">Author</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->_loop = true;
?>
					<tr>
						<td><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
article/addarticle/?id=<?php echo $_smarty_tpl->tpl_vars['var']->value['id'];?>
" data-toggle="tooltip" data-placement="right" title="Edit or view <?php echo $_smarty_tpl->tpl_vars['var']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value['title'];?>
</a></td>
						<td style="color:blue"><?php if ($_smarty_tpl->tpl_vars['var']->value['articleType']==1) {?>Batik<?php }?><?php if ($_smarty_tpl->tpl_vars['var']->value['articleType']==2) {?>Busana<?php }?><?php if ($_smarty_tpl->tpl_vars['var']->value['articleType']==3) {?>Gamis<?php }?></td>
						<td style="color:<?php echo $_smarty_tpl->tpl_vars['var']->value['status_color'];?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value['n_status'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['var']->value['created_date'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['var']->value['username'];?>
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

<!--===================================================-->
<!--END CONTENT CONTAINER-->
<?php }} ?>
