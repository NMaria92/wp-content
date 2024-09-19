<?php get_header();

sejr_davidsens_heroBanner_Frontpage();

?>

<main>
    <div class="top-section">
        <h2>Vi er en større, velrenommeret dyrepension i Nordjylland med hundepension, internat og adoption.</h2>
        <div class="threedogs-img">
            <img src="<?php echo get_theme_file_uri('./images/tree_small_dogs.JPG') ?>" alt="three little dogs" loading="lazy">
        </div>
        <div class="top-section-text">
            <p>Hos os tilstræber vi at give hundejere et trygt og professionelt pensionstilbud at efterlade deres
                hunde i, en afgrænset periode, mens ejerne er hjemmefra.</p>
            <p>Vi driver også et internat der giver hundejere mulighed for at aflevere hunde, som de ikke har
                mulighed for at beholde længere. Myndigheder kan trygt indlevere herreløse eller mishandlede dyr til
                professionel rehabilitering og sundhedstjek. Hertil tilbyder vi også bortadoption af hunde, der er
                klar til et liv hos en ny familie.</p>
            <p>Fremtidige hundeejere kan trygt og professionelt adopterer hund fra os og modtage råd og vejledning
                om det gode match mellem hund og ejer.</p>
            <p>Vi tilbyder faglig rådgivning om livet med hund med alt fra råd til den daglige pasning,
                sundhedstjek, sikkerhed og aktivering.</p>
            <p>Vi tilbyder også forskellige niveauer af adfærdstræning på vores matrikel med professionel træner til
                forskellige niveauer - fra begynderhold til avancerede hold.</p>
        </div>
    </div>

    <div class="adoption-options">
        <div class="card">
            <img src="<?php echo get_theme_file_uri('./images/two_old_people_with_dog.jpg') ?>" alt="hund med to mennesker" loading="lazy">
            <a href="<?php echo get_permalink(71) ?>"><?php echo get_the_title(71) ?></a>
        </div>
        <div class="card">
            <img src="<?php echo get_theme_file_uri('./images/Dog_lays_in_grass.jpg') ?>" alt="cocker spaniel der ligger i græsplæne" loading="lazy">
            <a href="<?php echo get_permalink(7) ?>"><?php echo get_the_title(7) ?></a>
        </div>
        <div class="card">
            <img src="<?php echo get_theme_file_uri('./images/internathunde.jpg') ?>" alt="hunde i hundegård på et internat" loading="lazy">
            <a href="<?php echo get_permalink(9) ?>"><?php echo get_the_title(9) ?></a>
        </div>
    </div>

    <div class="article-section">
        <h2>Nyheder</h2>
        <div class="news-section-grand-flexbox">
            <div class="newest-article-section">
                <h3>Aktuel</h3>
                <?php
                $newArticle = new WP_Query(
                    array(
                        'post_type' => 'nyheder',
                        'posts_per_page' => 1,
                        'orderby' => 'date',
                        'order' => 'ASC',
                    )
                );

                while ($newArticle->have_posts()) {
                    $newArticle->the_post();
                    $image_url = get_field('billede')['url'];
                    $image_alt = get_field('billede')['alt'];
                ?>

                    <div>
                        <img class="new-article-img" src="<?php echo esc_url($image_url) ?>" alt="<?php echo $image_alt; ?>"
                            loading="lazy">
                    </div>
                    <div>
                        <p class="article-styling">Skrevet af <span class="bold-styling"><?php the_author_posts_link(); ?></span> d. <?php the_time('n.j.y'); ?>
                            i <span class="bold-styling"><?php echo get_the_category_list(','); ?></span>
                        </p>
                        <h5 class="news-black-text"><?php the_title(); ?></h5>
                        <div class="news-text">
                            <span>
                                <p><?php echo wp_trim_words(get_field('indhold'), 50); ?><a class="readmore-link" href="<?php the_permalink(); ?>">Læs mere</a></p>
                            </span>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="random-news-section">
                <h3>Se øvrige nyheder</h3>

                <?php
                $ramdomArticles = new WP_Query(
                    array(
                        'post_type' => 'nyheder',
                        'posts_per_page' => 3,
                        'orderby' => 'rand',
                        'order' => 'ASC',
                    )
                );

                while ($ramdomArticles->have_posts()) {
                    $ramdomArticles->the_post();
                    $image_url = get_field('billede')['url'];
                    $image_alt = get_field('billede')['alt'];
                ?>
                    <div class="flex-item">
                        <div>
                            <img class="article-item-img" src="<?php echo esc_url($image_url) ?>" alt="<?php echo $image_alt; ?>"
                                loading="lazy">
                        </div>
                        <div class="news-flex-item">
                            <p class="article-styling">Skrevet af <span class="bold-styling"><?php the_author_posts_link(); ?></span> d. <?php the_time('n.j.y'); ?>
                                i <span class="bold-styling"><?php echo get_the_category_list(','); ?></span>
                            </p>
                            <h5 class="news-black-text"><?php the_title(); ?></h5>
                            <div class="news-text">
                                <span>
                                    <p><?php echo wp_trim_words(get_field('indhold'), 50); ?><a class="readmore-link" href="<?php the_permalink(); ?>">Læs mere</a></p>
                                </span>
                            </div>
                        </div>
                    </div>


                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="link-frontpage-container">
            <h5>Vil du ser flere nyheder?</h5>
            <a href="<?php echo get_post_type_archive_link('nyheder') ?>" class="btn">Se flere nyheder</a>
        </div>
    </div>
</main>



<?php get_footer(); ?>