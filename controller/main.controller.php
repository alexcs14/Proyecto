<?php

class MainController{
  public function index(){
    require_once "views/include/header.php";
    require_once "views/module/index.php";
    require_once "views/include/footer.php";
  }
  public function donacion(){
    require_once "views/include/header.php";
    require_once "views/module/donacion.php";
    require_once "views/include/footer.php";
  }

  public function creardon(){
    require_once "views/include/header.php";
    require_once "views/module/newdonacion.php";
    require_once "views/include/footer.php";
  }

  public function modifidon(){
    require_once "../views/include/header.php";
    require_once "../views/module/modificar_donacion.php";
    require_once "../views/include/footer.php";
  }

  public function dropdon(){
    require_once "views/include/header.php";
    require_once "views/module/dropdonacion.php";
    require_once "views/include/footer.php";
  }
}
?>
