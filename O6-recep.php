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

        <div class="einde">
    <?php 
    if(isset($_GET['getallen'])){
        $arrayGetallen = explode(",", $_GET['getallen']);
        $sum = array_sum($arrayGetallen);
        $average = $sum / count($arrayGetallen);
        echo "Eindresultaat". "<br>". "<br>";
        echo "Aantal ingevoerde getallen: ".count($arrayGetallen)."<br>";
        echo "De getallen bij elkaar opgeteld: ".$sum."<br>";
        echo "Het gemiddelde van de getallen: ".$average;
    }
    
    ?>
        </div>
    <style>
        .einde {
            display: inline-block;
            position: relative;
            color: red;
            font-weight: 900;
            left: 150px;
            bottom: 20px;
        }
    </style>

</body>

</html>