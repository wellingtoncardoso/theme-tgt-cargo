<?php get_header(); ?>

<div class="container">
	<div class="row">
		<?php while(have_posts()) : the_post() ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2><!-- entry-title -->


				<div class="entry-meta">
					<span class="meta-prep meta-prep-author"><?php _e('By', 'compontoweb'); ?></span>
					<span class="author vcard"><a class="url fn n" href="<?php echo get_author_link(false, $authordata->ID, $authordata->user_nicename);?>" title="<?php printf(__('View all post by %s', 'compontoweb'), $authordata->display_name); ?>"><?php the_author();?></a></span>
					<span class="meta-sep"> | </span>
					<span class="meta-prep meta-prep-entry-date"><?php _e('Published', 'compontoweb');?></span>
					<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO')?>"><?php the_time(get_option('date-format')); ?></abbr></span>
					<?php edit_post_link(__('Edit','compontoweb'), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">" , "</span>\n\t\t\t\t\t") ?>
				</div><!--entry-meta-->

				<div class="entry-content">
					<?php the_content(__('Continue reading <span class="meta-nav">»</span>', 'compontoweb' )  ); ?>
					<?php wp_link_pages('before=<div class="page-link">' . __('Pages:', 'compontoweb' ) . '&after=</div>') ?>
				</div><!-- entry-content -->

				<div class="entry-utility">
					<span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'compontoweb' ); ?></span><?php echo get_the_category_list(', '); ?></span>
					<span class="meta-sep"> | </span>
					<?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'compontoweb' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
					<span class="comments-link"><?php comments_popup_link(__('Leave a comment', 'compontoweb' ), __( '1 Comment', 'compontoweb' ), __( '% Comments', 'compontoweb' ) ) ?></span>
					<?php edit_post_link(__('Edit', 'compontoweb' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
				</div> <!-- entry-utility -->
			</div><!-- post-<?php the_ID(); ?> -->
		<?php endwhile; ?><!-- end while -->
	</div><!-- end row -->
</div><!-- end container -->

<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
	<div id="nav-above" class="navigation">
		<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">«</span> Older posts', 'compontoweb' )) ?></div>
		<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">»</span>', 'compontoweb' )) ?></div>
	</div><!-- nav-above -->
<?php } ?><!-- Up site -->

<?php ?>
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
	<div id="nav-below" class="navigation">
		<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">«</span> Older posts', 'compontoweb' )) ?></div>
		<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">»</span>', 'compontoweb' )) ?></div>
	</div><!-- nav-below -->
<?php } ?><!-- Down site -->

<?php get_sidebar();?><!-- sidebar -->