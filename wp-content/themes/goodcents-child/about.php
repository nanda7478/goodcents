 <?php
/*
Template Name: about Template
*/
get_header();?>
<?php $image2 = get_field('banner_image'); ?>
<div class="header-img right-img">
<div class="container">
<?php 
 while ( have_rows('about_content') ) { the_row();
    		if( get_row_layout() == 'text_over_image' ){?>
			    <div class="content">
			    	<?php the_sub_field('text_over_image'); ?>
			    </div>		   		
      	<?php  }} ?>
		
<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
<div class="clr"></div>
 </div>
</div>
<?php
while ( have_posts() ) : the_post();?>
	<?php the_content(); 
endwhile;

if( have_rows('about_content') ){?>
<div class="about">
<?php
    	while ( have_rows('about_content') ) { the_row();
        	if( get_row_layout() == 'text_&_image_section_1' ){?>
			<div class="row image-text"> 
			    <div class="col-sm-5 textarea-content">
                <div class="texts">
			    	<?php the_sub_field('text-11'); ?>
                    </div>
			    </div>

			    <div class="col-sm-7 image-content">
		        	<?php $image2 = get_sub_field('image-11'); ?>
			    	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
                     <div class="texts">
			    	<?php the_sub_field('text-11'); ?>
                    </div>
				</div>
			</div>   		
      	<?php
      	}
      	    if( get_row_layout() == 'text_&_image_section_2' ){?>
			<div class="row image-text">  
			     <div class="col-sm-7 image-content tops">
			    <div class="texts">
		        	<?php the_sub_field('text-21'); ?>
				</div>
                	<?php $image3 = get_sub_field('image-21'); ?>
			    	<img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
			    </div>

			     <div class="col-sm-5 textarea-content text-right">
                <div class="texts">
		        	<?php the_sub_field('text-21'); ?>
				</div>
                </div>
			</div>   
		<?php
	}
			if( get_row_layout() == 'text' ){?>
			<div class="container only-text">
			    <div class="content">
			    	<?php the_sub_field('text-41'); ?>
			    </div>
			</div>   
		<?php
		}
			if( get_row_layout() == 'text_&_image_section_3' ){?>
            			    	<?php $image3 = get_sub_field('image-31'); ?>
 <div class="text-bg" style="background-image:url(<?php echo $image3['url']; ?>);">
  			<div class="container only-text">
			    <div class="content">
		        	<?php the_sub_field('text_start_putting'); ?>
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
<div class="row"><h4>Testimonials</h4>
	<?php echo do_shortcode( '[show_testimonials]' );?>
</div>
</div>
<?php get_footer(); ?> 