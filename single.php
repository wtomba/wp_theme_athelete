<!-- Header -->
<?php get_header(); ?>

<!-- Left Sidebar -->
<?php 
  if (is_active_sidebar('left_sidebar_1')) {
    dynamic_sidebar('left_sidebar_1');
  } 
?>

<!-- Content -->
<div class="large-12 columns">
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
      $posts = get_posts(array('category__in' => array($category[0]->term_id), 'post_status'=>'publish', 'order'=>'ASC', 'post__not_in' => array($post->ID), ));
    ?>

    <?php if ($posts) { ?>
      <div class="category-related-posts">
        <h1><?php echo $category[0]->name ?></h1>
        <div class="row">
          <?php 
            foreach ($posts as $post) {
              setup_postdata($post);
              get_template_part('parts/small-post');
            }
            wp_reset_query();
          ?>
        </div>
    </div>
    <?php } ?>
</div>

<!-- Footer -->
<?php  get_footer(); ?>

