function re(uinp,pinp,cpinp,eminp,cnameinp,afminp,inp) {
	var finflag = 0;
	var re1 = /^[A-Za-z]+$/;
	var re2 = /^[0-9]+$/;
	var re3 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	//GET VALUES FROM INPUTS
	var uname = document.getElementById(uinp).value;
	var pass = document.getElementById(pinp).value;
	var cpass = document.getElementById(cpinp).value;
	var email = document.getElementById(eminp).value;
	var cname = document.getElementById(cnameinp).value;
	var afm = document.getElementById(afminp).value;

	//CHECK USERNAME

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

	//CHECK PASSSWORD

	flag = 0;
	if ( pass.length >= 1) {
		flag = 1;
	}
	else {
		finflag = 1;
	}

	if (flag) {
		if ( pass.length < 5 ) {
			finflag = 1;
		}
	}

	//CHECK IF PASSWORDS MATCH

	if ( pass != cpass ) {
		finflag = 1;
	}

	//CHECK EMAIL

	flag = 0;
	if ( email.length >= 1) {
		flag = 1;
	}
	else {
		finflag = 1;
	}

	if (flag) {
		if ( ! re3.test(email) ) {
			finflag = 1;
		}
	}

	//CHECK COMPANY NAME

	if ( ! cname.length >= 1) {
		finflag = 1;
	}


	//CHECK AFM

	flag = 0;
	if ( afm.length >= 1) {
		flag = 1;
	}
	else {
		finflag = 1;
	}

	if (flag) {
		if ( ! re2.test(afm) ) {
			finflag = 1;
		}
		else if ( afm.length != 9 ) {
			finflag = 1;
		}
	}


	//CHECK IF WE HAD ANY ERRORS
	if ( finflag == 1 ) {
		document.getElementById(inp).innerHTML = "Παρακαλώ συμπληρώστε σωστά τα πεδία";
		return false;
	}
	else{
		return true;
	}
}

function re2(uinp,pinp,cpinp,fnameinp,lnameinp,eminp,aminp,uniinp,inp){
	var finflag = 0;
	var re1 = /^[A-Za-z]+$/;
	var re2 = /^[0-9]+$/;
	var re3 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	//GET VALUES FROM INPUTS
	var uname = document.getElementById(uinp).value;
	var pass = document.getElementById(pinp).value;
	var cpass = document.getElementById(cpinp).value;
	var fname = document.getElementById(fnameinp).value;
	var lname = document.getElementById(lnameinp).value;
	var email = document.getElementById(eminp).value;

	//CHECK USERNAME

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

	//CHECK PASSSWORD

	flag = 0;
	if ( pass.length >= 1) {
		flag = 1;
	}
	else {
		finflag = 1;
	}

	if (flag) {
		if ( pass.length < 5 ) {
			finflag = 1;
		}
	}

	//CHECK IF PASSWORDS MATCH

	if ( pass != cpass ) {
		finflag = 1;
	}

	//CHECK IF WE HAD ANY ERRORS
	if ( finflag == 1 ) {
		document.getElementById(inp).innerHTML = "Παρακαλώ συμπληρώστε σωστά τα πεδία";
		return false;
	}
	else{
		return true;
	}
}

function re3(tinp,winp,iinp,pinp,inp){
	var finflag = 0;
	
	var title = document.getElementById(tinp).value;
	var writer = document.getElementById(winp).value;
	var isbn = document.getElementById(iinp).value;
	var publisher = document.getElementById(pinp).value;

	if ( title.length == 0) {
		finflag = 1;
	}

	if ( writer.length == 0) {
		finflag = 1;
	}

	if ( isbn.length == 0) {
		finflag = 1;
	}

	if ( publisher.length == 0) {
		finflag = 1;
	}

	//CHECK IF WE HAD ANY ERRORS
	if ( finflag == 1 ) {
		document.getElementById(inp).innerHTML = "Παρακαλώ συμπληρώστε σωστά τα πεδία";
		return false;
	}
	else{
		document.getElementById(inp).innerHTML = "Παρακαλώ συμπληρώστε σωστά τα πεδία";
		return true;
	}

}