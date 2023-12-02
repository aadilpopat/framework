<?php
$image1 = get_field('image_1');
$image2 = get_field('image_2');
$image3 = get_field('image_3');
$image4 = get_field('image_4');
$image5 = get_field('image_5');
$image6 = get_field('image_6');
$image7 = get_field('image_7');
?>

<div class="container columns-2 h-[525px]">
	<img class="h-full max-w-[820px]" src="<?= $image1['url'] ?>" />
	<img class="h-full" src="<?= $image2['url'] ?>" />
	<!-- ... -->
</div>
