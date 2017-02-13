<?php 
get_header();
?>
<?php  the_post(); ?>
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





 <form action="">
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
     </form>

      <?php /* echo do_shortcode('[contact-form-7 id="85" title="Order form"]');*/ ?>

   
  </div>
</div>


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
                    
                        <input type="text" name="" class="postCode"> <br>
                        <input type="submit" id="myPopUpB1" value="Free in-home quote" class="submitPostCode">
                        <div class="arrRight"></div>
                   
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







