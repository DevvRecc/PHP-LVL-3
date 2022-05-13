<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperaturen</title>
</head>

<body>

    <h1>Temperaturen van het jaar 2021!</h1>
    <h3>Hoeveel graden was het in April?</h3>
    <?php 
    
    $temp = ["Jan"=>"3.4", "Feb"=>"4.3", "Mrt"=>"6.4", "Apr"=>"6.7", "Mei"=>"11.2", "Jun"=>"18.2", "Jul"=>"18.0", "Aug"=>"16.9", "Sep"=>"15.9", "Okt"=>"11.6", "Nov"=>"7.4", "Dec"=>""];

        echo "In april was het " . $temp['Apr'] . " graden.";
    ?>
</body>

</html>