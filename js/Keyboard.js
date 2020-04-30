document.getElementById("task_data").addEventListener("keypress",(event) => {
    if(event.keyCode === 13){
        handleAddTask();
    }
})