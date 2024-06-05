<?php 
    include 'includes/class_autoloader.inc.php'
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BestSeller</title>
        <link rel='stylesheet' href='assets/css/style.css'>
        <script defer type='text/javascript' src='assets/js/app.js'></script>
    </head>
    <body>
        <div id='CANVAS'>
            <div id='MAIN_BANNER'>
                <div class="bg_img"></div>
                <div class="banner-content">
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <h1>Bestseller</h1>
                    <div class="button cta">
                        
                    </div>
                </div>

            </div>

    <div class="container text-center">
        <h2>Nasze Realizacje</h2>
        <p>Check out some of our completed solar panel projects.</p>
        <div class='card-wrapper'>
            <?php 
                $cardsObj = new cardsView();
                $cardsObj->showCards();
            ?>
        </div>
    </div>

    <div class="container">
        <div class="form-wrapper">

            <h2>Contact Us</h2>

                <form >
                    <input type="text" placeholder="Imie" required />
                    <input type="email" placeholder="Email" required />
                    <textarea placeholder="Twoja Wiadomosć " required></textarea>
                    <button type="submit">Wyślij wiadomość</button>
                </form>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2023 BestSeller Solar Panels</p>
            <p>Contact: contact@bestseller.com | Phone: 123-456-7890</p>
            <p>Realizacja: Jakub Babiarczyk</p>
        </div>
    </footer>
    </div>






        <?php 
        
        ?>
    </body>
    </html>