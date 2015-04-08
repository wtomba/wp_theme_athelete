<!-- Header -->
<?php get_header(); ?>

<!-- Content -->
<?php
  $category = get_category(get_query_var('cat'));
  $posts = get_posts(array('category__in' => array($category->term_id), 'post_status'=>'publish', 'order'=>'ASC' ));
?>
<div class="large-8 columns">
  <div class="post-container">
    <div class="row">
      <?php
        if ($posts)
        {
          foreach ($posts as $post) {
            setup_postdata($post);
            get_template_part('parts/small-post');
          }
        } else { ?>
          <article class="small-post">
            <div class="large-12 columns">
              <p>Inget innehåll har publicerats under denna kategorin än.</p>
            </div>
          </article>
        <?php } ?>
    </div>
  </div>
</div>
<?php wp_reset_query(); ?>

<!-- Right Sidebars -->
<div class="large-4 columns">
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