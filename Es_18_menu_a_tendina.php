<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menù Film</title>
</head>
<body style="background-color: lightblue;">

<?php 
    $str = " <select name='filmpreferito' id='filmpreferito'> ";
    $film=["Bladerunner" , "Kill bill" , "American Psycho" , "Uncharted" , "Punch Club"];
    for ($i=0; $i < count($film); $i++) { 
        $str=$str."<option value='f".($i+1)."'>".$film[$i]."</option>";
    }
    $str=$str." </select>";
    echo "$str";

?>

</body>
</html>