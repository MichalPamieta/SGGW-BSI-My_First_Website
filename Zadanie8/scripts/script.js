function clr() {
	document.getElementById("result").value = "";
}
function calculate() {
	result = document.getElementById("result").value;
	if(result != "") {
		document.getElementById("result").value = (parseFloat(eval(result).toFixed(15))).toString();
	}
	//document.getElementById("result").value = eval(document.getElementById("result").value);
}
function next(param) {
	tmp = document.getElementById("result").value;
	tmp += param;
	document.getElementById("result").value = tmp;
	//document.getElementById("result").value += param;
}
function back() {
	tmp = document.getElementById("result").value;
	tmp = tmp.substring(0, tmp.length-1);
	document.getElementById("result").value = tmp;
	//tmp = document.getElementById("result").value;
	//document.getElementById("result").value = tmp.substring(0, tmp.length-1);
}