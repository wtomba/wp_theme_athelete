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

<?php $comments = get_approved_comments($post->ID); ?>
<div class="expand-comments theme-button-color">
	<span><i class="fi-comments"></i> <?php echo count($comments); ?></span>
</div>

<section class="comments">

	<?php foreach ($comments as $comment) { 
		$GLOBALS["comment"] = $comment ?>
		<blockquote class="comment">
			<?php echo $comment->comment_content; ?>
			<?php comment_id_fields(); ?> 
			<cite>
				<?php echo get_avatar( $comment, 100 ); ?> 
				<?php comment_author(); ?> 
				- <?php comment_date(); ?> <?php comment_time(); ?>
			</cite>
		</blockquote>
	<?php } ?>


	<?php
		global $user_identity;
		$commenter = wp_get_current_commenter();
		$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );
		$required = ( $req ? " required" : '' );

		$fields =  array(
			'author' =>
				'<p class="comment-form-author">' .
				'<input id="author" name="author" placeholder="'. __( 'Namn', 'domainreference' ) .'" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
				'" size="30"' . $aria_req . ''. $required .' /></p>',

			'email' =>
				'<p class="comment-form-email">' .
				'<input id="email" name="email" type="email" placeholder="'. __( 'Epost', 'domainreference' ) .'" value="' . esc_attr(  $commenter['comment_author_email'] ) .
				'" size="30"' . $aria_req . ''. $required .' /></p>',

			'url' =>
				'',
		);

		$comments_args = array(
		        // change the title of send button 
		        'label_submit'=>'Kommentera',
		        // change the title of the reply section
		        'title_reply'=> $user_identity ? 'Kommentera som <span class="user">' . $user_identity . '</span> ' .
	        									 '<a class="log-out" href="'.wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ).'" title="Logga ut kontot?"><i class="fi-x"></i></a>'
	        								   : 'Kommentera',
		        // remove "Text or HTML to be displayed after the set of comment fields"
				'comment_notes_before' => '',
		        'comment_notes_after' => '',
		        // redefine your own textarea (the comment body)
		        'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" aria-required="true" placeholder="' . _x( 'Kommentar', 'noun' ) . '" required></textarea></p>',
		        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
				'logged_in_as' => '',
		);
		comment_form($comments_args); 
	?>	
</section>