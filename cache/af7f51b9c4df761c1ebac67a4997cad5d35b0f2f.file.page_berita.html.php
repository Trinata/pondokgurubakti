<?php /* Smarty version Smarty-3.1.15, created on 2015-06-29 16:04:00
         compiled from "app/view/berita/page_berita.html" */ ?>
<?php /*%%SmartyHeaderCode:269942514555da633b09905-46416257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af7f51b9c4df761c1ebac67a4997cad5d35b0f2f' => 
    array (
      0 => 'app/view/berita/page_berita.html',
      1 => 1435568635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '269942514555da633b09905-46416257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555da633b341c4_65192786',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555da633b341c4_65192786')) {function content_555da633b341c4_65192786($_smarty_tpl) {?>
		<div class="news">
			<h3>LATEST NEWS</h3>
			<!-- container -->
			<div class="container">
				<div class="news-grids">
					<div class="col-md-4 news-grid">
						<div class="news-grid-text">
							<h4>LOREM IPSUM DOLOR SIT</h4>
							<span>10.00 - 12.00 | sep 24,2014</span>
						</div>
						<img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/images/14.jpg" alt="" />
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						<div class="read-more blue">
							<a href="#">Read More &gt;&gt;</a>
						</div>
					</div>
					<div class="col-md-4 news-grid">
						<div class="news-grid-text">
							<h4>LOREM IPSUM DOLOR SIT</h4>
							<span>8.00 - 10.00 | JUN 09,2014</span>
						</div>
						<img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/images/13.jpg" alt="" />
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						<div class="read-more blue">
							<a href="#">Read More &gt;&gt;</a>
						</div>
					</div>
					<div class="col-md-4 news-grid">
						<div class="news-grid-text">
							<h4>LOREM IPSUM DOLOR SIT</h4>
							<span>9.00 - 10.00 | FEB 15,2014</span>
						</div>
						<img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/images/15.jpg" alt="" />
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						<div class="read-more blue">
							<a href="#">Read More &gt;&gt;</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
			<div class="news-slid">
				<!-- banner Slider starts Here -->
					<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/js/responsiveslides.min.js"></script>
					 <script>
					 
						$(function () {
						  // Slideshow 4
						  $("#slider2").responsiveSlides({
							auto: true,
							pager: true,
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
						<ul class="rslides" id="slider2">
							<li>
								<div class="news-slid-info">
									<h2> Duis purus leo faucibus eu semper ut, hendrerit</h2>
									<div class="read-more gray">
										<a href="#">READ MORE</a>
									</div>
								</div>
							</li>
							<li>
								<div class="news-slid-info">
									<h2>Fusce non sem vulputate, lacinia ipsum mollis</h2>
									<div class="read-more gray">
										<a href="#">READ MORE</a>
									</div>
								</div>
							</li>
							<li>
								<div class="news-slid-info">
									<h2> pharetra aliquam. Aenean velit elit, rutrum sit amet </h2>
									<div class="read-more gray">
										<a href="#">READ MORE</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
			</div>
			<div class="latest-events">
				<!-- container -->
				<div class="container">
					<div class="news-grids">
					<div class="col-md-4 news-grid">
						<div class="news-grid-text">
							<span>10.00 - 12.00 | sep 24,2014</span>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						<div class="read-more blue">
							<a href="#">Read More &gt;&gt;</a>
						</div>
					</div>
					<div class="col-md-4 news-grid">
						<div class="news-grid-text">
							<span>8.00 - 10.00 | JUN 09,2014</span>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						<div class="read-more blue">
							<a href="#">Read More &gt;&gt;</a>
						</div>
					</div>
					<div class="col-md-4 news-grid">
						<div class="news-grid-text">
							<span>9.00 - 10.00 | FEB 15,2014</span>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
						<div class="read-more blue">
							<a href="#">Read More &gt;&gt;</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				</div>
				<!-- //container -->
			</div>
		</div><?php }} ?>
