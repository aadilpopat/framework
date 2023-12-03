<?php
$image1 = get_field('image_1');
$image2 = get_field('image_2');
$image3 = get_field('image_3');
$image4 = get_field('image_4');
$image5 = get_field('image_5');
$image6 = get_field('image_6');
$image7 = get_field('image_7');
?>

<div class="image-grid container grid grid-cols-12 gap-20 mb-160">
	<img class="col-span-8 w-full h-[525px] object-cover" src="<?= $image1['url'] ?>" />
	<img class="col-span-4 w-full h-[525px] object-cover" src="<?= $image2['url'] ?>" />
	<img class="col-span-12 w-full h-[489px] object-cover" src="<?= $image3['url'] ?>" />
	<img class="col-span-6 w-full h-[670px] object-cover" src="<?= $image4['url'] ?>" />
	<img class="col-span-6 w-full h-[670px] object-cover" src="<?= $image5['url'] ?>" />
	<img class="col-span-4 w-full h-[371px] object-cover" src="<?= $image6['url'] ?>" />
	<img class="col-span-8 w-full h-[371px] object-cover" src="<?= $image7['url'] ?>" />
	<!-- ... -->
</div>
