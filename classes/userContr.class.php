<?php 

class UserContr extends Users { 

    public function createUser($username, $email, $pwd){
        $this->setUser($username, $email, $pwd);
    }



};

?>