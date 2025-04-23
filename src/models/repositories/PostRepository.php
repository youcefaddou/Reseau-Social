<?php

abstract class PostRepository extends Db {
    public static function insertPost($post) {
        $query = "INSERT INTO posts (title, content, user_id) VALUES (:title, :content, :user_id)";
        $statement = self::connect()->prepare($query);
        $statement->bindParam(':title', $post->getTitle());
        $statement->bindParam(':content', $post->getContent());
        $statement->bindParam(':user_id', $post->getUserId());
        
        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }
}




?>