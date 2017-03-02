<?php
require_once("../model/conn.model.php");
require_once("../model/donacion.class.php")
$donacion = Gestionar_donacion::Consultar();
?>
<div id="container">
  <?php include ("menu.php"); ?>
  <table id="datatable">
    <thead>
      <tr>
        <td>Item</td>
        <td>Codigo</td>
        <td>Codigo de suario</td>
        <td>Tipo de donacion</td>
        <td>Fecha de reserva</td>
        <td>Fecha de citacion</td>
        <td>lugar de citacion</td>
      </tr>
    </thead>
    <tbody>
      <?php
        $item = 1;
        foreach ($donacion as $row) {
          echo "<tr>
              <td>".$item."</td>
              <td>".$row["don_cod"]."</td>
              <td>".$row["don_usu_cod"]."</td>
              <td>".$row["don_td_cod"]."</td>
              <td>".$row["don_fecha_res"]."</td>
              <td>".$row["don_fecha_cita"]."</td>
              <td>".$row["don_lugar"]."</td>
              <td>
              <a href='Actualizar.php?codigo_usuario=".$row["don_cod"]."'>Modificar</a>
              -
              <a href='borrar.php?codigo_usuario=".$row["don_cod"]."'>Eliminar</a></td>
              </tr>";
          $item++;
        }

       ?>
        </tbody>
      </table>
    </div>
