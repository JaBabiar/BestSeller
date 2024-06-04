<?php

class Cards extends Dbh{

    protected function getCards($panel){
        $sql = 'SELECT * FROM cards where panel = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$panel]);

        $results = $stmt->fetchAll();
        return $results;
    }

}

?>