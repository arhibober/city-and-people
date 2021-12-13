<?php

function bootkit_customize_register($wp_customize)
{
    bootkit_social_customizer_section($wp_customize);
    bootkit_misc_customizer_section($wp_customize);
    // print_r($wp_customize);

    // $wp_customize->add_section(
    //     'bootkit_display_options',
    //     [
    //         'title' => 'Отображение',
    //         'priority' => 200,
    //         'description' => 'Настройте внешний вид вашего сайта', // описание не обязательное
    //     ]
    // );
    // // Текст копирайта в футере
    // $wp_customize->add_setting(
    //     'bootkit_footer_copyright_text', // id
    //     [
    //         'default' => 'Все права защищены', // текст по умолчанию
    //         'sanitize_callback' => 'bootkit_sanitize', // функция, обрабатывающая значение поля при сохранении
    //         'transport' => $bootkit_transport,
    //     ]
    // );
    // $wp_customize->add_control(
    //     'bootkit_footer_copyright_text', // id
    //     [
    //         'section' => 'bootkit_display_options', // id секции
    //         'label' => 'Копирайт',
    //         'type' => 'text', // текстовое поле
    //     ]
    // );

}

/*
 * Функция обработки текстовых значений, перед их сохранением в базу
 */
function bootkit_sanitize($value)
{
    return strip_tags(stripslashes($value)); // обрезаем слеши и HTML-теги
}