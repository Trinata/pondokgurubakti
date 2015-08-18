<?php /* Smarty version Smarty-3.1.15, created on 2015-08-18 06:14:36
         compiled from "app/view/template/header.html" */ ?>
<?php /*%%SmartyHeaderCode:748738685551baaf9663b03-61350267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '309e1f2f7c56c96d6694de2e6ce3f822ad96efea' => 
    array (
      0 => 'app/view/template/header.html',
      1 => 1439853273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '748738685551baaf9663b03-61350267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_551baaf9672fb6_72982581',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551baaf9672fb6_72982581')) {function content_551baaf9672fb6_72982581($_smarty_tpl) {?><div class="head-bg"  style="background-color:#A4CFBA">
      <!-- container -->
      <div class="container">
        <div class="head-logo">
          <a href="index.html"><img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/images/logo-pondok-guru-bakti.png" alt="" /></a>
        </div>
        <div class="top-nav">
            <span class="menu"><img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/images/menu.png" alt=""></span>
              <ul class="cl-effect-1">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
">Beranda</a></li>                                             
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
profil">Tentang Kami</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
booking">Booking Kamar</a></li> 
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
berita">Berita</a></li> 
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
kontak">Kontak</a></li> 
              </ul>
              <!-- script-for-menu -->
               <script>
                 $( "span.menu" ).click(function() {
                 $( "ul.cl-effect-1" ).slideToggle( 300, function() {
                 // Animation complete.
                  });
                 });
              </script>
            <!-- /script-for-menu -->
          </div>
        <div class="clearfix"> </div>
      </div>
      <!-- //container -->
      </div><?php }} ?>
