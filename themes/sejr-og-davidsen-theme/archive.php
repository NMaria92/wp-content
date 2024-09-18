<?php
get_header();
sejr_davidsens_heroBanner();

?>
<main>

    <?php
    $archiveNews = new WP_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'Nyheder',
        'orderby' => 'date',
        'order' => 'ASC',
    ));



    while ($archiveNews->have_posts()) {
        $archiveNews->the_post();
    ?>
        <div class="newsCard">
            <h2><?php the_title(); ?></h2>
            <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>
            <button class="btn"><a href="<?php the_permalink(); ?>">Læs mere</a></button>
        </div>
    <?php
    }

    wp_reset_postdata();
    ?>



</main>

<?php
get_footer();
?>