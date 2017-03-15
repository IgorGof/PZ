<?php
    class Database {
        private $host = "localhost";
        private $user = "root";
        private $pass = "cbcflvby235";
        private $db = "pz";
        
        function connectToDb (){
            mysql_connect($this->host, $this->user, $this->pass);
            mysql_select_db($this->db);
        }
        
        function closeConnection(){
            mysql_close();
        }
        
    }
?> 