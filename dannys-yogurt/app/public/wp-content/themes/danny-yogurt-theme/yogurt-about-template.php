<?php
/*
        Template Name: Yogurt About Template
    */

get_header();
?>
<!-- Page Title   -->
<?php

while (have_posts()) {
    the_post(); ?>
    <div class="page-title">
        <h1><?php the_title(); ?></h1>
    </div>
<?php } ?>




<?php if (have_rows('callout1')) : ?>
    <?php while (have_rows('callout1')) : the_row(); ?>

        <?php
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        ?>

        <div class="mission-header">
            <h2><?php echo $title  ?></h2>
            <p><?php echo $subtitle ?></p>
        </div>


    <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('callout2')) : ?>
    <?php while (have_rows('callout2')) : the_row(); ?>

        <?php
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        ?>

<div style="position: relative;">
    <div class="black-overlay"></div>
    <div id="about-us-container" class="text-white text-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);">
        <h2><?php echo $title ?></h2>
        <p><?php echo $subtitle ?></p>
        
    </div>
    <img style="object-fit: cover; max-width: 100%;" src="<?php echo $image ?>" />

</div>

    <?php endwhile; ?>
<?php endif; ?>





<?php get_footer() ?>