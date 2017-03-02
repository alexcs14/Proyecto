<?php

require_once "model/usu.model.php";

class UsuController{

  private $model;

  public function __CONSTRUCT(){

    $this->model = new UsuModel();
  }

  public function viewcreateUV(){
    require_once "views/assets/include/header.php";
    require_once "views/assets/user/create.php";
    require_once "views/assets/include/footer.php";
  }

  public function createUsV($data){
    $data=$_POST["data"];
    $result=$this->model->create_vol($data);
    header("location: index.php?c=usu&msn=$result");
  }
}

?>
