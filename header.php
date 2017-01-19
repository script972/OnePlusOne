<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript">
  var templateUrl = '<?= get_bloginfo("template_url"); ?>';
  </script>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Denis Misyura">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon " href="<?php bloginfo(template_url);?>/img/favicon/favicon-blackBG.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title><?php bloginfo(name); ?></title>
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/images/favicon.png">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" >
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">

  <?php wp_head(); ?>
</head>
<body>
<header>

<?php if(is_home()){ ?>
<div class="Mainlogo">
<img src="<?php bloginfo(template_url);?>/img/logo/mainLogo.png" alt=""></div>
<div class="MobLogo"><img class="sqrLogo" src="<?php bloginfo(template_url);?>/img/home/sqrLogo.png" alt="" >
<img class="lineLogo" src="<?php bloginfo(template_url);?>/img/home/lineLogo.png" alt="" >
</div>
<div id="main-menu">
  <nav class="navbar-inverse navbar-fixed" >
         <div class="container-menu">
           <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
             <span class="sr-only">Меню</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
           </div>
            <div class="collapse navbar-collapse" id="responsive-menu">
<?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'top_menu',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'nav',
  //Process nav menu using our custom nav walker
  'walker' => new wp_bootstrap_navwalker())
);
?>
  </div>
         </div>
       </nav>
       </div>
<?php } else{?>
<!-- other Page -->
<div class="backGroundHeaderOtherPage">
<div class="opacityColorHead">
<div class="container">
<div class="row">
<img src="<?php bloginfo(template_url);?>/img/logo/mainLogo.png" alt="Logo" class="logoMain">
<div class="headNumberOtherPage"><img src="<?php bloginfo(template_url);?>/img/logo/phone.png" alt="" class="phoneTrub"><p>+1 (203) 424-8096</p></div> </div> </div>
  <div id="main-menu">
  <nav class="navbar-inverse navbar-fixed" >
         <div class="container-menu">
           <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
             <span class="sr-only">Меню</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
           </div>
            <div class="collapse navbar-collapse" id="responsive-menu">
<?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'top_menu',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'nav',
  //Process nav menu using our custom nav walker
  'walker' => new wp_bootstrap_navwalker())
);
?>
  </div>
         </div>
       </nav>
       </div>

</div>
</div>

<?php } ?>


</header>