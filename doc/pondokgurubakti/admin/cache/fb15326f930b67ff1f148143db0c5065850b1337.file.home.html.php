<?php /* Smarty version Smarty-3.1.15, created on 2015-06-04 14:00:48
         compiled from "view/home/home.html" */ ?>
<?php /*%%SmartyHeaderCode:700002057553e0c39454438-29326806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb15326f930b67ff1f148143db0c5065850b1337' => 
    array (
      0 => 'view/home/home.html',
      1 => 1432624380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '700002057553e0c39454438-29326806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553e0c3946f490_02737825',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553e0c3946f490_02737825')) {function content_553e0c3946f490_02737825($_smarty_tpl) {?>
<script>
$(document).ready(function() {
	// MORRIS AREA CHART
	// =================================================================
	// Require MorrisJS Chart
	// -----------------------------------------------------------------
	// http://morrisjs.github.io/morris.js/
	// =================================================================

	Morris.Area({
		element: 'demo-morris-area',
		data: [{
			period: 'Jan',
			dl: 77,
			up: 25
			}, {
			period: 'Feb',
			dl: 127,
			up: 58
			}, {
			period: 'Mar',
			dl: 115,
			up: 46
			}, {
			period: 'Apr',
			dl: 239,
			up: 57
			}, {
			period: 'May',
			dl: 46,
			up: 75
			}, {
			period: 'Jun',
			dl: 97,
			up: 57
			}, {
			period: 'Jul',
			dl: 105,
			up: 70
			}, {
			period: 'Aug',
			dl: 115,
			up: 106
			}, {
			period: 'Sep',
			dl: 239,
			up: 187
			}, {
			period: 'Oct',
			dl: 246,
			up: 215
			},{
			period: 'Nov',
			dl: 246,
			up: 215
			},{
			period: 'Des',
			dl: 246,
			up: 215
			}],
		gridEnabled: false,
		gridLineColor: 'transparent',
		behaveLikeLine: true,
		xkey: 'period',
		ykeys: ['dl', 'up'],
		labels: ['Visitor', 'Registered User'],
		lineColors: ['#045d97'],
		pointSize: 0,
		pointStrokeColors : ['#045d97'],
		lineWidth: 0,
		resize:true,
		hideHover: 'auto',
		fillOpacity: 0.7,
		parseTime:false
	});

})	
</script>

<!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
	<h1 class="page-header text-overflow">Dashboard</h1>
	
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
	<li class="active">Dashboard</li>
</ol>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--End breadcrumb-->

<!--Page content-->
<!--===================================================-->
<div id="page-content">
	
	<div class="row">
		<div class="col-sm-6 col-lg-3">
					
			<!--Registered User-->
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="panel media pad-all">
				<div class="media-left">
					<span class="icon-wrap icon-wrap-sm icon-circle bg-success">
					<i class="fa fa-user fa-2x"></i>
					</span>
				</div>
	
				<div class="media-body">
					<p class="text-2x mar-no text-thin">241</p>
					<p class="text-muted mar-no">Registered User</p>
				</div>
			</div>
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	
		</div>
		<div class="col-sm-6 col-lg-3">
					
			<!--Available Course-->
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="panel media pad-all">
				<div class="media-left">
					<span class="icon-wrap icon-wrap-sm icon-circle bg-info">
					<i class="fa fa-book fa-2x"></i>
					</span>
				</div>
	
				<div class="media-body">
					<p class="text-2x mar-no text-thin">10</p>
					<p class="text-muted mar-no">Available Course</p>
				</div>
			</div>
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	
		</div>
		<div class="col-sm-6 col-lg-3">
	
			<!--Ebook-->
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="panel media pad-all">
				<div class="media-left">
					<span class="icon-wrap icon-wrap-sm icon-circle bg-warning">
					<i class="fa fa-download fa-2x"></i>
					</span>
				</div>
	
				<div class="media-body">
					<p class="text-2x mar-no text-thin">345</p>
					<p class="text-muted mar-no">Ebook Downloaded</p>
				</div>
			</div>
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	
		</div>
		<div class="col-sm-6 col-lg-3">
	
			<!--Online Users-->
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="panel media pad-all">
				<div class="media-left">
					<span class="icon-wrap icon-wrap-sm icon-circle bg-danger">
					<i class="fa fa-plane fa-2x"></i>
					</span>
				</div>
	
				<div class="media-body">
					<p class="text-2x mar-no text-thin">45</p>
					<p class="text-muted mar-no">Online users</p>
				</div>
			</div>
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Visitor Chart</h3>
				</div>
				<div class="panel-body">
	
					<!--Morris Area Chart placeholder-->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<div id="demo-morris-area" style="height:212px"></div>
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	
				</div>
			</div>
		</div>
	</div>
	
	
	
</div>
<!--===================================================-->
<!--End page content-->

<?php }} ?>
