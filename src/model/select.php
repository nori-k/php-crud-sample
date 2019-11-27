<?php
require 'db.php';

class Select 
{
    public function All () {
        $sql = 'SELECT * FROM user';
        $prepare = $dbh->prepare($sql);
        $prepare->execute();

        // 表示
        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
    }

    public function OneByID ($user_id) {
        $sql = 'SELECT * FROM user WHERE id = :id';
        $prepare = $dbh->prepare($sql);
        $prepare->bindValue(':id', $user_id, PDO::PARAM_INT);
        $prepare->execute();
        
        // 表示
        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
    }

    public function OneByName ($user_name) {
        $sql = 'SELECT * FROM user WHERE name = :name';
        $prepare = $dbh->prepare($sql);
        $prepare->bindValue(':name', $user_name, PDO::PARAM_STR);
        $prepare->execute();
        
        // 表示
        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
    }
}




