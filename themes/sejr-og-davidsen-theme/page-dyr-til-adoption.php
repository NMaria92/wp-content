<?php
get_header();
sejr_davidsens_heroBanner();
custom_breadcrumbs();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$animals = new WP_Query(array(
    'posts_per_page' => 2,
    'post_type' => 'Hunde',
    'paged' => $paged
));
?>

<main>
    <div class="filterSearch">
        <div class="filterButtons">
            <span class="material-symbols-outlined">tune</span>
            <a class="btn" href="#">Art</a>
            <a class="btn" href="#">Køn</a>
            <a class="btn" href="#">Internat</a>
        </div>
        <a class="btn" href="#">Søg</a>
    </div>

    <section class="animalGrid">

        <?php

        while ($animals->have_posts()) {
            $animals->the_post();
            $animalImage = get_field('billede_af_dyret') ?>
            <div class="animalCard">
                <a class="card-link" href="<?php the_permalink(); ?>">
                    <img src="<?php echo esc_url($animalImage['url']) ?>" alt="<?php echo esc_attr($animalImage['alt']) ?>">
                    <div class="Text--Content">
                        <p><strong>Navn: </strong><?php
                                                    echo get_field('navn_pa_hund');
                                                    ?></p>
                        <p><strong>Alder: </strong><?php
                                                    echo get_field('alder_pa_dyr');
                                                    ?> år</p>
                        <?php
                        $races = get_field('race_pa_dyr');
                        foreach ($races as $race) {
                        ?>
                            <p><strong>Race: </strong><?php echo get_the_title($race); ?></p>
                        <?php
                        }
                        ?>
                        <p><?php echo wp_trim_words(get_field('praesentation_af_dyr'), 20); ?>Læs mere</p>
                    </div>
                </a>
            </div>

        <?php
        }
        ?>
    </section>

    <div class="paginateLinks">
        <?php
        echo paginate_links(array(
            'total' => $animals->max_num_pages,  // Antal sider
            'current' => $paged,                 // Aktuel side
        ));
        ?>
    </div>

    <article class="adoptionProcess">
        <h4>Adoptionsprocessen</h4>
        <div class="adoptionProcessContent">
            <div class="adoptionStep">
                <h5>1. Modtagelse af Hunden</h5>
                <p>Adoptionsprocessen begynder, når vi modtager hunden enten fra en tidligere ejer, der ikke længere kan tage sig af den, eller som en del af en dyreværnssag. Vi sikrer, at hunden bliver taget godt imod og får en tryg start på sit nye liv hos os.</p>
            </div>
            <div class="adoptionStep">
                <h5>2. Sundhedstjek og Forberedelse til Adoption</h5>
                <p>Når hunden er ankommet, gennemgår den et grundigt sundhedstjek, bliver vaccineret og får den nødvendige pleje. Vores dyrlæger og plejere sørger for, at hunden er sund, rask og godt forberedt på at finde sit nye hjem. Vi arbejder også med at vurdere hundens personlighed og eventuelle behov, så vi kan matche den med den rette familie.</p>
            </div>
            <div class="adoptionStep">
                <h5>3. Mød Din Potentielle Nye Hund</h5>
                <p>Når du har fundet en hund, du gerne vil adoptere, arrangerer vi et møde, hvor du kan lære hunden at kende. Dette kan ske enten virtuelt eller fysisk. Her får du mulighed for at lære hundens personlighed at kende og se, om I har en god kemi. </p>
            </div>
            <div class="adoptionStep">
                <h5>4. Vurdering og Samtale</h5>
                <p>Efter jeres møde tager vi en snak med dig om dine indtryk og vurderer, om hunden passer godt ind i dit hjem. Vi taler også om, hvad du kan forvente, og hvordan du bedst forbereder dig på at bringe en ny hund ind i dit liv.</p>
            </div>
            <div class="adoptionStep">
                <h5>5. Adoptionsaftale</h5>
                <p>Hvis alt går godt, og du beslutter dig for at adoptere, udarbejder vi en adoptionsaftale. Her får du alle de nødvendige oplysninger om hundens sundhed, vaccinationsstatus, og eventuelle særlige behov. Inden hunden flytter ind, sørger vi for, at den er klar til sit nye hjem. Vi giver dig råd om, hvordan du bedst introducerer hunden til dens nye miljø og hvad du skal have klar til dens ankomst.</p>
            </div>
            <div class="adoptionStep">
                <h5>6. Opfølgning og Støtte</h5>
                <p>Efter adoptionen holder vi kontakt for at sikre, at alt går godt. Vi tilbyder rådgivning og støtte, hvis du har spørgsmål eller udfordringer i de første uger, mens hunden tilpasser sig sit nye hjem. Adoptionsprocessen er designet til at sikre, at både du og hunden får den bedst mulige start på jeres liv sammen. Vi er her for at guide dig gennem hvert skridt og sikre, at adoptionen bliver en succes for alle parter.</p>
            </div>
        </div>
    </article>

    <section class="brownCard">
        <img src="<?php echo get_theme_file_uri('./images/Dog_jumping_over_a_fence-1024x762.JPG') ?>" alt="">
        <div class="brownCard-content">
            <h2 class="brownCard-title">Vil du give din nye hund den bedste start med hundetræning?</h2>
            <p class="brownCard-text">Hos Sejr & Davidsens Dyrepension og -internat tilbyder et bredt udvalg af hundetræning til dig og din hund. Vi starter hold hvert kvartal så skynd dig ind og find dit næste hold. </p>
            <span class="brownCard-text"><a class="btn btn-brownCard" href="#">Find et træningshold</a></span>
        </div>
    </section>


</main>


<?php get_footer(); ?>