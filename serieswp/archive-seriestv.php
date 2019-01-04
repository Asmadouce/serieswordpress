<?php 
/**
*Template Name: serieswp
*/
?>



<section class="archives">

<?php get_header();?>
<div class="container">
	<div class="position">
		<?php $terms = get_terms( array(
								'taxonomy' => 'categoriesseries',
								'hide_empty' => false,  ) );
				//var_dump($terms); ?>					
				<?php     
				foreach($terms as $term){ ?>
					<div class="row">
							<div class="col-12"> <?php echo "<a href='http://localhost/serieswp/index.php/categories-series/".$term->slug."'>" .$term->name. "</a>"  ?> </div>
					</div>     
		<?php } ?> 
	</div>
	
	<div class="row">
		<?php while ( have_posts() ) :
		the_post();?>
			<div class="col-3 card bg-dark" >
				<div class="card-img text-center img"> 
					<?php the_post_thumbnail(); ?> 
				</div>
				<div >
					<h5 class="card-title text-light"><?php the_title(); ?></h5>
				</div>

				
					<a href="<?php the_permalink() ?>" class="text-light btn btn-secondary">Détails</a>
				
			</div>	
		<?php endwhile;?>
	</div>
</div>

</section>
<?php get_footer(); ?>
