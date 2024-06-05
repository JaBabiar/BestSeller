<?php
class cardsView extends Cards{

   public function showCards(){
        $results = $this->getCards();
            foreach($results as $card){
                //var_dump($card);
                $header = $card['Header'];
                $content = $card['Content'];
                $image = $card['Image'];

                echo "
                <div class='card'>
                    <div class='img-wrapper'>
                        <img src='./assets/img/$image' alt='../assets/img/$image'>
                    </div>
                    <div class='content'>
                        <h4>$header</h4>
                        <span>$content</span>
                    </div>
                </div>
                
                ";
            }
   }

}

?>