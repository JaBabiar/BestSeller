<?php 

class Users extends Dbh{

    protected function getUser($name){
        $sql = 'SELECT * FROM users where username = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setUser($username, $email, $pwd){
        $sql = 'INSERT INTO users(username,email,password) values(?,?,?)';
        $stmt = $this->connect()->prepare($sql);
        $pwd = hash('sha256',$pwd);
        $stmt->execute([$username, $email, $pwd]);

    }


}

?>