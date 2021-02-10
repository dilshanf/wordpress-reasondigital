
 <div class="container">	
			
			<div id="ttr_main" class="row">
				<div id="ttr_content" class="col-xs-12">
					
					<div class="row">
							<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						
						<a href="<?php echo get_option("siteurl"); ?>"><img class="sitelogo" src="<?php echo get_stylesheet_directory_uri(); ?>/logo.png" alt="site logo"/></a>
							<h1><?php the_title(); ?></h1>
							<p><?php the_content(__('(more...)')); ?></p>
						</div>
						
					</div>
				</div>
				
				
<?php get_header(); ?>

<?php get_template_part( 'header_menu' ); ?>
 
<?php if (is_front_page() ) {
	get_template_part( 'posts_grid' );
} ?>


<?php get_footer(); ?>
