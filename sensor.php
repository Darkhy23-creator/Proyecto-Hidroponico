<?php
 // sensor.php
 //Importamos la configuracion
 require("config.php");
 // Leemos los valores que nos llegan por GET
 $Humedad = mysqli_real_escape_string($con, $_GET['Humedad']);
 // EInsertamos los valores en la tabla
 $query = "INSERT INTO valores(Humedad) VALUES('$Humedad')";
 // Ejecutamos la instruccion
 mysqli_query($con, $query);
 mysqli_close($con);
 echo "Pagina para subir los datos<br />";
 echo "<br />Humedad = $Humedad %<br />";
?>