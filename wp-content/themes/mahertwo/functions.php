<?php

function maher_theme_init(){

	load_theme_textdomain( 'mahertwo', get_template_directory() . '/lang' );
	add_theme_support("post-thumbnails");
	add_theme_support("post-formats", array("aside","link","gallery","image","quote"));

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

	register_sidebar( array(
        'name'          => __( 'Home Page Showcase', 'mahertwo' ),
        'id'            => 'showcase',
        'description'   => __( 'Add widgets here to appear in your Home Page Banner section.', 'mahertwo' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ) );

	register_sidebar( array(
        'name'          => __( 'Home Page Box 1', 'mahertwo' ),
        'id'            => 'box-1',
        'description'   => __( 'Add widgets here to appear in your Home Page box 1.', 'mahertwo' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Home Page Box 2', 'mahertwo' ),
        'id'            => 'box-2',
        'description'   => __( 'Add widgets here to appear in your Home Page box 2.', 'mahertwo' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) ); 

    register_sidebar( array(
        'name'          => __( 'Home Page Box 3', 'mahertwo' ),
        'id'            => 'box-3',
        'description'   => __( 'Add widgets here to appear in your Home Page box 3.', 'mahertwo' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );

}
add_action( 'widgets_init', 'maher_register_sidebar_widgets' );


function get_top_parent(){
	global $post;
	if($post->post_parent){
		$ancestor = get_post_ancestors($post->ID);
		return $ancestor[0];
	}
	return $post->ID;
}

function is_parent_page(){
	global $post;

	$pages = get_pages('child_of='.$post->ID);
	return count($pages);
}


// function themename_widgets_init() {

// }









