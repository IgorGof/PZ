<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8"/>
        <title>Предварительная запись</title>
        <link rel="stylesheet" href="css/my.css"/>
 <!--       <link href="admin/css/bootstrap.css" rel="stylesheet"> -->
    </head>
    <body>
        <div class = "Zagolovok">
            <span>Журнал предварительной записи</span>
        </div>
        <div>
            <table class="table_blur">
                <thead>
                <tr>
                    <th>№<br />п/п</th>
                    <th>ФИО специалиста</th>
                    <th>Дата</th>
                    <th>День недели</th>
                    <th>Назначенное время</th>
                    <th>Цель посещения</th>
                    <th>ФИО посетителя</th>
                    <th>ФИО регистратора</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        include "admin/models/Database.php";
                        include "admin/models/Select.php";
                        $object = new Select("znp");
                        $data = $object->Get13Data();
                        $rows = mysql_num_rows($data);
                        
                        $nom = 1;
                        while ($row = mysql_fetch_array($data, MYSQL_ASSOC)) {
                            printf ("ID: %s  Name: %s", $row["id"], $row["name"]);
                            echo '<tr>';
                            echo '<td>' . $nom . '</td>';
                            echo '<td>' . $row['kKomu'] . '</td>';
                            $dateX = strtotime($row['Data']);
                            echo '<td>' . date("d-m-Y", $dateX) . '</td>';
                            echo '<td>' . $row['Den'] . '</td>';
                            echo '<td>' . $row['Vrem'] . '</td>';
                            echo '<td>' . $row['Cel'] . '</td>';
                            echo '<td>' . $row['Poset'] . '</td>';
                            echo '<td>' . $row['VnesZap'] . '</td>';
                            echo '</tr>';
                            $nom = $nom + 1;
                            if ($i >= 13) {break;};
                        
                        }   
                        /* for ($i = 1; $i <= $rows; $i++) {
                            $myrow = $object->getRecordById($i);
                            echo '<tr>';
                            echo '<td>' . $nom . '</td>';
                            echo '<td>' . $myrow['kKomu'] . '</td>';
                            $dateX = strtotime($myrow['Data']);
                            echo '<td>' . date("d-m-Y", $dateX) . '</td>';
                            echo '<td>' . $myrow['Den'] . '</td>';
                            echo '<td>' . $myrow['Vrem'] . '</td>';
                            echo '<td>' . $myrow['Cel'] . '</td>';
                            echo '<td>' . $myrow['Poset'] . '</td>';
                            echo '<td>' . $myrow['VnesZap'] . '</td>';
                            echo '</tr>';
                            $nom = $nom + 1;
                            if ($i >= 13) {break;};
                        }*/
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>