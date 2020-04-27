<?php 

require '../php/DatabaseHandle.php';
require '../php/TaskDatabase.php';
echo "Attempting to add task -> " . $_POST["task_data"];
$db = new TaskDatabase();

if(isset($_POST["task_data"])){
   
    $db->addTask($_POST["task_data"]);
    $db->safeExit();
    echo "Added Task Successfully.";
}

?>