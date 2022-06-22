<?php get_header() ?>

<div class="page-title">
            <h1>Welcome to our Blog!</h1>
    </div>

<?php
    
    while(have_posts()){
        the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php  the_title();  ?></a></h2>
    <p><?php the_excerpt(); ?></p>
    <p>Posted by: <?php the_author_posts_link();?> on <?php the_time('n.j.y'); ?> </p>
    <hr/>
<?php } ?>

<?php get_footer() ?>


