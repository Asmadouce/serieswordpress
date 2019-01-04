<?php get_header(); ?>

<!-----------------------------------COMEDIE-------------------------------------------------------------------------------------->
<div class="container">
	<h1> <a href="http://localhost/serieswp/index.php/categories-series/comedie/" class="text-secondary">Comédie </a> </h1>

	<?php $query = new WP_Query( array( 'categoriesseries' => 'comedie' ) );
		//var_dump($query);
	if ( $query->have_posts() ) : //https://codex.wordpress.org/Class_Reference/WP_Query
		while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="col-4 card bg-secondary rond" >
				<div class="card-img text-center img"> 
					<?php the_post_thumbnail(); ?> 
				</div>

				<div >
					<h5 class="card-title text-light"><?php the_title(); ?></h5>
				</div>
				
				<a href="<?php the_permalink() ?>" class="text-light btn btn-dark">Détails</a>
				
			</div>	
		<?php endwhile;?>
	<?php endif; ?>
</div>
<!----------------------------------------------------------------FANTASTIQUE-------------------------------------------------------->
<section class="grey">
	<div class="container">
		<h1> <a href="http://localhost/serieswp/index.php/categories-series/fantastique/" class="text-light"> Fantastique </a> </h1>
		<?php $query = new WP_Query( array( 'categoriesseries' => 'fantastique' ) );
			//var_dump($query);
		if ( $query->have_posts() ) : //https://codex.wordpress.org/Class_Reference/WP_Query
			while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-4 card bg-light rond" >
					<div class="card-img text-center img"> 
						<?php the_post_thumbnail(); ?> 
					</div>

					<div >
						<h5 class="card-title text-light"><?php the_title(); ?></h5>
					</div>
					
					<a href="<?php the_permalink() ?>" class="text-light btn btn-dark">Détails</a>
					
				</div>	
			<?php endwhile;?>
		<?php endif; ?>
	</div>
</section>

<!----------------------------------------------------------------SCIENCE FICTION------------------------------------------------------->
<div class="container">	
	<h1> <a href="http://localhost/serieswp/index.php/categories-series/science_fiction/" class="text-secondary"> Science Fiction <a/> </h1>
	<?php $query = new WP_Query( array( 'categoriesseries' => 'science_fiction' ) );
		//var_dump($query);
	if ( $query->have_posts() ) : //https://codex.wordpress.org/Class_Reference/WP_Query*
		?> 
		<div class="row">
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="col-4 card bg-secondary rond" >
				<div class="card-img text-center img"> 
					<?php the_post_thumbnail(); ?> 
				</div>

				<div >
					<h5 class="card-title text-light"><?php the_title(); ?></h5>
				</div>
				
				<a href="<?php the_permalink() ?>" class="text-light btn btn-dark">Détails</a>
				
			</div>	
		<?php endwhile;?>
		</div>
	<?php endif; ?>
</div>
<!----------------------------------------------------------------THRILLER-------------------------------------------------------->
<section class="grey">
	<div class="container">
		<h1> <a href="http://localhost/serieswp/index.php/categories-series/thriller/" class="text-light"> Thriller </a> </h1>
		<?php $query = new WP_Query( array( 'categoriesseries' => 'thriller' ) );
			//var_dump($query);
		if ( $query->have_posts() ) : //https://codex.wordpress.org/Class_Reference/WP_Query*
			?> 
			<div class="row">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-4 card bg-light rond" >
					<div class="card-img text-center img"> 
						<?php the_post_thumbnail(); ?> 
					</div>

					<div >
						<h5 class="card-title text-light"><?php the_title(); ?></h5>
					</div>
					
					<a href="<?php the_permalink() ?>" class="text-light btn btn-dark">Détails</a>
					
				</div>	
			<?php endwhile;?>
			</div>

		<?php endif; ?>
	</div>
</section>


<?php get_footer(); ?>