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

$orte = ['M&#246;nchhof', 'Gols', 'Weiden', 'Neusiedl'];

echo '<ul>';
foreach($orte as $ausgabe)
    echo '<li>' . $ausgabe . '</li>';

echo '</ul>';
?>