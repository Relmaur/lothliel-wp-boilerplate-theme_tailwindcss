<?php

function loth_theme_customizer($wp_customize)
{

    $wp_customize->add_section('loth-themeinfo-section', array(
        'title' => 'Theme Info'
    ));

    /*===== Social Media =====*/
    function displaySocialMedia($wp_customize, $social_media)
    {
        $wp_customize->add_setting("loth-themeinfo-display-{$social_media}", array(
            'default' => 'Yes'
        ));
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            "loth-theme-display-{$social_media}-control",
            array(
                'label' => "[Pagewide] Display {$social_media}?",
                'section' => "loth-themeinfo-section",
                'settings' => "loth-themeinfo-display-{$social_media}",
                'type' => 'select',
                'choices' => array('No' => 'No', 'Yes' => 'Yes')
            )
        ));
    }

    displaySocialMedia($wp_customize, 'facebook');
    displaySocialMedia($wp_customize, 'twitter');
    displaySocialMedia($wp_customize, 'instagram');
    displaySocialMedia($wp_customize, 'linkedin');

    /*===== ...Social Media =====*/

    /*===== Footer Logo =====*/
    $wp_customize->add_setting('loth-themeinfo-footerlogo');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control(
        $wp_customize,
        'loth-theme-footerlogo-control',
        array(
            'label' => '[Footer] Logo',
            'section' => 'loth-themeinfo-section',
            'settings' => 'loth-themeinfo-footerlogo',
            'width' => 216,
            'height' => 66,
        )
    ));
    /*===== ...Footer Logo =====*/
}

add_action('customize_register', 'loth_theme_customizer');
