const loader = document.querySelector('.loader');
const sesisatu = document.querySelector('.section-content');

function init() {
	setTimeout(() => {
		loader.style.opacity = 0;
		loader.style.display = 'none';

		sesisatu.style.display = 'block';
		setTimeout(() => (sesisatu.style.opacity = 1), 50);
	}, 2800);
}

init();
