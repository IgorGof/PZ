<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8"/>
        <title>Удаление записи</title>
        <link rel="stylesheet" href="css/my.css"/>
 <!--       <link href="admin/css/bootstrap.css" rel="stylesheet"> -->
    </head>
    <body>
        <div class = "Zagolovok">
            <span>Удаление записи</span>
        </div>
        <div>
            <table class="table_blur">
                <thead>
                <tr>
                    <th>Удалить<br />п/п</th>
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
                        echo '<form action="del.php" method="post">';
                        while ($row = mysql_fetch_array($data, MYSQL_ASSOC)) {
                            echo '<tr>';
                            echo '<td align="center">
                                    <input type="radio" name="vib" width="100px" value="' . $row[id] .'"/></td>';
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
                        $object->closeConnection(); 
                    ?>
                </tbody>
            </table>
        </div>
        <input type="submit" name="send-param" value="Удалить" class="But"/>
        </form>
        <p>Выберите нужную запись и нажмите кнопку удалить</p>


    </body>
</html>