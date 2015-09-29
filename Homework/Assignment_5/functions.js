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
	var x = hour <= dblTime ? hour * payRate :
	        hour <= trpTime ? dblTime * payRate + (hour - dblTime) * payRate * 2 :
			                  dblTime * payRate + (hour - trpTime) * payRate * 3 + (trpTime - dblTime) * payRate * 2;
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
 function createTable(anArray) {
	 document.write("<table>");
	 document.write("<tr> \
						<th>Hours</th>\
						<th>Gross Pay</th>\
						<th>Pay Rate</th>\
						<th>Income Tax</th>\
						<th>Net Pay</th>\
					 <tr>");
	 for (var i = 0; i < anArray[0].length; i++) {
		 document.write("<tr>\
							<td>" + anArray[0][i] + "</td> \
							<td>$" + anArray[1][i] + "</td> \
							<td>$" + anArray[2][i] + " / hr</td> \
							<td>$" + anArray[3][i] + "</td> \
							<td>$" + anArray[4][i] + "</td> \
						 </tr>")
	 }
	 document.write("</table>");
 } 