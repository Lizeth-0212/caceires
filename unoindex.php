<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cedula 5.1.2 </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="vista/jquery/jquery-2.2.4.min.js">
  <link rel="shortcut icon" type="text/css" href="vista/img/isc.png">
 </head>
 <body>
  <br /><br />
  <div class="container">
   <br />
   <h2 align="center">TECNOLOGICO DE ESTUDIOS SUPERIORES CHALCO</h2>
   <br />
   <h2 align="center"> CEDULA 5.1.2 Equipamiento de laboratorios </h2>
   <br />
   <form action="conexion.php" method="post">
       
       <div class="table-responsive">
    <table class="table table-bordered" id="crud_table">
        <tr>
            <th colspan="4" >Equipamiento de laboratorios</th></tr>
        <tr>
            <th colspan="1">1. Nombre del laboratorio o taller</th>
            <th colspan="3"><input type="text"  name="laboratorio"></th></tr>
        <tr>
            <th colspan="1">2. Claves de los cursos que se apoyan.</th>
            <th colspan="3"><input type="text"  name="clave"></th></tr>
        
        <tr>
            <th>No</th>
            <th>3. Equipos utilizados por los estudiantes del PE para las prácticas</th>
            <th>4. Cantidad</th>
        </tr>
        <tr>
            <td>1</td>
            <td><input type="text"  name="equipo[]"></td>
            <td><input type="text"  name="cantidad[]"></td>
            <td><button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button></td>
        </tr>
        
    </table>
    
    <div align="center">
     <button type="submit" name="save" id="save" class="btn btn-info">Guardar</button>
    </div>
    <br />
    
   </form>
    <div id="inserted_item_data"></div>
   </div>
   
  </div>
  <script src="control/funcion.js"></script>
  <script src="control/main.js"></script>
 </body>
</html>