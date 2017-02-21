<?php 
/*
Template Name: our projects
*/  
get_header();

?>
<?php  the_post(); ?>

<div class="content other">
	<div class="container">
		<div class="row">
			<div class="titlePage"><h1><?php the_title();?></h1><br> <img src="<?php bloginfo(template_url);?>/img/home/botLineWhite.png" alt="Divider" class="dividerTitle dividerTitleOurProjects"> 
			</div>
		</div>
		<div class="row">



		<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="#tab1">All</a></li>
        <li><a href="#tab2">Windows&Doors</a></li>
        <li><a href="#tab3">Hi-end finish work</a></li>
        <li><a href="#tab4">commercial project</a></li>
    </ul>
 
    <div class="tab-content">
        <div id="tab1" class="tab active">
        <div class="row rowZ">
                <?php  $slider=new WP_Query(array ('post_type'=>'OurProjects', 'posts_per_page'=>-1));  ?>
        <?php  if ($slider->have_posts()): while($slider->have_posts()): $slider->the_post();?>
         
        <div class="slide-box"> 

            <?php the_post_thumbnail(); ?>
              <div class="hide-in-box"><a href="<?php the_permalink(); ?>"> <h2><?php echo substr(get_the_title(), 0,30);?></h2>
                   <?php the_excerpt();?></a>
                </div>
            </div>

        
        <?php endwhile; ?>
       <?php else: ?>
        <h1> HERE MAST BE SLIDER</h1>
       <?php endif; ?>
          </div>
          <div class="row rowZ">


          <div  class="learnBackground" > <a id='show-moreFirst'  class="link-more" > <div class=" learn-more learnMore ">Show more</div> </a> </div>

          </div>
        </div>
 
        <div id="tab2" class="tab">
          <div class="row rowZ">
             <?php  $slider=new WP_Query(array ('post_type'=>'OurProjects',  'category_name' => 'Windows&Doors', 'posts_per_page'=>-1));  ?>
        <?php  if ($slider->have_posts()): while($slider->have_posts()): $slider->the_post();?>
         

        <div class="slide-box"> 
            <?php the_post_thumbnail(); ?>
              <div class="hide-in-box"><h2><?php echo substr(get_the_title(), 0,30);?></h2>
                    <?php  the_content(); ?>
                </div>
            </div>

        
        <?php endwhile; ?>
       <?php else: ?>
        <h1>  No projects such type</h1>
       <?php endif; ?>
       </div>
       <div class="row rowZ">
<!--          <input type='button' id='show-moreSecond' value='Show more' /> -->

         <div class="learnBackground" > <a id='show-moreSecond'  class="link-more" > <div class=" learn-more learnMore ">Show more</div> </a> </div>

       </div>
        </div>
 
        <div id="tab3" class="tab">
        <div class="row rowZ">
           <?php  $slider=new WP_Query(array ('post_type'=>'OurProjects',  'category_name' => 'HI-End Finish Work', 'posts_per_page'=>-1));  ?>
        <?php  if ($slider->have_posts()): while($slider->have_posts()): $slider->the_post();?>
         

        <div class="slide-box"> 
            <?php the_post_thumbnail(); ?>
              <div class="hide-in-box"><h2><?php echo substr(get_the_title(), 0,30);?></h2>
                     <?php the_excerpt();?>
                </div>
            </div>

        
        <?php endwhile; ?>
       <?php else: ?>
        <h1>  No projects such type</h1>
       <?php endif; ?>
       </div>
       <div class="row rowZ">
        <!--  <input type='button' id='show-moreThird' value='Show more' /> -->
         
          <div  class="learnBackground" > <a id='show-moreThird'  class="link-more" > <div class=" learn-more learnMore ">Show more</div> </a> </div>


       </div>
        </div>
 
        <div id="tab4" class="tab">
        <div class="row rowZ">
            <?php  $slider=new WP_Query(array ('post_type'=>'OurProjects','posts_per_page'=>-1 ,  'category_name' => 'Commercial project'));  ?>
        <?php  if ($slider->have_posts()): while($slider->have_posts()): $slider->the_post();?>
         

        <div class="slide-box"> 
            <?php the_post_thumbnail(); ?>
              <div class="hide-in-box"><h2><?php echo substr(get_the_title(), 0,30);?></h2>
                    <?php  the_excerpt(); ?>
                </div>
            </div>

        
        <?php endwhile; ?>
       <?php else: ?>
        <h1>  No projects such type</h1>
       <?php endif; ?>
        </div>
          <div class="row rowZ">
            <!-- <input type='button' id='show-moreFourth' value='Show more' /> -->
            
             <div class="learnBackground" > <a id='show-moreFourth'  class="link-more" > <div class=" learn-more learnMore ">Show more</div> </a> </div>

          </div>
        </div>
    </div>
</div>

		</div>
	

	</div>
</div>



<?php  $slider=new WP_Query(array ('pagename'=>'testimonials'));  ?>
                    <?php $slider->the_post();?>
<div class="content other contentFooter">
	<div class="container">
		<div class="row">
			<div class="titlePage"><h1><?php the_title();?></h1><br> <img src="<?php bloginfo(template_url);?>/img/home/botLineWhite.png" alt="Divider" class="dividerTitle dividerTitleTestimonials"> 
			</div>
		</div>
		<div class="row">
			<div class="contentText">
				<?php  the_content(); ?>
			</div>
		</div>
		<div class="row">	



  <div class="content-testimonials">
  <div class="lineWhiteBackgroundThree"></div>
    <div class="container">
    <div class="row">
   <div id="testimonials-slider" class="testimonials-slider">

     <?php  $slider=new WP_Query(array ('post_type'=>'testimonials', 'posts_per_page'=>-1));  ?>
      <?php  if ($slider->have_posts()): while($slider->have_posts()): $slider->the_post();?>
        <div class="testimonial">
        <div class="imgRound">   <?php the_post_thumbnail( ); ?></div>
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
        </div>
    

        <?php endwhile; ?>
        <?php else: ?>
        <p> HERE MAST BE SLIDER</p>
        <?php endif; ?>
    </div>

  </div>

    </div>
  </div>

		</div>
		<div class="row">
			<div class="learnBackground"> <a href="/testimonials/"> <div class="learnMore">Learn more</div> </a> </div>
		</div>


	</div>
</div>




<?php get_footer(); ?>
