<?php
/**
 * Template Name: Flexsystems Form Submission
 */
get_header(); ?>
<link rel="stylesheet" href="<?php echo home_url(); ?>/wp-content/themes/io-theme/css/kryptek.css">

<section class="position-relative text-center text-white pt-5 pb-5" style="background:rgb(27, 54, 97);background:linear-gradient( 90deg, rgba(27, 54, 97, 1) 0%, rgba(157, 11, 16, 1) 100% );">
<!-- <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/Bg-Flag.png" alt="" class="position-absolute w-100 h-100" style="object-fit:cover;object-position:bottom;top:0;left:0"> -->
<div class="position-relative">
<h1 class="pt-5 pb-3 mr-5"><?php the_title(); ?></h1>
</div>
</section>

<section class="" style="background:url('<?php echo home_url(); ?>/wp-content/uploads/2022/06/Bg-Flag.png');background-size:cover;background-attachment:fixed;background-position:bottom;">
<!-- <section class="" style="background:rgb(27, 54, 97);background:linear-gradient( 90deg, rgba(27, 54, 97, 1) 0%, rgba(157, 11, 16, 1) 100% );"> -->
<!-- <section class="" style="background:#f7f7f7;"> -->
<div class="container">
<div class="row justify-content-center align-items-center">
<div class="col-md-12 text-center">
<img src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/Flex-System-Logo.png" alt="" width="50%" class="kryptek-logo mb-5">
</div>
<div class="col-md-12">
<?php echo do_shortcode('[contact-form-7 id="2692" title="Flexsystems - Form Submission"]'); ?>
</div>
</div>
</div>
</section>



<script>
    let complexDropdown = document.querySelector('.complex-dropdown select');
    let complexSectionOption = document.querySelectorAll('.complex-section-option');
    let gifRow = document.querySelector('#gif');
    let videoRow = document.querySelector('#video');
    let bulletPointsRow = document.querySelector('#bulletPoints');
    let paragraphRow = document.querySelector('#paragraph');
    let middleSectionImg = document.querySelector('#middleSectionImg');
    // console.log(complexSectionOption);
    
    complexDropdown.addEventListener('change',showDropdownContent);

    function showDropdownContent(){
      // console.log('hello3');
      // console.log(complexDropdown.value);
      // gifRow = document.querySelector('#' + this.value.toLowerCase());

      // console.log(this.value);
      if( this.value == "" ){
        middleSectionImg.src="https://insideoutcreative.io/wp-content/uploads/2022/06/Flexsystems-email-gif-or-bullet-points.jpeg";
        gifRow.classList.add('d-none');
        // videoRow.classList.add('d-none');
        bulletPointsRow.classList.add('d-none');
        // paragraphRow.classList.add('d-none');
      }
      if( this.value == "GIF" ){
        middleSectionImg.src="https://insideoutcreative.io/wp-content/uploads/2022/06/Flexsystems-email-gif.jpeg";
        gifRow.classList.remove('d-none');
        // videoRow.classList.add('d-none');
        bulletPointsRow.classList.add('d-none');
        // paragraphRow.classList.add('d-none');
      }
      // if(this.value == "Video"){
      //   middleSectionImg.src="https://insideoutcreative.io/wp-content/uploads/2021/06/Dynamic-Middle-Section-Video.jpg";
      //   videoRow.classList.remove('d-none');
      //   gifRow.classList.add('d-none');
      //   bulletPointsRow.classList.add('d-none');
      //   paragraphRow.classList.add('d-none');
      // }
      if(this.value == "Bullet Points"){
        middleSectionImg.src="https://insideoutcreative.io/wp-content/uploads/2022/06/Flexsystems-email-gif-or-bullet-points.jpeg";
        // videoRow.classList.add('d-none');
        gifRow.classList.add('d-none');
        bulletPointsRow.classList.remove('d-none');
        // paragraphRow.classList.add('d-none');
      }
      // if(this.value == "Paragraph"){
      //   middleSectionImg.src="https://insideoutcreative.io/wp-content/uploads/2021/06/Dynamic-Middle-Section-Paragraph.jpg";
      //   videoRow.classList.add('d-none');
      //   gifRow.classList.add('d-none');
      //   bulletPointsRow.classList.add('d-none');
      //   paragraphRow.classList.remove('d-none');
      // }
    }
</script>

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
    <div class="col-md-6">
    <div class="row">
    <div class="col-md-3 col-number">
    <div class="number">
    1
    </div>
    </div>
    <div class="col-md-9 col-fields">
    <h3 class="section-title position-relative">Header</h3>
    <div class="pl-5">
    <label class="field-label position-relative">Add DropBox URL for Background Image:</label>
    [url uo-image-1]
    </div>
    <div class="pl-5">
    <label class="field-label position-relative">Add DropBox URL for Patch/Product:</label>
    [url uo-image-2]
    </div>
    <div class="pl-5">
    <label class="field-label position-relative">Headline:</label>
    [text uo-headline]
    </div>
    <!-- <div class="pl-5">
    <label class="field-label position-relative">Subhead:</label>
    [text uo-subhead]
    </div> -->
    <!-- <div class="pl-5">
    <label class="field-label position-relative">Shop Now URL Link:</label>
    [url uo-shop-now]
    </div> -->
    
    </div>
    </div>
    </div>
    <div class="col-md-6 pt-md-0 pt-5">
    <img src="https://insideoutcreative.io/wp-content/uploads/2022/06/Flexsystems-email-header.jpeg" alt="" width="100%">
    </div>
    
    </div>
    <!-- end of new section -->
    
    <!-- start of complex section -->
    <img src="https://insideoutcreative.io/wp-content/uploads/2020/08/Divider.png" alt="" width="100%" />
    
    <div class="row middle-section">
    <div class="col-md-6">
    <div class="row">
    
    <div class="col-md-3 col-number">
    <div class="number">
    2
    </div>
    </div>
    
    <div class="col-md-9 col-fields">
    <h3 class="section-title position-relative">Middle Section Options</h3>
    <h6>Please select one from the dropdown</h6>
    <div class="complex-dropdown">
    [select section-type include_blank "GIF" "Bullet Points"]
    <hr>
    </div>
    
    <div id="gif" class="d-none complex-section-option">
        <label>GIF Image Link</label>
        [url gif-image-link]
        <label>GIF Image Text</label>
        [textarea gif-image-text x4]
        <label>GIF Image Shop Now Link</label>
        [url gif-image-shop-now-link]
    </div>
    <div id="video" class="d-none complex-section-option">
        <label>Video Link</label>
        [url video-link]
        <label>Video Subheader</label>
        [text video-subheader]
        <label>Video Additional Text</label>
        [textarea video-additional-text x4]
        <label>Video Shop Now Link</label>
        [url video-shop-now-link]
    </div>
    <div id="bulletPoints" class="d-none complex-section-option">
        <label>Bullet Point Image Link</label>
        [url bullet-point-image-link]
        <label>Bullet Points Title</label>
        [text bullet-points-title]
        <label>Bullet Points Subtitle</label>
        [text bullet-points-header]
        <label>Bullet Points</label>
        [textarea bullet-points x4]
        <label>Bullet Points Shop Now Link</label>
        [url bullet-points-shop-now-link]
    </div>
    <div id="paragraph" class="d-none complex-section-option">
        <label>Paragraph Side Images Top Link</label>
        [url paragraph-side-images-top-link]
        <label>Paragraph Side Images Bottom Link</label>
        [url paragraph-side-images-bottom-link]
        <label>Paragraph Content</label>
        [textarea paragraph-content x4]
        <label>Paragraph Shop Now Link</label>
        [url paragraph-shop-now-link]
    </div>
    
    </div>
    
    
    
    
    
    </div>
    </div>
    
    <div class="col-md-6">
        <img src="https://insideoutcreative.io/wp-content/uploads/2022/06/Flexsystems-email-gif-or-bullet-points.jpeg" alt="" width="100%" id="middleSectionImg">
    </div>
    
    </div>
    <!-- end of complex section -->
    
    
    
    <!-- start of section -->
    <img src="https://insideoutcreative.io/wp-content/uploads/2020/08/Divider.png" alt="" width="100%" />
    
    <div class="row">
    <div class="col-md-6">
    <!-- start of inner section -->
    <div class="row">
    <div class="col-md-3 col-number">
    <div class="number">
    3
    </div>
    </div>
    <div class="col-md-9 col-fields">
    <h3 class="section-title position-relative">Product Promotion #1</h3>
    
    <div class="pl-5">
    <label class="field-label position-relative">Add DropBox URL:</label>
    [url ppc-image-1]
    </div> 
    
    
    <div class="pl-5">
    <label class="field-label position-relative">Product Promotion Copy:</label>
    [text ppc-1]
    </div>
    
    <div class="pl-5">
    <label class="field-label position-relative">Additional Information:</label>
    [text ai-1]
    </div>
    
    <div class="pl-5">
    <label class="field-label position-relative">Shop Now URL Link:</label>
    [text ppc-shop-now-1]
    </div>
    
    </div>
    
    </div>
    <!-- end of inner section -->
    </div>
    
    <div class="col-md-6">
    <img src="https://insideoutcreative.io/wp-content/uploads/2022/06/Flexsystems-email-product-promotion.jpeg" alt="" width="100%">
    </div>

    <div class="col-md-6">
        <!-- start of inner section -->
<div class="row">
    <div class="col-md-3 col-number">
    </div>
    <div class="col-md-9 col-fields">
    <h3 class="section-title position-relative">Product Promotion #2</h3>
    <div class="pl-5">
    <label class="field-label position-relative">Add DropBox URL:</label>
    [url ppc-image-2]
    </div> 
    
    <div class="pl-5">
    <label class="field-label position-relative">Product Promotion Copy:</label>
    [text ppc-2]
    </div>
    
    <div class="pl-5">
    <label class="field-label position-relative">Additional Information:</label>
    [text ai-2]
    </div>
    
    <div class="pl-5">
    <label class="field-label position-relative">Shop Now URL Link:</label>
    [text ppc-shop-now-2]
    </div>
    
    </div>
    
</div>
<!-- end of inner section -->
    </div>

    <div class="col-md-6">
        <!-- start of inner section -->
<div class="row">
    <div class="col-md-3 col-number">
    </div>
    <div class="col-md-9 col-fields">
    <h3 class="section-title position-relative">Product Promotion #3</h3>
    
    <div class="pl-5">
    <label class="field-label position-relative">Add DropBox URL:</label>
    [url ppc-image-3]
    </div> 
    
    <div class="pl-5">
    <label class="field-label position-relative">Product Promotion Copy:</label>
    [text ppc-3]
    </div>
    
    <div class="pl-5">
    <label class="field-label position-relative">Additional Information:</label>
    [text ai-3]
    </div>
    
    <div class="pl-5">
    <label class="field-label position-relative">Shop Now URL Link:</label>
    [text ppc-shop-now-3]
    </div>
    
    </div>
    
</div>
<!-- end of inner section -->
    </div>
    
    </div>
    <!-- end of section -->
    
    <!-- start of section -->
    <img src="https://insideoutcreative.io/wp-content/uploads/2020/08/Divider.png" alt="" width="100%" />
    <!-- start of inner section -->
    <div class="row">
    <div class="col-md-3 col-number">
    <div class="number">
    4
    </div>
    </div>
    <div class="col-md-9 col-fields">
    <h3 class="section-title position-relative">Additional Information</h3>
    <div class="row align-items-center">
    <div class="col-md-12">
    [textarea additional-information x4]
    </div>
    </div>
    
    </div>
    
    </div>
    <!-- end of inner section -->
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
                <a href="https://insideoutcreative.io/flexsystems-form-submission/">
                <img src="https://insideoutcreative.io/wp-content/uploads/2022/06/Flex-System-Logo.pngg" alt="" width="300px" height="auto">
                </a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;">
                <h1>Flexsystems Design Required Emailer Form Submission</h1>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;"><p>You can view the page it was submitted from <a href="https://insideoutcreative.io/flexsystems-form-submission/">here.</a></p></td>
        </tr>
    </tbody>
</table>
<table style="background-color:white;width:100%;max-width:600px;margin:auto;border-left:15px solid #f7f7f7;border-right:15px solid #f7f7f7;">
    <tbody>
        <tr><td style="padding:0 20px;"><h1>Campaign Details</h1></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Project Name: </strong><br>[project-name]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Scheduled Date: </strong><br>[schedule-date]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Scheduled Time: </strong><br>[schedule-time]</p></td></tr>
    <!-- <tr><td style="padding:0 20px;"><p><strong>Designated List/s: </strong><br>[designated-list]</p></td></tr> -->
    <tr><td style="padding:0 20px;"><p><strong>Subject Line: </strong><br>[subject-line]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Preview Text: </strong><br>[preview-text]</p></td></tr>

    <tr><td style="padding:0 20px;"><img src="https://insideoutcreative.io/wp-content/uploads/2020/08/Divider.png" alt="" width="100%" /></td></tr>

    <tr><td style="padding:0 20px;"><h1>Unique Offering</h1></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>File Link Background: </strong><br>[uo-image-1]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>File Link Patch/Product: </strong><br>[uo-image-2]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Headline: </strong><br>[uo-headline]</p></td></tr>
    <!-- <tr><td style="padding:0 20px;"><p><strong>Subhead: </strong><br>[uo-subhead]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Shop Now Link: </strong><br>[uo-shop-now]</p></td></tr> -->

    <tr><td style="padding:0 20px;"><img src="https://insideoutcreative.io/wp-content/uploads/2020/08/Divider.png" alt="" width="100%" /></td></tr>
    
    <tr><td style="padding:0 20px;"><h1>Middle Section Options</h1></td></tr>
    <tr><td style="padding:0 20px;"><h2>Option Selected</h2><br>[section-type]</td></tr>
    <tr><td style="padding:0 20px;"><hr></td></tr>
    <tr><td style="padding:0 20px;"><h3>GIF</h3></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>File Link: </strong><br>[gif-image-link]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Image Text: </strong><br>[gif-image-text]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Shop Now Link: </strong><br>[gif-image-shop-now-link]</p></td></tr>
    <tr><td style="padding:0 20px;"><hr></td></tr>
    <!-- <tr><td style="padding:0 20px;"><h3>Video</h3></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Video Link: </strong><br>[video-link]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Subheader Text: </strong><br>[video-subheader]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Additional Text: </strong><br>[video-additional-text]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Shop Now Link: </strong><br>[video-shop-now-link]</p></td></tr>
    <tr><td style="padding:0 20px;"><hr></td></tr> -->
    <tr><td style="padding:0 20px;"><h3>Bullet Points</h3></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Image Link: </strong><br>[bullet-point-image-link]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Title: </strong><br>[bullet-points-title]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Header: </strong><br>[bullet-points-header]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Content: </strong><br>[bullet-points]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Shop Now Link: </strong><br>[bullet-points-shop-now-link]</p></td></tr>
    <tr><td style="padding:0 20px;"><hr></td></tr>
    <!-- <tr><td style="padding:0 20px;"><h3>Paragraph</h3></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Side Images Top: </strong><br>[paragraph-side-images-top-link]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Side Images Bottom: </strong><br>[paragraph-side-images-bottom-link]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Content: </strong><br>[paragraph-content]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Shop Now Link: </strong><br>[paragraph-shop-now-link]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Title: </strong><br>[bullet-points-title]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Header: </strong><br>[bullet-points-header]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Content: </strong><br>[bullet-points]</p></td></tr> -->

    <tr><td style="padding:0 20px;"><img src="https://insideoutcreative.io/wp-content/uploads/2020/08/Divider.png" alt="" width="100%" /></td></tr>

    <tr><td style="padding:0 20px;"><h1>Promotions</h1></td></tr>
    <tr><td style="padding:0 20px;"><h3>Product Promotion #1</h3></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>File Link: </strong><br>[ppc-image-1]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Copy: </strong><br>[ppc-1]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Additional Information: </strong><br>[ai-1]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Shop Now Link: </strong><br>[ppc-shop-now-1]</p></td></tr>
    <tr><td style="padding:0 20px;"><hr></td></tr>
    <tr><td style="padding:0 20px;"><h3>Product Promotion #2</h3></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>File Link: </strong><br>[ppc-image-2]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Copy: </strong><br>[ppc-2]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Additional Information: </strong><br>[ai-2]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Shop Now Link: </strong><br>[ppc-shop-now-2]</p></td></tr>
    <tr><td style="padding:0 20px;"><hr></td></tr>
    <tr><td style="padding:0 20px;"><h3>Product Promotion #3</h3></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>File Link: </strong><br>[ppc-image-3]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Copy: </strong><br>[ppc-3]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Additional Information: </strong><br>[ai-3]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Shop Now Link: </strong><br>[ppc-shop-now-3]</p></td></tr>
    <tr><td style="padding:0 20px;"><hr></td></tr>
    <!-- <tr><td style="padding:0 20px;"><h3>Product Promotion #4</h3></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>File Link: </strong><br>[ppc-image-4]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Copy: </strong><br>[ppc-4]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Additional Information: </strong><br>[ai-4]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Shop Now Link: </strong><br>[ppc-shop-now-4]</p></td></tr>
    <tr><td style="padding:0 20px;"><hr></td></tr> -->
    <!-- <tr><td style="padding:0 20px;"><h3>Product Promotion #5</h3></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>File Link: </strong><br>[ppc-image-5]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Copy: </strong><br>[ppc-5]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Additional Information: </strong><br>[ai-5]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Shop Now Link: </strong><br>[ppc-shop-now-5]</p></td></tr> -->

    <!-- <tr><td style="padding:0 20px;"><img src="https://insideoutcreative.io/wp-content/uploads/2020/08/Divider.png" alt="" width="100%" /></td></tr>

    <tr><td style="padding:0 20px;"><h1>Exclusive Offer</h1></td></tr>
    <tr><td style="padding:0 20px;"><h3>Exclusive Offer #1</h3></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>File Link: </strong><br>[eo-image-1]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Copy: </strong><br>[eo-1]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Additional Information: </strong><br>[eo-ai-1]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Shop Now Link: </strong><br>[eo-shop-now]</p></td></tr>
    <tr><td style="padding:0 20px;"><hr></td></tr>
    <tr><td style="padding:0 20px;"><h3>Exclusive Offer #2</h3></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>File Link: </strong><br>[eo-image-2]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Copy: </strong><br>[eo-2]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Additional Information: </strong><br>[eo-ai-2]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Shop Now Link: </strong><br>[eo-shop-now-2]</p></td></tr> -->

    <!-- <tr><td style="padding:0 20px;"><img src="https://insideoutcreative.io/wp-content/uploads/2020/08/Divider.png" alt="" width="100%" /></td></tr>

    <tr><td style="padding:0 20px;"><h1>Final Teaser</h1></td></tr>
    <tr><td style="padding:0 20px;"><h3>Final Teaser #1</h3></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>File Link: </strong><br>[ft-image-1]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Copy: </strong><br>[ft-1]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Additional Information: </strong><br>[ft-ai-1]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Shop Now Link: </strong><br>[ft-shop-now]</p></td></tr>
    <tr><td style="padding:0 20px;"><hr></td></tr>
    <tr><td style="padding:0 20px;"><h3>Final Teaser #2</h3></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>File Link: </strong><br>[ft-image-2]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Copy: </strong><br>[ft-2]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Additional Information: </strong><br>[ft-ai-2]</p></td></tr>
    <tr><td style="padding:0 20px;"><p><strong>Shop Now Link: </strong><br>[ft-shop-now-2]</p></td></tr> -->

    <tr><td style="padding:0 20px;"><img src="https://insideoutcreative.io/wp-content/uploads/2020/08/Divider.png" alt="" width="100%" /></td></tr>

    <tr><td style="padding:0 20px;"><h1>Additional Information</h1></td></tr>
    <tr><td style="padding:0 20px;"><p>[additional-information]</p></td></tr>

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