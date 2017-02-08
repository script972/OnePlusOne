<?php 
get_header();
?>
<?php  the_post(); ?>
<div class="content other">
    <div class="container">
        <div class="row">
            <div class="titlePage"><h1><?php the_title();?> <?php the_field("color_title"); ?></h1><br> <img src="<?php bloginfo(template_url);?>/img/home/botLineWhite.png" alt="Divider" class="dividerTitle"> 
            </div>
        </div>
        <div class="row">
            <div class="contentText">
                <?php  the_content(); ?>
            </div>
        </div>
        <div class="row">
            <div class="titlePage"><h1> TALK WITH AN EXPERT</h1><br> <img src="<?php bloginfo(template_url);?>/img/home/botLineWhite.png" alt="Divider" class="dividerTitle"> 
            </div>
        </div>
        <div class="row">
            <div class="footerExpert expertSingle">
            
                <p class="subExpert">Upgrade your home with quality windows and doors.</p>
                    <form action="">
                        <input type="text" name="" class="postCode"> <br>
                        <input type="submit" value="Free in-home quote" class="submitPostCode">
                        <div class="arrRight"></div>
                    </form>
                </div>
        </div>
    </div>
</div>


<?php  $slider=new WP_Query(array ('pagename'=>'Testimonials'));  ?>
                    <?php $slider->the_post();?>

<div class="content other contentFooter">
    <div class="container">
        <div class="row">
            <div class="titlePage"><h1><?php the_title();?> </h1><br> <img src="<?php bloginfo(template_url);?>/img/home/botLineWhite.png" alt="Divider" class="dividerTitle"> 
            </div>
        </div>
        
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




<?php get_footer(); ?>







