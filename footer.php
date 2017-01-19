<footer>
<?php if(is_home()){ ?>
	<div class="footDesk"><h4>© 2016 ONEPLUSONE All Rights Reserved.</h4></div>
	<div class="footMob">

	<div class="fingerMob">

		<div class="outBlock">
		<div class="item"><a href="" target="_blank"> <img src="<?php bloginfo(template_url); ?>/img/home/mobile-panel/letter-box.png" alt=""></a> </div>

		<div class="item"><a href="" target="_blank"> <img src="<?php bloginfo(template_url); ?>/img/home/mobile-panel/mobile-point.png" alt=""> </a> </div>

		<div class="item"><a href="" target="_blank"> <img src="<?php bloginfo(template_url); ?>/img/home/mobile-panel/call-in.png" alt=""> </a> </div>

	</div>
	<img src="<?php bloginfo(template_url); ?>/img/home/mobile-panel/finger.png" alt="" class="finger">

	 </div>
	<div class="stillQuastion">
		<h3>Still have questions?</h3>
		<p>Ask them to us.</p>
	</div>
	<div class="cont">
		<img src="<?php bloginfo(template_url);?>/img/home/logoFooter.png" alt="">
		<p>1372 Summer st, Suite 207, Stamford, CT 06905, USA</p>
	</div>
	<p class="tel">+1 (203) 424-8096</p>
	</div>
	<?php } else{?>
	<div class="otherFoorPage">
		<div class="container">
	<div class="footer-logo">
	<img src="<?php bloginfo('template_url'); ?>/img/home/logoFooter.png" class="sqr-box-logo" alt="sqr-box-logo">
		<div class="footer-text"> <p>© 2016 ONEPLUSONE <br>
			All Rights Reserved.</p></div>
</div>
<div class="footer-soc-link">
	<?php 
wp_nav_menu( array(
	'theme_location'  => 'socmenu'
) );
	?>
</div>
</div>
	</div>
	<?php } ?>
</footer>
	<?php wp_footer(); ?> 


  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
</body>
</html>
