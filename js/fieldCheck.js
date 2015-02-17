bootstrap_alert = function() {}
bootstrap_alert.warning = function(message) {
	$('#formAlert').html('<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span>' + message + '</span></div>')
}
$('form[name="userlogin"]').on("submit", function(e) {
	var username = $(this).find('input[name="username"]');
	var password = $(this).find('input[name="password"]');
	if ($.trim(username.val()) === "" || $.trim(password.val()) === "") {
		e.preventDefault();
		bootstrap_alert.warning('<strong>Warning!</strong> Make sure all fields are filled and try again.');
	}
});