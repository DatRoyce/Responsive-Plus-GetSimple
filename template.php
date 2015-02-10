<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         template.php
* @Package:      Royce
* @Action:       A super swag template!
*
*****************************************************/
?>
 
<!DOCTYPE html>
 
<html lang=en>
 
 
<head>
   <meta charset=UTF-8>
   <title><?php get_page_clean_title(); ?> &mdash;  <?php get_site_name(); ?></title>
   <?php get_header(); ?>
   <link href="<?php get_theme_url(); ?>/style/style.css" rel="stylesheet" type="text/css" media="screen" />
   
   <!-- Core CSS -->
	<link href="<?php get_theme_url(); ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php get_theme_url(); ?>/css/style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php get_theme_url(); ?>/css/themes/<?php get_component('theme'); ?>.css" rel="stylesheet" type="text/css" media="screen" />
	
  
	
	<!-- Plugins -->
    <link href="<?php get_theme_url(); ?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php get_theme_url(); ?>/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
	<link href="<?php get_theme_url(); ?>/plugins/animate/animate.min.css" rel="stylesheet" >
	<link href="<?php get_theme_url(); ?>/plugins/bxslider/bxslider.css" rel="stylesheet"  />
	<link href="<?php get_theme_url(); ?>/plugins/notification/css/ns-default.css" rel="stylesheet" />
	<link href="<?php get_theme_url(); ?>/plugins/notification/css/ns-style-other.css" rel="stylesheet" />
   
   
</head>
 
<body id="<?php get_page_slug(); ?>" >
 
<div id="page">
 
<header>
		<!-- top -->
		<div id="top">
			<div class="container">
				<ul>
					<li><a href="<?php echo $SITEURL; ?>index.php" class="active"><i class="fa fa-home"></i></a></li>
					<?php get_navigation(return_page_slug()); ?>
					
				</ul>
				<div class="btn-group pull-right hidden-xs">
					<a href="#signin" data-toggle="modal" class="btn"><i class="fa fa-user"></i> Login</a>
				</div>
			</div>
		</div>
		<!-- ./top -->
		
		<!-- header -->
		<div class="header">
			<div class="container">
				<span class="bar hide"></span>
				<a href="index.php" class="logo pull-left"><i class="fa fa-bolt"></i><?php get_site_name(); ?></a>
				<ul class="list-inline pull-right hidden-xs">
					<li><a href="#" class="btn btn-social-icon btn-circle" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="btn btn-social-icon btn-circle" data-toggle="tooltip" data-placement="bottom"  title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="btn btn-social-icon btn-circle" data-toggle="tooltip" data-placement="bottom"  title="Google"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>
		</div>
		<!-- ./header -->
		
		<!-- navigation -->
		<nav>
			<div class="container">
				<ul>
					<?php get_navigation(return_page_slug()); ?></li>
					
				<!-- search -->
				<div id="search" class="pull-right">
					<form method="post" class="form-inline">
						<input type="text" class="form-control" placeholder="Search..." />
						<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
		</nav>
		<!-- ./navigation -->
	</header>
			
			<!-- End Header! -->
			<!-- End Header! -->
			
			
 
<div class="container">
		<!-- wrapper-->
		<div id="wrapper">
			<!-- slideshow -->
			
				
			<!-- ./slideshow -->
			
			<div class="leftside">
				<h1><?php get_page_title(); ?></h1>
				<?php get_page_content(); ?>
				<!-- ./section -->				
				
				
			</div>
			<!-- ./leftside -->			
						
			<!-- sidebar -->
			<div class="sidebar">
				<?php get_component('sidebar');?>
				
				</div>
				<!-- ./section -->
			</div><!-- ./sidebar -->
		</div><!-- ./wrapper -->
	</div>

 
 
<footer>
		<div class="container">
			<div class="widget row">
				<!-- about -->
				<div class="col-md-3 col-xs-12">
					<?php get_component('footer-1'); ?>
				</div>
					
				<!-- categories -->
				<div class="col-md-3 col-xs-12">
					<?php get_component('footer-2'); ?>
				</div>
						
				<!-- latest tweet -->
				<div class="col-md-3 col-xs-12">
					<?php get_component('footer-3'); ?>
				</div>
						
				<!-- social buttons -->
				<div class="col-md-3 col-xs-12">
					<?php get_component('footer-4'); ?>
				</div>
			</div>
			<!-- ./footer widget -->
		</div>
			
		<!-- footer bottom -->
		<div class="footer-bottom">
			<div class="container">	
				<ul class="pull-left">
					<li>&copy; 2015 Royce Whitaker. All rights reserved.</li>
				</ul>
				<ul class="pull-right hidden-xs">
					<li><a href="#">Link 1</a></li>
					
				</ul>
			</div>
		</div>
		<!-- ./footer bottom -->
	</footer>	
	
	
	
 <!-- Done --><!-- Done --><!-- Done --><!-- Done --><!-- Done --><!-- Done --><!-- Done -->
 
	
	
<!-- sign-in modal -->
	<!-- Modal -->
	<div id="signin" class="modal" tabindex="-1" role="dialog" aria-labelledby="signin-title" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="signin-title"><i class="fa fa-sign-in"></i> Sign In</h4>
		  </div>
		  <div class="modal-body modal-padding">
			<div class="login">
				You are attempting to login to the Admin dashboard. <BR />
				Please choose a option below..
			</div> 	
		  </div>
		  <div class="modal-footer">
			<a href="#" class="btn btn-warning pull-left" data-dismiss="modal">Cancel</a>
			<a href="<?php echo $SITEURL; ?>admin" class="btn btn-success">Login</a>
		  </div>
		</div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal --> 
	<!-- ./sign-in modal -->
	
	<!-- register modal -->
	<!-- Modal -->
	
		  
		</div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal --> 
	<!-- ./register modal -->
	
	
	<!-- ./style switcher -->
	
	<!-- Javascript -->
    <script src="<?php get_theme_url(); ?>/plugins/jquery/jquery-1.11.1.min.js"></script>
    <script src="<?php get_theme_url(); ?>/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php get_theme_url(); ?>/plugins/bxslider/jquery.bxslider.min.js"></script>
	<script src="<?php get_theme_url(); ?>/plugins/jcarousel/jquery.jcarousel.min.js"></script>
	<script src="<?php get_theme_url(); ?>/plugins/holder/holder.js"></script>
	<script src="<?php get_theme_url(); ?>/plugins/core.js"></script>
	
	<script src="<?php get_theme_url(); ?>/plugins/notification/js/modernizr.custom.js"></script>
	<script src="<?php get_theme_url(); ?>/plugins/notification/js/classie.js"></script>
	<script src="<?php get_theme_url(); ?>/plugins/notification/js/notificationFx.js"></script>
		
	<script src="<?php get_theme_url(); ?>/plugins/pace/pace.min.js"></script>
	
	<script src="<?php get_theme_url(); ?>/plugins/demo.js"></script>
	
	<!-- Bxslider -->
	<script>
	(function($) {
	"use strict";
		/*	Bx Slider
		/*----------------------------------------------------*/
		$('.bxslider').bxSlider({
			nextSelector: '.bx-controls-direction',
			prevSelector: '.bx-controls-direction', 
			nextText: '',
			prevText: '',
			mode: 'vertical',
			pagerCustom: '#bx-tabs',
			auto: true,
			onSlideBefore: function (currentSlideNumber, totalSlideQty, currentObject) {
				$('.caption h2').removeClass('animated fadeInLeft');
				$('.caption h1').removeClass('animated fadeInRight');
				$('.caption p').removeClass('animated fadeInLeft');
				$('.caption h2').eq(currentObject + 1).addClass('animated fadeInLeft');
				$('.caption h1').eq(currentObject + 1).addClass('animated fadeInRight');
				$('.caption p').eq(currentObject + 1).addClass('animated fadeInLeft');
			}
		});
		
		// create the notification
		var bttn = document.getElementById( 'wrapper' );
		$(document).ready(function() {
			classie.add( bttn, 'active' );
			setTimeout( function() {
				classie.remove( bttn, 'active' );
				// create the notification
				var notification = new NotificationFx({
					message : '<div class="ns-thumb"><img src="<?php get_theme_url(); ?>/img/game.jpg"/></div><div class="ns-content"><p><a href="http://github.com/DatRoyce">Created by Royce W.</a></p></div>',
					layout : 'other',
					ttl : 6000,
					effect : 'thumbslider',
						type : 'notice', // notice, warning, error or success
						onClose : function() {
							bttn.disabled = false;
						}
				});
				// show the notification
				notification.show();
			}, 2500);
		});
		
		/* Load Content
		/*----------------------------------------------------*/	
		$(".loaded-content section").slice(0, 3).show();
		$('#load-more').click(function (e) {
			e.preventDefault();
			var btn = $(this)
			btn.button('loading')
			setTimeout(function () {
				btn.button('reset')
				$(".loaded-content section:hidden").slice(0, 3).fadeIn();
			}, 500)
		});
	})(jQuery);
	</script>
</body>
</html>