<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 12.07.14
 * Time: 10:10
 */

echo 'Ihre Eingaben <br />';
echo "Vorname: ".htmlspecialchars($_GET['vorname'])." <br />";
echo "Nachname: ".htmlspecialchars($_GET['nachname'])."<br />";
echo "Email: ".htmlspecialchars($_GET['email'])."<br />";
echo "Telefonnummer: ".htmlspecialchars($_GET['tel'])."<br />";

?>