<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Maker</title>

    <!-- Base stylesheet -->
    <link rel="stylesheet" href="css/base.css">

    <?php 
        require('php/TaskDatabase.php');
    ?> 
</head>
<body>

    <header class="align-center">
        <h1>Simple List Maker</h1>
        <h2>Submitted by Nihal Narayan, Antony Chirayil, Pranav S. Warrier, R Midhun Suresh</h2>
        <h3><a href="https://github.com/MidhunSureshR/PHPAssignment">Github</a></h3>
    </header>

    <section>
        <?php          
            $db = new TaskDatabase();             
            $db->addTask('"Write code for task list."');
        ?>    
    </section>
    
    
</body>
</html>