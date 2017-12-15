// var counter = 0;
// while (counter < 10) {
// 	counter.log(counter);
// 	counter = counter + 2;
// }

// var counter = 0;
// while (counter <= 100) {
// 	if (counter % 2 == 0) {
// 		console.log(counter);
		
// 	}
// 	counter = counter + 1;

// }

// var yourName ="Nina Kim Fernandez"

// var counter = 0
// var markup = "";
// while (counter < 10) {
// 	// console.log(yourName);
// 	markup = markup + "<p>" + yourName + "</p>";
// 	// console.log(markup);
// 	counter++;
// }
// document.getElementById("theMessage").innerHTML = markup;



var expression = "";

function updateDisplay(val) {
	expression = expression + val;
	document.getElementById("display").innerHTML = expression;

	// return expression;
}

function computeExpression() {
	// console.log(expression);
	var result = eval(expression);
	document.getElementById("display").innerHTML = result;
}

function clearValue() {
	expression = "";
	
	document.getElementById("display").innerHTML = 0;
}

function deleteDisplay() {
	expression = expression.substr(0, expression.length-1);


	if (expression == "") {
		document.getElementById("display").innerHTML = 0;
	}

	 else {
		document.getElementById("display").innerHTML = expression;
	 	
	 }
}