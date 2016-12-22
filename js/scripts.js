
function getData() {
    var data = {
        email: $("#form-email").val(),
        message: $("#msg-text").val()
    };
    return data;
}
function isValidData(data) {
	return true;
}