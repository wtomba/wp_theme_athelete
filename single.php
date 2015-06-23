<!-- Header -->
<?php get_header(); ?>

<!-- Content -->
<div class="large-8 medium-7 columns">
  <?php
    if (have_posts()) :
      while(have_posts()) : the_post();
        get_template_part('parts/single-post');
      endwhile;
    else :
      echo '<p>Inget innehåll har publicerats under denna kategorin än.</p>';
    endif; ?>

    <?php 
      $category = get_the_category( $post->ID );
      $posts = get_posts(array('category__in' => array($category[0]->term_id), 'post_status'=>'publish', 'order'=>'DESC', 'post__not_in' => array($post->ID), ));
    ?>

    <?php if ($posts) { ?>
      <div class="large-12 columns category-related-posts">
        <h1><?php echo $category[0]->name ?></h1>
        <?php 
          foreach ($posts as $post) {
            setup_postdata($post);
            get_template_part('parts/small-post');
          }
          wp_reset_query();
        ?>
    </div>
    <?php } ?>
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

