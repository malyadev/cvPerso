<?php

$_SERVER["PHP_SELF"];

echo('Merci '.$_POST['user_firstname'].' '. $_POST['user_lastname']. ' de nous avoir contacté à propos du '.$_POST['subject']).'.'."<br>"."<br>";
echo (' Un de nos conseillers vous contactera par mail à '. $_POST['email']. ' ou par téléphone au '. $_POST['phone']. ' dans les plus brefs délais pour traiter votre demande : ')."<br>"."<br>";
echo ($_POST['user_message']);