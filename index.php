<?php get_header(); ?>



<!-- Main picture-->
    
      
<div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article class="post-excerpt">
<h2><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h2>
<small>
    Posted on <?php the_time('F j, Y'); ?> 
    by <?php the_author(); ?> 
    in <?php the_category(', '); ?>
</small>
    <a href=" <?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?> </a>
<?php the_excerpt(); ?>
<p id="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>    
</article>

<?php endwhile; endif;  ?>
<?php if(is_404()){ echo 'Nothing found.'; }?>
    
    <small>index.php</small>
</div>
        
<?php get_sidebar(); ?>     
    

<!-- three pictures-->    
    <section>
 

            
     </section>


<?php get_footer(); ?>