function showForgotPasswordModal() {

    var modal = document.getElementById("fpmodal");
    var backdrop = document.getElementById("modal-backdrop");


    modal.classList.remove("hidden");
    backdrop.classList.remove("hidden");


    document.body.classList.add("overflow-hidden");
}


function hideForgotPasswordModal() {

    var modal = document.getElementById("fpmodal");
    var backdrop = document.getElementById("modal-backdrop");

    modal.classList.add("hidden");
    backdrop.classList.add("hidden");

    // visibility_off
    document.body.classList.remove("overflow-hidden");
}



let mouseDown = false;

function handleMouseDown(inputId) {
    mouseDown = true;
    togglePasswordVisibility(inputId);
}

function handleMouseUp(inputId) {
    mouseDown = false;
    togglePasswordVisibility(inputId);  
}

function togglePasswordVisibility(inputId) {
    const passwordInput = document.getElementById(inputId);
    const icon = passwordInput.nextElementSibling;

    if (passwordInput.type === 'password' && mouseDown) {
        passwordInput.type = 'text';
        icon.textContent = 'visibility';
    } else {
        passwordInput.type = 'password';
        icon.textContent = 'visibility_off';
    }
}


function resetPassword(){

    const email = document.getElementById("email").value;
    const password = document.getElementById("pasword").value;
    const retype_password = document.getElementById("retype_password").value;

    const request = new XMLHttpRequest();
    const form = new FormData();
    form.append("email",email);
    form.append("password",password);
    form.append("retype_password",retype_password);

    request.onreadystatechange =()=>{

        if(request.readyState==4 && request.status ==200){
            if(request.responseText=="success"){
                document.getElementById("fpmodal").classList.add("hidden");
                document.getElementById("modal-backdrop").classList.add("hidden");
setTimeout(() => {
    document.getElementById("msgToast").classList.remove("hidden");
    document.getElementById("msg").innerHTML = "Password Changed";
    document.getElementById("msgToast").classList.remove("border-green-500");
    document.getElementById("msgToast").classList.add("border-red-500");
    document.getElementById("msgIcon").classList.remove("bg-green-500");
    document.getElementById("msgIcon").classList.add("bg-red-500");
    window.location.reload();
}, 2000);

            }else{
                document.getElementById("fpmodal").classList.add("hidden");
                document.getElementById("modal-backdrop").classList.add("hidden");
                setTimeout(() => {
                    document.getElementById("msgToast").classList.remove("hidden");
                    document.getElementById("msg").innerHTML = request.responseText;
                    document.getElementById("msgToast").classList.remove("border-green-500");
                    document.getElementById("msgToast").classList.add("border-orange-500");
                    document.getElementById("msgIcon").classList.remove("bg-green-500");
                    document.getElementById("msgIcon").classList.add("bg-orange-500");
                    window.location.reload();
                }, 2000);
            }
        }
    }
    request.open("POST","./controllers/resetPasswordController.php",true);
request.send(form);

}