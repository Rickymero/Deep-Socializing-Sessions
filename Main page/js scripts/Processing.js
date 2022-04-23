


//an initial array to compare the username and password upon signin-in
var names = [];
names[0] = "ricky";
var passwords = [];
passwords[0] = 12345;

var username = document.getElementById('username');
var password = document.getElementById('passW');
var Login_Page = document.getElementById('login');
var Logout_Page = document.getElementById('logout');

//check if the submit button is clicked \

if(Login_Page.addEventListener)
{
  Login_Page.addEventListener("click", Login, false);
  var loggedIn = document.getElementsByClassName('active').innerHTML;
  loggedIn.href = "Signed-up/sign-up.html";

}else {
  Login_Page.removeEventListener("click", Login, false)
}

//function to compare pass and username
function Login()
{
  if(username.value == names[0] && password.value == passwords[0])
  {
    window.print("You have successfully Logged in");
  }else {
    window.print("The Username and Password do not match!");
  }
}
Login();
