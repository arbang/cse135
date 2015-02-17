/*called when page first loads*/
window.onload = function() {
	var loginPHP = document.getElementById('loginPHP');
	var loginJSP = document.getElementById('loginJSP');
	var loginPerl = document.getElementById('loginPerl');

	loginPHP.addEventListener("click", updateLoginPHP, false); 
	loginJSP.addEventListener("click", updateLoginJSP, false);
	loginPerl.addEventListener("click", updateLoginPerl, false);
};

var updateLoginPHP = function() {
	document.userlogin.action = "http://192.241.238.37/php/login.php";
	document.getElementById('welcome').innerHTML = "You are now signing in using PHP";
};

var updateLoginJSP = function() {
	document.getElementById('welcome').innerHTML = "You are now signing in using JSP";
	document.userlogin.action = "http://192.241.238.37:8080/logincheck.jsp";
};

var updateLoginPerl = function() {
	document.getElementById('welcome').innerHTML = "You are now signing in using Perl";
	document.userlogin.action = "http://192.241.238.37/cgi-bin/login.pl";
};