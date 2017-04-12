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
            print($_POST[vib]);
            include "admin/models/Database.php";
            include "admin/models/Select.php";
            $object = new Select("znp");
            $object->connectToDb();
            mysql_query("SET NAMES utf8");
            $query = "UPDATE znp SET Sostoyan=0 WHERE ID=".$_POST[vib];
            mysql_query($query);
            $object->closeConnection();
            header('Refresh: 1; URL=index.php');
         ?>
    </body>
 </html>