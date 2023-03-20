<?php
    include './vehicule.php';

    $voiture = new Vehicule('Mercedes CLK', 4, 250);
    $moto = new Vehicule('Honda CBR', 2, 280);

    echo $voiture->detect()."<br>";
    echo $moto->detect()."<br>";

    $voiture->boost();
    $moto->boost();
    echo $voiture->getVitesse()."<br>";
    echo $moto->getVitesse()."<br>";

    echo $moto->plusRapide($voiture);

?>