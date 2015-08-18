<?php /* Smarty version Smarty-3.1.15, created on 2015-06-04 15:45:42
         compiled from "app/view/berita/page_beritaDetail.html" */ ?>
<?php /*%%SmartyHeaderCode:13738200835570050dcd2d46-84868757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd83d89e6fd0e905e10632af1b8fd7ecbca9aa08d' => 
    array (
      0 => 'app/view/berita/page_beritaDetail.html',
      1 => 1433407539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13738200835570050dcd2d46-84868757',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5570050dd4cde2_31798005',
  'variables' => 
  array (
    'data' => 0,
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5570050dd4cde2_31798005')) {function content_5570050dd4cde2_31798005($_smarty_tpl) {?><<?php ?>?php include"meta.php";?<?php ?>>
<<?php ?>?php include"header.php";?<?php ?>>

<section class="callaction">
	<div class="container">
		
		<div class="row">
			<div class="col-md-9">	
				<div class="row"  style="border-bottom:2px solid #69BD45">
					<div class="col-md-2">
						<div class="col-md-7" align="center"  style="border-radius:50%;background-color:#2E8AD8;min-height:50px;padding:12px;color:#FFFFFF;box-shadow: 2px 2px 5px #888888;">
	     					<span style="font-size:20px;"><?php echo date("d",strtotime($_smarty_tpl->tpl_vars['data']->value['posted']));?>
</span><br/>
	     					<span style="text-transform: uppercase;"><?php echo date("M",strtotime($_smarty_tpl->tpl_vars['data']->value['posted']));?>
</span>
	     				</div>
     				</div>
     				<div class="col-md-10">
					<h1 style="margin-left:-50px;"><?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>
</h1>
	     				
     				</div>
 				</div>
			</div>
			</div>
		<div class="row">
			<div class="col-md-9">
				<!-- <i class="fa fa-user"></i>  <?php echo $_smarty_tpl->tpl_vars['data']->value['username'];?>
 <i class="fa fa-list"></i> Interviews -->
		
				<div class="row">
					<div class="col-md-12" align="center">
						
						<img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
public_assets/<?php echo $_smarty_tpl->tpl_vars['data']->value['gambar'];?>
"/>
					</div>

					<div class="col-md-12">
						
						<p align="justify"><?php echo $_smarty_tpl->tpl_vars['data']->value['isi'];?>
</p>
						

					</div>
					
				</div>
				
					
			
				
				
			</div>
			<div class="col-md-3">
			 	
			 	<div class="row" style="background-color:#888888">
					<div class="col-md-12">
						<span style="color:#278ED7">POPULAR</span> <span style="color:#FFFFFF">POST</span>
						<p>&nbsp;</p>
						<div class="row">
							<div class="col-md-5">
								<img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/img/data/beritathumbnail1.JPG" style="border:4px solid #5E5D5B"/>
							</div>

							<div class="col-md-7">
								<span style="font-size:14px;color:#BDBDBD">Glamour Photograpic of Young Woman</span><br/>
								<i class="fa fa-comment"></i> 11 Comment
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/img/data/beritathumbnail2.JPG" style="border:4px solid #5E5D5B"/>
							</div>

							<div class="col-md-7">
								<span style="font-size:14px;color:#BDBDBD">Glamour Photograpic of Young Woman</span><br/>
								<i class="fa fa-comment"></i> 11 Comment
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/img/data/beritathumbnail3.JPG" style="border:4px solid #5E5D5B"/>
							</div>

							<div class="col-md-7">
								<span style="font-size:14px;color:#BDBDBD">Glamour Photograpic of Young Woman</span><br/>
								<i class="fa fa-comment"></i> 11 Comment
							</div>
						</div>

					</div>

			 	</div>
			 	<div class="row" style="background-color:#888888">
					<div class="col-md-12">
						<span style="color:#278ED7">OUR</span> <span style="color:#FFFFFF">CATEGORIES</span>
						<ul class="link-list" >
							<li><a href="#" style="color:#FFFFFF">Interviews(5)</a></li>
							<li><a href="#" style="color:#FFFFFF">Video and Audio(11)</a></li>
							<li><a href="#" style="color:#FFFFFF">Photography(3)</a></li>
							<li><a href="#" style="color:#FFFFFF">News From Arround the World(2)</a></li>
							<li><a href="#" style="color:#FFFFFF">Other Stuff(7)</a></li>
						</ul>

					</div>

			 	</div>
			 	
			</div>

		</div>
	</div>
</section>
<<?php ?>?php include"footer.php";?<?php ?>><?php }} ?>
