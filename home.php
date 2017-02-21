
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
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
  <div class="row">
    <span class="close">x</span>

    <div class="modalTitle"><h2> Your free </h2>
    <h2 class="color"> Consultation</h2>
    <p>Please provide the following information. A local Pella representative will contact you soon.</p> <h6 class="colorRequired">* - Required fuild </h6></div></div>
    

<!-- 
[select State "Alabama" "Alaska" "American Samoa" "Arizona" "Arkansas" "California" "Colorado" "Connecticut" "Delaware" "District of Columbia" "Florida" "Georgia" "Guam" "Hawaii" "Idaho" "Illinois" "Indiana" "Iowa" "Kansas" "Kentucky" "Louisiana" "Maine" "Maryland" "Massachusetts" "Michigan" "Minnesota" "Mississippi" "Missouri" "Montana" "Nebraska" "Nevada" "New Hampshire" "New Jersey" "New Mexico" "New York" "North Carolina" "North Dakota" "Northern Marianas Islands" "Ohio" "Oklahoma" "Oregon" "Pennsylvania" "Puerto Rico" "Rhode Island" "South Carolina" "South Dakota" "Tennessee" "Texas" "Utah" "Vermont" "Virginia" "Virgin Islands" "Washington" "West Virginia" "Wisconsin" "Wyoming"]
<label> Postal code   [text* address class:PostalCode] </lable>
<label>Phone [text* phone] </label>
<label>Email [text* email] </label>
</div>
<label class="setTimeDataLabel">
   Preferred Number 
   <input type="text" name="PreferredNumberFirst" class="setTimeData">- 
   <input type="text" name="PreferredNumberSecond" class="setTimeData">- 
   <input type="text" name="PreferredNumberData" class="setTimeData">
   </label> -->





<!--  <form action="">
 <div class="row">
    <label>First Name <input type="text" name="FirstName"></label>
    <label>Last Name <input type="text" name="LastName"></label>
    <label>Address <input type="text" name="Address"></label>
    <label>City <select name="City">
    	<option value="Afghanistan">Afghanistan</option>
    	<option value="Albania">Albania</option>
    	<option value="Algeria">Algeria</option>
    	<option value="Andorra">Andorra</option>
    </select></label>
    <label>State/Province <select name="stateProvince">
 		<option value="Alabama">Alabama</option>
 		<option value="Alaska">Alaska</option>
 		<option value="American Samoa">American Samoa</option>
 </select></label>
    <label>Postal code <input type="text" placeholder="50219" name="PostCode" class="PostalCode"></label>
    <label>Phone <input type="text" name="phone"> </label>
    <label>Email <input type="text" name="email"></label>
 
    <label class="setTimeDataLabel">
    Preferred Number 
    <input type="text" name="PreferredNumberFirst" class="setTimeData">- 
    <input type="text" name="PreferredNumberSecond" class="setTimeData">- 
    <input type="text" name="PreferredNumberData" class="setTimeData">
    </label> </div>
    <div class="row">
 	   <button class="ModalClose" type="reset" > Cancel</button>
 	   <button class="ModalSubmit" type="submit">Submit</button>
    </div>
    </form> -->

      <?php  echo do_shortcode('[contact-form-7 id="85" title="Order form"]'); ?>


   
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
						<div class="content"><a href="<?php the_permalink();?>">
						<h3>  <?php the_title();?>  </h3> </a>
						<p><?php echo substr(get_the_content(),0,51);?></p>
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
					<?php dynamic_sidebar('OwnerWord'); ?>
				</div>
				<div class="footerExpert">
				<img src="<?php bloginfo(template_url);?>/img/home/manager-divider.png" class="divid" alt="devider">
				<p class="talkWithExpert">
					TALK WITH AN <span class="color" >EXPERT</span>
				</p>
				<p class="subExpert">Upgrade your with quality windows and doors.</p>

						<input type="text" name=""  class="postCode">
			

						<button id="myPopUpB1" class="submitPostCode ">Free in-home quote</button>

					

				</div>
			</div>





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
					<div class="forms">
						<input type="text" name="" placeholder="50219" class="postCode">
						<input type="submit"  id="myPopUpB2" value="Free in-home quote" class="submitPostCode">
						<div class="arrRight"></div>
					</div>
			</div>
			<div class="sliderMob">
				<div class="namedSlider">
					<p class="latest">latest</p>
					<p class="project">project</p>
				</div>





<?php  $slider=new WP_Query(array ('post_type'=>'OurProjects',
'posts_per_page'=>4));  ?>
                    <?php  if ($slider->have_posts()): while($slider->have_posts()): $slider->the_post();?>
                    	<div class="itemPhoto"><?php the_post_thumbnail();  ?>	</div>

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



<?php get_footer(); ?>
