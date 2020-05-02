<?php
/**
  @license MIT
  @author R Midhun Suresh <rmidhunsuresh@gmail.com> 
  @author Nihal Narayan 
  @author Antony S Chirayil 
  @author Pranav S Varrier
 */
?>

<?php 
    class TaskDatabase extends DatabaseHandle{

        public function addTask($taskText){
            
            if($insert_command = $this->mysqli->prepare("insert into `task_list` values(?,0)")){
                $insert_command->bind_param("s",$taskText);
                if($insert_command->execute()){
                    addLog("Task added to table successfully.");
                }
                else{
                    addLog("Error adding Task");
                }
            }
        }

        public function getTasks(){
            $get_command = 'SELECT * FROM `task_list`';
            if($result = $this->runQuery($get_command)){
                addLog("Fetched data successfully.");
                while($row = $result->fetch_row() ){ ?>
                    <script>addDOMElement(<?php echo '"' . $row[0] . '"' ?>,"output","todo-item font-size-20px ");</script>
                <?php
                }
              
            }
            else{            
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