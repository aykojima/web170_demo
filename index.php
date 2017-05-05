<?php include ("includes/header.php");?>
<script>
    $(window).load(function() {
          $('.flexslider').flexslider({
            animation: "slide"
          });
        });
</script>




<!-- Main picture-->
    <main>
        <div class="flexslider">
          <ul class="slides">
            <li>
              <img src="<?php bloginfo('template_directory'); ?>/images/slider3.jpg"/>
            </li>
            <li>
              <img src="<?php bloginfo('template_directory'); ?>/images/slider2.jpg" />
            </li>
            <li>
              <img src="<?php bloginfo('template_directory'); ?>/images/main.jpg" />
            </li>
            <li>
              <img src="<?php bloginfo('template_directory'); ?>/images/slider4.jpg" />
            </li>
          </ul>
        </div>
        
<div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h2>
<?php the_content(''); ?>
<?php endwhile; endif;  ?>
<? php if(is_404()){ echo 'Nothing found.'; }?>
</div>
        
        

<!-- three pictures-->    
    <section>
    <a href="about.php" onMouseover="chgImg('button1','button1Red')" onMouseout= "chgImg('button1','button1Blue')"><img src="<?php bloginfo('template_directory'); ?>/images/old-machine.jpg"  name="button1"  alt="about" class="small"></a> 
    
    <a href="commodities.php" onMouseover="chgImg('button2','button2Red')" onMouseout="chgImg('button2','button2Blue')"><img src="<?php bloginfo('template_directory'); ?>/images/veggie-basket.jpg"  name="button2" alt="commodities" class="small"></a> 
    
    <a href="foodsafety.php" onMouseover="chgImg('button3','button3Red')" onMouseout="chgImg('button3','button3Blue')"><img src="<?php bloginfo('template_directory'); ?>/images/fs.jpg"  name="button3" alt="food safety" class="small"></a> 
    
     </section>
    </main>

<?php include ("includes/footer.php");?>