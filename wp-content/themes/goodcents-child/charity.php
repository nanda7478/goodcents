 
<?php
/*
Template Name: charity Template 
*/
get_header();
get_header();?>
<?php $image2 = get_field('banner_image'); ?>
<div class="header-img" style="background-image:url(<?php echo $image2['url']; ?>);">
<div class="container">
 <?php
 	while ( have_rows('charity_content') ) { the_row();
    		if( get_row_layout() == 'text_over_image' ){?>
			<div class="row">
			    <div class="col-sm-12 textarea-content">
			    	<?php the_sub_field('text_over_image'); ?>
			    </div>
			</div>   		
      	<?php }} ?>
</div>
</div>
<?php
while ( have_posts() ) : 
	the_post();?>
	<?php the_content(); 
endwhile;
if( have_rows('charity_content') ){?>
<div class="charity">
<?php
     // loop through the rows of data
    	while ( have_rows('charity_content') ) { the_row();
    		if( get_row_layout() == 'text_over_image' ){?>			    		
      	<?php }
    		if( get_row_layout() == 'text-c1' ){?>
			<div class="donations">
			   <div class="container">
			    	<?php the_sub_field('text-c1'); ?>
			    </div>
			</div>   		
      	<?php
      	}
      	if( get_row_layout() == 'text-c2' ){?>
			<div class="charities-block">
			    <div class="container">
			    	<?php the_sub_field('text-c2'); ?>
			    </div>
			</div>   		
      	<?php
      	}
      	if( get_row_layout() == 'text-c3' ){?>
			<div class="charities-2-block">
               <div class="container">
               <div class="row">
			    <div class="col-sm-6">
                <div class="text">
			    	<?php the_sub_field('text-c31'); ?>
                    </div>
			    </div>
			    <div class="col-sm-6">
                <div class="text">
			    	<?php the_sub_field('text-c32'); ?>
                    </div>
			    </div>
                </div>
			</div>   		
            </div>
      	<?php
      	}
      }?>
  
      <div class="brand-logo container" id="brandlogos1">      
      <h3><?php the_field('charities_and_organizations_content');?></h3>
			<div class="logo-slider">
			<?php while( have_rows('property_gallery') ): the_row(); 
			// vars
			$link = get_sub_field('link');
			$image = get_sub_field('image');
			?><a href="<?php echo $link ;?>">
			<div class="slide">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
			</div>
			</a>
		<?php endwhile; ?>
		</div>
	</div>
      <?php
      while ( have_rows('charity_content') ) { the_row();
      	if( get_row_layout() == 'text-c4' ){?>
			<div class="get-start container text-center">
 			    	<?php the_sub_field('text-c4'); ?>
 			</div>   		
      	<?php
      	}
       if( get_row_layout() == 'text_&_image_section_5' ){?>
			<div class="container asfsa">
            <div class="row">
			<div class="col-sm-6 textarea-content">
			    	<?php $image2 = get_sub_field('image-51'); ?>
			    	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
			    </div>
			    
			<div class="col-sm-6 image-content">
		        	<?php the_sub_field('text-51'); ?>
				</div>
			    </div>
			</div>   
		<?php
	}
      	    if( get_row_layout() == 'text_&_image_section_6' ){?>
            <div class="promot clr">
			<div class="container">
                  <div class="row">
			<div class="col-sm-6 image-content">
		        	<?php the_sub_field('text-61'); ?>
				</div>
			    <div class="col-sm-6 textarea-content">
			    	<?php $image3 = get_sub_field('image-61'); ?>
			    	<img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
			    </div>
			    </div>
                </div>
			</div>   
		<?php
	}
			if( get_row_layout() == 'text_&_image_section_7' ){?>
             <div class="gamify clr">
			<div class="container">
            <div class="row">
			<div class="col-sm-6 image-content">
		        	<?php $image4 = get_sub_field('image-71'); ?>
			    	<img src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>" />
				</div>
			    <div class="col-sm-6 textarea-content">
			    	<?php the_sub_field('text-71'); ?>
			    </div>
</div>
			    </div>
			</div>   
		<?php
		}
			
		if( get_row_layout() == 'text_&_image_section_8' ){?>
			   <div class="garnted clr">
			<div class="container">
            <div class="row">
			<div class="col-sm-6 image-content">
		        	<?php the_sub_field('text-81'); ?>
				</div>
			    <div class="col-sm-6 textarea-content">
			    	<?php $image3 = get_sub_field('image-81'); ?>
			    	<img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
			    </div>
			    </div>
                </div>
			</div>   
		<?php
	}
	if( get_row_layout() == 'text-c9' ){?>
<div class="gaming clr">
			<div class="container" id="partners">
			    <div class="textarea-content">
			    	<?php the_sub_field('text-c9'); ?>
			    </div>
			</div>   	
            </div>	
      	<?php
      	}
      	if( get_row_layout() == 'text-c10' ){?>
			<div class="god-cent text-center">
			    <div class="container">
			    	<?php the_sub_field('text-c10'); ?>
			    </div>
			</div>   		
      	<?php
      	}

      }
// no layouts found ?>
</div>
<?php }
 get_footer(); ?>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.8.0/slick.css"/>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
 <script src="<?php echo site_url(); ?>/wp-content/themes/goodcents-child/slick.js"></script>
<script type="text/javascript">
    $(document).ready(function(){   
   $('.logo-slider').slick({
  dots: false,
   autoplay: true,
  infinite: true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1100,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint:767,
      settings: {
        slidesToShow: 2,
        slidesToScroll:1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    
  ]
});
 });
</script>


<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".link a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

$('html, body').animate({ scrollTop: $(hash).offset().top - 120 }, 'slow');
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;

    } // End if
  });
});
</script>

