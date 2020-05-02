  /** 
  @license MIT
  @author R Midhun Suresh <rmidhunsuresh@gmail.com>
  */

 let log_container;

 function setLogContainer(identifier){
    // log_container = document.getElementById(identifier);
    log_container = document.getElementById(identifier);
 }

 function addLog(log_message){
    log_container.innerHTML += "<p class='log-item'>" + log_message + "</p>";
 }    