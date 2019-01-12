function val_user(input,input_error) {
	var check_str = document.getElementById(input).value;
	var flag = 0;
	var re1 = /^[A-Za-z]+$/;
	var re2 = /^[0-9]+$/;

	if ( check_str.length >= 1) {
		document.getElementById(input_error).innerHTML = "";
		flag = 1;
	}
	else {
		document.getElementById(input_error).innerHTML = " Παρακαλούμε συμπληρωστε το πεδίο Username";
	}

	if (flag) {
		if ( re1.test(check_str) || re2.test(check_str) ) {
			document.getElementById(input_error).innerHTML = "Το Username πρεπει να περιέχει και γράμματα και αριθμούς";
		}
		else if ( check_str.length < 5 || check_str > 10 ) {
			document.getElementById(input_error).innerHTML = "Το Username πρέπει να περιέχει το πολύ 10 και τουλάχιστον 5 χαρακτήρες";
		}
		else {
			document.getElementById(input_error).innerHTML = "";
		}
	}


}