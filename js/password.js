$(document).ready(function(){
$("#pas").blur(function(){
    var password = document.getElementById('password').value;
    var password2 = document.getElementById('password2').value;
    if(password!=password2){
        document.getElementById('error').innerHTML = "Ваши пароли не совпадают";
    

}});


$('#reg').click(function(){
    var fio = document.getElementById('fio').value;
    var login = document.getElementById('login').value;
    var email = document.getElementById('email').value;
    var password1 = document.getElementById('password1').value;
    var password2 = document.getElementById('password2').value;

})

});