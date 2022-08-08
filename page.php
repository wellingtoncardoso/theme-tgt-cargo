<?php get_header(); ?>
<div class="bg-page" style="
		background-image: url( '<?php echo the_field( 'banner_page' ); ?>' )">
		<h1 class="entry-title"><?php the_title(); ?></h1>
</div>
<div class="container cw-section">
 	<div class="row">
 		<?php the_post(); ?>
 		<div id="post-<?php the_ID(); ?>" <?php post_class( 'col-12' ); ?>>
 			<div class="entry-content">
 				<?php the_content(); ?>
 				<?php wp_link_pages('before=<div class="page-link">' . __('Pages:', 'compontoweb' ) . '&after=</div>') ?>
 				<?php edit_post_link(__('Edit', 'compontoweb' ), '<span class="edit-link">', '</span>' ) ?>
 			</div><!– .entry-content –>
 		</div><!– #post-<?php the_ID(); ?> –>  

 		<?php if ( get_post_custom_values('comments') ) comments_template() // Adiciona um custom field com Nome e Valor "comments" para que possa usar comentários numa página ?>  
 	</div><!-- row -->
	<div class="row">
		<div class="col-12"><div class="divider-page"></div></div>
	</div>
</div><!-- container -->
 
<?php get_footer(); ?>