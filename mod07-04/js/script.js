function changeBackgroundColor() {
	var newColor = document.getElementById("newBackgroundColor").value;
	// console.log(newColor);

	switch (newColor) {
		case "red":
			document.getElementById("mainWrapper").style.backgroundColor = "red"
			document.getElementById("theMessage").innerHTML = "Your new background color is Red!"
			document.getElementById("header1").style.color = "black"
		break;

		case "orange":
			document.getElementById("mainWrapper").style.backgroundColor = "orange"
			document.getElementById("theMessage").innerHTML = "Your new background color is Orange!"
		break;

		case "yellow":
			document.getElementById("mainWrapper").style.backgroundColor = "yellow"
			document.getElementById("theMessage").innerHTML = "Your new background color is Yellow!"
		break;

		case "green":
			document.getElementById("mainWrapper").style.backgroundColor = "green"
			document.getElementById("theMessage").innerHTML = "Your new background color is Green!"
		break;

		case "blue":
			document.getElementById("mainWrapper").style.backgroundColor = "blue"
			document.getElementById("theMessage").innerHTML = "Your new background color is Blue!"
		break;

		case "indigo":
			document.getElementById("mainWrapper").style.backgroundColor = "indigo"
			document.getElementById("theMessage").innerHTML = "Your new background color is Indigo!"
		break;

		case "violet":
			document.getElementById("mainWrapper").style.backgroundColor = "violet"
			document.getElementById("theMessage").innerHTML = "Your new background color is Violet!"
		break;

	}
}