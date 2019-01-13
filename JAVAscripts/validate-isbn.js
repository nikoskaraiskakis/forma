function val_isbn(input,input_error) {
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
		document.getElementById(input_error).innerHTML = " Παρακαλούμε συμπληρωστε το πεδίο ISBN";
	}


	if (flag) {
		if((re1.test(check_str)) || (re2.test(check_str) || symbols.test(check_str)) ){
			document.getElementById(input_error).innerHTML = "Το πεδίο ISBN μπορεί να περιέχει μόνο αριθμούς";
		}
		else if (check_str.length != 13){
			document.getElementById(input_error).innerHTML = "Το πεδίο ISBN πρέπει να έχει μήκος 13";
		}
		else {
			document.getElementById(input_error).innerHTML = "";
		}
	}
}