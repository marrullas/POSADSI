<?php

require_once "controllers/plantilla.controlador.php";
require_once "controllers/categorias.controlador.php";
require_once "controllers/productos.controlador.php";
require_once "controllers/usuarios.controlador.php";
require_once "controllers/ventas.controlador.php";

require_once "models/categorias.modelo.php";
require_once "models/productos.modelo.php";
require_once "models/usuarios.modelo.php";
require_once "models/ventas.modelo.php";

$plantilla = new ControllerPlantilla();

$plantilla -> ctrPlantilla();