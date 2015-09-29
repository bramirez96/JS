//Initialize 2D array for use with following functions
var x = [[], [], [], [], []];
var dblTime = 20;
var trpTime = 40;
var taxRate = .1;

//Create aarray function is returning not a number to values in the last columns
function createArray(anArray, min, max, inc) {
	for (var hour = min, i = 0; hour <= max; hour += inc, i++) {
		anArray[0].push(hour);
		anArray[1].push(grossPay(hour).toFixed(2));
		anArray[2].push(grossRate(anArray[1][i], hour).toFixed(2));
		anArray[3].push(grossTax(anArray[1][i]).toFixed(2));
		anArray[4].push(netPay(anArray[1][i], anArray[3][i]).toFixed(2));
	}
}
function grossPay(hour) {
	var x = hour <= dblTime ? hour * payRate : (
	        hour <= trpTime ? dblTime * payRate + (hour - dblTime) * payRate * 2 : (
			                  dblTime * payRate + (hour - trpTime) * payRate * 3 + (trpTime - dblTime) * payRate * 2));
	return x;
 }
function grossRate(gross, hour) {
	if (hour == 0) return 0;
	else return gross / hour;
}
function grossTax(gross) {
	return gross * taxRate;
}
function netPay(gross, tax) {
	return gross - tax;
}
//Create Table function works
function createTable(anArray) {
	var tbl = document.getElementById("tableBody");
	while (tbl.lastChild) {
		tbl.removeChild(tbl.lastChild);
	}
	for (var i = 0; i < anArray[0].length; i++) {
		var tr = tbl.insertRow();
		for (var y = 0; y < anArray.length; y++) {
			var td = tr.insertCell();
			td.appendChild(document.createTextNode(anArray[y][i]));
		}
	}
}
//The problem is in here somewhere....
function doTheThing() {
	//Declare Variables
	minHour = document.getElementById("minHour").value;
	maxHour = document.getElementById("maxHour").value;
	incHour = document.getElementById("incHour").value;
	payRate = document.getElementById("payRate").value; //$/hr
	//Calculate and push values to arrays using
	//functions called from external file
	createArray(x, minHour, maxHour, incHour);
	createTable(x);
}