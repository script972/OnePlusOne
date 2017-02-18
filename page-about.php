<?php 
/*Template Name: about*/  
get_header();
?>
<?php  the_post(); ?>
<div class="content other">
	<div class="container">
		<div class="row">
			<div class="titlePage"><h1><?php the_title();?></h1><br> <img src="<?php bloginfo(template_url);?>/img/home/botLineWhite.png" alt="Divider" class="dividerTitle"> 
			</div>
		</div>
		<div class="row">
			<div class="contentText">
				<?php  the_content(); ?>
			</div>
		</div>
		<div class="row">
			<div class="aboutSlider">
			<?php  $slider=new WP_Query(array ('post_type'=>'AboutSlider'));  ?>
                    <?php  if ($slider->have_posts()): while($slider->have_posts()): $slider->the_post();?>
				<div class="item"><?php the_post_thumbnail(); ?></div>
				
				 <?php endwhile; ?>
                   <?php else: ?>
                   	<div class="itemBlock">
                    <p> slider</p>
                    </div>
                   <?php endif; ?>
			</div>
		</div>
		<div class="row">
			<?php  $slider=new WP_Query(array ('post_type'=>'AboutUs'));  ?>
                    <?php  if ($slider->have_posts()): while($slider->have_posts()): $slider->the_post();?>

            <div class="qualityUs">
				<div class="photo">
				<?php the_post_thumbnail();?>
				</div>
				<h2><?php the_title();?></h2>
				<div class="content"><?php the_content(); ?></div>
			</div>

                    <?php endwhile; ?>
                   <?php else: ?>
                    <p> Services</p>
                   <?php endif; ?>


		</div>

<?php  $slider=new WP_Query(array ('pagename'=>'services'));  ?>
                    <?php $slider->the_post();?>

		<div class="row">
			<div class="titlePage"><h1><?php the_title();?></h1><br> <img src="<?php bloginfo(template_url);?>/img/home/botLineWhite.png" alt="Divider" class="dividerTitle"> 
			</div>
		</div>
		<div class="row">
			<div class="contentText">
				<?php  the_content(); ?>
			</div>
		</div>
		<div class="row">
		<?php  $slider=new WP_Query(array ('post_type'=>'Services'));  ?>
                    <?php  if ($slider->have_posts()): while($slider->have_posts()): $slider->the_post();?>

                    <div class="projectFront">
                 <div class="divWithLine">
                 <div class="topLine"></div>
				<div class="image">
					
					<?php the_post_thumbnail();?>
			
				</div>
				</div>


				<div class="title">
					<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p>
					<p class="color"><?php the_field("color_title"); ?></p></a>
					
					<img src="<?php  bloginfo(template_url);?>/img/home/textDivider.png" alt="divider Title" class="dividerTitle">
				</div>
				<div class="content">
					 <?php
					 
					 echo get_the_excerpt();
					 ?>
				</div>
				
			</div>                   
                    <?php endwhile; ?>
                   <?php else: ?>
                    <p> Services</p>
                   <?php endif; ?>
			</div>
			<div class="row">
		<div class="learnBackground"> <a href="/services/"> <div class="learnMore">Learn more</div> </a> </div>
	</div>

	</div>
</div>


<?php  $slider=new WP_Query(array ('pagename'=>'contactUs'));  ?>
                    <?php $slider->the_post();?>

<div class="content other contentFooter">
	<div class="container">
		<div class="row">
			<div class="titlePage"><h1><?php the_title();?></h1><br> <img src="<?php bloginfo(template_url);?>/img/home/botLineWhite.png" alt="Divider" class="dividerTitle"> 
			</div>
		</div>
		<div class="row">
			<div class="contactUS col-md-6">
			<h6>Request a consultation</h6>
			<?php echo do_shortcode('[contact-form-7 id="207" title="Contact Us"]'); ?>
	
			</div>

			<div class="contactData col-md-6">
				<h6><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h6>
				 <a href="<?php the_field("link_map"); ?>"> <p> <?php the_field("address"); ?> </p></a>
				<h6> <i class="fa fa-phone" aria-hidden="true"></i> Phone</h6>
				<a href="tel:<?php the_field("phone"); ?>"><p><?php the_field("phone"); ?></p></a>
				<h6> <i class="fa fa-envelope" aria-hidden="true"></i> Email</h6>
				<a href="mailto:<?php the_field("email"); ?>"><p><?php the_field("email"); ?></p></a>


			</div>

		</div>
		<div class="row">
			
		</div>
	</div>
</div>




<?php get_footer(); ?>







