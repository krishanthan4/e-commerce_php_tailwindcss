function blockUser(){
const email = document.getElementById("email").textContent;
const blockButton = document.getElementById("blockButton");
alert(email);
const request = new XMLHttpRequest();
const form = new FormData();
form.append("email",email);

request.onreadystatechange = () => {
if(request.readyState==4 && request.status==200){

    if(request.responseText=="success"){
blockButton.innerHTML ="Unblock";
blockButton.classList.remove("border-red-600");
blockButton.classList.add("border-green-500");
blockButton.classList.remove("text-red-700");
blockButton.classList.add("text-green-500");
    }else{
// alert(request.responseText);
    }
}
}
request.open("POST","./controllers/manageUsersController.php",true);
request.send(form);
}