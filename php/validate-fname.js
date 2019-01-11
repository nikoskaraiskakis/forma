function val_fname(input,input_error) {
	var check_str = document.getElementById(input).value;
	var flag = 0;
	var re1 = /^[Α-Ωα-ω]+$/;
	var re2 = /^[A-Za-z]+$/;

	if ( check_str.length >= 1) {
		document.getElementById(input_error).innerHTML = "";
		flag = 1;
	}
	else {
		document.getElementById(input_error).innerHTML = " Παρακαλούμε συμπληρωστε το πεδίο Ονομα";
	}

	if(re1.test(check_str) && re2.test(check_str) ){
		document.getElementById(input_error).innerHTML = "Το όνομα μπορεί να περιέχιε μόνο ελληνικούς ή μόνο λατινικούς χαρακτήρες";
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