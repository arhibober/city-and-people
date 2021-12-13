<?php

function bootkit_social_customizer_section($wp_customize)
{

    $wp_customize->add_section('bootkit_social_section', [
        'title' => __('Bootkit Social Settings', 'bootkit'),
        'priority' => 30,
    ]);

    $wp_customize->add_setting('bootkit_facebook_handle', [
        'default' => '',
    ]);

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'bootkit_social_facebook_input',
        array(
            'label' => __('Facebook', 'bootkit'),
            'section' => 'bootkit_social_section',
            'settings' => 'bootkit_facebook_handle',
        )
    ));

    $wp_customize->add_setting('bootkit_instagram_handle', array(
        'default' => '',
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'bootkit_social_instagram_input',
        array(
            'label' => __('Instagram', 'bootkit'),
            'section' => 'bootkit_social_section',
            'settings' => 'bootkit_instagram_handle',
            'type' => 'text',
        )
    ));

    $wp_customize->add_setting('bootkit_email', array(
        'default' => '',
    ));

    $wp_customize->add_setting('bootkit_phone_number', array(
        'default' => '',
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'bootkit_social_email_input',
        array(
            'label' => __('Email', 'udemy'),
            'section' => 'bootkit_social_section',
            'settings' => 'bootkit_email',
            'type' => 'text',
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'bootkit_social_phone_number_input',
        array(
            'label' => __('Phone Number', 'udemy'),
            'section' => 'bootkit_social_section',
            'settings' => 'bootkit_phone_number',
            'type' => 'text',
        )
    ));
}