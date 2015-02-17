<%
	String username = request.getParameter("username");
            String password = request.getParameter("password");
           out.println("Checking login<br>");
            // Here you put the check on the username and password
            if (password.equals("opensesame")) {
		session.setAttribute("username",username);
		response.sendRedirect("dashboard_jsp.jsp");
            }
           else {
                response.sendRedirect("loginerror.html");
           }
%>
