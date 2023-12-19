<!doctype html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html <?php language_attributes(); ?>>
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="GYm,fitness,business,company,agency,multipurpose,modern,bootstrap4">
    
  <!-- theme meta -->
  <meta name="theme-name" content="gymfit" />
  
  <meta name="author" content="Themefisher.com">

  <title><?php wp_title(); ?></title>
  <?php
    wp_head();
  ?>

  

</head>
<body>


<!-- Section Menu Start -->
<!-- Header Start -->
<nav class="navbar navbar-expand-lg navigation fixed-top" id="navbar">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
			<h2 class="text-white text-capitalize"></i>Gym<span class="text-color">Fit</span></h2>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsid"
			aria-controls="navbarsid" aria-expanded="false" aria-label="Toggle navigation">
			<span class="ti-view-list"></span>
		</button>
		<div class="collapse text-center navbar-collapse" id="navbarsid">
			<ul class="navbar-nav mx-auto">
			
			<?php
				wp_nav_menu( 
					array(
				'theme_location'  => 'primary',
				'depth'           => 2, 
				'container'       => 'false',
				'container_class' => '',
				'menu_class'      => 'navbar-nav mx-auto',
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    			'walker'          => new WP_Bootstrap_Navwalker(),

	)

	
);
?>
			

			</ul>
			<div class="my-md-0 ml-lg-4 mt-4 mt-lg-0 ml-auto text-lg-right mb-3 mb-lg-0">
				<a href="tel:+23-345-67890">
					<h3 class="text-color mb-0"><i class="ti-mobile mr-2"></i>+94-12345678</h3>
				</a>
			</div>
		</div>
	</div>
</nav>

