/** 
  @license MIT
  @author R Midhun Suresh <rmidhunsuresh@gmail.com> 
  @author Nihal Narayan 
  @author Antony S Chirayil 
  @author Pranav S Warrier
*/


let debugToggle = {status:false};
let featureToggle = {status:false};
let illustrationToggle = {status:false};

function handleAddTask(){
    const data = document.getElementById("task_data").value;
    let payload = new URLSearchParams();
    payload.set("task_data",data); 
    sendURLEncodedData(payload,"php/CommunicateHandle.php");
    addDOMElement(data,"output","todo-item font-size-20px ");
    document.getElementById("task_data").value = "";
    verifyIllustration();
}

function handleRemoveTask(arg){
    const data = arg.target.innerText;
    let payload = new URLSearchParams();
    payload.set("remove_data",data);
    sendURLEncodedData(payload,"php/CommunicateHandle.php");
    removeDOMElement(data,"output","todo-item");
    verifyIllustration();
}

function toggleSection(element_id, toggle, flex_enabled = false){
    const element = document.getElementById(element_id);
    if(toggle.status){
        element.style.display = "none";
        toggle.status = false;
    }
    else{
        if(flex_enabled)
            element.style.display = "flex";
        else
            element.style.display = "inline-block";
        toggle.status = true;
    }
}

function addChildEventListener(base, eventName, selector, handler) {
    base.addEventListener(eventName, function(event) {
        let closest = event.target.closest(selector);
        if (closest && base.contains(closest)) {
            handler.call(closest, event);
        }
    });
}

function dostuff(){
    const base = document.getElementById("output");
    addChildEventListener(base,"click",".todo-item",handleRemoveTask);
}

function verifyIllustration(){
    const element = document.getElementById("output");
    modifyIllustration(!element.innerText);
}

function modifyIllustration(state){
    if(state){
        document.getElementById("all-done").style.display = "flex";
    }
    else{
        document.getElementById("all-done").style.display = "none";
    }
}

window.addEventListener("load",dostuff);

window.addEventListener("load",verifyIllustration);