<?php get_header(); ?>



<!-- Main picture-->
    
        <div class="flexslider">
          <ul class="slides">
            <li>
              <img src="http://www.ayumik.com/wordpress/images/slider3.jpg"/>
            </li>
            <li>
              <img src="http://www.ayumik.com/wordpress/images/slider2.jpg" />
            </li>
            <li>
              <img src="http://www.ayumik.com/wordpress/images/main.jpg" />
            </li>
            <li>
              <img src="http://www.ayumik.com/wordpress/images/slider4.jpg" />
            </li>
          </ul>
        </div>
      
<div id="content">
    
<?php if ( have_posts() ) : while( have_posts() ) : the_post(); // start loop one ?>
<?php the_content(''); // get the home page's content ?>
<?php endwhile; endif; // end loop one ?>
    
    
<?php rewind_posts(); // stop loop one ?>
<?php query_posts('showposts=4'); // give directions to loop two ?>
<?php while (have_posts()) : the_post(); // start loop two ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; // end loop two ?>
    

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h2>
<?php the_content(''); ?>
<?php endwhile; endif;  ?>
<?php if(is_404()){ echo 'Nothing found.'; }?>
</div>
        
<?php get_sidebar(); ?>     
    

<!-- three pictures-->    
    <section>
    <a href="about.php" onMouseover="chgImg('button1','button1Red')" onMouseout= "chgImg('button1','button1Blue')"><img src="<?php bloginfo('template_directory'); ?>/images/old-machine.jpg"  name="button1"  alt="about" class="small"></a> 
    
    <a href="commodities.php" onMouseover="chgImg('button2','button2Red')" onMouseout="chgImg('button2','button2Blue')"><img src="<?php bloginfo('template_directory'); ?>/images/veggie-basket.jpg"  name="button2" alt="commodities" class="small"></a> 
    
    <a href="foodsafety.php" onMouseover="chgImg('button3','button3Red')" onMouseout="chgImg('button3','button3Blue')"><img src="<?php bloginfo('template_directory'); ?>/images/fs.jpg"  name="button3" alt="food safety" class="small"></a> 
    
     </section>

<small>front-page.php</small>
<?php get_footer(); ?>