var butLogin = document.getElementById('login');
var Login = document.querySelector('.action');
var acc_cont = document.getElementById('acc_cont');

console.log(butLogin);
console.log(Login);

butLogin.addEventListener("click", function(){
  Login.classList.remove("action");
  Login.classList.add("actionOnclick");
});

acc_cont.addEventListener("click",function(event){
  if (Login.contains(event.target)){

  } else {
    Login.classList.remove("actionOnclick");
    Login.classList.add("action");
  }
});
