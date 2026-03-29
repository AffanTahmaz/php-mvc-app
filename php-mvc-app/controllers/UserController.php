<?php
include __DIR__ . "/../models/User.php";

class UserController {

    public function index() {
        $users = User::getAll();
        $roles = User::getRoles();
        include __DIR__ . "/../views/users/index.php";
    }

    public function store() {
        User::create($_POST['ime'], $_POST['prezime'], $_POST['email'], $_POST['role_id']);
        header("Location: index.php");
        exit();
    }

   public function edit() {
    $user = User::getById($_GET['id']);
    $roles = User::getRoles();
    include dirname(__DIR__) . "/views/users/edit.php";
}

    public function update() {
        User::update($_POST['id'], $_POST['ime'], $_POST['prezime'], $_POST['email'], $_POST['role_id']);
        header("Location: index.php");
        exit();
    }

    public function delete() {
        User::delete($_GET['id']);
        header("Location: index.php");
        exit();
    }
}
?>