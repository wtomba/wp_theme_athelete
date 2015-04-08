<?php 
	/*
		Template Name: Startpage
	*/
?>

<?php get_header(); ?>

<div class="large-12 columns">	
	<?php
	if (have_posts()) :
	  while(have_posts()) : the_post(); ?>
		<article class="startpage">
		  <div class="content">            
		    <?php the_post_thumbnail(); ?>
		    <h1><?php the_title(); ?></h1>
		    <?php the_content(); ?>
		  </div>
		</article>
	  <?php endwhile;
	else :
	  echo '<p>Inget innehåll har publicerats under denna kategorin än.</p>';
	endif; ?>
</div>

<?php  get_footer(); ?>
