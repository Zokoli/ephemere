<?php
function insertNewCommande (array $data, PDO $db): bool
{
    try {
        $sql = "INSERT INTO commande (nom, prenom, mail, adresse, ville, produit, quantite)
        VALUES (:nom, :prenom, :mail, :adresse, :ville, :produit, :quantite)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nom', $data['nom']);
        $stmt->bindParam(':prenom', $data['prenom']);
        $stmt->bindParam(':mail', $data['mail']);
        $stmt->bindParam(':adresse', $data['adresse']);
        $stmt->bindParam(':ville', $data['ville']);
        $stmt->bindParam(':produit', $data['produit']);
        $stmt->bindParam(':quantite', $data['quantite']);
        return $stmt->execute();
    }   catch (PDOException $e){
            throw $e;
    }
}
?>