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
}
