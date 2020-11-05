<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=api;', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exeption $e) {
    die('Erreur : ' . $e->getMessage());
}

$requete = $pdo->prepare("SELECT * FROM location WHERE id=1");
$requete->execute(array());
if($requete->rowCount() == 1)
{
    $location = $requete->fetch();
    $lat = $location['Lat'];
    $longi = $location['Longi'];
}
else 
{
    die('Non enregistrer');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <font face="arial black">
        <title>Test API</title>
        </font>

        <style>
            #map{
                height: 500px;
                width: 800px;
            }
        </style>
    </head>

    <body>
        <div id="map"></div>

        <script>
            function initMap(){
                var location = {lat: <?= $lat?>, lng: <?= $longi?>};
                var map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 12,
                    center: location
                });
                var marker = new google.maps.Marker({
                    position: location,
                    map:map
                });
            }
        </script>
        

    </body>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRO-n4yCeHyLlM6PTx7RVSCjrWoA74Il4&callback=initMap"></script>
</html>