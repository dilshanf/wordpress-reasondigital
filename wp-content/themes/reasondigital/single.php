
 <div class="container">	
			
			<div id="ttr_main" class="row">
				<div id="ttr_content" class="col-xs-12">
					
					<div class="row">
							<div class="posts-container col-lg-5 col-sm-5 col-md-5 col-xs-12">
						
						<a href="<?php echo get_option("siteurl"); ?>"><img class="sitelogo" src="<?php echo get_stylesheet_directory_uri(); ?>/logo.png" alt="site logo"/></a>
						<br/>
						<br/>
						<br/>
							<h1><?php the_title(); ?></h1>
							
							<p><?php the_content(__('(more...)')); ?></p>
						</div>
						<div class="posts-img-container col-lg-7 col-sm-7 col-md-7 col-xs-12">
							<?php the_post_thumbnail('full');  ?>
						</div>
					</div>
				</div>
				
<?php get_header(); ?>

<?php get_template_part( 'header_menu' ); ?>

<?php get_footer(); ?>

<style>
	.container
	{
		background-color: unset;
		padding: unset;
		box-shadow: unset;
		margin-top: unset;
	}
<style>
