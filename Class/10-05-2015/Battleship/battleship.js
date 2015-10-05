//Create the table
var loc1 = Math.floor(Math.random()*5) + 1;
var loc2 = loc1 + 1;
var loc3 = loc2 + 1;
var hit1 = false;
var hit2 = false;
var hit3 = false;
var guesses = 0;
var maxGuess = 5;
//Loop to sink battleship
do {
	var x = prompt("What's your guess? Enter a number from 1 - 7!");
	while (isNaN(x) || x == "" || x <= 0 || x >= 8) x = prompt("You didn't enter a valid number from 1 - 7!");
	if (x == loc1) {
		if (hit1 == true) {
			alert("You've already hit that!");
			guesses++;
		} else {
			alert("You hit me!");
			guesses++;
			hit1 = true;
		}
	} else if (x == loc2) {
		if (hit2 == true) {
			alert("You've already hit that!");
			guesses++;
		} else {
			alert("You hit me!");
			guesses++;
			hit2 = true;
		}
	} else if (x == loc3) {
		if (hit3 == true) {
			alert("You've already hit that!");
			guesses++;
		} else {
			alert("You hit me!");
			guesses++;
			hit3 = true;
		}
	} else {
		alert("You missed!");
		guesses++;
	}
} while ((hit1 == false || hit2 == false || hit3 == false) && guesses < maxGuess);
if (hit1 == false || hit2 == false || hit3 == false) alert("You didn't sink my battleship! You fucking scrub!");
else alert("Congrats! You sunk my battleship in " + guesses + " tries!")