<?php 

class UserView extends Users { 

    public function showUser($name) { 
        $results = $this->getUser($name);

        echo 'Full name: ' . $results[0]['users_firstname'];

    }



};

?>
