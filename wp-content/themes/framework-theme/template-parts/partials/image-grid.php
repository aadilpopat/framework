<?php
$image1 = get_field('image_1');
$image2 = get_field('image_2');
$image3 = get_field('image_3');
$image4 = get_field('image_4');
$image5 = get_field('image_5');
$image6 = get_field('image_6');
$image7 = get_field('image_7');

// Desktop Image Heights
$row1Height = 'md:h-[525px]';
$row2Height = 'md:h-[489px]';
$row3Height = 'md:h-[670px]';
$row4Height = 'md:h-[371px]';

//Mobile Image Height
$mobileHeight1= 'h-[335px]';
$mobileHeight2= 'h-[400px]';
?>

<div class="image-grid container mb-80 grid grid-cols-6 gap-20 md:grid-cols-12 md:mb-160">
	<img class="col-span-6 w-full <?= $mobileHeight1 ?> object-cover md:col-span-8 <?= $row1Height ?>" src="<?= $image1['url'] ?>" alt='<?= $image1['alt'] ?>' />
	<img class="col-span-6 w-full <?= $mobileHeight2 ?> object-cover md:col-span-4 <?= $row1Height ?>" src="<?= $image2['url'] ?>" alt='<?= $image2['alt'] ?>' />
	<img class="col-span-6 w-full <?= $mobileHeight1 ?> object-cover md:col-span-12 <?= $row2Height ?>" src="<?= $image3['url'] ?>" alt='<?= $image3['alt'] ?>' />
	<img class="col-span-6 w-full <?= $mobileHeight2 ?> object-cover md:col-span-6 <?= $row3Height ?>" src="<?= $image4['url'] ?>" alt='<?= $image4['alt'] ?>' />
	<img class="col-span-6 w-full <?= $mobileHeight2 ?> object-cover md:col-span-6 <?= $row3Height ?>" src="<?= $image5['url'] ?>" alt='<?= $image5['alt'] ?>' />
	<img class="col-span-6 w-full <?= $mobileHeight1 ?> object-cover md:col-span-4 <?= $row4Height ?>" src="<?= $image6['url'] ?>" alt='<?= $image6['alt'] ?>' />
	<img class="col-span-6 w-full <?= $mobileHeight1 ?> object-cover md:col-span-8 <?= $row4Height ?>" src="<?= $image7['url'] ?>" alt='<?= $image7['alt'] ?>' />
	<!-- ... -->
</div>
