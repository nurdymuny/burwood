<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('bootstrap.framework');

$app = JFactory::getApplication();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel='stylesheet' type='text/css' href='<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap.min.css'  />
		<link rel='stylesheet' type='text/css' href='<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap-theme.min.css'  />
		<link rel='stylesheet' type='text/css' href='<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/main.css'  />
  		<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,300italic,700italic,400italic,100italic,100,900italic,900' rel='stylesheet' type='text/css'>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-2.2.0.min.js"></script>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/bootstrap.min.js"></script>
  </head>
	<body>
		<div class="header container-fluid">
			<div class="top_header row">
				<div class="top_header_logo">
					<a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/burwood-logo.png"></a>
					<a href="#">Smarter solution. Better outcomes.</a>
				</div>
				<ul class="top_menu">
					<?php if ($this->countModules('top_menu')) : ?>
                  <jdoc:include type="modules" name="top_menu" style="none" />
                  <?php endif; ?>
				</ul>
			</div>
			<div class="main_header row">
				<div class="main_header_logo">
					<?php if ($this->countModules('logo')) : ?>
						<jdoc:include type="modules" name="logo" style="none" />
					<?php endif; ?>
				</div>
				<div class="main_menu">
					<?php if ($this->countModules('menu')) : ?>
                  		<jdoc:include type="modules" name="menu" style="none" />
                  	<?php endif; ?>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-default response_menu">
		  <div class="container-fluid">
		  	<div class="responsive_top_bar row">
		  		<div class="responsive_top_header_logo">
					<a href="#"> <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/burwood-logo.png"> </a>
					<a href="#">Smarter solution. Better outcomes.</a>
				</div>
		  	</div>
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed menu_collap_button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
			    <?php if ($this->countModules('logo')) : ?>
					<jdoc:include type="modules" name="logo" style="none" />
				<?php endif; ?>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse responsive_menu_content" id="bs-example-navbar-collapse-1">
		    	
		      <ul class="nav navbar-nav responsive_menu_list">
		        <li><a href="#">Expertise</a></li>
		        <li>
					<a href="#">Industries</a>
				</li>
				<li>
					<a href="#">Thought Leadership</a>
				</li>
				<li>
					<a href="#">News</a>
				</li>
				<li>
					<a href="#">Event</a>
				</li>
				<li>
					<a href="#">Partners</a>
				</li>
				<li >
					<a href="#">Client Portal</a>
				</li>
				<li style="border : none; padding-top:28px;">
					<a class="responsive_update_email" href="#"> <span>Enter your email for updates</span> </a>
				</li>
				<li>
					<a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/response_search.png"> Search</a>
				</li>
				<li>
					<a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/response_support.png"> Support</a>
				</li>
				<li>
					<a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/aboutus.png"> About Us</a>
				</li>
				<li>
					<a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/response_contactus.png"> Contact</a>
				</li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		<div class="footer container-fluid">
			<div class="footer_content row">
				<div class="footer_logo col-md-2">
					<a href="#">
						<img class="img-responsive" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/burwood-logo-transparent.png">
					</a>
					
				</div>
				<div class="footer_column_content col-md-2">
						<p class="footer_menu_title">Expertise</p>
						<?php if ($this->countModules('footer1')) : ?>
	                  		<jdoc:include type="modules" name="footer1" style="none" />
	                  	<?php endif; ?>	
				</div>
              	<div class="footer_column_content col-md-2">
						<p class="footer_menu_title">Industries</p>
						<?php if ($this->countModules('footer2')) : ?>
	                  		<jdoc:include type="modules" name="footer2" style="none" />
	                  	<?php endif; ?>	
				</div>
				<div class="footer_column_content col-md-2">
						<p class="footer_menu_title">Though Leadership</p>
						<?php if ($this->countModules('footer3')) : ?>
	                  		<jdoc:include type="modules" name="footer3" style="none" />
	                  	<?php endif; ?>
				</div>
				<div class="footer_column_content col-md-2">
						<p class="footer_menu_title">About Us</p>
						<?php if ($this->countModules('footer4')) : ?>
	                  		<jdoc:include type="modules" name="footer4" style="none" />
	                  	<?php endif; ?>
				</div>
				<div class="footer_column_content col-md-2">
						<p class="footer_menu_title">Login</p>
						<?php if ($this->countModules('footer5')) : ?>
	                  		<jdoc:include type="modules" name="footer5" style="none" />
	                  	<?php endif; ?>
							<p>
								Find us at:
							</p>

							<ul class="contact_social">
								<li>
									<a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/facebook.png"></a>
								</li>
								<li>
									<a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/twitter.png"></a>
								</li>
								<li>
									<a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/linkedin.png"></a>
								</li>
								<li>
									<a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/youtube.png"></a>
								</li>
							</ul>
				</div>
			</div>
			<div class="footer_bottom">
				<p>
				&copy; 2016 Burwood Group. All Rights Reserved.
				</p>
			</div>
		</div>
	</body>
</html>