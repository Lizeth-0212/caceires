<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cedula 5.1.2 </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container">
   <br />
   <h2 align="center">TECNOLOGICO DE ESTUDIOS SUPERIORES CHALCO</h2>
   <br />
   <h2 align="center"> CEDULA 5.1.3 Características de los laboratorios y talleres</h2>
   <br />
   <div class="table-responsive">
    <table class="table table-bordered" id="crud_table">
        <tr colspan="2" ><th>Características de los laboratorios y talleres</th></tr>
        <tr><th>1. Descripción general de los laboratorios y talleres</th><th><input type="text"  name=nombre></th></tr>
        
        <tr>
            <td>2. Condiciones necesarias</td><td>Adecucada</td>
            <td>Inadecuada</td><td>3. Justificación</td>
        </tr>
        <tr>
            <th>a. Suficiencia</th>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
        </tr>
        <tr>
            <th>b. Iluminación </th>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
        </tr>
        <tr>
            <th>c. Funcionalidad</th>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
        </tr>
        <tr>
            <th>d. Aislamiento del ruido</th>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
        </tr>
        <tr>
            <th>e. Equipo audiovisua</th>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
        </tr>
        <tr>
            <th>f. Mobiliario</th>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
        <tr>
            <th>g. Accesibilidad</th>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
        </tr>
        <tr>
            <th>h. Conectividad</th>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
        </tr>
        <tr>
            <th>i. Higiene</th>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
        </tr>
        <tr>
            <th>j. Seguridad</th>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
            <td><input type="checkbox" name="cb-autos" value="gusta" align="center"><br></td>
        </tr>
        
    </table>
    
    <div align="center">
     <button type="button" name="save" id="save" class="btn btn-info">Save</button>
    </div>
    <br />
    <div id="inserted_item_data"></div>
   </div>
   
  </div>
 </body>
</html>