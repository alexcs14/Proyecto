<?php
require_once("../../model/conn.model.php");
require_once("../../model/donacion.class.php");
$donacion = Gestionar_donacion::Consultar();
?>
<div id="container">

  <table id="datatable">
    <thead>
      <tr>

        <td>Codigo</td>
        <td>Codigo de usuario</td>
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
              <td>".$row["don_cod"]."</td>
              <td>".$row["don_usu_cod"]."</td>
              <td>".$row["don_td_cod"]."</td>
              <td>".$row["don_fecha_res"]."</td>
              <td>".$row["don_fecha_cita"]."</td>
              <td>".$row["don_lugar"]."</td>
              <td>
              <a href='?c=donacion&a=C
              ".$row["don_cod"]."'>Modificar</a>
              <a href='?c=donacion&a=D".$row["don_cod"]."'>Eliminar</a></td>
              </tr>";
          $item++;
        }

       ?>
        </tbody>
      </table>
    </div>
