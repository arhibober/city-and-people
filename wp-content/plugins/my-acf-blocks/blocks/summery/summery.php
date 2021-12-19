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
$town_born = get_field('town_born') ?: 'Town of born';
$description = get_field('description') ?: 'Description';

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="card  p-3">
        <img src="<?php echo $portrait; ?>" class="card-img-top " alt="Card image" style="width:100%" />
        <div class="card-body">
            <h4 class="card-title"><?php echo "$name $surname"; ?></h4>
            <p class="card-text"><?php _e("Was born:");
echo "&nbsp;$date_born, $town_born";?></p>
            <p class="card-text"><?php echo "$description"; ?></p>
        </div>
    </div>
</div>