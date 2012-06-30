<?php
register_sidebar(array(
    'name' => __( 'Left sidebar' ),
    'id' => 'left-sidebar',
 	'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title' => '<h5 class="widgettitle">',
	'after_title' => '</h5>',
));

# test

add_theme_support('automatic-feed-links');