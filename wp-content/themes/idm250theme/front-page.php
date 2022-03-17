<?php get_header(); ?>
<div class="<?php echo the_title();?>">
    <h1 class="idm_page_title"><?php the_title(); ?>
    </h1>


    <div >

        <!-- start content -->
        <?php the_content(); ?>
        <!-- end content -->


    </div>

</div>
<?php get_footer(); ?>