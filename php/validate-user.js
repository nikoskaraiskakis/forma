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
		if (! re.test(check_str) ) {
			document.getElementById(input_error).innerHTML = "Το όνομα δεν μπορεί να περιέχει αριθμούς ή σύμβολα";
		}
		else {
			document.getElementById(input_error).innerHTML = "";
		}
	}


}