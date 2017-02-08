<?php 
register_nav_menu('mainmenu','menu' );
register_nav_menu('socmenu','Socmenu' );

require_once('wp_bootstrap_navwalker.php');
add_theme_support('post-thumbnails'); 


add_action('init','Services');
function Services(){
    register_post_type('Services', array(
        'public'=>true,
        'supports'=>array('title','thumbnail','editor','author','excerpt'),
        'labels'=>array('name'=>'Services', 
            'add_new'=>'Add service')
        ));
}

add_action('init','OurProjects');
function OurProjects(){
    register_post_type('OurProjects', array(
        'public'=>true,
        'taxonomies' => array('recordings', 'category', 'whatever'),
        'supports'=>array('title','thumbnail','editor','author'),
        'labels'=>array('name'=>'Our projects', 
            'add_new'=>'Add projects')
        ));
}

add_action('init','AboutUs');
function AboutUs(){
    register_post_type('AboutUs', array(
        'public'=>true,
        'supports'=>array('title','thumbnail','editor'),
        'labels'=>array('name'=>'About us', 
            'add_new'=>'Add about')
        ));
}


add_action('init','AboutSlider');
function AboutSlider(){
    register_post_type('AboutSlider', array(
        'public'=>true,
        'supports'=>array('title','thumbnail'),
        'labels'=>array('name'=>'About Slider', 
            'add_new'=>'Add slide')
        ));
}

add_action('init','testimonials');
function testimonials(){
    register_post_type('testimonials', array(
        'public'=>true,
        'supports'=>array('title','thumbnail','editor'),
        'labels'=>array('name'=>'Testimonials', 
            'add_new'=>'Add testimonial')
        ));
}



/*WIDGETS*/
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'copyRight',
        'id'            => 'copyRight',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );

    register_sidebar( array(
        'name'          => 'OwnerWord',
        'id'            => 'OwnerWord',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>