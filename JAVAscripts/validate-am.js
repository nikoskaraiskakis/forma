function val_am(input,input_error) {
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
		document.getElementById(input_error).innerHTML = " Παρακαλούμε συμπληρωστε το πεδίο Αριθμός Μητρώου";
	}


	if (flag) {
		if((re1.test(check_str)) || (re2.test(check_str)) || symbols.test(check_str)){
			document.getElementById(input_error).innerHTML = "Ο Αριθμός Μητρώου μπορεί να περιέχει μόνο αριθμούς";
		}
		else {
			document.getElementById(input_error).innerHTML = "";
		}
	}
}