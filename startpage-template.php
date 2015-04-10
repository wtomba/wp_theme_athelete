<?php 
	/*
		Template Name: Startpage
	*/
?>

<?php get_header(); ?>

<div class="startpage" data-equalizer>
	<div class="large-12 columns">
		<?php if (have_posts()) :
		  while(have_posts()) : the_post(); ?>
		  	<div class="header">
		  		<p><?php the_content(); ?></p>
		  	</div>
		  <?php endwhile;
		else :
		  echo '<p>Inget innehåll har publicerats under denna kategorin än.</p>';
		endif; ?>
	</div>

	<!-- Startpage Left Widget -->
	<div class="large-4 medium-6 columns">
	  <div class="sidebar">
	    <div class="border-top"></div>
	    <div class="latest-posts" data-equalizer-watch>
	      <?php
	        if (is_active_sidebar('startpage_left')) {
	          dynamic_sidebar('startpage_left');
	        }
	      ?>
	    </div>
	  </div>
	</div>

	<!-- Startpage Center Widget -->
	<div class="large-4 medium-6 columns">
	  <div class="sidebar">
	    <div class="border-top"></div>
	    <div class="latest-posts" data-equalizer-watch>
	      <?php
	        if (is_active_sidebar('startpage_center')) {
	          dynamic_sidebar('startpage_center');
	        }
	      ?>
	    </div>
	  </div>
	</div>

	<!-- Startpage Right Widget -->
	<div class="large-4 medium-6 columns">
	  <div class="sidebar">
	    <div class="border-top"></div>
	    <div class="latest-posts" data-equalizer-watch>
	      <?php
	        if (is_active_sidebar('startpage_right')) {
	          dynamic_sidebar('startpage_right');
	        }
	      ?>
	    </div>
	  </div>
	</div>
</div>

<?php  get_footer(); ?>
