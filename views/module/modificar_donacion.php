<?php
	require_once("../model/conn.model.php");
	require_once("../model/donacion.class.php");

	$usuarios = Gestionar_donacion::Consultarcodigo($_GET["codigo_donacion"]);
 ?>
<div id="container">

			<form action="../controller/donacion.controller.php" method="POST">
				<label>Codigo de donacion: <?php echo $donacion["don_cod"]; ?></label>
				<input type="hidden" name="codigo" readonly value="<?php echo $donacion["don_cod"]; ?>">

				<label for="tipo de donacion">Tipo de donacion</label>

				  <input type="text" name="don_td" id="don_td_cod" require value="<?php echo $donacion["don_td_cod"]; ?>">
          <label for="reserva">Fecha de reserva</label>
          <input type="date" name="reserva" id="don_fecha_res" require value="<?php echo $donacion["don_fecha_res"]; ?>">
          <label for="citacion">Fecha de citacion</label>
        <input type="date" name="citacion" id="don_fecha_cita" require value="<?php echo $donacion["don_fecha_cita"]; ?>">
          <label for="lugar">Lugar de citacion</label>
          <input type="text" name="lugar" id="don_lugar" require value="<?php echo $donacion["don_lugar"]; ?>">

				<button name="action" value="C">Modificar</button>
			</form>
