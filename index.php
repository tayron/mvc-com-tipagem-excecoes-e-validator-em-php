<?php
require_once('controller/ClientController.php');
require_once('model/validators/ClientValidator.php');
require_once('model/ClientModel.php');
require_once('model/ClientEntity.php');
require_once('types/TypeInterface.php');
require_once('types/StringObject.php');
require_once('types/IntegerObject.php');

$controller = new ClientController(new ClientModel());
$controller->save(new StringObject('Pedro'), new IntegerObject('33556688'));
