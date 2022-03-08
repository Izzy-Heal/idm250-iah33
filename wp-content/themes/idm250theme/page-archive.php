
<?php get_header(); ?>
 
 <section id="primary" class="site-content">
     <div id="content" role="main">
         <header class="archive-header">
             <h1 class="archive-title">
                 <?php post_type_archive_title(); ?>
             </h1>
         </header><!-- .archive-header -->
  
         <?php
         // Start the Loop
         while ( have_posts() ) : the_post(); ?>
  
         <article class="entry-content">
             <?php $attr = array(
                 'class' => "archive-image",
                 'alt' => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ),
             ); ?>
             <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', $attr ); ?></a>
             <h2 class="archive-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         </article>
  
         <?php endwhile; ?>
  
     </div><!-- #content -->
 </section><!-- #primary -->
  
 <?php get_footer(); ?>