<div id="container">
  <form action="../controlador/donacion.controller.php" method="POST">

      <label for="tipo de donacion">Tipo de donacion 1 o 2</label>
    <input type="text" name="don_td" id="don_td_cod" require>
      <label for="reserva">Fecha de reserva</label>
    <input type="date" name="reserva" id="don_fecha_res" require>
      <label for="citacion">Fecha de citacion</label>
    <input type="date" name="citacion" id="don_fecha_cita" require>
      <label for="lugar">Lugar de citacion</label>
    <input type="text" name="lugar" id="don_lugar" require>

      <button name="action" value="C">Guardar</button>
    </form>
  </center>
</div>
