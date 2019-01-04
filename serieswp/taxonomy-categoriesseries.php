<?php
get_header();
$term = get_queried_object(); //https://www.advancedcustomfields.com/resources/adding-fields-taxonomy-term/


$image = get_field('imgcom', $term);
//var_dump($image);?>
	
	<?php if( $image ): ?>
	<style type="text/css">
	.site-header {
		background-image: url(<?php echo $image; ?>);
		background-size:cover;
		height: 250px;
	}
	</style>
	<?php endif; ?>
	
<div class="container">
<?php while ( have_posts() ) :
the_post();?>

	<div class="col-12 taxo " >
		<div >
			<h1 class="card-title text-secondary"><?php the_title(); ?></h1>
		</div>
		<div class="text-secondary">
			<?php $my_excerpt = get_the_excerpt();?>
			<?php  echo  $my_excerpt;?>
		</div>
	</div>	

<?php endwhile;?>
</div>


<?php get_footer(); ?>
