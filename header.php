<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<title>
		<?php
			 bloginfo('');
			?>
	</title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset');?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>"/>
	<?php if(is_singular()) wp_enqueue_script('comment-reply');?>
	<?php wp_head();?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf(__('%s latest posts', 'compontoweb' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>"/>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf(__('%s latest comments', 'compontoweb' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png"/>
</head>
<body <?php body_class();?>>
	<?php get_template_part('template-parts/content', 'header')?>
 