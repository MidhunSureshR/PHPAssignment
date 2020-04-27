<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Maker</title>


    <!-- PHP imports -->
    <?php 
        require 'php/DatabaseHandle.php';
        require 'php/TaskDatabase.php';
        $db = new TaskDatabase();  
    ?> 

    <!-- Base stylesheet -->
    <link rel="stylesheet" href="css/base.css">

    <!-- Import FetchWrapper for POST -->
    <script src="js/FetchWrapper.js"></script>
    
    <script type="text/javascript"> 
        function handleAddTask(){
            const data = document.querySelector("#task_data").value;
            console.log("Data = " + data);
            let payload = new URLSearchParams();
            payload.set("task_data",data); 
            sendURLEncodedData(payload,"php/CommunicateHandle.php");
            document.querySelector("#output").innerHTML += data;
        }





    </script>


</head>
<body>

    <header class="align-center">
        <h1>Simple List Maker</h1>
        <h2>Submitted by Nihal Narayan, Antony Chirayil, Pranav S. Warrier, R Midhun Suresh</h2>
        <h3><a href="https://github.com/MidhunSureshR/PHPAssignment">Github</a></h3>
    </header>

    <section id="output">
        <?php          
                      
            $db -> getTasks();
            $db -> safeExit();

        ?>    
        <br>
     
        <input id="task_data" type="text" value="Enter task data here" name="task_data">
        <input type="button" value="Add" onclick="handleAddTask()">
     
    </section>

   <section>
 <!--   <h3>Features</h3>
    <ul>
        <li>Uses parameterisation in SQL query to prevent SQL-injection attacks.</li>
        <li>Written in PHP and common JS with no external dependencies [No Bootstrap,JQuery or other CSS frameworks.]</li>  
        <li>Uses the modern fetch API to perform commuication with PHP-backend instead of old ajax calls</li>
    </ul> -->
   </section>
    
    
</body>
</html>