<?php 

class Users extends Dbh{

    protected function getUser($name){
        $sql = 'SELECT * FROM users where users_firstname = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();
        return $results;
    }



}

?>