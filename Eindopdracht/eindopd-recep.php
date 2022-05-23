<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hoofdsteden</title>
</head>

<body> 
    <div class="container">
        <?php

        session_start();
        isset($_SESSION['gamePlayed']) ?: $_SESSION['gamePlayed'] = 1;
        isset($_SESSION['correctAnswer']) ?: $_SESSION['correctAnswer'] = 0;
        isset($_SESSION['wrongAnswer']) ?: $_SESSION['wrongAnswer'] = 0;

        

        $countries = [
            "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen",
            "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana",
            "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
            "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London",
            "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin",
            "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna",
            "Poland" => "Warsaw"
        ];

        $randomkey = array_rand($countries, 1);
        $correctAnswer = $countries[$randomkey];
        $isCorrect = false;
        $isIncorrect = false;

        if (isset($_POST['capital']) && isset($_POST['correctAnswer']) && isset($_POST['button'])) {
            $_SESSION['gamePlayed']++;
            if ($_POST['capital'] == $_POST['correctAnswer']) {
                $isCorrect = true;
                $_SESSION['correctAnswer']++;
            } else {
                $isIncorrect = true;
                $_SESSION['wrongAnswer']++;
            }
        }
        ?>

        <form class="d-flex justify-content-center mt-5" method="POST">
            <div class="form-group w-50 ">
                <div class="mb-0 text-center h3">Wat is de hoofdstad van <?php echo $randomkey ?></div><br>
                <div style="position: relative;  " class="d-flex flex-row">
                    <select style= "width: 250px; position: relative; left: 120px;" name="capital" class="form-select mb-0">
                        <?php foreach ($countries as $capital) { ?>
                            <option name="capital"><?php echo $capital; ?></option>;
                        <?php } ?>
                    </select>
                    <a style="margin-left:1%; display: inline-block; position: relative; top: 60px; right: 140px; " href="reset.php"><button class="btn btn-primary" type="button" name="reset">Reset</button></a>
                <input type="hidden" name="correctAnswer" value="<?php echo $correctAnswer; ?>">

                <br>
                <div class="d-flex flex-row">
                    <button style="margin-right:1%; background-color: blue; position: relative; display: inline-block; width: 50px; left: 70px;" class="btn btn-success" type="submit" name="button">OK</button><br>
                    <span style="margin-right:1%; position: relative; top: 60px; right: 160px;">Games: <?php echo $_SESSION['gamePlayed']; ?></span><br>
                    <span style="margin-right:1%; position: relative; top: 60px; right: 160px;">Won: <?php echo $_SESSION['correctAnswer']; ?></span><br>
                    <span style="position: relative; top: 60px; right: 160px;">Lost: <?php echo $_SESSION['wrongAnswer']; ?></span><br>
                </div>

                <div style="position: relative; " class="text-left">
                    <?php
                    if ($isIncorrect || $isCorrect) {

                        if ($isCorrect) {
                            echo "Het antwoord " . $_POST['capital'] . " is correct!";
                        } else {
                            echo "Het antwoord " . $_POST['capital'] . " is incorrect!";
                        }
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>
</body>

</html>