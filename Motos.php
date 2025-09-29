<?php
require_once "Database.php";

class Moto {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }
    public function add($nombre, $tipo, $cilindrada, $presupuesto, $potencia, $combustible, $peso) {
        $sql = "INSERT INTO motos (nombre, tipo, cilindrada, presupuesto, potencia, combustible, peso)
                VALUES (:nombre, :tipo, :cilindrada, :presupuesto, :potencia, :combustible, :peso)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':nombre' => $nombre,
            ':tipo' => $tipo,
            ':cilindrada' => $cilindrada,
            ':presupuesto' => $presupuesto,
            ':potencia' => $potencia,
            ':combustible' => $combustible,
            ':peso' => $peso
        ]);
    }
    public function getAll() {
        $sql = "SELECT * FROM motos";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function update($id, $nombre, $tipo, $cilindrada, $presupuesto, $potencia, $combustible, $peso) {
        $sql = "UPDATE motos 
                SET nombre = :nombre, tipo = :tipo, cilindrada = :cilindrada, presupuesto = :presupuesto,
                    potencia = :potencia, combustible = :combustible, peso = :peso
                WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':nombre' => $nombre,
            ':tipo' => $tipo,
            ':cilindrada' => $cilindrada,
            ':presupuesto' => $presupuesto,
            ':potencia' => $potencia,
            ':combustible' => $combustible,
            ':peso' => $peso,
            ':id' => $id
        ]);
    }
    public function delete($id) {
        $sql = "DELETE FROM motos WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
    }
}
?>