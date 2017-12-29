<?php

require 'db.php';

$sql2 = "SELECT * FROM `gradovi` ORDER BY `gradovi`.`city_name` ASC ";
            
$result2 = mysqli_query($link, $sql2);
            
$sql3 = "SELECT *
FROM `delatnosti`
WHERE `delatnost_id`
BETWEEN 3
AND 11
ORDER BY `delatnosti`.`delatnost_name` ASC";

$result3 = mysqli_query($link, $sql3);

$sql4 = "SELECT *
FROM `delatnosti`
WHERE `delatnost_id`
BETWEEN 12
AND 15
ORDER BY `delatnosti`.`delatnost_name` ASC";
            
$result4 = mysqli_query($link, $sql4);

$sql5 = "SELECT *
FROM `delatnosti`
WHERE `delatnost_id`
BETWEEN 17
AND 18
ORDER BY `delatnosti`.`delatnost_name` ASC";
            
$result5 = mysqli_query($link, $sql5);

$sql6 = "SELECT *
FROM `delatnosti`
WHERE `delatnost_id`
BETWEEN 20
AND 23
ORDER BY `delatnosti`.`delatnost_name` ASC";
            
$result6 = mysqli_query($link, $sql6);

$sql7 = "SELECT *
FROM `delatnosti`
WHERE `delatnost_id`
BETWEEN 25
AND 29
ORDER BY `delatnosti`.`delatnost_name` ASC";
            
$result7 = mysqli_query($link, $sql7);

$sql8 = "SELECT * FROM `marke_vozila` ORDER BY `marke_vozila`.`marka_name` ASC ";

$result8 = mysqli_query($link, $sql8);
    

        if (isset($_POST['submit'])) {
            
            $city_name = $_POST['city_name'];
            $delatnost_name = $_POST['delatnost_name'];
            $marka_name = $_POST['marka_name'];
        
            $sql = "SELECT DISTINCT firma_name, firma_adresa, firma_phone, firma_mob, firma_email, firma_web, firma_facebook, firma_instagram, firma_opis, firma_logo, firma_link FROM `firme` WHERE city_name LIKE '%$city_name%' AND delatnost_name LIKE '%$delatnost_name%' AND marka_name LIKE '%$marka_name%' ORDER BY firma_name ASC";
            
            $result = mysqli_query($link, $sql);
            
            $num_rows = mysqli_num_rows($result);
                   
        }