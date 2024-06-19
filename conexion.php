<?php
$conn=mysqli_connect("localhost", "root", "","caceibc");
/*$usuario = "root";
  $password = "";
  $servidor = "localhost";
  $basededatos = "alumnos";*/
$CLAVE_clean="$_POST['clave']";
$LABORATORIO_clean="$_POST['laboratorio']";
$EQUIPO_clean="$_POST['equipo']";
$CANTIDAD_clean="$_POST['cantidad']";

/*if (isset($_POST['clave'])) {
  for ($count=0; $count < count($CLAVE) ; $count++) {
    CLAVE_clean=mysqli_real_escape_string($conn, $CLAVE [$count]);
    LABORATORIO_clean=mysqli_real_escape_string($conn, $LABORATORIO [$count]);
    EQUIPO_clean=mysqli_real_escape_string($conn, $EQUIPO [$count]);
    CANTIDAD_clean=mysqli_real_escape_string($conn, $CANTIDAD [$count]);
    sql= "INSERT INTO cedulauno('clave', 'laboratorio', 'equipo', 'cantidad') VALUES ("'.$CLAVE_clean.'",
    "'.$LABORATORIO_clean.'","'.$EQUIPO_clean.'","'.$CANTIDAD_clean.'");";
    $conn->query($sql);
  }
}*/

// creación de la conexión a la base de datos con mysql_connect()
  $conexion = mysqli_connect( "localhost","root", "" ) or die ("No se ha podido conectar al servidor de Base de datos");
  
  // Selección del a base de datos a utilizar
  $db = mysqli_select_db( $conexion, "caceibc" ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

  // establecer y realizar consulta. guardamos en variable.
  $consulta = "SELECT * FROM caceibc";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  // Motrar el resultado de los registro de la base de datos
  // Encabezado de la tabla
  echo "<table borde='2'>";
  echo "<tr>";
  echo "<th>Clave</th>";
  echo "<th>Laboratorio</th>";
  echo "<th>Equipo</th>";
  echo "<th>Cantidad</th>";
  echo "</tr>";
  
  // Bucle while que recorre cada registro y muestra cada campo en la tabla.
  while ($columna = mysqli_fetch_array( $resultado ))
  {
    echo "<tr>";
    echo "<td>" . $columna['Clave'] . "</td><td>" . $columna['Laboratorio'] . "</td><td>" . $columna['Equipo']. "</td><td>" . $columna['Cantidad'] . "</td>";
    echo "</tr>";
  }
  
  echo "</table>"; // Fin de la tabla

  // cerrar conexión de base de datos
  mysqli_close( $conexion );


 ?>