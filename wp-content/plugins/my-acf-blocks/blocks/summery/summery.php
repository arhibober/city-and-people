<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'summery-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'summery';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$name = get_field('name');
$surname = get_field('surname');
$portrait = get_field('portrait') ?: 'Portrait';
$date_born = get_field('date_born') ?: 'Date of born';

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="mab-summery">
        <div class="mab-summery-text"><?php echo $name; ?></div>
        <div class="mab-summery-text"><?php echo $surname; ?></div>
        <div class="mab-summery-image"><img src="<?php echo $portrait; ?>" /></div>
        <div class="mab-summery-text"><?php echo $date_born; ?></div>
</div>
</div>