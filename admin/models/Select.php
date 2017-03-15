<?php
    class Select extends Database {
        private $tabname;
        function __construct($tablename){
            $this->connectToDb();
            $this->tabname = $tablename;
        }
        
        function getRecordById($id){
            $query = "SELECT * FROM $this->tabname WHERE id=$id";
            mysql_query("SET NAMES utf8");
            if ($sql = mysql_query($query)){
                $data = mysql_fetch_array($sql);
            }
            return $data;
        }
        
        function GetAllData(){
            
        }
    }

?>