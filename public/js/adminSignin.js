function adminSignin(){
    const signIn_email = document.getElementById("signIn_email").value;
    const request = new XMLHttpRequest();
    const form = new FormData();
    form.append("email",signIn_email);
    request.onreadystatechange = ()=>{
if(request.readyState==4 && request.status==200){}
if(request.responseText=="success"){

alert("Verification Success !");
setTimeout(() => {
    window.location.href="/adminDashboard";
}, 1000);
}    

}
    request.open("POST","/controllers/adminSigninController.php",true);
    request.send(form);
}