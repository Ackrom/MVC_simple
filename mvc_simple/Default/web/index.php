<?php
//---------------------------CONTROLADOR FRONTAL-------------------------------
//constantes y controlador
include_once dirname(__DIR__)."/app/constants/constantes.php";
include_once APP_PATH."controllers/controlador.php";
include_once LIBS_PATH."Session.class.php";
include_once LIBS_PATH."Usuario.class.php";
require_once APP_PATH."models/modelo.php";


//acciones disponibles
$acciones=[
  'ingreso'=>true
];

//evaluar url
if(isset($_GET['act'])){
    if(isset($acciones[$_GET['act']])){
        $act=$_GET['act'];
    }else {
        header('Status: 404 Not Found');
        echo "<h1>Error 404: no se ha podido encontrar la ruta \"{$_GET['act']}\"</h1>";
        exit;
    }
}else{
    $act='ingreso';
}


//datos introducidos por el usuario
$userData=$_POST;
$archivos=$_FILES;


//ejecutar accion
$controlador=new Controlador();

switch ($act) {
  case 'ingreso':
    $controlador->inicio($userData);
    break;
  case 'salir':
    $controlador->salir();
    break;
  case 'menuNvl3':
    $controlador->menuNvl3();
    break;
  case 'menuNvl1':
    $controlador->menuNvl1();
    break;
  case 'menuNvl2':
    $controlador->menuNvl2();
    break;
  case 'registrar':
    $controlador->regUsuario($userData);
    break;   

}
?>
