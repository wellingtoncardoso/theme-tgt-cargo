 <?php 
/*
*Template Name: Front Page
*/
get_header(); ?>
<main>
	<?php echo get_template_part( 'template-parts/content', 'slider' ); ?>
  <?php echo get_template_part( 'template-parts/content', 'about' ); ?>
  <?php echo get_template_part( 'template-parts/content', 'gallery' ); ?>
  <?php echo get_template_part( 'template-parts/content', 'services' ); ?>
  <?php echo get_template_part( 'template-parts/content', 'partners' ); ?>
  <?php echo get_template_part( 'template-parts/content', 'contact' ); ?>
</main>
<?php get_footer(); ?>