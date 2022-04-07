window.onload = function(){
    
    let currentTime = new Date();
    let year = currentTime.getFullYear()

    const node = document.createTextNode(year);
    document.getElementById('imgFooter').appendChild(node)
    
 };