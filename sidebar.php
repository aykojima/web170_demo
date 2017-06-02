<!-- Start Sidebar -->
<div id="sidebar">
<h2><?php 
    if(is_page()) { 
        echo get_the_title($post->post_parent); 
    } else { 
        echo 'Blog'; 
}?></h2>
    
    
    
<ul class="sub-navigation-items">
<?php 

    if(is_page()) { 
        if($post->post_parent) { 
            wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => '',)); 
        } else { 
            wp_list_pages(array('child_of' => $post->ID, 'title_li' => '',)); 
        }

    } else { 
        wp_list_categories(array('title_li' => '',));
    }

?>
</ul>
<!--Begin Quote-->
<?php if(get_post_meta($post->ID, 'Quote', true)) : ?>
<blockquote><?php echo get_post_meta($post->ID, 'Quote', true); ?></blockquote>
<?php endif; ?>
<!--End Quote -->

<!-- Begin Widgets -->
        <?php dynamic_sidebar(1); ?>
        
        
<!-- End Widgets -->

</div>
<!-- End Sidebar -->