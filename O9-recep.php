<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafel van 13 | Recep </title>
</head>
<body>

<table border=1>
    <?php 
        for($c=1; $c <11; $c++){
            $calculation = $c * 13;
                echo "<tr>"."<td>$c</td>"."<td>X</td>"."<td>13</td>"."<td>=</td>"."<td>$calculation</td>"."</tr>";
     } ?>

</table>

</body>
</html>