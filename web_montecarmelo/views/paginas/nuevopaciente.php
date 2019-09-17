<%@ page import="java.sql.*"%>
<%
	Connection conexion=null;
	String mensaje="";
	String driver="com.mysql.jdbc.Driver";
	String url="jdbc:mysql://localhost:3306/venta_auto?serverTimezone=UTC";
	String tabla_nombre="cliente";
	String usuario="root";
	String clave="root";

	try{
            Class.forName("com.mysql.jdbc.Driver");
            conexion=DriverManager.getConnection(url,usuario,clave);

            Statement st=conexion.createStatement();

            String nombre=request.getParameter("nombre");
            String dni=request.getParameter("dni");
            String correo=request.getParameter("correo");
            String contrasena=request.getParameter("contrasena");

            String select_value="SELECT * FROM "+ tabla_nombre+" WHERE dni="+dni;
            ResultSet rs=st.executeQuery(select_value);
            if(rs.next()){
                    response.sendRedirect("error.html");
            }
            else{
                String insert_value=" INSERT INTO "+ tabla_nombre +" (nombre,dni,correo,contrasena) VALUES "+"('"+nombre+"','"+dni+"','"+correo+"','"+contrasena+"');";
                st.executeUpdate(insert_value);

                response.sendRedirect("../autos.jsp");
            }
            conexion.close();
	}
	catch (Exception ex){
	out.println(ex.toString());
    }
%>

