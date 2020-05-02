  /** 
  @license MIT
  @author R Midhun Suresh <rmidhunsuresh@gmail.com> 
  @author Nihal Narayan 
  @author Antony S Chirayil 
  @author Pranav S Varrier
  */


 /**
  * Creates a new paragraph node with given text and adds it as child to given element. 
  * @param {String} textContent Content inside <p> tag
  * @param {String} parentId Id attribute of parent node to which <p> tag is appended.
  * @param {String} className Optional class name for the <p> tag generated.
  */
function addDOMElement(textContent,parentId,className = null,tag = "p"){
    let newElement = document.createElement(tag);
    newElement.textContent = textContent;
    if(className){
      newElement.className += className;
    }
    document.getElementById(parentId).appendChild(newElement);
}

/**
 * Removes a node element with matching textContent and className provided it is child of node having id parentId
 * @param {String} textContent String of todo item to match before deletion.
 * @param {String} parentId  Id of parent node from which the element is to be deleted.
 * @param {String} className  Class name of element to detect.
 */
function removeDOMElement(textContent,parentId,className){
  let elem = document.getElementsByClassName(className);
  for(let element of elem){
    if(element.innerText == textContent){
      document.getElementById(parentId).removeChild(element);
    }
  }
}