public class conexion{
	Connection conexion;
	public conexion(){
		try{
			Class.forName("com.mysql.jdbc.Driver");
			String base ="ejemplo";
			String servidor = "jdbc:mysql://localhost/"+base;
			String usuarioDB="root";
			String passwordDB="";
			conexion= DriverManager.getConnection(servidor,usuarioDB,passwordDB);
		}catch(Throwable a){

		}
	}

	public Connection obtenerConexion(){
		return conexion;
	}

}