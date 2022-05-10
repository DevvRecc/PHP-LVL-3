<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getallen Invullen</title>
</head> 
<body>
    <h3>Voer hier onder 6 getallen in! ( vb. 2, 44, 33, 8, 25, 45 )</h3>
<form method="GET" name="form">
        <p>Voer hier de getallen in: <input type="text" name="getallen"></p>
        <button>Submit</button>
    </form>

    <div class="test">
    <?php 
    if(isset($_GET['getallen'])){
        $arrayGetallen = explode(",", $_GET['getallen']);
        $sum = array_sum($arrayGetallen);

        echo "De uitgekozen getallen gesorteerd: ";
        sort($arrayGetallen);
        $results = "";
            foreach($arrayGetallen as $cijfer){
                $results = $results.$cijfer.",";
            }
            echo substr($results, 0, -1);
            echo "<br>"."Dit is het totale: ".$sum;
    }
    ?>
    </div>

    <style>
        .test {
            position: relative;
            display: inline-block;
            bottom: 20px;
            left: 150px;
        }

    </style>
</body>

</html>