<?php /* Smarty version Smarty-3.1.15, created on 2015-08-18 06:09:53
         compiled from "app/view/template/header_home.html" */ ?>
<?php /*%%SmartyHeaderCode:12383151725590f7cea63269-04018787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '651ab5a52d64558397f00f905264a284d5ef2747' => 
    array (
      0 => 'app/view/template/header_home.html',
      1 => 1439852972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12383151725590f7cea63269-04018787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5590f7cea755c0_11629283',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5590f7cea755c0_11629283')) {function content_5590f7cea755c0_11629283($_smarty_tpl) {?><div class="header">
      <div class="head-bg">
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
      </div>
      <!-- container -->
      <div class="container">
        <!-- banner Slider starts Here -->
          <script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/js/responsiveslides.min.js"></script>
           <script>

    
            $(function () {
              // Slideshow 4
              $("#slider3").responsiveSlides({
              auto: true,
              pager: false,
              nav: false,
              speed: 500,
              namespace: "callbacks",
              before: function () {
                $('.events').append("<li>before event fired.</li>");
              },
              after: function () {
                $('.events').append("<li>after event fired.</li>");
              }
              });
          
            });

    
            </script>
          <!--//End-slider-script -->
          <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider3">
              <li>
                <div class="head-info">
                  <h1> Pondok<span>Guru Bakti</span></h1>
                  <p>Sollicitudin et elit sit amet, luctus placerat ipsum</p>
                </div>
              </li>
              <!--<li>
                <div class="head-info">
                  <h1>Aenean suscipit<span>Suspendisse venenatis volutpat </span></h1>
                  <p>Morbi id felis porttitor tellus viverra pulvinar. Vestibulum </p>
                </div>
              </li>
              <li>
                <div class="head-info">
                  <h1>Gestas vulputate<span>Morbi id felis porttitor tellus</span></h1>
                  <p>Morbi id felis porttitor tellus viverra pulvinar.ante ipsum </p>
                </div>
              </li>-->
            </ul>
          </div>

      </div>
      <!-- container -->
    </div><?php }} ?>
