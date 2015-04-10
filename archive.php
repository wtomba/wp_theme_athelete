<!-- Header -->
<?php get_header(); ?>

<!-- Content -->
<div class="large-8 medium-7 columns">
  <div class="post-container">
    <div class="row">
      <?php
      	if (have_posts()) :
	      while(have_posts()) : the_post();
	        get_template_part('parts/small-post');
	      endwhile;
	    else : ?>
          <article class="small-post">
            <div class="large-12 columns">
              <p>Inget innehåll har publicerats under denna kategorin än.</p>
            </div>
          </article>
	    <?php endif; ?>
    </div>
  </div>
</div>
<?php wp_reset_query(); ?>

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