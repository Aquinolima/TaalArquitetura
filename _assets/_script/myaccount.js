function myAccount () {
  var login = "login123"
var senha = "senha123"
 var enter1 = prompt("Digite seu login:");
 var enter2 = prompt("Digite sua senha:");

 if (login === enter1 & senha === enter2) {
    window.location.href = "myaccount.php"
 } else {
     alert("Login ou Senha Incorretos!")
    
 }
}