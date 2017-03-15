<?php
    class Database {
        private $host = "localhost";
        private $user = "root";
        private $pass = "cbcflvby235";
        private $db = "pz";
        
        function connectToDb (){
            
            if (!mysql_connect($this->host, $this->user, $this->pass)) {
                echo "Не удалось подключится к серверу БД";
                if (!mysql_select_db($this->db)){
                    echo "Не удалось подключится к выбранной БД";
                }
            }
        }
        
        function closeConnection(){
            mysql_close();
        }
        
    }
?> 