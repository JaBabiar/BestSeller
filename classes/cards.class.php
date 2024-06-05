<?php

class Cards extends Dbh{

    protected function getCards(){
        $sql = 'SELECT * FROM cards';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }

}

?>