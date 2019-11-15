
<?php

$arre8=array("evento 8am jueves","evento 8am viernes","evento 8am sabado","evento 8am domingo","evento 8am lunes");
$arre9=array("9","evento 9am miercoles","evento 9am jueves","evento 9am viernes","evento 9am sabado","evento 9am domingo");
$arre10=array("10","evento 10am miercoles","evento 10am jueves","evento 10am viernes","evento 10am sabado","evento 10am domingo");
$arre11=array("11","evento 11am miercoles","evento 11am jueves","evento 11am viernes","evento 11am sabado","evento 11am domingo");
$arre12=array("12","evento 12pm miercoles","evento 12pm jueves","evento 12pm viernes","evento 12pm sabado","evento 12pm domingo");

?>

<?php
    //Establecemos zona horaria por defecto
    date_default_timezone_set('America/Detroit');
  // Obteniendo la fecha actual con hora, minutos y segundos en PHP
   
  setlocale(LC_TIME, "spanish");
  $mi_fecha = date("d-m-Y");
  $mi_fecha = str_replace("/", "-", $mi_fecha);			
  $Nueva_Fecha = date("d-m-Y", strtotime($mi_fecha));				
  $Mes_Anyo = strftime("%A %d ", strtotime($Nueva_Fecha));
  //devuelve: lunes, 16 de abril de 2018 
  echo $Mes_Anyo;

  $Hora = "08:00:00"; 	


  
   
   
   

?>


<table>
    <th>Hora</th>
    <th><?php echo $Mes_Anyo; ?></th>
    <th><?php echo strftime("%A %d ", strtotime($Nueva_Fecha."+ 1 days")); ?></th>
    <th><?php echo strftime("%A %d ", strtotime($Nueva_Fecha."+ 2 days")); ?></th> 
    <th><?php echo strftime("%A %d ", strtotime($Nueva_Fecha."+ 3 days")); ?></th>
    <th><?php echo strftime("%A %d ", strtotime($Nueva_Fecha."+ 4 days")); ?></th>
    <th><?php echo strftime("%A %d ", strtotime($Nueva_Fecha."+ 5 days")); ?></th>
    <th><?php echo strftime("%A %d ", strtotime($Nueva_Fecha."+ 6 days")); ?></th>  
    <th><?php echo strftime("%A %d ", strtotime($Nueva_Fecha."+ 7 days")); ?></th>

  <tr>
  <td><?php echo date('H', strtotime($Hora)); ?></td>
  <td>
  
  </td>
  </tr>

  <tr>
  <td><?php echo date('H', strtotime($Hora.' + 1 hours')); ?></td>
  </tr>

  <tr>
  <td><?php echo date('H', strtotime($Hora.' + 2 hours')); ?></td>
  </tr>

  <tr>
  <td><?php echo date('H', strtotime($Hora.' + 3 hours')); ?></td>
  </tr>

  <tr>
  <td><?php echo date('H', strtotime($Hora.' + 3 hours')); ?></td>
  </tr>

  <tr>
  <td><?php echo date('H', strtotime($Hora.' + 4 hours')); ?></td>
  </tr>

  <tr>
  <td><?php echo date('H', strtotime($Hora.' + 5 hours')); ?></td>
  </tr>

  <tr>
  <td><?php echo date('H', strtotime($Hora.' + 6 hours')); ?></td>
  </tr>

  <tr>
  <td><?php echo date('H', strtotime($Hora.' + 7 hours')); ?></td>
  </tr>
  
  <tr>
  <td><?php echo date('H', strtotime($Hora.' + 8 hours')); ?></td>
  </tr>

  <tr>
  <td><?php echo date('H', strtotime($Hora.' + 9 hours')); ?></td>
  </tr>



</table>



<!-- <table>
    <tr>
        <th>Hora</th>
        <th>Miercoles 13</th>
        <th>Jueves 14</th>
        <th>Viernes 15</th>
        <th>Sabado 16</th>
        <th>Domingo 17</th>
    </tr>

    
    <tr>
<?php
foreach ($arre8 as $value) {
  ?>
  <td><?php echo $value;  ?></td>
  <?php  
}
?>
    </tr>

    
    <tr>
<?php
foreach ($arre9 as $value) {
  ?>
  <td><?php echo $value;  ?></td>
  <?php  
}
?>
    </tr>

    
    <tr>
<?php
foreach ($arre10 as $value) {
  ?>
  <td><?php echo $value;  ?></td>
  <?php  
}
?>
    </tr>

    
    <tr>
<?php
foreach ($arre11 as $value) {
  ?>
  <td><?php echo $value;  ?></td>
  <?php  
}
?>
    </tr>

    
    <tr>
<?php
foreach ($arre12 as $value) {
  ?>
  <td><?php echo $value;  ?></td>
  <?php  
}
?>
    </tr>
</table> -->



