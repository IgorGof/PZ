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
#            $query = "INSERT INTO 'znp' ('kKomu', 'Data', 'Den', 'Vrem', 'Cel', 'Poset', 'VnesZap') " + 
#                 "VALUE (" + $_POST[hero] + "";
# 
#
            $object->closeConnection();
        ?>
    </body>
 </html>