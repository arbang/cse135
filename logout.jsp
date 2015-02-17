<%
	session.setAttribute("username", null);
	session.invalidate();
	response.sendRedirect("http://192.241.238.37:80/loginPage.html");
%>  
