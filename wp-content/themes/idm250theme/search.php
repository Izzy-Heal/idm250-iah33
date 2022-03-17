<?php
/* Template Name: searchy */
 get_header(); ?>
<div class="srch">
<?php get_search_form(); ?> 
</div>
<?php while ( have_posts() ) : the_post(); ?>
<?php if (is_page()) continue; ?>
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