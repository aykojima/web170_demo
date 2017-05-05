<?php include ("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$myTitle?></title>
<!-- <title><?php ?></title>    -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

<!-- flexslider -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/jquery.flexslider.js"></script>
<!-- end of flexslider -->     
    
<script>
if (document.images) { 
      button1Red = new Image 
      button1Blue = new Image 
      button2Red = new Image 
      button2Blue = new Image
      button3Red = new Image 
      button3Blue = new Image
      button4Red = new Image 
      button4Blue = new Image 
      button5Red = new Image 
      button5Blue = new Image
      button6Red = new Image 
      button6Blue = new Image
      button7Red = new Image 
      button7Blue = new Image
      
      button1Red.src = "<?php bloginfo('template_directory'); ?>/images/old-machine_hover.jpg" 
      button1Blue.src = "<?php bloginfo('template_directory'); ?>/images/old-machine.jpg" 
      button2Red.src = "<?php bloginfo('template_directory'); ?>/images/veggie-basket_hover.jpg" 
      button2Blue.src = "<?php bloginfo('template_directory'); ?>/images/veggie-basket.jpg" 
      button3Red.src = "<?php bloginfo('template_directory'); ?>/images/fs_hover.jpg" 
      button3Blue.src = "<?php bloginfo('template_directory'); ?>/images/fs.jpg"
      button4Red.src = "<?php bloginfo('template_directory'); ?>/images/broccoli_hover.jpg" 
      button4Blue.src = "<?php bloginfo('template_directory'); ?>/images/broccoli.jpg"
      button5Red.src = "<?php bloginfo('template_directory'); ?>/images/iceberg_hover.jpg" 
      button5Blue.src = "<?php bloginfo('template_directory'); ?>/images/iceberg.jpg"
      button6Red.src = "<?php bloginfo('template_directory'); ?>/images/romaine_hover.jpg" 
      button6Blue.src = "<?php bloginfo('template_directory'); ?>/images/romaine.jpg"
      button7Red.src = "<?php bloginfo('template_directory'); ?>/images/kale_hover.jpg" 
      button7Blue.src = "<?php bloginfo('template_directory'); ?>/images/kale.jpg"
    }

    function chgImg(imgField,newImg) { 
      if (document.images) { 
        document[imgField].src = eval(newImg + ".src") 
      } 
    }
</script>
  </head>

    <!-- Start WP Head Function -->
    <?php wp_head(); ?>
    <!-- End WP Head Function -->
    
<body <?php body_class(); ?>>
<header> 
  <a href="index.php"><img src="<?php bloginfo('template_directory'); ?>/images/sunAmerica-logo.png" class="logo" alt="logo" title="home" /></a>
  
    
    <!-- START NAVIGATION (Main) -->
  
    <!--<nav id="topnav">
    <ul  class="myTopnav">
      <?=makeLinks($nav1, $nav2)?>
      <li class="icon">
    	<a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  	  </li>
    </ul>
  </nav>-->
  
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', ) ); ?>
    
    <!-- END NAVIGATION (Main) --> 
  
    
    
    
    <h2 class="pageid"><?=$myPageID?></h2>
  
</header>
