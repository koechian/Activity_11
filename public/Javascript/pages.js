var myButton=document.getElementById("back-to-top")
function show(myButton){
    myButton.style='display:block;';
}


document.onscroll(show());

function start(){
    scrollTo(top);
}