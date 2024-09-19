<?php
get_header();
custom_breadcrumbs();


while (have_posts()) {
    the_post();
}
?>
<a class="returnBtn" href="<?php echo site_url('/internat-og-adoption/dyr-til-adoption') ?>">«<span class="material-symbols-outlined">
        home
    </span> Dyr til adoption</a>
<h1 class="mops"><?php echo get_field('navn_pa_hund'); ?></h1>
<section class="mops-present">
    <div>
        <h5 class="mops-h">Præsentation</h5>
        <div>
            <p><?php echo get_field('praesentation_af_dyr'); ?> </p>
            <section class="profile-details">
                <div class="details">
                    <p><strong>Alder:</strong> <?php echo get_field('alder_pa_dyr'); ?> år</p>
                    <?php
                    $races = get_field('race_pa_dyr');
                    if ($races) {
                        foreach ($races as $race) {
                            echo '<p><strong>Race:</strong> ' . (get_the_title($race->ID)) . '</p>';
                        }
                    }
                    ?>

                    <p><strong>Vægt:</strong> <?php echo get_field('vaegt_pa_dyr'); ?> kg</p>
                    <p><strong>Højde:</strong> <?php echo get_field('hojde_pa_dyr'); ?> cm</p>
                    <p><strong>Vaccineret:</strong> <?php echo get_field('er_dyret_vaccineret'); ?></p>
                    <p><strong>Chippet:</strong> <?php echo get_field('er_dyret_chippet'); ?></p>
                    <p><strong>FCI-Gruppe:</strong> <?php echo get_field('fci_gruppe'); ?></p>
                    <p><strong>Farve:</strong> <?php echo get_field('farve'); ?></p>

                    <?php

                    $race = get_field('race_pa_dyr');

                    if ($race) {
                        // Hvis der er en race forbundet med hunden, skift til racen
                        foreach ($race as $single_race) {
                            // Skift postdata til race-posten
                            $race_id = $single_race->ID; // Race-ID'et
                            $race_title = get_the_title($race_id); // Titel på racen (navnet)

                            // Setup postdata for race-posten
                            setup_postdata($single_race);

                            // Output racens data
                    ?>

                            <p><strong>Allergivenlig:</strong> <?php echo get_field('allergivenlig', $race_id) ? 'Ja' : 'Nej'; ?></p>
                            <p><strong>Gennemsnitlig levealder:</strong> <?php echo get_field('gennemsnits_levealder', $race_id) ?> år</p>

                    <?php
                        }
                    } else {
                        echo '<p>Ingen race tilknyttet denne hund.</p>';
                    }
                    ?>
                </div>
            </section>
            <button class="btn">Book videomøde</button>
            <button class="btn mops-btn">Book fysisk møde</button>
            <button class="btn">Kontakt os</button>
        </div>
    </div>

    <div class="front-mops">
        <?php
        if (get_field('billede_af_dyret')) {
            $animalImage = get_field('billede_af_dyret');
        ?>
            <img class="front-mops" src="<?php echo esc_url($animalImage['url']) ?>" alt="<?php echo esc_attr($animalImage['alt']) ?>">
        <?php
        } else {
            echo '<img src="' . get_theme_file_uri('./images/Mops_sitting_in_grassfield.jpg') . '" alt="Mops sitting in a grassfield">';
        }
        ?>
    </div>
</section>

<div class="dog-container">
    <div class="left-column">
        <h3>Racebeskrivelse</h3>
        <p> <?php echo get_field('racebeskrivelse', $race_id); ?></p>

        <h4>Plejeniveau</h4>
        <p><?php echo get_field('plejebeskrivelse', $race_id); ?></p>

        <h4>Aktivitetsniveau</h4>
        <p><?php echo get_field('aktivitetsbeskrivelse', $race_id); ?></p>

        <h4>Lydighedsniveau</h4>
        <p><?php echo get_field('lydighedsbeskrivelse', $race_id); ?></p>
    </div>
    <div class="right-column">
        <div class="gridForScales">
            <div class="info-box">
                <p>Familievenlig:</p>
                <div class="box-container">
                    <?php
                    $familievenlig = get_field('familievenlig', $race_id);


                    $filled_boxes = round($familievenlig);
                    for ($i = 1; $i <= 5; $i++) {
                        if ($i <= $filled_boxes) {
                            echo '<div class="box filled"></div>';
                        } else {
                            echo '<div class="box"></div>';
                        }
                    }
                    ?>
                </div>
            </div>


            <div class="info-box">
                <p>Pelspleje:</p>
                <div class="box-container">
                    <?php
                    $pelspleje = get_field('pelspleje', $race_id);
                    $filled_boxes = round($pelspleje);

                    for ($i = 1; $i <= 5; $i++) {
                        if ($i <= $filled_boxes) {
                            echo '<div class="box filled"></div>';
                        } else {
                            echo '<div class="box"></div>';
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="info-box">
                <p>Aktivitetsniveau:</p>
                <div class="box-container">
                    <?php
                    $aktivitetsniveau = get_field('aktivitetsniveau', $race_id);
                    $filled_boxes = round($aktivitetsniveau);

                    for ($i = 1; $i <= 5; $i++) {
                        if ($i <= $filled_boxes) {
                            echo '<div class="box filled"></div>';
                        } else {
                            echo '<div class="box"></div>';
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="info-box">
                <p>Temperament:</p>
                <div class="box-container">
                    <?php
                    $temperament = get_field('temperament', $race_id);
                    $filled_boxes = round($temperament);

                    for ($i = 1; $i <= 5; $i++) {
                        if ($i <= $filled_boxes) {
                            echo '<div class="box filled"></div>';
                        } else {
                            echo '<div class="box"></div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="race-mops">
            <?php
            $raceImage = get_field('billede_af_dyret', $race_id);
            ?>
            <img class="front-mops img" src="<?php echo esc_url($raceImage['url']) ?>" alt="<?php echo esc_attr($raceImage['alt']) ?>">
        </div>
    </div>

</div>

<?php
wp_reset_postdata();
?>



<section class="image-box">
    <h2>Læs om de andre dyr på vores internat</h2>
    <div class="image-container">

        <?php
        // Lav en ny WP_Query for at hente de seneste 4 posts
        $recent_posts_query = new WP_Query(array(
            'posts_per_page' => 4, // Antallet af posts, du ønsker at vise
            'post_type' => 'Hunde', // Posttypen (her standard "post")
            'orderby' => 'date', // Sortér efter dato
            'order' => 'DESC' // Sortér i faldende rækkefølge (nyeste først)
        ));

        while ($recent_posts_query->have_posts()) {
            $recent_posts_query->the_post();
            $recent_postsImage = get_field('billede_af_dyret') ?>

            <a href="<?php echo get_permalink(); ?>">
                <img src="<?php echo esc_url($recent_postsImage['url']) ?>" alt="<?php echo esc_attr($recent_postsImage['alt']) ?>">
                <h5><?php echo get_field('navn_pa_hund'); ?></h5>
            </a>
        <?php
        }
        ?>

    </div>

</section>

<?php get_footer(); ?>