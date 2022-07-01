<?php
/*
        Template Name: Yogurt Menu Template
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

<?php $cards = array('yogurt_card1', 'yogurt_card2', 'yogurt_card3', 'yogurt_card4');  ?>

<!-- Yogurt Menu -->
<div class="yogurt-container">
    <?php foreach ($cards as $card) { ?>
        <?php if (have_rows($card)) : ?>
            <?php while (have_rows($card)) : the_row(); ?>

                <?php
                $image = get_sub_field('yogurt_image');
                $title = get_sub_field('yogurt_title');
                $price = get_sub_field('yogurt_price');
                $description = get_sub_field('yogurt_description');
                $rating = (int) get_sub_field('yogurt_rating');
                ?>
                <div class="yogurt-card">
                    <img class="product-image" src=<?php echo $image['url'] ?> />
                    <div class="yogurt-content">
                        <p class="yogurt-title"><?php echo $title ?></p>
                        <p class="yogurt-price"><?php echo $price ?></p>
                        <p class="yogurt-description"><?php echo $description ?></p>
                    </div>
                    <div class="yogurt-rating">
                        <?php for ($i = 0; $i < 5; $i++) {

                            if ($rating-- != 0) { ?>
                                <img src="http://dannys-yogurt.local/wp-content/themes/danny-yogurt-theme/images/star.svg" />
                            <?php } else { ?>
                                <img src="http://dannys-yogurt.local/wp-content/themes/danny-yogurt-theme/images/empty-star.svg" />
                        <?php }
                        } ?>


                    </div>
                    <button class="btn button">Order Now</button>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>
    <?php } ?>
</div>


<?php get_footer() ?>