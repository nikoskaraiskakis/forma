function val_lname(input,input_error) {
	var check_str = document.getElementById(input).value;
	var flag = 0;
	var re1 = /[Α-Ωα-ω]/;
	var re2 = /[A-Za-z]/;
	var symbols = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
	var numbers = /\d/;

	if ( check_str.length >= 1) {
		document.getElementById(input_error).innerHTML = "";
		flag = 1;
	}
	else {
		document.getElementById(input_error).innerHTML = " Παρακαλούμε συμπληρωστε το πεδίο Επίθετο";
	}

	if (flag) {
		if((re1.test(check_str)) && (re2.test(check_str)) ){
		document.getElementById(input_error).innerHTML = "Το επίθετο μπορεί να περιέχει μόνο ελληνικούς ή μόνο λατινικούς χαρακτήρες";
		}
		if (symbols.test(check_str) || numbers.test(check_str) ) {
			document.getElementById(input_error).innerHTML = "Το επίθετο δεν μπορεί να περιέχει αριθμούς ή σύμβολα";
		}
		else {
			document.getElementById(input_error).innerHTML = "";
		}
	}
}

/*

                  		<label class="signup-info" style="margin-top: 100px;">ΕΠΙΘΕΤΟ :</label><input id="fname_inp" onChange="val_lname('lname_inp','lname_err');" type = "text" name = "user" class = "box"/><br /><br />

                  		<div id="lname_err" style="color: red;"></div>

     */             		