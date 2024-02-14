function signUpToggle(){

  const  signUpDiv = document.getElementById("signUpDiv");
  const  signInDiv = document.getElementById("signInDiv");

  signUpDiv.classList.toggle("hidden");
  signUpDiv.classList.toggle("flex");
  signInDiv.classList.toggle("hidden");

// alert("Hello");
}


function signInProcess (){

    const signIn_email = document.getElementById("signIn_email");
    const signIn_password = document.getElementById("signIn_password");

const form = new FormData();
form.append("signIn_email",signIn_email);
form.append("signIn_password",signIn_password);

const request = new XMLHttpRequest();
request.onreadystatechange = function (){
    if (request.readyState==4 && request.status==200){
const response = request.responseText;
if(response =="success"){
alert("ok");
}else {
    alert("Credentials not correct ");
}
    }
}
request.open("POST","./controllers/signInController.php",true);
request.send(form);

}