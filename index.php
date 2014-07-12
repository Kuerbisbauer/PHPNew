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

include('other/something.php');
require('other/anything123.php');


#Übung 8

$linklist = ['anything123.php', 'something.php'];

foreach($linklist as $link){
    echo <<<DOC
        <a href="other/$link">$link</a><br>
DOC;
}

echo '<br><br>';

#Übung 5.1

$zahl1 = 4;
$zahl2 = 2;

$ergebnis = $zahl1 % $zahl2;

if($ergebnis > 0)
    echo 'Zahl ist ungerade!';
else
    echo 'Zahl ist gerade <br />';


#Übung 5.4

//Einmaleins mit while Schleife

$zahl1 = 1;
$zahl2 = 1;

$ergebnis = 1;

echo '<table border="1">';

while($ergebnis < 100){

    $ergebnis = $zahl1 * $zahl2;

    if($ergebnis == 1)
        echo "<tr><td>$ergebnis</td>";
    else {
        if($zahl1 <= 10)
            echo "<td>$ergebnis</td>";
    }

    if($zahl1 == 10){
        $zahl1 = 1;
        $zahl2++;
        echo '</tr><tr>';
    }
    else
        $zahl1++;
}
echo '</table>';


#Übung 5.5

//Funktion mit Parameter

/*
 * Der Inhalt eines Arrays wird innerhalb
 * eines <pre>-Tags ausgegeben.
 */
function readArray($array) {
    echo '<pre>';
    print_r($array);
    echo'</pre>';
}

$array = ['A', 'B', 'C', 'D', 'E'];
readArray($array);


#Übung 5.6

//Funktion Arbeitskosten

function getAllStunden($stunden, $kosten = 15){
    $ergebnis = $stunden * $kosten;
    echo "Gesamtbetrag von $stunden Stunden: {$ergebnis}&euro; ";
}

getAllStunden(8, 10);


echo '<br />';
#Übung 6.2

//Mithilfe von printf() soll eine Zahl mindestens aus 3 Stellen bestehen

printf("%03d", 7);
echo '<br /><br />';


#Übung 7.1

//Einfaches Formular mit Vorname, Nachname, Emailadresse und Telefonnummer

include('forms/standard.php');



?>