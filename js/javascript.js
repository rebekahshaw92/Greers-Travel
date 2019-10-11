	window.onload = copyrightYear();

	const copyrightYear = () => {
		const today = new Date();
		const year = today.getFullYear();

		document.getElementById("copyright_span").innerHTML = year;
	}
