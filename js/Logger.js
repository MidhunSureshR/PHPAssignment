/**
 * Add log messages to container
 */

 let log_container;

 function setLogContainer(identifier){
    // log_container = document.getElementById(identifier);
    log_container = document.getElementById(identifier);
 }

 function addLog(log_message){
    log_container.innerHTML += "<p>" + log_message + "</p>";
 }    