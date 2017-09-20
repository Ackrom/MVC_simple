<?php
require_once APP_PATH."models/modelo.php";
require_once APP_PATH."views/vista.php";


class Controlador{
  protected static $vista;
  protected static $modelo;
  function __construct(){
    $this->setVista();
    $this->setModelo();
  }
  public function getVista(){return self::$vista;}
  public function getModelo(){return self::$modelo;}
  public function setVista(){self::$vista=new Vista();}
  public function setModelo(){self::$modelo=new Modelo();}

  public function inicio($data){
    //Tomamos el objeto Vista
    $vista=$this->getVista();
    //mostramos la ventana de ingreso
    $vista->ingreso();
  }
}
?>
