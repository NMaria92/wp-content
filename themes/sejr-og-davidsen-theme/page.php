<!-- individuelle pages -->
<?php
get_header();

while (have_posts()) {
    the_post();
    sejr_davidsens_heroBanner();
?>

    page.php

    <div class="breadcrumbs">
        <?php
        $theParent = wp_get_post_parent_id(get_the_ID());
        if ($theParent) { ?>
            <a href="<?php echo get_permalink($theParent); ?>"> > </a>
            <p><?php the_title(); ?></p>
        <?php } ?>
    </div>

    <div>
        <?php the_content(); ?>
    </div>


<?php }

get_footer();
?>