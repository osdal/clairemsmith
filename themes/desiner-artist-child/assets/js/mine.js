window.addEventListener("load", function () {
	const circleType = new CircleType(document.querySelector('.site_name h1'))
		.radius(800);
	const circleTypeFooter = new CircleType(document.querySelector('.site-name-footer .site-name'))
		.radius(500);


	let inspiring = this.document.querySelector('.heding-title h2');
	let inspiringHTML = inspiring.innerHTML;
	let word = inspiringHTML.split(' ');
	let wrappedSentence = "";
	for (let i = 0; i < word.length; i++) {
		wrappedSentence += "<span>" + word[i] + "</span> ";
	}
	inspiring.innerHTML = wrappedSentence;
	console.log(inspiring);
	console.log('11111111111111111111111');


})


