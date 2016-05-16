<?php

$id = $id ? "id='$id'" : '';
$height = $height ? "height: $height;" : '';

$position_x = 'custom' === $position_x_value ? $position_x_custom : $position_x_value;
$position_y = 'custom' === $position_y_value ? $position_y_custom : $position_y_value;

$size = 'custom' === $size_value ? $size_custom : $size_value;

$color = "linear-gradient($overlay, $overlay)";

echo <<<HTML
<div $id class="background-image $class" style="$style $height
background: $color, url($image) $position_x $position_y/$size $repeat $origin $attachment;
"></div>
HTML;
