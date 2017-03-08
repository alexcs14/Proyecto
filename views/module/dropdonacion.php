ç<?php
	require_once("../model/conn.model.php");
	require_once("../model/donacion.class.php");

	$donacion = Gestionar_donacion::Consultarcodigo($_GET["codigo_donacion"]);
  ?>
  <div id="container">

			<h2>Desea Eliminar A:</h2>
			<form action="../controller/donacion.controller.php" method="POST">
        <label>Codigo: <?php echo $donacion["don_cod"]; ?></label>
        <input type="hidden" name="codigo" readonly value="<?php echo $donacion["don_cod"]; ?>">

        <label>Codigo de Usuario: <?php echo $donacion["don_usu_cod"]; ?></label>
        <input type="hidden" name="Usuario" readonly value="<?php echo $donacion["don_usu_cod"]; ?>">

				  <label for="tipo de donacion">Tipo de donacion 1 o 2 <?php echo $donacion["don_cod"]; ?></label>
				<input type="text" name="don_td" id="don_td_cod" readonly value="<?php echo $donacion["don_cod"]; ?>">

				  <label for="reserva">Fecha de reserva <?php echo $donacion["don_fecha_res"]; ?></label>
				<input type="date" name="reserva" id="don_fecha_res"  readonly value="<?php echo $donacion["don_fecha_res"]; ?>">

				  <label for="citacion">Fecha de citacion<?php echo $donacion["don_fecha_cita"]; ?></label>
				<input type="date" name="citacion" id="don_fecha_cita"  readonly value="<?php echo $donacion["don_fecha_cita"]; ?>">

      <label for="lugar">Lugar de citacion <?php echo $donacion["don_lugar"]; ?></label>
      <input type="text" name="lugar" id="don_lugar"  readonly value="<?php echo $donacion["don_lugar"]; ?>">



				<button name="action" value="D">Eliminar</button>
			</form>

	</div>
