<?php /* Smarty version Smarty-3.1.15, created on 2015-08-18 06:46:26
         compiled from "view/user/userlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1662421627555aaed8640df5-70630600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a978fd468772057224e9a99843b640552d2267e3' => 
    array (
      0 => 'view/user/userlist.html',
      1 => 1432624380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1662421627555aaed8640df5-70630600',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555aaed86ca188_51665131',
  'variables' => 
  array (
    'basedomain' => 0,
    'data' => 0,
    'val' => 0,
    'no' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555aaed86ca188_51665131')) {function content_555aaed86ca188_51665131($_smarty_tpl) {?><script>

$(window).on('load', function() {
	// SWITCHERY - CHECKING STATE
	// =================================================================
	// Require Switchery
	// http://abpetkov.github.io/switchery/
	// =================================================================
	var changeCheckbox = document.getElementById('statususer'), changeField = document.getElementById('checkstate');
	new Switchery(changeCheckbox)
	changeField.innerHTML = "Active";
	changeCheckbox.onchange = function() {
		var state;
		if(changeCheckbox.checked == true) state = "Active"; else state = "Not Active"; 
		changeField.innerHTML = state;
	};

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
	<h1 class="page-header text-overflow">User List</h1>

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
	<li class="active">User List</li>
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
			<h3 class="panel-title">Table of User List</h3>
		</div>
		
			
		<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
user/deleteuser" onsubmit="return checkForm()">
		<div id="separator-toolbar" class="table-toolbar-left">&nbsp;</div>
		
		<div id="delete-toolbar" class="table-toolbar-left">
			<button id="demo-dt-delete-btn" class="btn btn-danger btn-labeled fa fa-times" type="submit">Delete</button>
		</div>
		<div class="panel-body">
			<table id="newslist" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>&nbsp;</th>
						<th>No</th>
						<th>Username</th>
						<th class="min-tablet">Email</th>
						<th class="min-tablet">Institusi</th>
						<th class="min-desktop">Register Date</th>
						<th class="min-desktop">Status</th>
					</tr>
				</thead>
				<tbody>
					<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
						<?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(1, null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
							<tr>
								<td><input type="checkbox" name="userid[]" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['idUser'];?>
" ></td>
								<td><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['val']->value['email'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['val']->value['institusi'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['val']->value['register_date'];?>
</td>
								<td class="text-center">
									
									<input id="statususer" type="checkbox" checked>
									<span id="checkstate" class="label label-info"></span>
								</td>
								
							</tr>
						<?php } ?>
					<?php }?>
					
					
				</tbody>
			</table>
		</div>
		</form>
	</div>
	<!--===================================================-->
	<!-- End Row selection and deletion (multiple rows) -->
	
	
</div>
<!--===================================================-->
<!--End page content-->


	<script type="text/javascript">

		function checkForm()
		{

			var txt;
			var r = confirm("Anda yakin ingin menghapus data ?");
			if (r == true) {
			    // txt = "You pressed OK!";
			} else {
			    return false;
			}
		}
	</script>

<?php }} ?>
