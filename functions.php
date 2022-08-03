<?php
//////////////////////////////////////////////////////////////////////////////////////////////
// ACTIVE THEME
//////////////////////////////////////////////////////////////////////////////////////////////
function cw_setup(){
	//Thumbnail destacada
	add_theme_support( 'post-thumbnails' ); 
	//Support Title SEO
	add_theme_support('title-tag');
	//Imagens SET
	add_image_size('blog', 966, 644, true);
}
add_action('after_setup_theme', 'cw_setup');

//////////////////////////////////////////////////////////////////////////////////////////////
// STYLE PAGE LOGIN
//////////////////////////////////////////////////////////////////////////////////////////////
function cw_custom_login_css() {
echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/assets/css/style.css"/>';
}
add_action('login_head', 'cw_custom_login_css');

function cw_my_login_logo_url(){
	return get_bloginfo('url');
}
add_filter('login_headerurl','cw_my_login_logo_url');

function cw_my_login_logo_url_title(){
	return 'Com Ponto Web - Voltar para Home';
}
add_filter('login_headertitle','cw_my_login_logo_url_title');

//////////////////////////////////////////////////////////////////////////////////////////////
// INFO cw DESHBOARD
//////////////////////////////////////////////////////////////////////////////////////////////
function cw_add_dashboard_widgets(){
	wp_add_dashboard_widget('wp_dashboard_widget','SOBRE O SITE', 'cw_theme_info');
}
add_action('wp_dashboard_setup','cw_add_dashboard_widgets');

function cw_theme_info(){
	echo "
		<ul>
			<li><strong>Site desenvolvido por:</strong> Com Ponto Web - Desenvolvedor de Website</li>
			<li><strong>Precisando de ajuda? Vá ao link <a href='https://www.compontoweb.com.br' target='_blank'><i>#ajuda</i></a></strong></li>
			<li><strong>Site:</strong> <a href='https://www.compontoweb.com.br'>www.compontoweb.com.br</a></li>
			<li><strong>Contato:</strong> <a href='mailto:contato@compontoweb.com.br'>contato@compontoweb.com.br</a></li>
		</ul>
	";
}

function cw_change_footer_admin () {
  echo 'Site desenvolvido e criado pela Com Ponto Web. Caso precise de ajuda, entre em <a href="https://www.compontoweb.com.br" target="_blank" title="Link para o site da Com Ponto Web.">contato</a>. Estaremos à disposição!';
}
add_filter('admin_footer_text', 'cw_change_footer_admin');

//////////////////////////////////////////////////////////////////////////////////////////////
// MENU
//////////////////////////////////////////////////////////////////////////////////////////////
function cw_menus(){
	//require_once('wp-bootstrap-navwalker.php');
	register_nav_menus(array('main' => __('Menu Main', 'cw')));
}
add_action('init', 'cw_menus');

//////////////////////////////////////////////////////////////////////////////////////////////
// SCRIPT AND STYLE RESET
//////////////////////////////////////////////////////////////////////////////////////////////
function cw_scripts_styles(){
	if(! is_admin()){
		/*Style*/	
		wp_enqueue_style('reset-css', get_stylesheet_directory_uri().'/assets/css/reset.css', null, 'all');
		wp_enqueue_style('general-css', get_stylesheet_directory_uri().'/assets/css/general.css', null, 'all');
		wp_enqueue_style('header-css', get_stylesheet_directory_uri().'/assets/css/header.css', null, 'all');
		wp_enqueue_style('footer-css', get_stylesheet_directory_uri().'/assets/css/footer.css', null, 'all');
		wp_enqueue_style('pages-css', get_stylesheet_directory_uri().'/assets/css/pages.css', null, 'all');
		wp_enqueue_style('common-css', get_stylesheet_directory_uri().'/assets/css/common.css', null, 'all');
		wp_enqueue_style('media-css', get_stylesheet_directory_uri().'/assets/css/media.css', null, 'all');
		//external sources
		wp_enqueue_style('fontAwesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(),'5.15.4');
		/*Script*/
		wp_enqueue_script('main',get_stylesheet_directory_uri().'/assets/js/main.js', array('jquery'),'1.0.0', true);
	}
	/*Style*/	
	wp_enqueue_style('slickTheme',get_stylesheet_directory_uri().'/vendor/slick/slick-theme.css', array(),'1.0.0');
	wp_enqueue_style('slick',get_stylesheet_directory_uri().'/vendor/slick/slick.css', array(),'1.0.0');
	wp_enqueue_style('bootstrap',get_stylesheet_directory_uri().'/vendor/bootstrap/bootstrap.min.css', array(),'4.4.1');
	/*Script*/
	// wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.3.1.slim.min.js',array(),'3.3.1');		
	wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.4.1.min.js',array(),'3.4.1'); 
	wp_enqueue_script('slick-min',get_stylesheet_directory_uri().'/vendor/slick/slick.min.js', array('jquery'),'1.0.0', true);	
	wp_enqueue_script('bootstrap-min',get_stylesheet_directory_uri().'/vendor/bootstrap/bootstrap.min.js', array('jquery'),'5.0.2', true);
	wp_enqueue_script('bootstrap-bundle-min',get_stylesheet_directory_uri().'/vendor/bootstrap/bootstrap-bundle.min.js', array('jquery'),'4.0.0', true);
	wp_enqueue_script('popper-min',get_stylesheet_directory_uri().'/vendor/bootstrap/popper.min.js', array('jquery'),'2.9.2', true);
}//style and script
add_action('wp_enqueue_scripts', 'cw_scripts_styles');

//////////////////////////////////////////////////////////////////////////////////////////////
// LIMIT 
//////////////////////////////////////////////////////////////////////////////////////////////
function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 75);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	return $excerpt;
}