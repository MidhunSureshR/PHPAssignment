<?php
// We are using mysqli with object-oriented interface to communicate with our mysql server
    class DatabaseHandle{
        private $password = '@EJ2@xmK4mD3';
        protected $mysqli;

        function __construct(){
            if($this->connectToMYSQLServer()){
                $this->createDatabase();
                $this->selectDatabase();
                $this->createTable();
            }
        
        }

        private function connectToMYSQLServer(){
            $this->mysqli = new mysqli("localhost", "root", $this->password);
            if ($this->mysqli->connect_errno) {
                echo "Failed to connect to MySQL: " . $this->mysqli->connect_error . nl2br("\n");
                return FALSE;
            }
            else{
                echo nl2br("Connection to MYSQL server successfull.\n");
                return TRUE;
            }
        }

        private function createDatabase(){
            $create_db_command = "CREATE DATABASE IF NOT EXISTS `taskdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
            if($this->runQuery($create_db_command)){
                echo nl2br("Created Database taskdb.\n");
            }
            else{
                echo "ERROR : ".$this->mysqli->error . nl2br("\n");
                return;
            }
        }
        
        private function selectDatabase(){
            $this->runQuery("use taskdb");
        }

        private function createTable(){
            $create_table_command = "CREATE TABLE IF NOT EXISTS task_list(content VARCHAR(100) NOT NULL,done BIT(1) DEFAULT 0 NOT NULL  )";
            if($this->runQuery($create_table_command)){
                echo nl2br("Table created successfully.\n");
            }
            else echo nl2br("Error[ TABLE CREATION ] :" . mysqli_error($this->mysqli) . nl2br("\n"));
        }

        /**
         * Runs given MYSQL query in mysqli object.
         *
         * @param string $queryString The MYSQL commands to be executed on database.
         * @return bool TRUE if successful , FALSE otherwise.
         */
        protected function runQuery($queryString){
            if($this->mysqli->query($queryString) == TRUE){
                return TRUE;
            }
            return FALSE;
        }

    }
?>