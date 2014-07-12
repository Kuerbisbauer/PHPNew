<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 12.07.14
 * Time: 10:04
 */

echo <<<DOC
    <form action="forms/standardtest.php" method="get">
        <table>
            <tr>
                <td>
                    <label for="vorname">Vorname:</label>
                </td>
                <td>
                    <input type="text" name="vorname" class="textfield" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nachname">Nachname:</label>
                </td>
                <td>
                    <input type="text" name="nachname" class="textfield" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">E-Mail Adresse:</label>
                </td>
                <td>
                    <input type="email" name="email" class="textfield" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tel">Telefonnummer:</label>
                </td>
                <td>
                    <input type="tel" name="tel" class="textfield" />
                </td>
            </tr>
        </table>

        <input type="submit" value="Submit" />
    </form
DOC;

?>