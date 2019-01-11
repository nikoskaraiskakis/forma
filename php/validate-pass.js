function val_pass(input,input_error) {
	var check_str = document.getElementById(input).value;
	var flag = 0;
	var re = /^[0-9A-Za-z]+$/;

	if ( check_str.length >= 1) {
		document.getElementById(input_error).innerHTML = "";
		flag = 1;
	}
	else {
		document.getElementById(input_error).innerHTML = " Παρακαλούμε συμπληρωστε το πεδίο Κωδικός Πρόσβασης";
	}

	if (flag) {
		if (! re.test(check_str) ) {
			document.getElementById(input_error).innerHTML = "Ο κωδικός δεν μπορεί να περιέχει σύμβολα";
		}
		else {
			document.getElementById(input_error).innerHTML = "";
		}
	}
}


/*

                  		<label class="signup-info" style="margin-top: 100px;">ΚΩΔΙΚΟΣ ΠΡΟΣΒΑΣΗΣ :</label><input id="pass_inp" onChange="val_pass('pass_inp','pass_err');" type = "text" name = "user" class = "box"/><br /><br />

                  		<div id="pass_err" style="color: red;"></div>

     */   