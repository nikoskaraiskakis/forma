function isNotEmpty(field) {

    var fieldData = field.value;

    if (fieldData.length == 0 || fieldData == "" || fieldData==fieldData) {

        field.className = "FieldError"; //Classs to highlight error
        allert("Please correct the errors in order to continue.");
        return false;
    } else {

        field.className = "FieldOk"; //Resets field back to default
        return true; //Submits form
    }
}

function return1(void) {
	document.cookie = "myJavascriptVar = 'Please correct the errors in order to continue.' ";
}