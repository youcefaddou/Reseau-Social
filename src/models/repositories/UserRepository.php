<?php

abstract class UserRepository extends Db
{

    public static function insertUser($user)
    {
        try {
            $db = self::getInstance();
            $stmt = $db->prepare("INSERT INTO user (firstName, lastName, mail, password) VALUES (:firstName, :lastName, :mail, :password)");
            $stmt->execute([
                ':firstName' => $user->getFirstName(),
                ':lastName' => $user->getLastName(),
                ':mail' => $user->getMail(),
                ':password' => $user->getPassword()
            ]);
        } catch (Exception $e) {
            throw new Exception("Erreur lors de l'insertion : " . $e->getMessage());
        }
    }

    public static function getUserByEmail($email)
    {
        try {
            $db = self::getInstance();
            $select = $db->prepare("SELECT * FROM user WHERE mail = :mail");
            $select->execute([':mail' => $email]);
            return $select->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw new Exception("Erreur lors de la récupération de l'utilisateur : " . $e->getMessage());
        }
    }
}
