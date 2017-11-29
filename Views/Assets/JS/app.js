var butLogin = document.getElementById('login');
var Login = document.querySelector('.action');
var acc_cont = document.getElementById('acc_cont');
var butOn = document.querySelector('.butOn');
var butOff = document.querySelector('.butOff');
var menu = document.querySelector('#burger');
var butLogin2 = document.getElementById('login2');
var croix = document.getElementById('croix');

croix.addEventListener('click', function(){
  Login.classList.add('action');
  Login.classList.remove("actionOnclick");
});

if(acc_cont!=null){
acc_cont.addEventListener("click",function(event){
  if (!Login.contains(event.target)){
    Login.classList.remove("actionOnclick");
    Login.classList.add("action");
    }
  });
}

if(butOn!=null){
butOn.addEventListener("click", function(){
  if(menu.classList.contains("visible")) {
    menu.classList.remove("visible");
    } else {
    menu.classList.add("visible");
    }
  });
};

if(butOff!=null){
butLogin.addEventListener("click", function(){
  Login.classList.remove("action");
  Login.classList.add("actionOnclick");
  });

butOff.addEventListener("click", function(){
  if(menu.classList.contains("visible")) {
    menu.classList.remove("visible");
    } else {
    menu.classList.add("visible");
    }
  });

butLogin2.addEventListener("click", function(){
  Login.classList.remove("action");
  Login.classList.add("actionOnclick");
  menu.classList.remove('visible');
  });
};

if(acc_cont!=null){
acc_cont.addEventListener("click",function(event){
  if (!menu.contains(event.target)){
    menu.classList.remove("visible");
    }
  });


}
