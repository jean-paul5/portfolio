let body = document.getElementById("body")
let dark = document.getElementById("dark")
let del = document.getElementById("del")

dark.addEventListener("click",function(){
    body.classList.toggle("darkmode")
    
})
let message = del.parentNode

del.addEventListener("click",function(){
    message.style.display= "none";
    // alert("alert")
})
