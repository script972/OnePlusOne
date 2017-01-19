<?php 
/*
Template Name: services
*/  
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
				

			</div>
		</div>
	

	</div>
</div>



<?php  $slider=new WP_Query(array ('pagename'=>'testimonials'));  ?>
                    <?php $slider->the_post();?>
<div class="content other contentFooter">
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
			<div class="learnBackground"> <a href="<?php the_permalink(); ?>"> <div class="learnMore">Learn more</div> </a> </div>
		</div>


	</div>
</div>




<?php get_footer(); ?>
