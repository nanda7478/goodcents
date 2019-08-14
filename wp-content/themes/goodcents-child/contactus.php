<?php
/*
Template Name: contact us Template 
*/
get_header();?>

<div class="header-img">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 textarea-content">
        <h2> Contact Us </h2>
        <p> Have any questions? Let us know! </p>
      </div>
    </div>
  </div>
</div>

<div class="container contact-form">
<?php echo do_shortcode( '[contact-form-7 id="116" title="Contact form 1"]' );?>
</div>
<?php  get_footer(); ?>
