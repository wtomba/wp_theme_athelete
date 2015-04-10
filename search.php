<!-- Header -->
<?php get_header(); ?>

<!-- Left Sidebar -->
<?php 
  if (is_active_sidebar('left_sidebar_1')) {
    dynamic_sidebar('left_sidebar_1');
  } 
?>

<!-- Content -->
<div class="large-8 medium-7 columns">
	<div class="search-result-container">
		<div class="search-result">
			<p><i class="fi-magnifying-glass"></i> Du sökte på: <span><?php echo get_search_query(); ?></span></p>
			<p><i class="fi-results"></i> Vilket gav: <span><?php echo $wp_query->found_posts; ?></span> resultat</p>
		</div>
		<h1>Sökresultat</h1>
		<?php
		  if (have_posts()) :
		    while(have_posts()) : the_post();
				get_template_part('parts/small-post');		  
		    endwhile;
		  else : ?>
		  	<p class="no-result"><i class="fi-x"></i> Din sökning på: <span>"<?php echo get_search_query(); ?>"</span> gav inga resultat.</p>
		  <?php endif; ?>
	</div>
</div>

<!-- Right Sidebars -->
<div class="large-4 medium-5 columns">
  <div class="sidebar">
    <div class="border-top"></div>
    <div class="latest-posts">
      <?php
        if (is_active_sidebar('right_sidebar_1')) {
          dynamic_sidebar('right_sidebar_1');
        }
      ?>
    </div>
  </div>
</div>

<!-- Footer -->
<?php  get_footer(); ?>
