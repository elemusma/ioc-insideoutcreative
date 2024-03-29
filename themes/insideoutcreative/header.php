<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 

if(get_field('header', 'options')) { the_field('header', 'options'); }

if(get_field('custom_css')) { 
?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php 
}
wp_head(); 
?>
</head>
<body <?php body_class(); ?>>
<?php
if(get_field('body','options')) { the_field('body','options'); }
// echo '<div class="blank-space"></div>';
echo '<header 
class="position-fixed w-100 pt-md-3 pt-2 pb-3" 
style="top:0;left:0;transition:all .25s ease-in-out;z-index:6;background:rgba(0,0,0,.5);"
>';

// echo '<div class="position-absolute w-100 bg-accent-quinary header-background" style="top:0;left:0;transition:all .5s ease-in-out;"></div>';

echo '<div class="nav">';
echo '<div class="container-fluid">';
echo '<div class="row align-items-center">';

// echo '<div class="col-lg-4 col-md-6 mobile-hidden">';
// wp_nav_menu(array(
//     'menu' => 'Primary Left',
//     'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center align-items-center text-white mb-0'
//     )); 
// echo '</div>';

echo '<div class="col-lg-3 col-md-3 col-6 text-center">';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
if($logo){
    echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'h-100 nav-logo','style'=>'transition:all 1s ease-in-out;width:225px;object-fit:contain;max-width:100%;']); 
}

echo '</a>';
echo '</div>';

echo '<div class="col-lg-1 mobile-hidden"></div>';

echo '<div class="col-lg-5 col-md-6 mobile-hidden">';
wp_nav_menu(array(
    'menu' => 'primary',
    'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-between align-items-center text-white mb-0'
));
echo '</div>';

// echo '<div class="col-12">';
// wp_nav_menu(array(
//     'menu' => 'primary',
//     'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center align-items-center text-white mb-0'
//     )); 
// echo '</div>';

echo '<div class="col-lg-10 col-md-9 col-6 desktop-hidden">';
echo '<a id="navToggle" class="nav-toggle">';
echo '<div>';
echo '<div class="line-1 bg-accent"></div>';
echo '<div class="line-2 bg-accent"></div>';
echo '<div class="line-3 bg-accent"></div>';
echo '</div>';
echo '</a>';
echo '</div>';

echo '<div id="navMenuOverlay" class="position-fixed z-2"></div>';
echo '<div class="col-lg-4 col-md-8 col-11 nav-items bg-accent-gray desktop-hidden" id="navItems">';

echo '<div class="pt-5 pb-5">';
echo '<div class="close-menu">';
echo '<div>';
echo '<span id="navMenuClose" class="close text-accent" style="font-size:30px;">X</span>';
echo '</div>';
echo '</div>';
echo '<a href="' . home_url() . '">';

$logoFooter = get_field('logo_footer','options');
if($logoFooter){
echo wp_get_attachment_image($logoFooter['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:125px;']);
}

echo '</a>';
echo '</div>';

wp_nav_menu(array(
    'menu' => 'primary',
    'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center align-items-center mb-0'
));

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</header>';


// if(!is_front_page() && is_page()){
//     the_post_thumbnail('full', array('class' => 'w-100 h-100 bg-img position-absolute'));
// }

if(is_front_page()) {

if(have_rows('header_gallery')): while(have_rows('header_gallery')): the_row();
echo '<section class="hero position-relative d-flex align-items-center justify-content-center overflow-h" style="min-height:100vh;">';

$gallery = get_sub_field('big_gallery');

if( $gallery ):
    echo '<div class="position-absolute w-100 h-100 big-gallery owl-carousel owl-theme overflow-h" style="top:0;left:0;">';
    foreach( $gallery as $image ):
        echo '<div class="h-100">';
        echo wp_get_attachment_image($image['id'], 'full','',[
            'class'=>'w-100 h-100 big-gallery-img skip-lazy',
            'style'=>'object-fit:cover;'
        ] );
        echo '</div>';
    endforeach; 
    echo '</div>';
endif;

endwhile; endif;

echo '<div class="position-absolute bg-black w-100 h-100" style="opacity:.5;z-index:3;"></div>';

// echo '<div class="position-absolute w-100" style="background:#111314;height:75px;bottom:0;left:0;z-index:4;border-top:3px solid #758189;"></div>';

if(have_rows('header_gallery')): while(have_rows('header_gallery')): the_row();

$smallGallery = get_sub_field('small_gallery');
$smallGalleryCounter = 0;

if( $smallGallery ): 
    
    echo '<div class="position-absolute h-100 small-gallery owl-carousel owl-theme overflow-h" style="top:0;right:0;z-index:4;background-repeat:no-repeat;background-size:contain;">';
    foreach( $smallGallery as $image ):
        $smallGalleryCounter++;
        echo '<div class="h-100 position-relative small-triangle-width" style="width:35%;">';
        echo '<div class="position-absolute h-100 bg-accent clip-path-bg" style="top:0;right:0;width:100%;
        clip-path: polygon(75% 0%, 77% 0, 2% 100%, 0% 100%);
        -ms-clip-path: polygon(75% 0%, 77% 0, 2% 100%, 0% 100%);
        -webkit-clip-path: polygon(75% 0%, 77% 0, 2% 100%, 0% 100%);
        -moz-clip-path: polygon(75% 0%, 77% 0, 2% 100%, 0% 100%);
        "></div>';
        echo '<div class="h-100 position-relative clip-path-img" style="
        clip-path: polygon(77% 0%, 100% 0, 100% 100%, 2% 100%);
        -ms-clip-path: polygon(77% 0%, 100% 0, 100% 100%, 2% 100%);
        -webkit-clip-path: polygon(77% 0%, 100% 0, 100% 100%, 2% 100%);
        -moz-clip-path: polygon(77% 0%, 100% 0, 100% 100%, 2% 100%);">';
        echo wp_get_attachment_image($image['id'], 'full','',[
            'class'=>'w-100 h-100 small-gallery-img number-' . $smallGalleryCounter . ' skip-lazy',
            'style'=>'object-fit:cover;'
        ] );
        echo '</div>';
        echo '</div>';
    endforeach; 
    echo '</div>';
endif;

echo '<div class="pt-5 pb-5 text-white text-lg-center position-relative" style="z-index:5;">';

echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12">';
echo '<h1 class="pt-3 pb-3 mb-0 text-shadow raleway" style="font-size:5vw;">' . get_the_title() . '</h1>';

echo '<div class="col-md-12 col-9 pl-0 raleway">';
if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile;
endif;
echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';

echo '</section>';
endwhile; endif; // end of header_gallery


}



if(!is_front_page() && !is_page()) {
echo '<section class="hero position-relative d-flex align-items-center justify-content-center overflow-h" style="">';
echo '<div class="container pt-5 pb-5 text-center">';
echo '<div class="row">';
echo '<div class="col-md-12">';

if(is_single()){
echo '<h1 class="">' . get_single_post_title() . '</h1>';
} elseif(is_author()){
echo '<h1 class="">Author: ' . get_the_author() . '</h1>';
} elseif(is_tag()){
echo '<h1 class="">' . get_single_tag_title() . '</h1>';
} elseif(is_category()){
echo '<h1 class="">' . get_single_cat_title() . '</h1>';
} elseif(is_archive()){
echo '<h1 class="">' . get_archive_title() . '</h1>';
}
elseif(!is_front_page() && is_home()){
echo '<h1 class="">' . get_the_title(133) . '</h1>';
}
echo '</div>';
echo '</div>';
echo '</div>';
}

echo '</section>';
?>