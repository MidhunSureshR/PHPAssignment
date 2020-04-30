<?php 

    require '../php/DatabaseHandle.php';
    require '../php/TaskDatabase.php';
    require '../php/LogPrinter.php';

    echo "Attempting to add task -> " . $_POST["task_data"];

    $db = new TaskDatabase();

    //When a new task-item is added.
    handleRequest("task_data",function () use(&$db){   
        $db->addTask($_POST["task_data"]);
        $db->safeExit();
        });


    //When a task-item is deleted.
    handleRequest("remove_data",function () use(&$db){
         $db->removeTask(($_POST["remove_data"]));
         $db->safeExit();
        });
    

    //Abstractions for better readability 

    function handleRequest($param_name,$callback){
        if( param_recieved($param_name) && not_empty($param_name) ){
            $callback();
        }
    }


    function param_recieved($identifier){
        return isset($_POST[$identifier]);
    }


    function not_empty($identifier){
        return !empty($_POST[$identifier]);
    }



?>