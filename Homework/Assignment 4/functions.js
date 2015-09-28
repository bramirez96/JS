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