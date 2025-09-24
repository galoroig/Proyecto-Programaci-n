<?php
require_once "Database.php";
class User {
 private $db;
 public function __construct() {
 $this->db = (new Database())->connect();
 }
 public function add($nombre_user, $contrasena) {
 $sql = "INSERT INTO users (nombre_user, contrasena) VALUES (:nombre_user, :contrasena)";
 $stmt = $this->db->prepare($sql);
 $stmt->execute([':nombre_user' => $nombre_user, ':contrasena' => $contrasena]);
 }
 public function getAll() {
 $sql = "SELECT * FROM users";
 $stmt = $this->db->query($sql);
 return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }
 public function update($id_users, $nombre_user, $contrasena) {
 $sql = "UPDATE users SET nombre_user = :nombre_user, contrasena = :contrasena WHERE id_users = :id_users";
 $stmt = $this->db->prepare($sql);
 $stmt->execute([':nombre_user' => $nombre_user, ':contrasena' => $contrasena, ':id_users' => $id_users]);
 }
 public function delete($id_users) {
 $sql = "DELETE FROM users WHERE id_users = :id_users";
 $stmt = $this->db->prepare($sql);
 $stmt->execute([':id_users' => $id_users]);
 }
}
?>