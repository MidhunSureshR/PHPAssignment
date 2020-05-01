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
        require 'php/LogPrinter.php';
    ?> 

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;900&display=swap" rel="stylesheet"> 
    
    <!-- Font Awesome 5-->
    <script src="https://kit.fontawesome.com/d2f3202e13.js" crossorigin="anonymous"></script>

    <!-- Base stylesheet -->
    <link rel="stylesheet" href="css/base.css">

    <!--DOM Wrapper-->
    <script src="js/DOMwrapper.js"></script>

    <!-- Import FetchWrapper for POST -->
    <script src="js/FetchWrapper.js"></script>

    <!-- Log / Debug Capability -->
    <script src="js/Logger.js"></script>

    <!--User interface -->
    <script type="text/javascript" src="js/UserInterface.js"></script>


</head>
<body class="font-roboto-400">
    
    <header class="align-center">

        <div class="font-roboto-900 font-size-80px margin-top-50px">Tiny TODO</div>

        <div class="font-size-20px margin-top-20px">Self Hostable todo list written in <span class="font-roboto-900">Javascript</span>, <span class="font-roboto-900">PHP</span>
         and powered by <span class="font-roboto-900">MYSQL</span></div>

        <h3>
            <a class="git-button" href="https://github.com/MidhunSureshR/TinyTODO" target="_blank">Github <i class="fab fa-github"></i></a>
            <a class="git-button margin-left-10px" onclick="toggleSection('log-box',debugToggle)">Debug <i class="fas fa-code"></i></a>
            <a class="git-button margin-left-10px" onclick="toggleSection('feature-box',featureToggle,true)">Features <i class="fas fa-box-open"></i></a>
        </h3>

    </header>
    
    <section class="display-flex space-evenly">

        <!--Log output goes here -->
        <div id="log-box" class="padding-5px-all display-inline"> 
            <div class="font-roboto-900">Statz for geekz</div>
        </div> 
        
        <!--WEB APP -->
        <section id="web-app">
    
            <section id="output">
                <?php      

                    setLogContainer("log-box");     
                    $db = new TaskDatabase();           
                    $db -> getTasks();
                    $db -> safeExit();
                
                ?>      
                <img id="all-done" src="img/gameday.svg">
            </section>
    
            <section>
                <input id="task_data" type="text" placeholder="eg: tame the dragon" name="task_data" class="task_box">
                <input class="add-button font-roboto-900" type="button" value="+" onclick="handleAddTask()">
            </section>
    
        </section>

    </section>

   <section class="display-flex space-evenly" id="feature-box">

   <div>
       <h3>FEATURES</h3>
        <ul>
            <li>Uses parametrization in SQL query to prevent SQL-injection attacks.</li>
            <li>Written in pure PHP and JS with no external libraries.</li>  
            <li>Uses the modern fetch API to perform commuication with PHP-backend instead of old ajax calls.</li>
            <li>Uses proper DOM functions to prevent XSS injection.</li>
        </ul>
   </div>

   </section>
    
   <footer class="align-center margin-top-50px">
       Developed with <i class="fas fa-heart font-color-red"></i> by <br><br><span class="font-roboto-900">Nihal Narayan</span>, <span class="font-roboto-900">Antony S. Chirayil</span>, <span class="font-roboto-900">Pranav S. Warrier</span>, <span class="font-roboto-900">R Midhun Suresh</span>
   </footer>

    <!-- Keyboard module to detect ENTER Key -->
    <script src="js/Keyboard.js"></script>
</body>
</html>