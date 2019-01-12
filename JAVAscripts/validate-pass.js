function val_pass(input,input_error) {
	var check_str = document.getElementById(input).value;
	var flag = 0;
	var re1 = /^[A-Za-z]+$/;
	var re2 = /^[0-9]+$/;

	if ( check_str.length >= 1) {
		document.getElementById(input_error).innerHTML = "";
		flag = 1;
	}
	else {
		document.getElementById(input_error).innerHTML = " Παρακαλούμε συμπληρωστε το πεδίο Κωδικός Πρόσβασης";
	}

	if (flag) {
		if ( !(re1.test(check_str) || re2.test(check_str)) ) {
			document.getElementById(input_error).innerHTML = "Ο κωδικός μπορεί να περιέχει μόνο λατινικούς χαρακτήρες και αριθμούς";
		}
		else if ( check_str.length < 5 ) {
			document.getElementById(input_error).innerHTML = "Ο κωδικός πρέπει να περιέχει τουλάχιστον 5 χαρακτήρες";
		}
		else {
			document.getElementById(input_error).innerHTML = "";
		}
	}
}


