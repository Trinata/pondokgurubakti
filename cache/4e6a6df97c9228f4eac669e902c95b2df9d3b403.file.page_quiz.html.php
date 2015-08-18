<?php /* Smarty version Smarty-3.1.15, created on 2015-06-04 15:57:53
         compiled from "app/view/quiz/page_quiz.html" */ ?>
<?php /*%%SmartyHeaderCode:636093290555da8d20790b8-74013841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e6a6df97c9228f4eac669e902c95b2df9d3b403' => 
    array (
      0 => 'app/view/quiz/page_quiz.html',
      1 => 1433408270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '636093290555da8d20790b8-74013841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555da8d209d321_18757650',
  'variables' => 
  array (
    'basedomain' => 0,
    'user' => 0,
    'soal' => 0,
    'val' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555da8d209d321_18757650')) {function content_555da8d209d321_18757650($_smarty_tpl) {?>
<style>

.ul-btn li input[type="radio"] {
    display:none; 
}

.ul-btn li input[type="radio"]:checked + label { 
    background-color:#6EC24B;
	color:#FFFFFF;
	text-decoration: none;
}

/*.ul-btn label { 
	display:inline-block;
    background-color:#C2C2C2;
	padding:8px;
	border-radius:7px;
	color:#000000;
	text-decoration: none;
}*/

.btn-quiz{
	display:inline-block;
	background-color:#C2C2C2;
	padding:8px;
	border-radius:7px;
	color:#000000;
	text-decoration: none;

}
.btn-quiz.active{
	background-color:#6EC24B;
	color:#FFFFFF;
	text-decoration: none;

}
.ul-btn li{
	list-style-position: outside;
	padding:11px;
	list-style: none;
}
/*
@import url(http://fonts.googleapis.com/css?family=Cabin:700);

/* HTML5 Boilerplate accessible hidden styles */
/*[type="radio"] {
  border: 0; 
  clip: rect(0 0 0 0); 
  height: 1px; margin: -1px; 
  overflow: hidden; 
  padding: 0; 
  position: absolute; 
  width: 1px;
}*/

/* One radio button per line */
/*label {
  display: block;
  cursor: pointer;
  line-height: 2.5;
  font-size: 1.5em;
}

[type="radio"] + span {
  display: block;
}
*/
/* the basic, unchecked style */
/*[type="radio"] + span:before {
  content: '';
  display: inline-block;
  width: 1em;
  height: 1em;
  vertical-align: -0.25em;
  border-radius: 1em;
  border: 0.125em solid #fff;
  box-shadow: 0 0 0 0.15em #000;
  margin-right: 0.75em;
  transition: 0.5s ease all;
}*/

/* the checked style using the :checked pseudo class */
/*[type="radio"]:checked + span:before {
  background: green;
  box-shadow: 0 0 0 0.25em #000;
}*/

/* never forget focus styling */
/*[type="radio"]:focus + span:after {
  content: '\0020\2190';
  font-size: 1.5em;
  line-height: 1;
  vertical-align: -0.125em;
}
*/
/* Nothing to see here. */
/*body {
  margin: 3em auto;
  max-width: 30em;
  font-family: Cabin, serif;
}

fieldset {
  font-size: 1em;
  border: 2px solid #000;
  padding: 2em;
  border-radius: 0.5em;
}

legend {
  color: #fff;
  background: #000;
  padding: 0.25em 1em;
  border-radius: 1em;
}

.p {
  text-align: center;
  font-size: 14px;
  padding-top: 120px;
}
*/

</style>
<!-- <fieldset>
  <legend>Radio Control Quality</legend>
  <label for="accessible">
    <input type="radio" value="accessible" name="quality" id="accessible"> <span>accessible</span>
  </label>

  <label for="pretty">
    <input type="radio" value="pretty" name="quality" id="pretty"> <span>pretty</span>
  </label>

  <label for="accessible-and-pretty">
    <input type="radio" value="pretty"  name="quality" id="accessible-and-pretty" checked> <span>accessible and pretty</span>
  </label>
  
</fieldset>
 -->
<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-md-8" style="background-color:#AF0096">
				<div class="row">
					<div class="col-md-1" style="padding-top:20px">
						<div style="color:#FFFFFF;background-color:#73496E;padding:10px">
							<i class="fa fa-file-text fa-3"></i>
						</div>
					</div>
					<div class="col-md-10"  style="color:#FFFFFF">
						<h1  style="color:#FFFFFF">E-LEARNING STANDARISASI DAN PENILAIAN KESESUAIAN</h1>
						Petunjuk Kursus : 
						<ol type="1">
							<li>Lorem ipsum dolor sit amet, consectetu</li>
							<li>Lorem ipsum dolor sit amet, consectetu</li>
							<li>Lorem ipsum dolor sit amet, consectetu</li>
							<li>Lorem ipsum dolor sit amet, consectetu</li>
							<li>Lorem ipsum dolor sit amet, consectetu</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="col-md-3" align="center" style="color:#FFFFFF;background-color:#D3D3D3;padding-top:10px;margin-left:5px;border-radius:5px;">
				<img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/img/data/iconslide.JPG"/><br/><br/>
				<span style="font-size:24px;color:#252A72">WAKTU TERSISA</span>
				   <div style="border-radius:5px 10px;background-color:#4155D0;width:100%;height:100%;padding:10px 0px;"><a href="#" style="text-decoration:none;color:#FFFFFF;font-size:24px;"><h3 style="color:#FFFFFF"><div id="countdown"></div></h3>
                        </a></div>
			</div>
			<div class="col-md-4">
			<!-- 	<img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/img/data/waktukuis.JPG"/>
				<h2><div id="countdown"></div></h2>
			</div> -->

		</div>
	</div>
	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				Pilih kursus
				<select class="pilihKursus form-control">
					<option value="1">Jaringan komputer</option>
					<option value="2">pemrograman web</option>
					<option value="3">database</option>
				</select>
				Pilih materi
				<select class="pilihMateri">
					<option value="1">materi1</option>
					<option value="2">materi2</option>
					<option value="3">materi3</option>
				</select>
				<a href="javascript:void(0)" class="btn-quiz hvr-shutter-out-vertical" id="ikutQuiz">Ikut Quiz</a>
			</div>
		</div>
	</div>
</section>
<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-md-9">

				<?php if ($_smarty_tpl->tpl_vars['soal']->value) {?>
				<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['soal']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
				<div class="row">
					<div class="col-md-1"><br/>
						<span style="background-color:#26CCC6;padding:15px;100px;color:#FFFFFF;font-size:17px;font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['val']->value['no'];?>
</span>
					</div>

					<div class="col-md-11" style="padding-top:10px;font-size:18px">
						<p ><?php echo $_smarty_tpl->tpl_vars['val']->value['soal'];?>
</p>
						<ul class="ul-btn soal_<?php echo $_smarty_tpl->tpl_vars['val']->value['idSoal'];?>
">
							<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['val']->value['acakpilihan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
							<li>
								<input type="radio" name="pilihan_<?php echo $_smarty_tpl->tpl_vars['val']->value['idSoal'];?>
" id="radio_<?php echo $_smarty_tpl->tpl_vars['val']->value['idSoal'];?>
_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value['jawabanuser']==$_smarty_tpl->tpl_vars['key']->value) {?>checked<?php }?>><label for="radio_<?php echo $_smarty_tpl->tpl_vars['val']->value['idSoal'];?>
_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="btn-quiz hvr-shutter-out-vertical chooseAnswer " data-pilihan="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-soal="<?php echo $_smarty_tpl->tpl_vars['val']->value['idSoal'];?>
" data-kursus="<?php echo $_smarty_tpl->tpl_vars['val']->value['idKursus'];?>
" data-materi="<?php echo $_smarty_tpl->tpl_vars['val']->value['idMateri'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</label>
							</li>
							<?php } ?>
							
						</ul>
					</div>

				</div>
				
				<div class="row">
					<div class="col-md-12">	
					<hr style="margin-top:-15px;border-bottom:1px solid #444444"/>
					</div>
				</div>
				<?php } ?>
				<?php }?>
				
			</div>


		</div>
	</div>
	</section>
<?php }?><?php }} ?>
