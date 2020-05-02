/** 
  @license MIT
  @author R Midhun Suresh <rmidhunsuresh@gmail.com> 
  @author Nihal Narayan 
  @author Antony S Chirayil 
  @author Pranav S Warrier
*/

document.getElementById("task_data").addEventListener("keypress",(event) => {
    if(event.keyCode === 13){
        handleAddTask();
    }
})