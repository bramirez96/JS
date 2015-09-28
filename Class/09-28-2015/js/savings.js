//JavaScript Document
//Brandon Ramirez
//CIS-14a JavaScript
//09/28/2015
//Purpose: Write functions
function save1(pv, i, n) {
	for (var year=1; year<=n; year++){
		pv*=(1+i);
	}
	return pv;
}
function save2(pv, i, n) {
	return pv * Math.pow(1 + i, n);
}
function save3(pv, i, n) {
	return pv * Math.exp(n * Math.log(1 + i));
}
function save4(pv, i, n) {
	if (n<=0) return pv;
	return save4(pv, i, n - 1)*(1 + i);
}
function save5(pv, i, n) {
	//Declare array
	fv = [pv];
	//Calculate all values
	for (var year = 1; year<=n; year++) {
		fv[year] = fv[year-1] * (1 + i);
	}
	return fv;
}
function disp(anArray) {
	document.write("<table><tr><th>Year</th><th>Savings</th></tr>");
	for (var year in anArray) {
		document.write("<tr>");
		document.write("<td>" + year + "</td>");
		document.write("<td>$" + anArray[year].toFixed(2) + "</td>");
		document.write("</tr>");
	}
	document.write("</table>");
}