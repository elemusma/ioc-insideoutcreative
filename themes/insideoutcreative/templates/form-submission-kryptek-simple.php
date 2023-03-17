<?php 
/**
 * Template Name: Kryptek - Simple
 */
get_header();
?>
<link rel="stylesheet" href="<?php echo home_url(); ?>/wp-content/themes/io-theme/css/kryptek.css">

<section class="position-relative text-center text-white pt-5 pb-5">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/08/bg-banner.jpg" alt="" class="position-absolute w-100 h-100" style="object-fit:cover;top:0;left:0">
<div class="position-relative">
<h1 class="pt-5 pb-3 mr-5"><?php the_title(); ?></h1>
</div>
</section>

<section class="" style="background:url('<?php echo home_url(); ?>/wp-content/uploads/2020/08/bg-kryptek-yeti.jpg');background-size:cover;">
<div class="container">
<div class="row justify-content-center align-items-center">
<div class="col-md-12 text-center">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2020/08/Kryptek-Battlefield-Logo.png" alt="" width="50%" class="kryptek-logo">
</div>
<div class="col-md-12">
<?php echo do_shortcode('[contact-form-7 id="1281" title="Kryptek - Simple"]'); ?>
</div>
</div>
</div>
</section>

<!-- start of form -->
<div class="row align-items-center">

    <div class="col-md-3"></div>
    <div class="col-md-3">
    <label>Project Name</label>
    </div>
    
    <div class="col-md-6">
    [text* project-name]
    </div>
    <div class="col-md-3"></div>
    <div class="col-md-3">
    <label>Schedule Date</label>
    </div>
    
    <div class="col-md-6">
    [date* schedule-date]
    </div>
    
    <div class="col-md-3"></div>
    <div class="col-md-3">
    <label>Schedule Time</label>
    </div>
    
    <div class="col-md-6">
    [select* schedule-time "8am" "9am" "10am" "11am" "12pm" "1pm" "2pm" "3pm" "4pm" "5pm" "6pm"]
    </div>
    
    <div class="col-md-3"></div>
    <div class="col-md-3">
    <label>Designated List/s</label>
    </div>
    
    <div class="col-md-6">
    [checkbox* designated-list "Tactical" "Hunting" "Fishing" "Master"]
    </div>
    
    <div class="col-md-3"></div>
    <div class="col-md-3">
    <label>Subject Line</label>
    </div>
    
    <div class="col-md-6">
    [text* subject-line]
    </div>
    
    <div class="col-md-3"></div>
    <div class="col-md-3">
    <label>Preview Text</label>
    </div>
    
    <div class="col-md-6">
    [text* preview-text]
    </div>
    
    
    
    
    </div>
    
    
    
    
    
    <!-- start of new section -->
    <img src="https://insideoutcreative.io/wp-content/uploads/2020/08/Divider.png" alt="" width="100%" />
    <div class="row">
    <div class="col-md-8">
    <div class="row">
    <div class="col-md-3 col-number">
    <div class="number">
    1
    </div>
    </div>
    <div class="col-md-9 col-fields">
    <h3 class="section-title position-relative">Header</h3>
    <div class="pl-5"><label class="field-label position-relative">Add DropBox URL:</label>
    [url header-link-photo]
    </div>
    <div class="pl-5">
    <label class="field-label position-relative">Pretitle:</label>
    [text header-pretitle]
    </div>
    <div class="pl-5">
    <label class="field-label position-relative">Title:</label>
    [text header-title]
    </div>
    
    
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <img src="https://insideoutcreative.io/wp-content/uploads/2021/06/Krypte-Simple-Header.jpg" alt="" width="100%">
    </div>
    
    </div>
    <!-- end of new section -->
    
    <!-- start of complex section -->
    <img src="https://insideoutcreative.io/wp-content/uploads/2020/08/Divider.png" alt="" width="100%" />
    
    <div class="row">
    <div class="col-md-8">
    <div class="row">
    
    <div class="col-md-3 col-number">
    <div class="number">
    2
    </div>
    </div>
    
    <div class="col-md-9 col-fields">
    <h3 class="section-title position-relative">Intro Content</h3>
        [textarea intro-content x4]
    </div>
    
    
    
    
    
    </div>
    </div>
    
    <div class="col-md-4">
        <img src="https://insideoutcreative.io/wp-content/uploads/2021/06/Krypte-Simple-Intro.jpg" alt="" width="100%" id="middleSectionImg">
    </div>
    
    </div>
    <!-- end of complex section -->
    
    
    
    <!-- start of section -->
    <img src="https://insideoutcreative.io/wp-content/uploads/2020/08/Divider.png" alt="" width="100%" />
    
    <div class="row">
    <div class="col-md-8">
    <!-- start of inner section -->
    <div class="row">
    <div class="col-md-3 col-number">
    <div class="number">
    3
    </div>
    </div>
    <div class="col-md-9 col-fields">
    <h3 class="section-title position-relative">Body</h3>
    
    <div class="pl-5">
    <label class="field-label position-relative">Body Title:</label>
    [text body-title]
    </div> 
    
    
    <div class="pl-5">
    <label class="field-label position-relative">Body Content:</label>
    [text body-content]
    </div>
    
    <div class="pl-5">
    <label class="field-label position-relative">Body Image Link:</label>
    [url body-image-link]
    </div>
    
    <div class="pl-5">
    <label class="field-label position-relative">Shop Now URL Link:</label>
    [url body-shop-now-url]
    </div>
    
    </div>
    
    </div>
    <!-- end of inner section -->
    <!-- start of inner section -->
    <div class="row">
    <div class="col-md-3 col-number">
    </div>
    <div class="col-md-9 col-fields">
    <h3 class="section-title position-relative">Side Images Links</h3>
    <div class="pl-5">
    <label class="field-label position-relative">Image Top:</label>
    [url side-images-link-top]
    </div> 
    
    <div class="pl-5">
    <label class="field-label position-relative">Image Bottom:</label>
    [url side-images-link-bottom]
    </div>
    
    </div>
    
    </div>
    <!-- end of inner section -->
    
    
    
    </div>
    
    <div class="col-md-4">
    <img src="https://insideoutcreative.io/wp-content/uploads/2021/06/Krypte-Simple-Body.jpg" alt="" width="100%">
    </div>
    
    </div>
    <!-- end of section -->

    
    
    
    <div class="row">
    <div class="col-md-12 text-center">
    
    <div class="submit-btn">
    [submit "Submit Form"]
    </div>
    </div>
    </div>
<!-- end of form -->

<!-- start of message body -->
<table style="background-color:#f7f7f7;width:100%;">
    <tbody>
        <tr>
            <td>
<table style="margin:auto;padding-bottom:20px;">
    <tbody>
        <tr>
            <td style="text-align:center;">
                <a href="https://insideoutcreative.io/kryptek/simple/">
                <img src="https://insideoutcreative.io/wp-content/uploads/2020/08/Kryptek-Battlefield-Logo.png" alt="" width="300px" height="auto">
                </a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;">
                <h1>KRYPTEK SIMPLE EMAILER FORM SUBMISSION</h1><br>
                <p>No graphic design required for this form.</p>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;"><p>You can view the page it was submitted from <a href="https://insideoutcreative.io/kryptek/simple/">here.</a></p></td>
        </tr>
    </tbody>
</table>
<table style="background-color:white;width:100%;max-width:600px;margin:auto;border-left:15px solid #f7f7f7;border-right:15px solid #f7f7f7;">
    <tbody>
        <tr><td style="padding:0 20px;"><h1>Campaign Details</h1></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Project Name: </strong><br>[project-name]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Scheduled Date: </strong><br>[schedule-date]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Scheduled Time: </strong><br>[schedule-time]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Designated List/s: </strong><br>[designated-list]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Subject Line: </strong><br>[subject-line]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Preview Text: </strong><br>[preview-text]</p></td></tr>

    <tr><td style="padding:0 20px;"><img src="https://insideoutcreative.io/wp-content/uploads/2020/08/Divider.png" alt="" width="100%" /></td></tr>

    <tr><td style="padding:0 20px;"><h1>Header</h1></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Photo Link: </strong><br>[header-link-photo]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Pretitle: </strong><br>[header-pretitle]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Title: </strong><br>[header-title]</p></td></tr>

    <tr><td style="padding:0 20px;"><img src="https://insideoutcreative.io/wp-content/uploads/2020/08/Divider.png" alt="" width="100%" /></td></tr>

    <tr><td style="padding:0 20px;"><h1>Intro</h1></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Content: </strong><br>[intro-content]</p></td></tr>

    <tr><td style="padding:0 20px;"><img src="https://insideoutcreative.io/wp-content/uploads/2020/08/Divider.png" alt="" width="100%" /></td></tr>

    <tr><td style="padding:0 20px;"><h1>Body</h1></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Title: </strong><br>[body-title]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Content: </strong><br>[body-content]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Image Link: </strong><br>[body-image-link]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Shop Now Link: </strong><br>[body-shop-now-url]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Side Images Link Top: </strong><br>[side-images-link-top]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Side Images Link Bottom: </strong><br>[side-images-link-bottom]</p></td></tr>

    </tbody>
</table>

<table style="margin:auto;height:50px;width:100%;max-width:450px;text-align:center;">
    <tbody>
        <tr><td></td></tr>
        <tr><td></td></tr>
    </tbody>
</table>

</td>
</tr>
</tbody>
</table>
<!-- end of message body -->

<?php get_footer(); ?>