<?php get_header(); ?>



<!-- Main picture-->
    
      
<div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h2>
<?php the_content(''); ?>
<?php endwhile; endif;  ?>
<?php if(is_404()){ echo 'Nothing found.'; }?>
    
    <small>index.php</small>
</div>
        
<?php get_sidebar(); ?>     
    

<!-- three pictures-->    
    <section>
 

            
     </section>


<?php get_footer(); ?>