<%@page import="java.sql.*" pageEncoding="UTF-8"%>
<%
Connection conexion=null;
String mensaje="";
String driver="com.mysql.jdbc.Driver";
String url="jdbc:mysql://localhost:3306/MC?serverTimezone=UTC";
String tabla_nombre="Acceso";
String usuario="root";
String clave="";

try{
	Class.forName("com.mysql.jdbc.Driver");
	conexion=DriverManager.getConnection(url,usuario,clave);
	String acceso=request.getParameter("accesousuario");
	String contrasena=request.getParameter("accesocontrasena");

//select u.TipoDocumento,u.NroDocumento, concat_ws(' ', p.ApellidoPaterno, p.ApellidoMaterno, p.Nombres) as Paciente, ac.Usuario, ac.Contrasena, ac.Rol 	from usuario u inner join persona p inner join acceso ac on p.cod=u.cod and ac.codUsuario=u.cod where ac.Usuario='luz'
	String select_value=" select u.TipoDocumento,u.NroDocumento, concat_ws(' ', p.ApellidoPaterno, p.ApellidoMaterno, p.Nombres) as Paciente, ac.Usuario, ac.Contrasena, ac.Rol 	from usuario u inner join persona p inner join acceso ac on p.cod=u.cod and ac.codUsuario=u.cod where ac.Usuario= '"+acceso+"'";
	Statement st=conexion.createStatement();
	ResultSet rs=st.executeQuery(select_value);
	while(rs.next()){
		if(rs.getObject("Contrasena").equals(contrasena)){
                    response.sendRedirect("staff.jsp?cook="+rs.getObject("Usuario"));
                    return;
	  	}
	}
	out.print("<script>alert('Usuario o contrasenha incorrectos!'); window.location.replace('sesion.jsp');</script>");
	conexion.close();
}catch (Exception ex){
	out.println(ex.toString());
}
%>