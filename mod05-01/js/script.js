		function changeImage() {
			document.getElementById("attr").src = "img/Image2.jpg";
		}

		function changeColor() {
			document.getElementById("css").style.color = "yellow";
		}

		function computeSum() {
			var a = document.getElementById("input1").value;
			var b = document.getElementById("input2").value;
			var sum = parseInt(a) + parseInt(b);
			document.getElementById("sum").innerHTML = sum;
		}