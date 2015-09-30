function createArray() {
	//Declare variables
	var x = [[], [], [], [], []];
	var dblTime = document.getElementById("dblTime").value * 1;
	var trpTime = document.getElementById("trpTime").value * 1;
	var minHour = document.getElementById("minHour").value * 1;
	var maxHour = document.getElementById("maxHour").value * 1;
	var incHour = document.getElementById("incHour").value * 1;
	var taxRate = document.getElementById("taxRate").value / 100;
	var payRate = document.getElementById("payRate").value * 1;
	for (var hour = minHour, i = 0; hour <= maxHour; hour += incHour, i++) {
		x[0][i] = hour;
		x[1][i] = grossPay(hour, dblTime, trpTime, payRate);
		x[2][i] = grossRate(hour, x[1][i]);
		x[3][i] = incomeTax(x[1][i], taxRate);
		x[4][i] = netPay(x[1][i], x[3][i]);
	}
	
	return x;
}
function createTable(anArray) {
	var tbl = document.getElementById("tableBody");
	while (tbl.lastChild) {
		tbl.removeChild(tbl.lastChild);
	}
	for (var i = 0; i < anArray[0].length; i++) {
		var tr = tbl.insertRow();
		for (var y = 0; y < anArray.length; y++) {
			var td = tr.insertCell();
			if (y == 0) td.appendChild(document.createTextNode(anArray[y][i]));
			else td.appendChild(document.createTextNode("$" + anArray[y][i].toFixed(2)));
		}
	}
}
//Math operations
function grossPay(hour, dTime, tTime, wage) {
	var ans;
	if (hour <= dTime) {
		ans = hour * wage;
	} else if (hour <= tTime) {
		ans = wage * dTime + (hour - dTime) * wage * 2;
	} else {
		ans = wage * dTime + (tTime - dTime) * wage * 2 + (hour - tTime) * wage * 3;
	}
	return ans;
}
function grossRate(hour, wage) {
	var ans;
	if (hour == 0) ans = 0;
	else ans = wage / hour;
	return ans;
}
function incomeTax(wage, rate) {
	var ans = wage * rate;
	return ans;
}
function netPay(gross, tax) {
	var ans = gross - tax;
	return ans;
}

















