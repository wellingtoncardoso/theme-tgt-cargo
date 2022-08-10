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
		wp_enqueue_style('font-awesome-min-css','//use.fontawesome.com/releases/v5.0.7/css/all.css', array(),'5.0.7');
		/*Script*/
		wp_enqueue_script('main-js',get_stylesheet_directory_uri().'/assets/js/main.js', array('jquery'),'1.0.0', true);
	}
	/*Style*/	
	wp_enqueue_style('slick-theme-css',get_stylesheet_directory_uri().'/vendor/slick/slick-theme.css', array(),'1.0.0');
	wp_enqueue_style('slick-css',get_stylesheet_directory_uri().'/vendor/slick/slick.css', array(),'1.0.0');
	wp_enqueue_style('bootstrap-min-css',get_stylesheet_directory_uri().'/vendor/bootstrap/bootstrap.min.css', array(),'4.4.1');
	/*Script*/
	// wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.3.1.slim.min.js',array(),'3.3.1');		
	wp_enqueue_script('jquery-js','https://code.jquery.com/jquery-3.4.1.min.js',array(),'3.4.1'); 
	wp_enqueue_script('slick-min',get_stylesheet_directory_uri().'/vendor/slick/slick.min.js', array('jquery'),'1.0.0', true);	
	wp_enqueue_script('bootstrap-min',get_stylesheet_directory_uri().'/vendor/bootstrap/bootstrap.min.js', array('jquery'),'5.0.2', true);
	wp_enqueue_script('bootstrap-bundle-min',get_stylesheet_directory_uri().'/vendor/bootstrap/bootstrap-bundle.min.js', array('jquery'),'4.0.0', true);
	wp_enqueue_script('popper-min',get_stylesheet_directory_uri().'/vendor/bootstrap/popper.min.js', array('jquery'),'2.9.2', true);
	wp_enqueue_script('mask-js',get_stylesheet_directory_uri().'/vendor/mask/jquery.mask.js', array('jquery'),'1.14.15', true);
	wp_enqueue_script('mask-min-js',get_stylesheet_directory_uri().'/vendor/mask/jquery.mask.min.js', array('jquery'),'1.14.15', true);
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

//////////////////////////////////////////////////////////////////////////////////////////////
// SERVICES
//////////////////////////////////////////////////////////////////////////////////////////////
add_action( 'init', 'service' );
function service(){
	$labels = array(
		'name'						=> __( 'Service' ),
		'singylar_name'		=> __( 'service' ),
		'add_new'					=> __( 'Add New - Service' ),
		'add_new_item'		=> __( 'Add New - Service' ),
		'edit_item'				=> __( 'Edit Service' ),
		'new_item'				=> __( 'New Service' ),
		'all_items'				=> __( 'All Service' ),
		'view_item'				=> __( 'View Service' ),
		'search_items'		=> __( 'Search Service' ),
		'featured_image'	=> 'Image',
		'set_featured_image' => 'Add Image',
		'menu_name'				=> 'Service',
	);
	$args = array(
		'labels' 					=> $labels,
		'description'			=> __( 'Services of the companu I want TGT Cargo' ),
		'public'					=> true,
		'taxonomies'			=> array( 'category' ),
		'menu_positin'		=> 5,
		'supports'				=> array(  'title', 'editor' ),
		'has_archive'			=> true,
		'show_in_admin_bar'	=> false,
		'show_in_nav_menus'	=> false,
		'query_var'				=> true,
		'hierarchical'		=> false,
		'rewrite'					=> array( 'slug', 'servico' ),
		'menu_item'				=> 'dashicons-plus',
	);
	register_post_type( 'service', $args );
	flush_rewrite_rules();	
}