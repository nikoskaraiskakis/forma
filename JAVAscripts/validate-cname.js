function  val_cname(input,input_error) {
	var check_str = document.getElementById(input).value;

	if ( check_str.length >= 1) {
		document.getElementById(input_error).innerHTML = "";
	}
	else {
		document.getElementById(input_error).innerHTML = " Παρακαλούμε συμπληρωστε το πεδίο Επωνυμία";
	}
}