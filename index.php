<?php get_header(); ?>
<div class="container-fluid">
	<div class="row" id="topo">
		<div class="container">
			<div class="row">
				<div class="col-xs-10 col-md-4 col-lg-3">
					<img class="img-responsive logo" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Logo do instituto Selecon">
				</div>
				<div class="col-xs-2 hidden-md hidden-lg">
					<a class="toggle-menu" id="hamburger"><i class="fas fa-bars"></i><i class="fas fa-times hidden"></i></a>
				</div>
				<div class="col-xs-12 col-md-8 col-lg-9">
					<div id="container-menu">
						<?php wp_nav_menu(array('theme_location' => 'principal','container' => '','depth' => 2)); ?>
						<?php wp_nav_menu(array('theme_location' => 'ms','container' => '','depth' => 1)); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row capa">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>