<?php
class MainController{

  public function index(){
    require_once "views/include/header.php";
    require_once "views/module/index.php";
    require_once "views/include/footer.php";
  }

}

=======
class MainController{

  public function donacion(){
    require_once "../views/include/header.php";
    require_once "../views/module/donacion.php";
    require_once "../views/include/footer.php";
  }
}
?>
