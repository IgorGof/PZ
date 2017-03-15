<html>
    <head>
        
    </head>
    <body>
        <h1>Админка</h1>
        <?php 
            include "models/Database.php";
            $object = new Database();
            $object->connectToDb();
            $object->closeConnection();
        ?>   
    </body>
</html>