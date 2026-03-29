<?php
include dirname(__DIR__) . "/controllers/UserController.php";

$controller = new UserController();
$action = $_GET['action'] ?? 'index';

switch($action) {
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'update':
        $controller->update();
        break;
    case 'delete':
        $controller->delete();
        break;
    default:
        $controller->index();
}
?>