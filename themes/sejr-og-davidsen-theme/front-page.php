<?php get_header();

sejr_davidsens_heroBanner_Frontpage();

?>

<main>
    <div class="top-section">
        <div>
            <h2>Vi er en større, velrenommeret dyrepension i Nordjylland med hundepension, internat og adoption.
            </h2>
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
        <div class="image-content">
            <img src="<?php echo get_theme_file_uri('./images/tree_small_dogs.JPG')?>" alt="three little dogs" loading="lazy">
        </div>
    </div>

    <div class="adoption-options">
        <div class="card">
            <img src="./img/dogwithtwopeople.jpg" alt="Dyr til adoption">
            <a href="#">Dyr til adoption</a>
        </div>
        <div class="card">
            <img src="./img/dogingrass.jpg" alt="Før du adopterer">
            <a href="#">Før du adopterer</a>
        </div>
        <div class="card">
            <img src="./img/dogandkids.png" alt="Internat og adoption">
            <a href="#">Internat og adoption</a>
        </div>
    </div>

    <div class="news-section">
        <h2>Nyheder</h2>
        <div class="news-grid">
            <!-- Left news article -->
            <div class="news-left">
                <h3>Aktuel</h3>
                <img src="./img/rabies.jpg" alt="Ny rabies regler">
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
            <div class="news-right">
                <h3>Se øvrige nyheder</h3>

                <div class="news-item">
                    <img src="./img/dog-with-a-ball.jpg" alt="Lydighedshold">
                    <div class="news-text">
                        <h4>Nyt lydighedshold opstart d. 1. oktober</h4>
                        <p>At have en hund som en følgesvend kan være en af de mest givende oplevelser, men det
                            kræver også en betydelig indsats og tid. Lydighedstræning er en afgørende del af at have
                            en velopdragen hund. Det handler om at lære din hund at adlyde dine kommandoer og være i
                            stand til at styre dens adfærd…</p>
                    </div>
                </div>

                <div class="news-item">
                    <img src="./img/pelspleje.jpg" alt="Pelspleje">
                    <div class="news-text">
                        <h4>Ny artikel: Pelspleje din hund</h4>
                        <p>Med over 300 forskellige hunderacer er der også mange forskellige typer pels. Hundens
                            pels har gennem århundrederne nemlig tilpasset sig de forskellige krav. Hos mange hunde
                            består pelsen af dækhår og en isolerende underuld…</p>
                    </div>
                </div>

                <div class="news-item">
                    <img src="./img/dog-with-a-stick.jpg" alt="Nye hunde klar til adoption">
                    <div class="news-text">
                        <h4>Nye hunde klar til bortadoption</h4>
                        <p>Vi har fået nye hunde klar til adoption! Mød dem her, og se om en af dem kan blive en del
                            af din familie.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



<?php get_footer(); ?>