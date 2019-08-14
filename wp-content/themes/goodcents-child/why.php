<?php
/*
Template Name: why Template 
*/
get_header();?>
<?php $image2 = get_field('banner_image'); ?>
<div class="header-img" style="background:url(<?php echo $image2['url']; ?>);">
<div class="container">
  
  <?php
     // loop through the rows of data
    	while ( have_rows('why_content') ) { the_row();
    		if( get_row_layout() == 'text_over_image' ){?>
			<div class="row">
			    <div class="col-sm-12 textarea-content">
			    	<?php the_sub_field('text_over_image'); ?>
			    </div>
			</div>   		
      	<?php }} ?> 
</div> </div>
<?php
while ( have_posts() ) : the_post();?>
	<?php the_content(); 
endwhile;

if( have_rows('why_content') ){?>
<div class="why">
<?php
     // loop through the rows of data
    	while ( have_rows('why_content') ) { the_row();
    		if( get_row_layout() == 'text-w1' ){?>
            <div class="container why-1">
			<div class="row">
			    <div class="col-sm-12">
			    	<?php the_sub_field('text-w1'); ?>
			    </div>
			</div>   
            </div>		
      	<?php
      	}
        	if( get_row_layout() == 'text_&_image-w2' ){?>
			<div class="why-2 row">
			    <div class="col-sm-7 text">
			    	<?php the_sub_field('text-21'); ?>
			    </div>

			    <div class="col-sm-5 image">
		        	<?php $image2 = get_sub_field('image-21'); ?>
			    	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
				</div>
			</div>   		
      	<?php
      	}
      	if( get_row_layout() == 'text-w3' ){?>
			<div class="easy">
            
			    <div class="text">
			    	<?php the_sub_field('text-w3'); ?>
			    </div>
			</div>   		
      	<?php
      	}
      	if( get_row_layout() == 'text_&_image-w3' ){?>
			<div class="easy-1 steps row">
			    <div class="col-sm-2 numbers">
<span>                1 </span>
			    <?php $image2 = get_sub_field('image_30'); ?>
			    	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
			    </div>
			    <div class="col-sm-6 text">
                
                <div class="tab-show images">
			    	<?php $image2 = get_sub_field('image-31'); ?>
 	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />  
 
			    </div>
                
			    	<?php the_sub_field('text-31'); ?>
			    </div>
			    <div class="col-sm-4 images">
			    	<?php $image2 = get_sub_field('image-31'); ?>
 	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />  
 
			    </div>
			</div>   		
      	<?php
      	}
      	 	if( get_row_layout() == 'text_&_image-w4' ){?>
			<div class="easy-2 steps row">
			        <div class="col-sm-2 numbers">
<span>   2 </span>
			    <?php $image2 = get_sub_field('image_40'); ?>
			    	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
			    </div>
			    <div class="col-sm-6 text">
                
                <div class="tab-show images">
			    	<?php $image2 = get_sub_field('image-41'); ?>
			    	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
			    </div>
                
			    	<?php the_sub_field('text-41'); ?>
			    </div>
			      <div class="col-sm-4 images">
			    	<?php $image2 = get_sub_field('image-41'); ?>
			    	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
			    </div>
			</div>   		
      	<?php
      	}
      	 	if( get_row_layout() == 'text_&_image-w5' ){?>
			<div class="easy-3 steps row">
			        <div class="col-sm-2 numbers">
<span>  3 </span>
			    <?php $image2 = get_sub_field('image_50'); ?>
			    	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
			    </div>
			   <div class="col-sm-6 text">
                <div class="tab-show images">
			    	<?php $image2 = get_sub_field('image-51'); ?>
			    	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
			    </div>
                
			    	<?php the_sub_field('text-51'); ?>
			    </div>
			       <div class="col-sm-4 images">
			    	<?php $image2 = get_sub_field('image-51'); ?>
			    	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
			    </div>
			</div>   		
      	<?php
      	}
      	
      	if( get_row_layout() == 'text&_text-w6' ){?>
			<div class="container sma-cans">
    		<div class="row home-block">
			    <div class="col-sm-6">
                <div class="lefttext-content">
			    	<?php the_sub_field('text-w61'); ?>
			       </div>
</div>
			    <div class="col-sm-6">
                <div class="righttext-content">
		        	<?php the_sub_field('text-w62'); ?>
				</div>
			</div>   
            </div>
            </div>
             
             
<?php 
          }
      	   

      }
// no layouts found ?>
</div>
<?php
}?> 
<div class="testimonials container">
<div class="row">
	<h4>Testimonials</h4>
	<?php echo do_shortcode( '[show_testimonials]' );?>
</div>
</div>
<?php

 get_footer();

?>


