<?php get_header() ?>

<?php
    
    while(have_posts()){
        the_post(); ?>
    <div class="page-title">
            <h1><?php the_title(); ?></h1>
    </div>
    <?php the_content(); ?>
<?php } ?>

<?php get_footer() ?>


