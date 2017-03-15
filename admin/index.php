<html lang="ru">
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h1>Админка</h1>
        <?php 
            include "models/Database.php";
            include "models/Select.php";
            $object = new Select("users");
            $data = $object->getRecordById("1");
            print_r($data);
            $object->closeConnection();
        ?>   
    </body>
</html>