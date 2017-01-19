
<?php get_header();  ?>
<div class="banerBack">
	<div class="baner">
		<div class="left">
			<div class="triangel"></div>
			<p>$99 + $200</p>
		</div>
		<div class="arrGetBg">
			<div class="arrGet">Get started now</div>
			<div class="arrRight"></div>
			</div>
		<div class="right">
			<p class="top1">Take an additional</p>
			<p class="top2">Exclusive</p>
			<div class="top3">Sale</div>
			<div class="top4">Instalation per window on qualifying projects</div>
			<div class="offer">See offer <span>details</span></div>
		</div>
	</div>
</div>
<div class="wrap">
	<div class="container">
		<div class="row">
			<div class="siderDesktop">
			<div class="colorLine"></div>
			<div class="uncolorLine"></div>
				<div class="namedSlider">
					<p class="latest">latest</p>
					<p class="project">project</p>
				</div>
				<div class="contentDesktopSlider">

				<?php  $slider=new WP_Query(array ('post_type'=>'OurProjects'));  ?>
                    <?php  if ($slider->have_posts()): while($slider->have_posts()): $slider->the_post();?>

                    	<div class="itemBlock">
						<div class="photo"> <?php the_post_thumbnail();?> </div>
						<div class="content">
						<h3>Modern House, Washington</h3>
						<p>Lorem Ipsum is simply dummy text  of the printing and typesetting...</p>
						</div>
					</div>
                  <?php endwhile; ?>
                   <?php else: ?>
                   	<div class="itemBlock">
                    <p> slider</p>
                    </div>
                   <?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="ownerSay">
				<div class="headOwner">
					<p class="color">Alex</p>
					<p>Shpylovyi</p>
				</div>
				<div class="contentOwner">
					<div class="whoIt">Owner</div>
					<div class="photo"><img src="<?php bloginfo(template_url);?>/img/home/post0.png" alt=""></div>
					<p>Lorem lpsum is is simply dummy text  of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy...</p>
				</div>
				<div class="footerExpert">
				<img src="<?php bloginfo(template_url);?>/img/home/manager-divider.png" class="divid" alt="devider">
				<p class="talkWithExpert">
					TALK WITH AN <span class="color" >EXPERT</span>
				</p>
				<p class="subExpert">Upgrade your with quality windows and doors.</p>
					<form action="">
						<input type="text" name="" class="postCode">
						<input type="submit" value="Free in-home quote" class="submitPostCode">
						<div class="arrRight"></div>
					</form>
				</div>
			</div>





			<?php  $slider=new WP_Query(array ('post_type'=>'Services'));  ?>
                    <?php  if ($slider->have_posts()): while($slider->have_posts()): $slider->the_post();?>


                 <div class="projectFront">
				<div class="image">
					<div class="topLine"></div>
					<?php the_post_thumbnail();?>
					<a href="<?php the_permalink(); ?>">
					<div class="backgroundPlus">
					<img src="<?php  bloginfo(template_url);?>/img/home/plus.png" alt="" class="pls">
					<!-- <div class="backpls"></div> -->
					</div> </a>
				</div>
				<div class="title">
					<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p>
					<p class="color"><?php the_field("color_title"); ?></p></a>
					
					<img src="<?php  bloginfo(template_url);?>/img/home/textDivider.png" alt="divider Title" class="dividerTitle">
				</div>
				<div class="content">
					 <?php
					 $string = substr(get_the_excerpt(), 0, 180);
					 echo $string;
					 ?>
				</div>
				<div class="more"><a href="<?php the_permalink(); ?>"><h4>Learn more</h4></a></div>
			</div>                   
                    <?php endwhile; ?>
                   <?php else: ?>
                    <p> Services</p>
                   <?php endif; ?>












	














			<div class="footerExpert footerExpertM">
				<img src="<?php bloginfo(template_url);?>/img/home/manager-divider.png" class="divid" alt="devider">
				<p class="talkWithExpert">
					TALK WITH AN <span class="color" >EXPERT</span>
				</p>
				<p class="subExpert">Upgrade your with quality windows and doors.</p>
					<form action="">
						<input type="text" name="" placeholder="50219" class="postCode">
						<input type="submit" value="Free in-home quote" class="submitPostCode">
						<div class="arrRight"></div>
					</form>
			</div>
			<div class="sliderMob">
				<div class="namedSlider">
					<p class="latest">latest</p>
					<p class="project">project</p>
				</div>
				<div class="itemPhoto"><img src="<?php bloginfo(template_url);?>/img/home/mob.png" alt="">	</div>
				<div class="itemPhoto"><img src="<?php bloginfo(template_url);?>/img/home/post0.png" alt="">	</div>
				<div class="itemPhoto"><img src="<?php bloginfo(template_url);?>/img/home/post2.png" alt="">	</div>
				<div class="itemPhoto"><img src="<?php bloginfo(template_url);?>/img/home/post3.png" alt="">	</div>
							
			</div>
		</div>
	</div>
</div>



<?php get_footer(); ?>
