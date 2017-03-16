<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8"/>
        <title>Предварительная запись</title>
        <link rel="stylesheet" href="css/my.css"/>
    </head>
    <body>
        <div class = "Zagolovok">
            <span>Журнал предварительной записи</span>
        </div>
        <div class = "table">
            <table>
                <tr>
                    <th>№<br />п/п</th>
                    <th>ФИО<br />(к кому)</th>
                    <th>День<br />(в какой день недели)</th>
                    <th>Время<br />(в какое время)</th>
                    <th>Цель<br />(Цель посещения)</th>
                    <th>ФИО<br />(ФИО посетителя)</th>
                    <th>ФИО<br />(запись внес)</th>
                </tr>
                    <?php
                        include "admin/models/Database.php";
                        include "admin/models/Select.php";
                        $object = new Select("znp");
                        $data = $object->Get13Data();
                        $rows = mysql_num_rows($data);
                        $nom = 1;
                        for ($i = 1; $i <= $rows; $i++) {
                            $myrow = $object->getRecordById($i);
                            echo '<tr>';
                            echo '<td>' . $nom . '</td>';
                            echo '<td>' . $myrow['kKomu'] . '</td>';
                            echo '<td>' . $myrow['Den'] . '</td>';
                            echo '<td>' . $myrow['Vrem'] . '</td>';
                            echo '<td>' . $myrow['Cel'] . '</td>';
                            echo '<td>' . $myrow['Poset'] . '</td>';
                            echo '<td>' . $myrow['VnesZap'] . '</td>';
                            echo '</tr>';
                            $nom = $nom + 1;
                            if ($i >= 13) {break;};
                        }
                    ?>

            </table>
        </div>
    </body>
</html>