<?php

function maher_theme_init(){

	load_theme_textdomain( 'mahertwo', get_template_directory() . '/lang' );
	add_theme_support("post-thumbnails");

	// Menu Register
	register_nav_menus(array(
            'primary_menu' => __( 'Primary Menu', 'mahertwo' ),
            'footer_menu'  => __( 'Footer Menu', 'mahertwo' ),
            'mobile_menu'  => __( 'Mobile Menu', 'mahertwo' ),
        ));

}
add_action("after_setup_theme","maher_theme_init");


function change_excerpt_length(){
	return 40;
}
add_filter("excerpt_length", "change_excerpt_length");


function maher_register_sidebar_widgets(){

	register_sidebar(
		array(
			'name'          => __( 'Right Sidebar', 'mahertwo' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your Right sidebar.', 'mahertwo' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

}
add_action( 'widgets_init', 'maher_register_sidebar_widgets' );



// function themename_widgets_init() {
//     register_sidebar( array(
//         'name'          => __( 'Primary Sidebar', 'theme_name' ),
//         'id'            => 'sidebar-1',
//         'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//         'after_widget'  => '</aside>',
//         'before_title'  => '<h3 class="widget-title">',
//         'after_title'   => '</h3>',
//     ) );
 
//     register_sidebar( array(
//         'name'          => __( 'Secondary Sidebar', 'theme_name' ),
//         'id'            => 'sidebar-2',
//         'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
//         'after_widget'  => '</li></ul>',
//         'before_title'  => '<h3 class="widget-title">',
//         'after_title'   => '</h3>',
//     ) );
// }









