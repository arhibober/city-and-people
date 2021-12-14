<?php

function cityandpeople_customize_register($wp_customize)
{
    cityandpeople_social_customizer_section($wp_customize);
    cityandpeople_misc_customizer_section($wp_customize);
}

/*
 * Функция обработки текстовых значений, перед их сохранением в базу
 */
function cityandpeople_sanitize($value)
{
    return strip_tags(stripslashes($value)); // обрезаем слеши и HTML-теги
}
