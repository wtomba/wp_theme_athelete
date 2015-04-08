<article class="post">
  <div class="content">            
    <?php the_post_thumbnail(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </div>
  <div class="meta">
    <p>Datum för publicering: <span>Ändrad: <?php the_modified_time( get_option( 'date_format' ) ); ?> | Skapad: <?php the_time( get_option( 'date_format' ) ); ?></span></p>
  </div>
</article>
<?php comments_template(); ?>