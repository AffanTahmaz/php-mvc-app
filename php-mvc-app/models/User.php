<?php
include __DIR__ . "/../config/database.php";

class User {

    public static function getAll() {
        global $conn;
        $sql = "SELECT users.*, roles.naziv FROM users JOIN roles ON users.role_id = roles.id";
        return $conn->query($sql);
    }

    public static function getById($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public static function create($ime, $prezime, $email, $role_id) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO users (ime, prezime, email, role_id) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $ime, $prezime, $email, $role_id);
        return $stmt->execute();
    }

    public static function update($id, $ime, $prezime, $email, $role_id) {
        global $conn;
        $stmt = $conn->prepare("UPDATE users SET ime=?, prezime=?, email=?, role_id=? WHERE id=?");
        $stmt->bind_param("sssii", $ime, $prezime, $email, $role_id, $id);
        return $stmt->execute();
    }

    public static function delete($id) {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM users WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public static function getRoles() {
        global $conn;
        return $conn->query("SELECT * FROM roles");
    }
}
?>