var butLogin = document.getElementById('login');
var Login = document.querySelector('.action');
var acc_cont = document.getElementById('acc_cont');
var butBurger = document.getElementById('threeLi');
var menu = document.querySelector('#burger');
var butLogin2 = document.getElementById('login2');


butLogin.addEventListener("click", function(){
  Login.classList.remove("action");
  Login.classList.add("actionOnclick");
});

acc_cont.addEventListener("click",function(event){
  if (!Login.contains(event.target)){
    Login.classList.remove("actionOnclick");
    Login.classList.add("action");
  }
});

butBurger.addEventListener("click", function(){
  if(menu.classList.contains("visible")) {
    menu.classList.remove("visible");
    } else {
    menu.classList.add("visible");
  }
});


acc_cont.addEventListener("click",function(event){
  if (!menu.contains(event.target)){
    menu.classList.remove("visible");
  }
});

butLogin2.addEventListener("click", function(){
  Login.classList.remove("action");
  Login.classList.add("actionOnclick");
  menu.classList.remove('visible');
});
