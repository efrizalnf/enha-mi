const loader = document.querySelector('.loader');
const sesisatu = document.getElementById('section-head');
const sesidua = document.getElementById('section-content');
const sesitiga = document.getElementById('section-footer');

function init() {
	setTimeout(() => {
		loader.style.opacity = 0;
		loader.style.display = 'none';

		sesisatu.style.display = 'block';
		sesidua.style.display = 'block';
		sesitiga.style.display = 'block';
		setTimeout(() => (sesisatu.style.opacity = 1), (sesidua.style.opacity = 1), (sesitiga.style.opacity = 1), 50);
	}, 2800);
}

init();
