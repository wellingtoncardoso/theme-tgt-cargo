<?php
	$preset_widgets = array (
		'sidebar-1'  => array( 'search', 'pages', 'categories', 'archives' ),
		'sidebar-2'  => array( 'links', 'meta' )
	);
	if ( isset( $_GET['activated'] ) ) {
		update_option( 'sidebars_widgets', $preset_widgets );
	}
