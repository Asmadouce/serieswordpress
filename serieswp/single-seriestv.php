<?php
get_header();
			
while ( have_posts() ) :
	
	the_post();
		
?>		
		<div class='container'>	
			<?php
			the_content();	
			$my_excerpt = get_the_excerpt();
			echo  "<h1> Synopsis </h1>" . $my_excerpt;
			?>
		</div>

		<div class='container'>	
		<?php	
			echo  "<h1> Trailer </h1> <br>"; 
		 	the_field('video');
			?>
		</div>
		
<?php	endwhile; 
get_footer();
