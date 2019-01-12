function  val_em(input,input_error) {
	var check_str = document.getElementById(input).value;
	var flag = 0;
	var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	if ( check_str.length >= 1) {
		document.getElementById(input_error).innerHTML = "";
		flag = 1;
	}
	else {
		document.getElementById(input_error).innerHTML = " Παρακαλούμε συμπληρωστε το πεδίο email";
	}

	if (flag) {
		if ( ! re.test(check_str) ) {
			document.getElementById(input_error).innerHTML = "Το email δεν είναι έγκυρο";
		}
		else {
			document.getElementById(input_error).innerHTML = "";
		}
	}


}