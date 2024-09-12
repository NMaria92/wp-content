<!-- A generic template file for the post-page -->

<?php get_header(); ?>

<div class="heroBanner-section-frontpage heroBanner-img" style="background-image: url(<?php echo get_theme_file_uri('XXXX INDSÆT STI XXXX') ?>);">
    <div class="gradient-container">
        <h1 class="heroBanner-title-light"><?php the_title(); ?></h1>
    </div>
</div>

<div>
    <?php the_content(); ?>
</div>


<?php get_footer(); ?>