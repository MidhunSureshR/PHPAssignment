<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Maker</title>

    <!-- Base stylesheet -->
    <link rel="stylesheet" href="css/base.css">
</head>
<body>

    <header class="align-center">
        <h1>Simple List Maker</h1>
        <h2>Submitted by Nihal Narayan, Antony Chirayil, Pranav S. Warrier, R Midhun Suresh</h2>
        <h3><a href="https://github.com/MidhunSureshR/PHPAssignment">Github</a></h3>
    </header>

    <section>
        <?php 
            // We are using mysqli with object-oriented interface to communicate with our mysql server
            class DataBaseHandle{
                private $password = '@EJ2@xmK4mD3';
                private $mysqli;

                function __construct(){
                    if($this->connectToMYSQLServer()){
                        $this->createDatabase();
                    }
                
                }

                private function connectToMYSQLServer(){
                    $this->mysqli = new mysqli("localhost", "root", $this->password);
                    if ($this->mysqli->connect_errno) {
                        echo "Failed to connect to MySQL: " . $this->mysqli->connect_error;
                        return FALSE;
                    }
                    else{
                        echo "Connection to mysql server successfull.";
                        return TRUE;
                    }
                }

                private function createDatabase(){
                    $create_db_command = "CREATE DATABASE IF NOT EXISTS `taskdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
                    if($this->runQuery($create_db_command)){
                        echo "<br>Created / Connected to Database taskdb.";
                    }
                    else{
                        echo "<br>ERROR : ".$this->mysqli->error;
                        return;
                    }
                }

                private function createTable(){
                    
                }

                /**
                 * Runs given MYSQL query in mysqli object.
                 *
                 * @param string $queryString The MYSQL commands to be executed on database.
                 * @return bool TRUE if successful , FALSE otherwise.
                 */
                private function runQuery($queryString){
                    if($this->mysqli->query($queryString) == TRUE)
                        return TRUE;
                    return FALSE;
                }

            }

            $test = new DataBaseHandle();
            
        
        ?>    
    </section>
    
    
</body>
</html>