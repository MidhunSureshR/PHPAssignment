/**
 * Javascript functions that adds log-messages to a given div.
 */

 let log_container;

 function setLogContainer(identifier){
    // log_container = document.getElementById(identifier);
    log_container = document.getElementById(identifier);
 }

 function addLog(log_message){
    log_container.innerHTML += "<p class='log-item'>" + log_message + "</p>";
 }    