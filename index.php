<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body,HTML{
    margin: 0;
    padding: 0;
    background: red;
    color: blue;
    font-size: 18px;
}
 
.container{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}
 
.etykieta{
    display: block;
    width: 40%;
    padding: 1em 2em;
    border: 7px dashed cyan;
    border-radius: 10% 0 7% 1px;
    box-shadow: 0 0 2em 3em cadetblue;
    margin: 2em auto;
 
}
    </style>
</head>
<body>
    
<div class="container">
<div class="etykieta">
    Marka: Cadillac<br>
    Model: CTS<br>
    Silnik: V6 3.2 G
    Color: Srebrna strzała
</div>
<div class="etykieta">
    Marka: Mercedes<br>
    Model: ML<br>
    Silnik: V6 3.2 G
    Color: Srebrna strzała
</div>

</div>



</body>
</html>
<?php
$auta = [
[ "marka"=>"Cadillac", "model"=>"CTS",
"silnik"=>"3.2 v6", "color"=>"Srebrna strzała",],
[ "marka"=>"Rower", "model"=>"CTS",
"silnik"=>"3.2 v6", "color"=>"Srebrna strzała",],
[ "marka"=>"Cadillac", "model"=>"CTS",
"silnik"=>"3.2 v6", "color"=>"Srebrna strzała",],
[ "marka"=>"c", "model"=>"CTS",
"silnik"=>"3.2 v6", "color"=>"Srebrna strzała",],
[ "marka"=>"Cadillac", "model"=>"CTS",
"silnik"=>"3.2 v6", "color"=>"Srebrna strzała",],
[ "marka"=>"Cadillac", "model"=>"CTS",
"silnik"=>"3.2 v6", "color"=>"Srebrna strzała",],
[ "marka"=>"Cadillac", "model"=>"CTS",
"silnik"=>"3.2 v6", "color"=>"Srebrna strzała",],
[ "marka"=>"Cadillac", "model"=>"CTS",
"silnik"=>"3.2 v6", "color"=>"Srebrna strzała",],
[ "marka"=>"Cadillac", "model"=>"CTS",
"silnik"=>"3.2 v6", "color"=>"Srebrna strzała",],
[ "marka"=>"Cadillac", "model"=>"CTS",
"silnik"=>"3.2 v6", "color"=>"Srebrna strzała",],


];

foreach($auta as $autoArray) {
echo "<div class='etykieta'>";
echo "Marka: ${autoArray["marka"]}";
echo "Marka: ${autoArray["model"]}";
echo "Marka: ${autoArray["silnik"]}";
echo "Marka: ${autoArray["color"]}";
echo "</div>";
}
/*
$imie = "Kacper";
$nazwisko = "Slemp";
echo $imie.' '.$nazwisko;
echo '<br>';
echo "To samo ale inaczej: ${imie}i${nazwisko}";
$imiona = array("Zdzisław", "Mateusz", "Alex", "Marcel");
$nazwiska = ["Zdzisław"=>"Pawelec", "Mateusz"=>"Godek", "Alex"=>"Małachowski", 
    "Marcel"=>"Kulas", "Mateusz"=>"Flis"];
//echo "Imona: $imiona, nazwiska: $nazwiska";
print_r($nazwiska);
echo '<br><br>';
foreach ($nazwisko as $imieBierzace=>$nazwiskoBierzace){
echo "$imieBierzace $nazwiskoBiezrzace<br>";

}
echo '<br>';
for ($ktoreImie=0;$ktoreImie<4; $ktoreImie++) {
echo "Które imie=$ktoreImie, imię z tabli to $imiona[$ktoreImie]<br>";
}*/
?>
