window.addEventListener("load", function () {

	const circleType = new CircleType(document.querySelector('.inner_carousel a'))
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

});