<?php /* Smarty version Smarty-3.1.15, created on 2015-04-07 14:36:37
         compiled from "view/inputarticle.html" */ ?>
<?php /*%%SmartyHeaderCode:185476310555238905a44794-14346228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5fe213d69b414337b0f310a2d2b6a678c41127e' => 
    array (
      0 => 'view/inputarticle.html',
      1 => 1428206454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185476310555238905a44794-14346228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
    'data' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55238905a74b38_09803478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55238905a74b38_09803478')) {function content_55238905a74b38_09803478($_smarty_tpl) {?><script>
$(function () {
	$('#postdate').datepicker ();
	$('#expiredate').datepicker ();
	
	$("#isi").jqte();
	$("#additional").jqte();
	$("#review").jqte();
	
	$('input:checkbox, input:radio').iCheck({
		checkboxClass: 'icheckbox_minimal-blue',
		radioClass: 'iradio_minimal-blue',
		inheritClass: true
	})
})
</script>

<div id="content-header">
	<h1>Add New Article</h1>
</div> <!-- #content-header -->	

<div id="content-container">
	<form id="validate-enhanced" class="form parsley-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
article/articleinp" enctype="multipart/form-data">

		<div class="row">
			<div class="col-md-9">
				<div class="portlet">
				
					<div class="portlet-header">

						<h3>
							<i class="fa fa-tasks"></i>
							Form Article
						</h3>

					</div> <!-- /.portlet-header -->
				
					<div class="portlet-content">
				
						<div class="col-md-6">
							<div class="form-group">
							<label for="text-input">Parent Menu</label>
								<select class="form-control" name="articletype">
									<option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['articleType']==1) {?>selected<?php }?>>Batik</option>
									<option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['articleType']==2) {?>selected<?php }?>>Busana</option>
									<option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value['articleType']==3) {?>selected<?php }?>>Gamis</option>
								</select>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
							<label for="text-input">Title</label>
									<input type="text" name="title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" data-required="true"/>
							</div>
						</div>	
						
						<div class="col-md-6">
							<div class="form-group">
							<label for="text-input">Brief</label>
									<input type="text" name="brief" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['brief'];?>
" />
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group">
							<label for="textarea-input">Deskripsi</label>
									<textarea name="isi" id="isi"  cols="10" rows="20" class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['data']['description'];?>
</textarea>
							</div>
								<!-- hidden -->
								<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />
								<input type="hidden" name="authorid" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['id'];?>
" />
								<input type="hidden" name="image" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" />
								<input type="hidden" name="image_url" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['file'];?>
" />
								<!-- hidden -->
						</div>
						<div class="col-sm-12">
							<div class="form-group">
							<label for="textarea-input">Additional Information</label>
									<textarea name="additional" id="additional"  cols="10" rows="20" class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['data']['additional'];?>
</textarea>
							</div>
								
						</div>
						<div class="col-sm-12">
							<div class="form-group">
							<label for="textarea-input">Review</label>
									<textarea name="review" id="review"  cols="10" rows="20" class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['data']['review'];?>
</textarea>
							</div>
								
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label for="text-input">Available Size</label>
									<input type="text" name="size" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['data']['size'];?>
" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label for="text-input">Quantity</label>
									<input type="text" name="quantity" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['data']['quantity'];?>
" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label for="text-input">Category</label>
									<input type="text" name="category" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['data']['category'];?>
" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label for="text-input">Color</label>
									<input type="text" name="color" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['data']['color'];?>
" />
							</div>
						</div>
					</div>
				</div>
				
			</div>
		
		
			<div class="col-md-3">
				<div class="portlet">
					<div class="portlet-header">

						<h3>
							<i class="fa fa-calendar"></i>
							Publish Date
						</h3>

					</div> <!-- /.portlet-header -->
					<div class="portlet-content">
						<div class="form-group">
							<label for="select-input">Postdate</label>
							<div id="postdate" class="input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
								<input class="form-control" type="text" name="postdate" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['posted_date'];?>
" data-required="true">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							</div>
							
						</div>
						
						<div class="form-group">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="n_status" class="" <?php echo $_smarty_tpl->tpl_vars['data']->value['n_status'];?>
 >
										Publish
									</label>
								</div>
						</div>
						
						<input type="submit" class="btn btn-primary" value="Submit" id="submit" />
					</div>
				</div>
				
				<div class="portlet">
					<div class="portlet-header">

						<h3>
							<i class="fa fa-picture-o"></i>
							Cover Image
						</h3>

					</div> <!-- /.portlet-header -->
					<div class="portlet-content">
						<div class="fileupload fileupload-new" data-provides="fileupload">
						  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" /></div>
						  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
						  <div>
							<span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="file_image"/></span>
							<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
						  </div>
						</div>

						<div class="form-group">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="topcontent" class="" <?php echo $_smarty_tpl->tpl_vars['data']->value['topcontent'];?>
 >
										Slider Utama
									</label>
								</div>
						</div>
						<div class="form-group">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="slider_image" class="" <?php echo $_smarty_tpl->tpl_vars['data']->value['slider_image'];?>
 >
										Slider minimalis
									</label>
								</div>
						</div>
					</div>

				</div>
				
			</div>
		</div>
	
	</form>
</div><?php }} ?>
