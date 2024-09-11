<?php

// Function for custom heroBanner
function sejr_davidsens_heroBanner()
{
?>
    <div class="heroBanner-section heroBanner-img" style="background-image: url(<?php echo get_theme_file_uri('XXXX INDSÆT STI XXXX') ?>);">
        <div class="gradient-container">
            <h1 class="heroBanner-title-light"><?php the_title(); ?></h1>
        </div>
    </div>
<?php
}

// Function for stylesheets
function sejr_davidsens_files()
{
    wp_enqueue_script('sejr_davidsens_main_scripts', get_theme_file_uri('/script/main.js'), NULL, '1.0', true);
    wp_enqueue_style('sejr_davidsens_main_styles', get_theme_file_uri('/css/base.css'));
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css', array(), NULL);
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Mina:wght@400;700&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array(), NULL);
}

// Add stylesheets
add_action('wp_enqueue_scripts', 'sejr_davidsens_files');

// Function for title tag in browser 
function sejr_davidsens_features()
{
    add_theme_support('title-tag');
}

// Add title tag via WordPress event
add_action('after_setup_theme', 'sejr_davidsens_features');

add_action('init', 'sejr_og_davidsen_posttypes');
