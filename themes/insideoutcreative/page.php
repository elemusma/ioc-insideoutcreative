<?php get_header();
global $post; 
if ( ! post_password_required( $post ) ) {

    echo get_template_part('partials/content');

if(get_the_content()){

echo '<section class="" style="padding:150px 0;">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-lg-9">';
if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else:
echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';

}

} else {
// we will show password form here

echo '<section class="pt-5 pb-5">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-md-12">';
echo get_the_password_form();
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
   
}
get_footer(); 
?>