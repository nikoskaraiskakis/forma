function val_afm(input,input_error) {
	var check_str = document.getElementById(input).value;
	var flag = 0;
	var re2 = /^[0-9]+$/;

	if ( check_str.length >= 1) {
		document.getElementById(input_error).innerHTML = "";
		flag = 1;
	}
	else {
		document.getElementById(input_error).innerHTML = " Παρακαλούμε συμπληρωστε το πεδίο ΑΦΜ";
	}

	if (flag) {
		if ( ! re2.test(check_str) ) {
			document.getElementById(input_error).innerHTML = "Το ΑΦΜ πρεπει να περιέχει μόνο αριθμούς";
		}
		else if ( ! check_str.length == 9 ) {
			document.getElementById(input_error).innerHTML = "Το ΑΦΜ πρέπει να περιέχει ακριβώς 9 ψηφία";
		}
		else {
			document.getElementById(input_error).innerHTML = "";
		}
	}


}