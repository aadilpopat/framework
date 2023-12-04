<?php
$image1 = get_field('image_1');
$image2 = get_field('image_2');
$image3 = get_field('image_3');
$image4 = get_field('image_4');
$image5 = get_field('image_5');
$image6 = get_field('image_6');
$image7 = get_field('image_7');

// Desktop Image Heights
$row1Height = '525px';
$row2Height = '489px';
$row3Height = '670px';
$row4Height = '371px';

//Mobile Image Height
$mobileHeight1= '335px';
$mobileHeight2= '400px';
?>

<div class="image-grid container mb-80 grid grid-cols-6 gap-20 md:grid-cols-12 md:mb-160">
	<img class="col-span-6 w-full h-[<?= $mobileHeight1 ?>] object-cover md:col-span-8 md:h-[<?= $row1Height ?>]" src="<?= $image1['url'] ?>" alt='<?= $image1['alt'] ?>' />
	<img class="col-span-6 w-full h-[<?= $mobileHeight2 ?>] object-cover md:col-span-4 md:h-[<?= $row1Height ?>]" src="<?= $image2['url'] ?>" alt='<?= $image2['alt'] ?>' />
	<img class="col-span-6 w-full h-[<?= $mobileHeight1 ?>] object-cover md:col-span-12 md:h-[<?= $row2Height ?>]" src="<?= $image3['url'] ?>" alt='<?= $image3['alt'] ?>' />
	<img class="col-span-6 w-full h-[<?= $mobileHeight2 ?>] object-cover md:col-span-6 md:h-[<?= $row3Height ?>]" src="<?= $image4['url'] ?>" alt='<?= $image4['alt'] ?>' />
	<img class="col-span-6 w-full h-[<?= $mobileHeight2 ?>] object-cover md:col-span-6 md:h-[<?= $row3Height ?>]" src="<?= $image5['url'] ?>" alt='<?= $image5['alt'] ?>' />
	<img class="col-span-6 w-full h-[<?= $mobileHeight1 ?>] object-cover md:col-span-4 md:h-[<?= $row4Height ?>]" src="<?= $image6['url'] ?>" alt='<?= $image6['alt'] ?>' />
	<img class="col-span-6 w-full h-[<?= $mobileHeight1 ?>] object-cover md:col-span-8 md:h-[<?= $row4Height ?>]" src="<?= $image7['url'] ?>" alt='<?= $image7['alt'] ?>' />
	<!-- ... -->
</div>
