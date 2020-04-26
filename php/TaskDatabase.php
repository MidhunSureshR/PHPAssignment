<?php 
    require('php/DatabaseHandle.php');

    class TaskDatabase extends DatabaseHandle{

        public function addTask($taskText){
            $insert_command = 'insert into `task_list` values(' . $taskText . ',0)';
            echo nl2br("\nInsert command generated is:\n") . $insert_command . nl2br("\n");
            if($this->runQuery($insert_command)){
                echo nl2br("Task added to table successfully.\n");
            }
            else{
                echo "ERROR [ Adding task ] : " . $this->mysqli->error . nl2br("\n") ;
            }
        }

    }

 ?> 