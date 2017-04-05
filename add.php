<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8"/>
        <title>Предварительная запись</title>
        <link rel="stylesheet" href="css/my.css"/>
    </head>
    <body>
        <?php
            print_r($_POST);
            print($_POST[hero]);
            include "admin/models/Database.php";
            include "admin/models/Select.php";
            $object = new Select("znp");
            $object->connectToDb();
            mysql_query("SET NAMES utf8");
            $data = $_POST[god] . "-" . $_POST[mes] ."-" .$_POST[den];
            echo "<br />";
            print($data);
            echo "<br />";
            $query = "INSERT INTO znp (kKomu, Data, Den, Vrem, Cel, Poset, VnesZap, Sostoyan) ".
            "VALUE ('". $_POST[hero]. "', '". $data. "', '". $_POST[denn]. "', '". $_POST[vrem]. "', '". $_POST[cel].
            "', '". $_POST[poset]. "', '". $_POST[vneszap]. "', 1)";
            print($query);
            mysql_query($query);
            $object->closeConnection();
            header('Refresh: 1; URL=index.php');
        ?>
    </body>
 </html>