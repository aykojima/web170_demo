<?php get_header(); ?>



<!-- Main picture-->
      <!-- Begin Flex Slider -->
        <div class="flexslider">
          <ul class="slides">
            <li>
              <img src="<?php bloginfo('template_directory') ?>/images/slider3.jpg" width="940" height="400" alt="Image One">
            </li>
            <li>
              <img src="<?php bloginfo('template_directory') ?>/images/slider2.jpg" width="940" height="400" alt="Image Two">
            </li>
            <li>
              <img src="<?php bloginfo('template_directory') ?>/images/main.jpg" width="940" height="400" alt="Image Three">
            </li>
            <li>
              <img src="<?php bloginfo('template_directory') ?>/images/slider4.jpg" width="940" height="400" alt="Image Four">
            </li>
          </ul>
        </div>
      
<div id="content">

<!--first loop that pulls SEO home page text-->
<?php if ( have_posts() ) : while( have_posts() ) : the_post(); // start loop one ?>
<?php the_content(''); ?>
<?php endwhile; endif; ?>
   
    <h2>Latest News</h2>
<!--Secound loop that pulls titles of latest postings-->
     <?php rewind_posts(); // stop previous loop ?>
            <?php query_posts(array('posts_per_page' => '4', 'category_name' => 'News')); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><small><?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small></li>
            <?php endwhile; endif; ?>
    

    <h2>Latest Articles</h2>
     <?php rewind_posts(); // stop previous loop ?>
            <?php query_posts(array('posts_per_page' => '4', 'category_name' => 'Article')); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><small><?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small></li>
            <?php endwhile; endif; ?>
    
<?php if(is_404()){ echo 'Nothing found.'; }?>
</div>
        
<?php get_sidebar(); ?>     
    

<!-- three pictures-->    
    <section>
    <a href="http://ayumik.com/wordpress/about/" onMouseover="chgImg('button1','button1Red')" onMouseout= "chgImg('button1','button1Blue')"><img src="<?php bloginfo('template_directory'); ?>/images/old-machine.jpg"  name="button1"  alt="about" class="small"></a> 
    
    <a href="http://ayumik.com/wordpress/commodities/" onMouseover="chgImg('button2','button2Red')" onMouseout="chgImg('button2','button2Blue')"><img src="<?php bloginfo('template_directory'); ?>/images/veggie-basket.jpg"  name="button2" alt="commodities" class="small"></a> 
    
    <a href="http://ayumik.com/wordpress/foodsafety" onMouseover="chgImg('button3','button3Red')" onMouseout="chgImg('button3','button3Blue')"><img src="<?php bloginfo('template_directory'); ?>/images/fs.jpg"  name="button3" alt="food safety" class="small"></a> 
    
     </section>

<small>front-page.php</small>
<?php get_footer(); ?>