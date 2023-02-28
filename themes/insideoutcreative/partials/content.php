<?php
if(have_rows('builder')): while(have_rows('builder')): the_row();
$layout = get_sub_field('layout');

if ($layout == 'Intro with Three Images'){

if(have_rows('intro_with_three_images_clone')): while(have_rows('intro_with_three_images_clone')): the_row();



if(have_rows('intro_with_three_images_group')): while(have_rows('intro_with_three_images_group')): the_row();


// if(have_rows('intro_with_three_images_group')): while(have_rows('intro_with_three_images_group')): the_row();



echo '<section class="position-relative content-section ' . get_sub_field('classes') . '" style="' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';

$bgImg = get_sub_field('background_image');

if($bgImg){
    echo wp_get_attachment_image($bgImg['id'],'full','',[
        'class'=>'w-100 h-100 position-absolute bg-img',
        'style'=>'top:0;left:0;object-fit:cover;pointer-events:none;'
    ]);
}

if(have_rows('columns_repeater')):



echo '<div class="container-fluid">';
    echo '<div class="row">';
    $columnsRepeater = 0;
    while(have_rows('columns_repeater')): the_row();
    $columnsRepeater++;


        echo '<div class="col-lg-4 col-md-6 p-0 text-center bg-accent col-intro-boxes">';

        echo '<div class="pt-3 pb-3 pl-2 pr-2">';
        echo '<span class="h2 font-italic text-white bold" style="text-decoration:underline;">' . get_sub_field('title') . '</span>';
        echo '</div>';

            $img = get_sub_field('image');
            echo '<div class="position-relative">';


        if($columnsRepeater != 1){
            echo '<div class="bg-black h-100 position-absolute" style="top:0;left:-2.5px;width:5px;"></div>';
        }

            // echo '<a href="' . wp_get_attachment_image_url($img['id'], 'full') . '" data-lightbox="intro-img-set" data-title="' . $img['title'] . '">';
            echo wp_get_attachment_image($img['id'],'full','',['class'=>'w-100 img-intro-boxes','style'=>'height:250px;object-fit:cover']);
            // echo '</a>';
            echo '</div>';
        echo '</div>';
    endwhile;
    echo '</div>';
echo '</div>';
endif;

echo '</section>';

// endwhile; endif;

endwhile; endif;

endwhile; endif;

} elseif($layout == 'Content + Image'){
    if(have_rows('content_image')): while(have_rows('content_image')): the_row();
        $content = get_sub_field('content');
        $img = get_sub_field('image');
        $imgSide = get_sub_field('image_side');

        echo '<section class="position-relative content-section ' . get_sub_field('classes') . '" style="padding:150px 0;' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';

        if(get_sub_field('show_borders') == 'Yes'){
            echo get_template_part('partials/borders-gold');
        }

            $bgImg = get_sub_field('background_image');

            if($bgImg){
                echo wp_get_attachment_image($bgImg['id'],'full','',[
                    'class'=>'w-100 h-100 position-absolute bg-img',
                    'style'=>'top:0;left:0;object-fit:cover;pointer-events:none;'
                ]);
            }

        echo '<div class="container-fluid">';

        if(get_sub_field('content_top')){
            echo '<div class="row">';
                echo '<div class="col-12 text-center pb-5">';

                echo get_sub_field('content_top');

                echo '</div>';
            echo '</div>';
        }

        if($imgSide == 'Left'){
            echo '<div class="row row-content align-items-center justify-content-center">';
            // echo '</div>';
        } else {
            echo '<div class="row row-content flex-lg-row-reverse align-items-center justify-content-center s">';

        }

        if($img):
        echo '<div class="col-lg-6 pt-lg-0 pt-5 col-img ' . get_sub_field('image_col_classes') . '" style="' . get_sub_field('image_col_style') . '">';
            echo wp_get_attachment_image($img['id'],'full','',['class'=>'w-100 h-100','style'=>'object-fit:cover;']);
        echo '</div>';
        endif;

        echo '<div class="col-1"></div>';

        echo '<div class="col-lg-3 pt-lg-0 pt-5 ' . get_sub_field('content_col_classes') . '" style="' . get_sub_field('content_col_style') . '">';
        echo $content;
        echo '</div>';

        echo '</div>';
        echo '</div>';

        echo '</section>';
    endwhile; endif;

} elseif($layout == 'Text Columns'){

if(have_rows('text_columns')): while(have_rows('text_columns')): the_row();

    echo '<section class="position-relative content-section ' . get_sub_field('classes') . '" style="padding:150px 0;' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';

    echo '<img src="https://insideoutcreative.io/wp-content/uploads/2023/02/Old-Paper-Background.jpg" class="w-100 h-100 position-absolute" style="top:0;left:0;object-fit:cover;" alt="">';

    $bgImg = get_sub_field('background_image');

    if($bgImg){
        echo wp_get_attachment_image($bgImg['id'],'full','',[
            'class'=>'w-100 h-100 position-absolute bg-img',
            'style'=>'top:0;left:0;object-fit:cover;pointer-events:none;'
        ]);
    }

    echo '<div class="container-fluid">';
    echo '<div class="row row-content align-items-center justify-content-lg-between justify-content-center">';

    if(have_rows('columns')): while(have_rows('columns')): the_row();
    echo '<div class="col-lg-3 col-md-6 text-center pt-lg-0 pb-lg-0 position-relative" style="padding-top:100px;padding-bottom:100px;">';
    echo '<span class="position-absolute h1 mb-0 text-columns-big-title coromant-garamond" style="
    opacity: .29;
    top: -50%;
    left: 50%;
    transform: translate(-50%,-50%);
    font-size: 145px;
    color:var(--accent-primary);
    ">' . get_sub_field('big_title') . '</span>';

    echo '<span class="" style="color:var(--accent-septenary);letter-spacing:0.5em;">' . get_sub_field('small_title') . '</span>';

    echo '</div>';
    endwhile; endif;

    echo '</div>';
    echo '</div>';

    echo '</section>';

    endwhile; endif;
} elseif($layout == 'Content'){
    if(have_rows('content')): while(have_rows('content')): the_row();
    echo '<section class="position-relative content-section ' . get_sub_field('classes') . '" style="padding:150px 0;' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';

    $bgImg = get_sub_field('background_image');

    if($bgImg){
        echo wp_get_attachment_image($bgImg['id'],'full','',[
            'class'=>'w-100 h-100 position-absolute bg-img',
            'style'=>'top:0;left:0;object-fit:cover;pointer-events:none;'
        ]);
    }

    echo '<div class="container-fluid">';
    echo '<div class="row justify-content-center">';

    echo '<div class="col-lg-9 text-center">';
    echo get_sub_field('content');
    echo '</div>';

    echo '</div>';
    echo '</div>';
    echo '</section>';
    endwhile; endif;

} elseif($layout == 'Icons'){
    if(have_rows('icons')): while(have_rows('icons')): the_row();
        $content = get_sub_field('content');
        $img = get_sub_field('image');

        echo '<section class="position-relative content-section ' . get_sub_field('classes') . '" style="padding:150px 0;' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';

        echo '<img src="https://insideoutcreative.io/wp-content/uploads/2023/02/Icons-Background.jpg" class="w-100 h-100 position-absolute" style="top:0;left:0;object-fit:cover;" alt="">';

        $bgImg = get_sub_field('background_image');
    
        if($bgImg){
            echo wp_get_attachment_image($bgImg['id'],'full','',[
                'class'=>'w-100 h-100 position-absolute bg-img',
                'style'=>'top:0;left:0;object-fit:cover;pointer-events:none;'
            ]);
        }

        echo '<div class="container">';
        echo '<div class="row row-content justify-content-center">';
        echo '<div class="col-lg-9 text-center text-white pb-4">';
            echo $content;
        echo '</div>';

        echo '</div>';

        if(have_rows('icons_inner')):
        echo '<div class="row row-content justify-content-center">';
            while(have_rows('icons_inner')): the_row();
            $icon = get_sub_field('icon');
            echo '<div class="col-lg-3 col-md-4 col-6 text-center mb-5">';
            echo '<div class="border-hover d-flex align-items-center justify-content-center ml-auto mr-auto mb-4" style="border-radius:50%;height:105px;width:105px;border:1px solid var(--accent-primary);">';

            if($icon){
                echo wp_get_attachment_image($icon['id'],'full','',['class'=>'','style'=>'height:70px;width:70px;object-fit:contain;']);
            }

            echo '</div>';
                
                echo '<h3 class="h6 text-white">' . get_sub_field('title') . '</h3>';
            echo '</div>';
            endwhile;
        echo '</div>';
        endif;


        echo '</div>';

        echo '</section>';
    endwhile; endif;
} elseif ($layout == 'Gallery'){
if(have_rows('gallery_group')): while(have_rows('gallery_group')): the_row();

echo '<section class="position-relative content-section ' . get_sub_field('classes') . '" style="padding:150px 0;' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';

$bgImg = get_sub_field('background_image');

if($bgImg){
    echo wp_get_attachment_image($bgImg['id'],'full','',[
        'class'=>'w-100 h-100 position-absolute bg-img',
        'style'=>'top:0;left:0;object-fit:cover;pointer-events:none;'
    ]);
}

echo '<div class="container">';
    echo '<div class="row">';
        echo '<div class="col-12 text-center">';

        echo get_sub_field('content');

        echo '</div>';

        $gallery = get_sub_field('gallery');
    if( $gallery ): 
        foreach( $gallery as $image ):
        echo '<div class="col-lg-3 col-md-6 col-portfolio mt-3 mb-3 overflow-h">';
        echo '<div class="img-hover overflow-h">';
        echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
        echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 img-portfolio','style'=>'height:300px;object-fit:cover;'] );
        echo '</a>';
        echo '</div>';
        echo '</div>';
        endforeach; 
    endif;

    echo '</div>';
echo '</div>';
echo '</section>';

endwhile; endif;

} elseif($layout == 'Process'){

    if(have_rows('process_clone')): while(have_rows('process_clone')): the_row();
    if(have_rows('process_group')): while(have_rows('process_group')): the_row();

    echo '<section class="position-relative content-section ' . get_sub_field('classes') . '" style="background:#464646;padding:75px 0;border-top:75px solid black;border-bottom:75px solid black;' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';

    echo get_template_part('partials/borders-gold');

    $bgImg = get_sub_field('background_image');

    if($bgImg){
        echo wp_get_attachment_image($bgImg['id'],'full','',[
            'class'=>'w-100 h-100 position-absolute bg-img',
            'style'=>'top:0;left:0;object-fit:cover;pointer-events:none;'
        ]);
    }

    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-12 text-center text-white pb-5">';

    echo get_sub_field('content_top');

    echo '</div>';
    echo '</div>';

    // $pages = get_sub_field('pages');

    if(have_rows('columns_repeater')):
        echo '<div class="row justify-content-center">';
        $pagesCounter=0;
        while(have_rows('columns_repeater')): the_row();

        $pagesCounter++;
        // sprintf("%02d", $pagesCounter)

        echo '<div class="col-lg-4 col-md-6 text-white mb-5 col-services" style="text-decoration:none;">';
        // echo '<a href="' . get_the_permalink() . '" class="col-lg-4 col-md-6 text-white mb-5 col-services" style="text-decoration:none;">';
        echo '<div class="position-relative pl-5 pr-5 h-100 col-services-hover" style="padding-top:95px;padding-bottom:95px;">';

        // start of hover box
        echo '<div class="hover-box bg-accent-dark position-absolute w-100 h-100 z-1 d-flex align-items-center justify-content-center pl-5 pr-5 col-services-hover-content" style="border:6px solid #fbcf02;top:0;left:0;transition:all .25s ease-in-out;">';

        echo '<div>';
        echo get_sub_field('content_hover');
        echo '</div>';

        echo '</div>';
        // end of hover box

        echo '<div class="position-absolute w-100 h-100 bg-accent-quaternary" style="top:0;left:0;mix-blend-mode:overlay;opacity:.28;border:2px solid var(--accent-primary);"></div>';

        echo '<div class="position-relative pb-3 h-100">';
        echo '<span class="h1 mb-5 d-block coromant-garamond" style="font-size:41px;">' . get_sub_field('title') . '</span>';

        echo '<span class="mb-5 d-block coromant-garamond pl-5 h4" style="">' . get_sub_field('subtitle') . '</span>';

        echo '<div class="d-flex align-items-end">';
        echo '<div style="height: 35px;
        width: 35px;
        border: 1px solid var(--accent-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-right: 15px;">';
        echo '<span class="plus-sign">&plus;</span>';
        echo '</div>';

        echo '<div class="position-relative">';
        echo '<h6 class="font-italic">More Information</h6>';

        echo '<div class="position-absolute" style="border-bottom:8px solid var(--accent-primary);width:75px;bottom:-15px;left:0;"></div>';

        echo '</div>';
        echo '</div>';


        
        echo '</div>';

        echo '</div>';
        echo '</div>'; // end of col
        // echo '</a>';
        endwhile;
            
            echo '</div>';
        endif;
    
        echo '<div class="row">';
    echo '<div class="col-12 text-center pb-5">';

    echo get_sub_field('content_bottom');

    echo '</div>';
    echo '</div>';

    echo '</div>';
    
    echo '</section>';
    endwhile; endif;
    endwhile; endif;

} elseif($layout == 'Testimonials'){
    if(have_rows('testimonials')): while(have_rows('testimonials')): the_row();
    echo '<section class="position-relative bg-accent-quinary" style="padding:250px 0;">';

    // echo wp_get_attachment_image(173,'full','',['class'=>'w-100 position-absolute','style'=>'height:80%;top:10%;left:0;mix-blend-mode:multiply;']);

    echo '<img src="https://insideoutcreative.io/wp-content/uploads/2023/02/Old-Paper-Background.jpg" class="w-100 position-absolute" style="height:70%;top:15%;left:0;mix-blend-mode:multiply;" alt="">';
    echo '<img src="https://insideoutcreative.io/wp-content/uploads/2023/02/Quotes-Icon-Gold.png" class="h-auto z-1 img-quote position-absolute" style="width:100px;object-fit:contain;top:7.5%;left:50%;transform:translate(-50%,0);" alt="">';
    
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-12 text-center pb-5">';
    // echo wp_get_attachment_image(218,'full','',['class'=>'h-100 z-1 img-quote','style'=>'object-fit:contain;']);


    echo get_sub_field('content');

    echo '</div>';

        if(have_rows('testimonial_repeater')): 
            

            echo '<div class="testimonial-carousel owl-carousel owl-theme arrows-middle">';
            while(have_rows('testimonial_repeater')): the_row();


                echo '<div class="text-center col-lg-6 ml-auto mr-auto">';
                echo '<div class="pb-4 text-accent" style="font-size:125%;">';
                echo get_sub_field('content');
                echo '</div>';

                $headshot = get_sub_field('headshot');
                echo wp_get_attachment_image($headshot['id'],'full','',['class'=>'ml-auto mr-auto','style'=>'width:100px;height:100px;object-fit:cover;border-radius:50%;']);

                echo '<span class="d-block h5 cormorant pt-4">' . get_sub_field('name') . '</span>';
                echo '<span class="d-block text-accent">' . get_sub_field('title') . '</span>';
                
                echo '</div>';

            
            endwhile;
        endif;
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</section>';
    endwhile; endif;
} elseif($layout == 'Videos'){
    if(have_rows('videos_group')): while(have_rows('videos_group')): the_row();
    echo '<section class="position-relative content-section ' . get_sub_field('classes') . '" style="padding:75px 0;' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';

    $bgImg = get_sub_field('background_image');

    if($bgImg){
        echo wp_get_attachment_image($bgImg['id'],'full','',[
            'class'=>'w-100 h-100 position-absolute bg-img',
            'style'=>'top:0;left:0;object-fit:cover;pointer-events:none;'
        ]);
    }

    echo '<div class="container">';
        echo '<div class="row">';
            echo '<div class="col-12 text-center pb-5">';

            echo get_sub_field('content');

            echo '</div>';
        echo '</div>';

        if(have_rows('columns')): 
            echo '<div class="row">';
            while(have_rows('columns')): the_row();
            echo '<div class="col-lg-4 col-md-6 text-center mb-3">';
            echo get_sub_field('video_code');
            echo '</div>';
            endwhile; 
            echo '</div>';
        endif;

    echo '</div>';

    echo '</section>';
    endwhile; endif;

}elseif($layout == 'Contact'){
    if(have_rows('contact')): while(have_rows('contact')): the_row();


        echo '<section class="position-relative bg-accent-quinary contact-section ' . get_sub_field('classes') . '" style="padding-top:500px;padding-bottom:50px;' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';

        // echo '<img src="https://insideoutcreative.io/wp-content/uploads/2023/02/Old-Paper-Background.jpg" class="w-100 h-100 position-absolute" style="top:0;left:0;object-fit:cover;" alt="">';

        
    
        $bgImg = get_sub_field('background_image');
    
        if($bgImg){
            echo wp_get_attachment_image($bgImg['id'],'full','',[
                'class'=>'w-100 h-100 position-absolute bg-img',
                'style'=>'top:0;left:0;object-fit:cover;pointer-events:none;'
            ]);
        }

        echo '<div 
        class="bg-white position-absolute w-100"
        style="top:0;left:0;height:100px;opacity:.6;"
        ></div>';

        echo '<div 
        class="bg-white position-absolute w-100"
        style="bottom:0;left:0;height:200px;opacity:.6;"
        ></div>';

        // $bgImg = get_sub_field('background_image');
        // echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;object-fit:cover;']);

        echo '<div class="container">';
        echo '<div class="row justify-content-center">';
        echo '<div class="col-lg-9 text-center">';
        echo '<div class="position-relative p-5" style="">';
        echo '<img src="https://insideoutcreative.io/wp-content/uploads/2023/02/Old-Paper-Bg.jpg" alt="" class="position-absolute w-100 h-100" style="top:0;left:0;opacity:.71;object-fit:cover;">';

        // echo wp_get_attachment_image(173,'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;opacity:.71;object-fit:cover;']);

        echo '<div class="position-relative">';
        echo get_sub_field('content');
        echo '</div>';
        
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</section>';
    endwhile; endif;
} elseif($layout == 'Content + Carousel'){

    if(have_rows('content_carousel_group')): while(have_rows('content_carousel_group')): the_row();

    echo '<section class="position-relative content-section ' . get_sub_field('classes') . '" style="padding:150px 0;' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';

        if(get_sub_field('show_borders') == 'Yes'){
            echo get_template_part('partials/borders-gold');
        }

            $bgImg = get_sub_field('background_image');

            if($bgImg){
                echo wp_get_attachment_image($bgImg['id'],'full','',[
                    'class'=>'w-100 h-100 position-absolute bg-img',
                    'style'=>'top:0;left:0;object-fit:cover;pointer-events:none;'
                ]);
            }

            echo '<div class="container-fluid">';
                echo '<div class="row">';
                    echo '<div class="col-12 text-center pb-5">';
                    echo get_sub_field('content');
                    echo '</div>';
                echo '</div>';
            echo '</div>';

            $gallery = get_sub_field('carousel');
            if( $gallery ): 
                echo '<div class="gallery-carousel owl-carousel owl-theme">';
                foreach( $gallery as $image ):
                    echo '<div class="col-portfolio mt-3 mb-3 overflow-h">';
                    // echo '<div class="position-relative">';
                    echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set" data-title="' . $image['title'] . '">';
                    echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 img-portfolio','style'=>'height:300px;object-fit:cover;object-position:top;'] );
                    echo '</a>';
                    // echo '</div>';
                    echo '</div>';
                endforeach; 
                echo '</div>';
            endif;


    echo '</section>';

    endwhile; endif;

} elseif($layout == 'Full Height Section'){
    if(have_rows('full_height_section_group')): while(have_rows('full_height_section_group')): the_row();

    echo '<section class="position-relative content-section ' . get_sub_field('classes') . '" style="padding:150px 0;' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';

    if(get_sub_field('show_borders') == 'Yes'){
        echo get_template_part('partials/borders-gold');
    }

        $bgImg = get_sub_field('background_image');

        if($bgImg){
            echo wp_get_attachment_image($bgImg['id'],'full','',[
                'class'=>'w-100 h-100 position-absolute bg-img',
                'style'=>'top:0;left:0;object-fit:cover;pointer-events:none;'
            ]);
        }

        echo '<div class="container">';
            echo '<div class="row ' . get_sub_field('row_classes') . '" style="' . get_sub_field('row_style') . '">';
                echo '<div class="col-lg-6 ' . get_sub_field('column_classes') . '" style="' . get_sub_field('column_style') . '">';
                echo '<h3 class="text-accent raleway h5" style="letter-spacing: 0.3em;">' . get_sub_field('pretitle') . '</h3>';
                echo '<div class="cormorant-garamond text-white">' . get_sub_field('title') . '</div>';

                echo '<div class="' . get_sub_field('content_classes') . '" style="' . get_sub_field('content_style') . '">';
                echo get_sub_field('content');
                echo '</div>';

                echo '</div>';
            echo '</div>';
        echo '</div>';

    echo '</section>';

    endwhile; endif;
} elseif($layout == 'Portfolio'){
    if(have_rows('portfolio_group')): while(have_rows('portfolio_group')): the_row();
    echo '<section class="position-relative ' . get_sub_field('classes') . '" style="padding:150px 0;' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';

    if(get_sub_field('show_borders') == 'Yes'){
        echo get_template_part('partials/borders-gold');
    }

        $bgImg = get_sub_field('background_image');

        if($bgImg){
            echo wp_get_attachment_image($bgImg['id'],'full','',[
                'class'=>'w-100 h-100 position-absolute bg-img',
                'style'=>'top:0;left:0;object-fit:cover;pointer-events:none;'
            ]);
        }

        echo '<div class="container">';
            echo '<div class="row ' . get_sub_field('row_classes') . '" style="' . get_sub_field('row_style') . '">';

            if(get_sub_field('content')){
                echo '<div class="col-12 pb-5 text-center">';
                    echo get_sub_field('content');
                echo '</div>';
            }

            if(have_rows('gallery_repeater')):
                while(have_rows('gallery_repeater')): the_row();
                $img = get_sub_field('image');
                echo '<div class="col-lg-4 col-md-6 text-center mb-4">';
                echo '<div class="position-relative img-hover overflow-h">';
                echo wp_get_attachment_image($img['id'], 'full', '', [
                    'class'=>'w-100',
                    'style'=>'height:510px;object-fit:cover;transform-origin: top;'
                ]);
                echo '</div>';

                echo '<span class="cormorant-garamond d-block pt-4">' . get_sub_field('title') . '</span>';
                echo '<span class="raleway d-block" style="font-weight:500;">' . get_sub_field('subtitle') . '</span>';
                echo '</div>';
                endwhile;
            endif;

            echo '</div>';
        echo '</div>';

    echo '</section>';

    endwhile; endif;
} elseif($layout == 'Content + Icons'){
    if(have_rows('content_+_icons')): while(have_rows('content_+_icons')): the_row();
    echo '<section class="position-relative bg-accent text-white ' . get_sub_field('classes') . '" style="padding:150px 0;' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';

    if(get_sub_field('show_borders') == 'Yes'){
        echo get_template_part('partials/borders-gold');
    }

        $bgImg = get_sub_field('background_image');

        if($bgImg){
            echo wp_get_attachment_image($bgImg['id'],'full','',[
                'class'=>'w-100 h-100 position-absolute bg-img',
                'style'=>'top:0;left:0;object-fit:cover;pointer-events:none;'
            ]);
        }

        echo '<div class="container">';
            echo '<div class="row ' . get_sub_field('row_classes') . '" style="' . get_sub_field('row_style') . '">';

            echo '<div class="col-lg-3">';
                echo get_sub_field('content');
            echo '</div>';
            
            if(have_rows('icons_repeater')): 
                echo '<div class="col-lg-9">';
                echo '<div class="row">';
                while(have_rows('icons_repeater')): the_row();
                $img = get_sub_field('image');
                echo '<div class="col-lg-3 text-center mb-4" style="">';

                echo '<div class="position-relative col-icons-hover h-100 pt-5" style="border:1px solid white;">';
                echo '<div class="m-auto col-icons-hover-border" style="width:75px;height:75px;border:2px solid #d29f1d;border-radius:50%;padding:10px;">';
                echo wp_get_attachment_image($img['id'],'full','',[
                    'class'=>'',
                    'style'=>'height:50px;width:50px;object-fit:contain;'
                ]);
                echo '</div>';
                echo '<h3 class="h6 cormorant-garamond small pt-4">' . get_sub_field('title') . '</h3>';
                echo '</div>';


                echo '</div>';
                endwhile; 
                echo '</div>';
                echo '</div>';
            endif;
            echo '</div>';
        echo '</div>';

    echo '</section>';

    endwhile; endif;
}

endwhile; endif;
?>