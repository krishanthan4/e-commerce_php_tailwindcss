function closeMobileMenu() {
  const closeMobileMenuButton = document.getElementById(
    "closeMobileMenuButton"
  );
  const MobileMenu = document.getElementById("MobileMenu");
  const MobileMenublack = document.getElementById("MobileMenublack");

  MobileMenu.classList.toggle("hidden");
  MobileMenublack.classList.toggle("hidden");
}
function MobileMenuNav(){
  const MobileMenu = document.getElementById("MobileMenu");
  const MobileMenublack = document.getElementById("MobileMenublack");
  MobileMenu.classList.remove("hidden");
  MobileMenublack.classList.remove("hidden");

}

function flyoutMenuWomenHover() {
  const flyoutMenuWomen = document.getElementById("flyoutMenuWomen");

  flyoutMenuWomen.classList.remove("hidden");
}
function flyoutMenuWomenRemove() {
  const flyoutMenuWomen = document.getElementById("flyoutMenuWomen");
  flyoutMenuWomen.classList.add("hidden");
}

function flyoutMenumenHover() {
  const flyoutMenumen = document.getElementById("flyoutMenumen");

  flyoutMenumen.classList.remove("hidden");
}
function flyoutMenumenRemove() {
  const flyoutMenumen = document.getElementById("flyoutMenumen");
  flyoutMenumen.classList.add("hidden");
}



function signOut(){
  
  const request = new XMLHttpRequest();
  request.onreadystatechange = ()=>{
if(request.status==200 && request.readyState==4){
if(request.responseText=="success"){
window.location.href = "/";
}

}
  }
  request.open("POST","./controllers/signoutController.php",true);
  request.send();
}