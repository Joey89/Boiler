<?php 
/*
	@package Boiler
	=========
	Index
	=========
*/
use \BP\Helper;

$BP = new Helper();
?>
<?php get_header(); ?>

<section class="posts-section">
	<!-- The Loop -->
	<?php $BP::get_breadcrumbs(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<p><?php the_excerpt(); ?></p>
	<!-- Loop End and if Else -->
	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<!-- End if have_posts-->
	<?php endif;?>
</section>

<?php get_footer(); ?>