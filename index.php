<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 10.07.14
 * Time: 18:32
 */

#Übung 2

$zahl1 = 3;
$zahl2 = 5;

//Ergebnis ist int, Typecast auf float
$ergebnis = (float) $zahl1 + $zahl2;

echo $zahl1 . ' + ' . $zahl2 . ' = ' . $ergebnis . '<br />';
echo var_dump($ergebnis) . '<br />';


#Übung 3 & 4

//Eine Liste von Orten wird in ein <ul> Tag geschrieben

$orte = ['M&#246;nchhof', 'Gols', 'Weiden', 'Neusiedl'];

echo '<ul>';
foreach($orte as $ausgabe)
    echo '<li>' . $ausgabe . '</li>';

echo '</ul><br />';


#Übung 5

//Ein zufallsindex vom Array wird ermittelt und dieser Wert wird ausgegeben

$randomtext = ['TEXT', 'YOLO', 'ABC', 'JAN', 'CLUB MAGIC LIFE'];
$max = count($randomtext) - 1;
$randomnumber = rand(0, $max);

echo $randomtext[$randomnumber] . '<br /><br />';


#Übung 6 & 7

//Erstellt eine Tabelle mit allen Informationen zu $_SERVER

/*
echo '<table border="1">';
foreach ($_SERVER as $key => $txt)
    echo '<tr><td>' . $key . '</td><td>' . $txt . '</td></tr>';
echo '</table>';
*/

?>