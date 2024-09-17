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

    <div class="news-section">
        <h2>Nyheder</h2>
        <div class="news-grid">
            <!-- Left news article -->
            <div>
                <h3>Aktuel</h3>
                <img class="news-big-img" src="<?php echo get_theme_file_uri('./images/Rabies_needles.jpg') ?>" alt="rabies vaccine i kanyle, stetoskop og vaccinationskort" loading="lazy">
                <p class="article-styling">Skrevet af <span class="bold-styling">Majbrit Kjær</span> d.
                    03-09-2024
                    i <span class="bold-styling">Nyheder</span>
                </p>
                <h3>Nye rabies regler træder i kraft</h3>
                <p>Den 1. Januar 2025 træder en ny regel i kraft om at man ikke længere må importere hvalpe med den
                    såkaldte hvalpe/killingeerklæring. Erklæringen gør det muligt at flytte hunde, katte og fritter
                    ind i Danmark uden at dyret har en rabiesvaccine der er gyldig.
                </p>
                <p>Det er fødevarestyrelsen som har vurderet at risikoen for at får rabiessmitte til landet er alt
                    for stor ved, at kunne indfører dyr på hvalpe/killingeerklæringen. Fødevarestyrelsen har derfor
                    set sig nødsaget til at ophæve dispensationen for kravet om en gyldig rabiesvaccine. Man kan dog
                    fortsat anvende erklæringen til og med 31. december 2024. </p>
            </div>
            <!-- Right side news previews -->
            <div>
                <h3>Se øvrige nyheder</h3>
                <div class="news-item">
                    <div>
                        <img src="<?php echo get_theme_file_uri('./images/beagle_playing_with_ball.png') ?>" alt="Beagle hund der leger på en græsplæne med en grøn plastikbold" loading="lazy">
                    </div>
                    <div>
                        <p class="article-styling">Skrevet af <span class="bold-styling">Anette Nielsen</span> d.
                            23-07-2024 i <span class="bold-styling">Nyheder</span>
                        </p>
                        <div class="news-text">
                            <h4>Nyt lydighedshold opstart d. 1. oktober</h4>
                            <p>At have en hund som en følgesvend kan være en af de mest givende oplevelser, men det
                                kræver også en betydelig indsats og tid. Lydighedstræning er en afgørende del af at have
                                en velopdragen hund. Det handler om at lære din hund at adlyde dine kommandoer og være i
                                stand til at styre dens adfærd…<a class="readmore-link" href="">Læs mere</a></p>
                        </div>
                    </div>
                </div>
                <div class="news-item">
                    <div>
                        <img src="<?php echo get_theme_file_uri('./images/Woman_washing_dog.jpg') ?>" alt="kvinde der børster en hund med en Furminator-børste" loading="lazy">
                    </div>
                    <div>
                        <p class="article-styling">Skrevet af <span class="bold-styling">Niels Burgenheim</span> d.
                            10-09-2024 i <span class="bold-styling">Tips&Tricks</span>
                        </p>
                        <div class="news-text">
                            <h4>Ny artikel: Pelspleje din hund</h4>
                            <p>Med over 300 forskellige hunderacer er der også mange forskellige typer pels. Hundens
                                pels har gennem århundrederne nemlig tilpasset sig de forskellige krav. Hos mange hunde
                                består pelsen af dækhår og en isolerende underuld…<a class="readmore-link" href="">Læs mere</a></p>
                        </div>
                    </div>
                </div>
                <div class="news-item">
                    <div>
                        <img src="<?php echo get_theme_file_uri('./images/beagle_playing_with_stick.png') ?>" alt="Beagle hund der leger på en pind" loading="lazy">
                    </div>
                    <div>
                        <p class="article-styling">Skrevet af <span class="bold-styling">Majbrit Kjær</span> d.
                            10-09-2024 i <span class="bold-styling">Nyheder</span>
                        </p>
                        <div class="news-text">
                            <h4>Nye hunde klar til bortadoption</h4>
                            <p>Vi har fået nye hunde klar til adoption! Mød dem her, og se om en af dem kan blive en del
                                af din familie....<a class="readmore-link" href="">Læs mere</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



<?php get_footer(); ?>