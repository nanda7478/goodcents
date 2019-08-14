  
<?php
/*
Template Name: Hom1 Template 
*/
get_header();?>

<?php
while ( have_posts() ) : 
	the_post();?>
	<?php the_content(); 
endwhile;

if( have_rows('home_content') ){?>

<div class="home-content">
<?php
     // loop through the rows of data
    	while ( have_rows('home_content') ) { the_row();
    		if(get_row_layout() == 'banner_txt' ){
    			$text1 =  get_sub_field('banner_txt');
    			$text2 =  get_sub_field('banner_txt2');
    		}  
    		if( get_row_layout() == 'text_over_image' ){?>
			<div class="banner-text">
            <?php $image2 = get_field('banner_image'); ?>
 
				<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
			    <div class="content">
			    	<div id="typed-heading-custome"></div> 	

			    	<?php the_sub_field('text_over_image'); ?>
                
			    	

			    </div>
			</div>   		
      	<?php
      	} } ?>
      

 <div class="brand-logo container" id="brandlogos1">

<h3><?php the_field('time_well_spent');?></h3>

<div class="logo-slider">

	<?php while( have_rows('property_gallery') ): the_row(); 

		// vars
		$link = get_sub_field('link');
		$image = get_sub_field('image');


		?>
		<a href="<?php echo $link ;?>">
		<div class="slide">

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

		</div>
		</a>

	<?php endwhile; ?>

	</div>
</div>


<?php //endif; ?>

<?php while ( have_rows('home_content') ) { the_row();
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
			if( get_row_layout() == 'text_&_image_section_3' ){?>
			<div class="row image-text">
			    <div class="col-sm-5 textarea-content">
                <div class="texts">
			    	<?php the_sub_field('text-31'); ?>
			    </div>
</div>
			    <div class="col-sm-7 image-content">
		        	<?php $image4 = get_sub_field('image-31'); ?>
			    	<img src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>" />
                     <div class="texts">
			    	<?php the_sub_field('text-31'); ?>
			    </div>                
				</div>
			</div>   
		<?php
		}
			if( get_row_layout() == 'text&_text' ){?>
	<div class="container sma-cans">
    		<div class="row home-block">
			    <div class="col-lg-6 col-sm-12">
                <div class="lefttext-content">
                			    	<?php the_sub_field('text-41'); ?>
			    </div>
</div>
			    <div class="col-lg-6 col-sm-12">
                <div class="righttext-content">
		        	<?php the_sub_field('text-42'); ?>
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
 <?php get_footer();
?>
<div id="typed-content-1" style="display: none;" ><?php echo  $text1; ?></div>
<div id="typed-content-2" style="display: none;" ><?php echo  $text2; ?></div>

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

<script src="<?php echo site_url(); ?>/wp-content/themes/goodcents-child/typed.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".links a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      	//alert(hash);
      	console.log(hash);
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      	$('html, body').animate({ scrollTop: $(hash).offset().top - 120 }, 'slow');
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
    } // End if
  });
});
</script>
 
 <script src="<?php echo site_url(); ?>/wp-content/themes/goodcents-child/slick.js"></script>
 <link href="<?php echo site_url(); ?>/wp-content/themes/goodcents-child/jquery.simpleTicker.css" rel="stylesheet">
<script src="<?php echo site_url(); ?>/wp-content/themes/goodcents-child/jquery.min.js"></script>
<script src="<?php echo site_url(); ?>/wp-content/themes/goodcents-child/jquery.simpleTicker.js"></script>


<script type="text/javascript">

	$(document).ready(function(e){
	 var 	$text1 = $('#typed-content-1').html();
	 var	$text2 = $('#typed-content-2').html();
	 var  $typedLi1  = (parseInt($($text1).find("li").length) * 3000);
	 var  $typedLi2  = (parseInt($($text2).find("li").length) * 3000);

    type_1_response($typedLi1 , $typedLi2 , $text1 , $text2);
	function type_1_response($typedLi1 , $typedLi2 , $text1 , $text2){
		$('#typed-heading-custome').html($text1);
		$.simpleTicker($("#typed-key-1"),{'effectType':'roll'});		
		setTimeout(function() {
    	  type_2_response($typedLi1 , $typedLi2 , $text1 , $text2 );	
        }, $typedLi1);
	}
	function type_2_response($typedLi1 , $typedLi2 , $text1 , $text2){
		$('#typed-heading-custome').html($text2);
		$.simpleTicker($("#typed-key-2"),{'effectType':'roll'});
		setTimeout(function() {
          type_1_response($typedLi1 , $typedLi2, $text1 , $text2);	
        }, $typedLi2);
	} 	
	  
	});
</script>