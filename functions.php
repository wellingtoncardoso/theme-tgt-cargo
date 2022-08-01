<?php
//////////////////////////////////////////////////////////////////////////////////////////////
// ACTIVE THEME
//////////////////////////////////////////////////////////////////////////////////////////////
function cpw_setup(){
	//Thumbnail destacada
	add_theme_support( 'post-thumbnails' ); 

	//Support Title SEO
	add_theme_support('title-tag');

	//Imagens SET
	add_image_size('blog', 966, 644, true);
	add_image_size('medium', 966, 644, true);
}
add_action('after_setup_theme', 'cpw_setup');

//////////////////////////////////////////////////////////////////////////////////////////////
// STYLE PAGE LOGIN
//////////////////////////////////////////////////////////////////////////////////////////////
function cpw_custom_login_css() {
echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/assets/css/style.css"/>';
}
add_action('login_head', 'cpw_custom_login_css');

function cpw_my_login_logo_url(){
	return get_bloginfo('url');
}
add_filter('login_headerurl','cpw_my_login_logo_url');

function cpw_my_login_logo_url_title(){
	return 'Com Ponto Web - Voltar para Home';
}
add_filter('login_headertitle','cpw_my_login_logo_url_title');

//////////////////////////////////////////////////////////////////////////////////////////////
// INFO cpw DESHBOARD
//////////////////////////////////////////////////////////////////////////////////////////////
function cpw_add_dashboard_widgets(){
	wp_add_dashboard_widget('wp_dashboard_widget','SOBRE O SITE', 'cpw_theme_info');
}
add_action('wp_dashboard_setup','cpw_add_dashboard_widgets');

function cpw_theme_info(){
	echo "
		<ul>
			<li><strong>Site desenvolvido por:</strong> Com Ponto Web - Desenvolvedor de Website</li>
			<li><strong>Precisando de ajuda? Vá ao link <a href='https://www.compontoweb.com.br' target='_blank'><i>#ajuda</i></a></strong></li>
			<li><strong>Site:</strong> <a href='https://www.compontoweb.com.br'>www.compontoweb.com.br</a></li>
			<li><strong>Contato:</strong> <a href='mailto:contato@compontoweb.com.br'>contato@compontoweb.com.br</a></li>
		</ul>
	";
}

function cpw_change_footer_admin () {
        echo 'Site desenvolvido e criado pela Com Ponto Web. Caso precise de ajuda, entre em <a href="https://www.compontoweb.com.br" target="_blank" title="Link para o site da Com Ponto Web.">contato</a>. Estaremos à disposição!';
}
add_filter('admin_footer_text', 'cpw_change_footer_admin');

//////////////////////////////////////////////////////////////////////////////////////////////
// MENU
//////////////////////////////////////////////////////////////////////////////////////////////
function cpw_menus(){
	//require_once('wp-bootstrap-navwalker.php');

	register_nav_menus(array('principal' => __('Menu Principal', 'cpw')));
}
add_action('init', 'cpw_menus');

//////////////////////////////////////////////////////////////////////////////////////////////
// SCRIPT AND STYLE RESET
//////////////////////////////////////////////////////////////////////////////////////////////
function cpw_scripts_styles(){
	
	if(! is_admin()){
		/*Style*/	
		wp_enqueue_style('resetCss', get_stylesheet_directory_uri().'/assets/css/reset.css', array(),'1.0.0');
		wp_enqueue_style('generalCss', get_stylesheet_directory_uri().'/assets/css/general.css', array(), '1.0.0');
		wp_enqueue_style('headerCss', get_stylesheet_directory_uri().'/assets/css/header.css', array(), '1.0.0');
		wp_enqueue_style('footerCss', get_stylesheet_directory_uri().'/assets/css/footer.css', array(), '1.0.0');
		wp_enqueue_style('pagesCss', get_stylesheet_directory_uri().'/assets/css/pages.css', array(), '1.0.0');
		wp_enqueue_style('commonCss', get_stylesheet_directory_uri().'/assets/css/common.css', array(), '1.0.0');
		wp_enqueue_style('singleCss', get_stylesheet_directory_uri().'/assets/css/single.css', array(), '1.0.0');

		//external sources
		wp_enqueue_style('fontAwesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(),'5.15.4');
		wp_enqueue_style('fontMaterialIcons', 'https://fonts.googleapis.com/icon?family=Material+Icons+Sharp', array(), '1.0.0');
		
		// wp_enqueue_style('fontAwesome',get_stylesheet_directory_uri().'/assets/css/font_awesome.min.css', array(),'6.0.0');
		
		/*Script*/
		wp_enqueue_script('mainJs',get_stylesheet_directory_uri().'/assets/js/main.js', array('jquery'),'1.0.0', true);
	}

	/*Style*/	
	wp_enqueue_style('slickTheme',get_stylesheet_directory_uri().'/assets/css/slick-theme.css', array(),'1.0.0');
	wp_enqueue_style('slick',get_stylesheet_directory_uri().'/assets/css/slick.css', array(),'1.0.0');
	wp_enqueue_style('bootstrapCss',get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css', array(),'4.4.1');
	
	/*Script*/
	// wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.3.1.slim.min.js',array(),'3.3.1');		
	wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.4.1.min.js',array(),'3.4.1'); 
	wp_enqueue_script('slickMinJs',get_stylesheet_directory_uri().'/assets/js/slick.min.js', array('jquery'),'1.0.0', true);	
	wp_enqueue_script('bootstrapMinJs',get_stylesheet_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'),'5.0.2', true);
	wp_enqueue_script('bootstrapBundleMinJs',get_stylesheet_directory_uri().'/assets/js/bootstrap-bundle.min.js', array('jquery'),'4.0.0', true);
	wp_enqueue_script('popperMinJs',get_stylesheet_directory_uri().'/assets/js/popper.min.js', array('jquery'),'2.9.2', true);


}//style and script
add_action('wp_enqueue_scripts', 'cpw_scripts_styles');

//////////////////////////////////////////////////////////////////////////////////////////////
// WIDGETS
//////////////////////////////////////////////////////////////////////////////////////////////
function cpw_widget(){
	register_sidebar(array(
		'name'			=> 'Single 1',
		'id'			=> 'sidebar-1',
		'before_widget'	=> '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '</li>',
		'before_title'	=> '<h3 class="widget-text">',
		'after_title'	=> '</h3>'
	));

	register_sidebar(array(
		'name'			=> 'Single 2',
		'id'			=> 'sidebar-2',
		'before_widget'	=> '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '</li>',
		'before_title'	=> '<h3 class="widget-text">',
		'after_title'	=> '</h3>'
	));
}
add_action('widgets_init', 'cpw_widget');

//////////////////////////////////////////////////////////////////////////////////////////////
// LIMIT 
//////////////////////////////////////////////////////////////////////////////////////////////
function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 180);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	return $excerpt;
}