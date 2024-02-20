function changeProfileImage() {
  const image = document.getElementById("userImage");

  image.onchange = () => {
    const file = image.files[0];
    const url = window.URL.createObjectURL(file);

    document.getElementById("image").src = url;
  };
}

function removeProfileImage(image) {
  const email = document.getElementById("email2").value;
  const request = new XMLHttpRequest();
  const form = new FormData();
  form.append("email", email);

  request.onreadystatechange = () => {
    if (request.readyState == 4 && request.status == 200) {
      if (request.responseText == "success") {
        document.getElementById("msgToast").classList.remove("hidden");
        document.getElementById("msg").innerHTML = "Profile Image Removed";
        document.getElementById("msgToast").classList.remove("border-red-500");
        document.getElementById("msgToast").classList.add("border-green-500");
        document.getElementById("msgIcon").classList.remove("bg-red-500");
        document.getElementById("msgIcon").classList.add("bg-green-500");

        sendImageToDelete(image);
        document.getElementById("msgToast").classList.remove("hidden");
        document.getElementById("msg").innerHTML = "Profile Image Removed";
        document.getElementById("msgToast").classList.remove("border-red-500");
        document.getElementById("msgToast").classList.add("border-green-500");
        document.getElementById("msgIcon").classList.remove("bg-red-500");
        document.getElementById("msgIcon").classList.add("bg-green-500");
        setTimeout(() => {
          window.location.reload();
        }, 1000);
      } else {
        document.getElementById("msgToast").classList.remove("hidden");
        document.getElementById("msg").innerHTML = "something went wrong";
        setTimeout(() => {
          document.getElementById("msgToast").classList.add("hidden");
        }, 1000);
      }
    }
  };

  request.open("POST", "./controllers/removeProfileController.php", true);
  request.send(form);
}

function sendImageToDelete(image){
  const request = new XMLHttpRequest();
  const form = new FormData();
  form.append("image",image);
  request.onreadystatechange = ()=>{
if(request.readyState==4 && request.status==200){

}
  }
request.open("POST","./controllers/removeProfile2Controller.php",true);
request.send(form);
}