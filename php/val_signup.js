function re(uinp,inp) {
	var finflag = 0;
	var re1 = /^[A-Za-z]+$/;
	var re2 = /^[0-9]+$/;
	var uname = document.getElementById(uinp).value;

	var flag = 0;
	if ( uname.length >= 1) {
		flag = 1;
	}
	else {
		finflag = 1;
	}

	if (flag) {
		if ( re1.test(uname) || re2.test(uname) ) {
			finflag = 1;
		}
		else if ( uname.length < 5 || uname > 10 ) {
			finflag = 1;
		}
	}


	if ( finflag == 1 ) {
		document.getElementById(inp).innerHTML = "Παρακαλώ συμπληρώστε σωστά τα πεδία";
		return false;
	}
	else{
		return true;
	}
}