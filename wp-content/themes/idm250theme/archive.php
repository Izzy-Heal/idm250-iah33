<?php
/* Template Name: archival */
 get_header(); ?>
<h1>Archive Page</h1>
 <h2>Digital Inks</h2>
 <?php
 $args = array(
     'post_type' => array( 'digital-ink' ),
     'order' => 'asc',
     'orderby' => 'title',
     'posts_per_page' => -1
 );
 
 $loop = new WP_Query( $args );?>
 <?php while ( $loop->have_posts() ) : $loop->the_post();?>
 
 <article class="entry-content">
     <?php $attr = array(
         'class' => "archive-image",
         'alt' => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ),
     ); ?>
     <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', $attr ); ?></a>
     <h2 class="archive-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
 </article>
 
 <?php endwhile; ?>
 
 <?php wp_reset_query(); ?>
 
 
 <h2>Digital Art</h2>
 
 <?php
 $args = array(
     'post_type' => array( 'digital-art' ),
     'order' => 'asc',
     'orderby' => 'title',
     'posts_per_page' => -1
 );
 
 $loop = new WP_Query( $args );?>
 <?php while ( $loop->have_posts() ) : $loop->the_post();?>
 
  <article class="entry-content">
     <?php $attr = array(
         'class' => "archive-image",
         'alt' => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ),
     ); ?>
     <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', $attr ); ?></a>
     <h2 class="archive-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
 </article>
 <?php endwhile; ?>


	


<?php get_footer(); ?>