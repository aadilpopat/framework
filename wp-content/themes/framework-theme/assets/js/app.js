// Grab HTML Elements
const menuToggleButton = document.querySelector('button.mobile-menu-button');
const menuToggleIcon = document.querySelector(
	'button.mobile-menu-button > img'
);
const menu = document.querySelector('.mobile-menu');
const logo = document.querySelector(
	'.navigation > .container > .text-site-logo'
);

// Add Event Listeners
menuToggleButton.addEventListener('click', () => {
	menuToggleButton.classList.toggle('open');
	document.body.classList.toggle('overflow-hidden');

	//Menu
	if (menu.classList.contains('hidden')) {
		menu.classList.remove('hidden');
		menu.classList.add('flex');
	} else {
		menu.classList.remove('flex');
		menu.classList.add('hidden');
	}

	//Menu Toggle Image Change
	if (menuToggleButton.classList.contains('open')) {
		menuToggleIcon.src =
			'/wp-content/themes/framework-theme/assets/images/close-menu-icon.svg';
	} else {
		menuToggleIcon.src =
			'/wp-content/themes/framework-theme/assets/images/hamburger-menu-icon.svg';
	}

	// Logo Change Text Colour
	if (logo.classList.contains('text-green-100')) {
		logo.classList.remove('text-green-100');
		logo.classList.add('text-white-100');
	} else {
		logo.classList.add('text-green-100');
		logo.classList.remove('text-white-100');
	}
});
