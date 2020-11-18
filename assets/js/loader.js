// const loader = document.querySelector('.ldio-xzcazsawlu');
// const sesisatu = document.querySelector('.section-home');
// // const sesidua = document.getElementById('section-content');
// // const sesitiga = document.getElementById('section-footer');

// function init() {
// 	setTimeout(() => {
// 		loader.style.opacity = 0;
// 		loader.style.display = 'none';

// 		sesisatu.style.display = 'block';
// 		// sesidua.style.display = 'block';
// 		// sesitiga.style.display = 'block';
// 		setTimeout(() => (sesisatu.style.opacity = 1), 50);
// 	}, 2800);
// }

// init();

let fadeTarget = document.querySelector(".loading")

function showloader() {
	fadeTarget.style.display = "block";
}

function hideloader() {
	fadeTarget.style.display = "none";
	let fadeEfect = setInterval(() => {
		if (!fadeTarget.style.opacity) {
			fadeTarget.style.opacity = 1;
		}

		if (fadeTarget.style.opacity > 0) {
			fadeTarget.style.opacity -= 0.1;
		} else {
			clearInterval(fadeEfect);
			fadeTarget.style.display = "none"
		}
	}, 1)
}
