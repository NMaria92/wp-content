<?php get_header(); ?>

<div class="heroBanner-section-frontpage heroBanner-img" style="background-image: url(<?php echo get_theme_file_uri('') ?>);">
    <div class="gradient-container">
        <h1 class="heroBanner-title-bold">Sejr & Davidsens Dyrepension og Internat</h1>
        <h1 class="heroBanner-title-light">Tryghed og trivsel for alle hunde</h1>
    </div>
</div>

<div>
    TEST
    <?php the_content(); ?>
</div>
<div class="card-container">
    <a href="<?php the_permalink(); ?>">
        <img src="url(<?php echo get_theme_file_uri('xxxxx') ?>">
        <p class="gradient-container"><?php echo the_title(); ?></p>
    </a>
</div>




<?php get_footer(); ?>