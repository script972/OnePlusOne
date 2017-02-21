<?php 
/*
Template Name: contactUs
*/  
get_header();

?>
<?php  the_post(); ?>

<div class="content other">
	<div class="container">
		<div class="row">
			<div class="titlePage"><h1><?php the_title();?></h1><br> <img src="<?php bloginfo(template_url);?>/img/home/botLineWhite.png" alt="Divider" class="dividerTitle dividerTitleContactUs"> 
			</div>
		</div>
	<div class="contactUsLeft col-md-6">
		<div class="row">
			<div class="contactData">
				<h6><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h6>
				 <a href="<?php the_field("link_map"); ?>"> <p> <?php the_field("address"); ?> </p></a>
				<h6> <i class="fa fa-phone" aria-hidden="true"></i> Phone</h6>
				<a href="tel:<?php the_field("phone"); ?>"><p><?php the_field("phone"); ?></p></a>
				<h6> <i class="fa fa-envelope" aria-hidden="true"></i> Email</h6>
				<a href="mailto:<?php the_field("email"); ?>"><p><?php the_field("email"); ?></p></a>

				
				
			<hr>
		
			</div>
		</div>



		<div class="row">
			<div class="contactUS ">
			<h6>Request a consultation</h6>
			<?php echo do_shortcode('[contact-form-7 id="207" title="Contact Us"]'); ?>
			<!-- <form action="">
				<input type="text" name="firstName">
				<input type="text" name="lastName">
				<input type="text" name="phoneNumber">
				<input type="text" name="emailAddress">
				<textarea name="message" class="message" ></textarea>
				<input type="submit">
			</form> -->
			</div>
		</div>
	</div>
	<div class="maps col-md-6">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1504.1552322344385!2d-73.54328863470784!3d41.06220581355944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2a1ec73089f5b%3A0xcd1278245e28d758!2s1372+Summer+St+%23207%2C+Stamford%2C+CT+06905%2C+USA!5e0!3m2!1sen!2sua!4v1484867725685"  frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

			

	</div>
</div>



<?php  $slider=new WP_Query(array ('pagename'=>'about'));  ?>
                    <?php $slider->the_post();?>
<div class="content other contentFooter">
	<div class="container">
		<div class="row">
			<div class="titlePage"><h1><?php the_title();?></h1><br> <img src="<?php bloginfo(template_url);?>/img/home/botLineWhite.png" alt="Divider" class="dividerTitle dividerTitleAbout"> 
			</div>
		</div>
		<div class="row">
			<div class="contentText">
				<?php  the_content(); ?>
			</div>
		</div>
		<div class="row">
			<div class="learnBackground"> <a href="<?php the_permalink(); ?>"> <div class="learnMore">Learn more</div> </a> </div>
		</div>


	</div>
</div>




<?php get_footer(); ?>
