<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperaturen</title>
</head>

<body>

<table border=2>
<?php 

$temp = [
    "Januari"=>"3.4", 
    "Februari"=>"4.3", 
    "Maart"=>"6.4", 
    "April"=>"6.7", 
    "Mei"=>"11.2", 
    "Juni"=>"18.2", 
    "Juli"=>"18.0", 
    "Augustus"=>"16.9", 
    "September"=>"15.9", 
    "Oktober"=>"11.6", 
    "November"=>"7.4", 
    "December"=>"3.7"];


        echo "<th>Maand</th>"."<th>Gem. Temperatuur</th>";
        // Putting the echo i made here caused the text to come back at every line, so i tried to put it out the foreach and it came out like i wanted.

    foreach($temp as $month => $month_temp){
        echo "<tr>"."<td>$month</td>". "<td>$month_temp</td>"."</tr>";
    } 
?>

</table>

<style>
    
</style>

</body>

</html>