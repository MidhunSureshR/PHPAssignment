<?php
/* 
@license MIT
@author  R Midhun Suresh <rmidhunsuresh@gmail.com>
 */
?>

<?php 
    //require('php/DatabaseHandle.php');

    class TaskDatabase extends DatabaseHandle{

        public function addTask($taskText){
            
            if($insert_command = $this->mysqli->prepare("insert into `task_list` values(?,0)")){
                $insert_command->bind_param("s",$taskText);
                if($insert_command->execute()){
                    //echo nl2br("Task added to table successfully.\n");
                    addLog("Task added to table successfully.");
                }
                else{
                    //echo "ERROR [ Adding task ] : " . $this->mysqli->error . nl2br("\n") ;
                    addLog("Error adding Task");
                }
            }
        }

        public function getTasks(){
            //echo nl2br("\n\nTrying to fetch tasks from database...\n");
            
            $get_command = 'SELECT * FROM `task_list`';
            //echo nl2br("Select command generated is:\n") . $get_command . nl2br("\n");
            if($result = $this->runQuery($get_command)){
                //echo nl2br("Fetched data successfully.\n\n");
                addLog("Fetched data successfully.");
                while($row = $result->fetch_row() ){ ?>
                    <script>addDOMElement(<?php echo '"' . $row[0] . '"' ?>,"output","todo-item font-size-20px ");</script>
                <?php
                }
              
            }
            else{
                //echo nl2br("Error in fetching tasks from database.\n");
                addLog("Error in fetching tasks from database.");
            }
        }

        public function removeTask($taskText){

            if($remove_command = $this->mysqli->prepare("DELETE FROM `task_list` WHERE content like ?")){
                $remove_command->bind_param("s",$taskText);
                $remove_command->execute();
            }

        }

    }

 ?> 