function showForgotPasswordModal() {

    var modal = document.getElementById("verifyCodeModal");
    var backdrop = document.getElementById("modal-backdrop");


    modal.classList.remove("hidden");
    backdrop.classList.remove("hidden");


    document.body.classList.add("overflow-hidden");
}


function hideVerifyCodeModal() {

    var modal = document.getElementById("verifyCodeModal");
    var backdrop = document.getElementById("modal-backdrop");

    modal.classList.add("hidden");
    backdrop.classList.add("hidden");


    document.body.classList.remove("overflow-hidden");
}


async function forgotPassword() {

    const email = document.getElementById("email").value;

    try {
        const response = await fetch("/controllers/verifyCodeController.php?email=" + email);

        if (response.ok) {
            const responseData = await response.text();
            if (responseData.trim() === "Success") {
                document.getElementById("msgToast").classList.remove("hidden");
                document.getElementById("msg").innerHTML = "Verification code has been sent successfully. Please check your email.";
                document.getElementById("msgToast").classList.add("border-green-500");
                document.getElementById("msgIcon").classList.add("bg-green-500");
                setTimeout(function () {
                    document.getElementById("msgToast").classList.add("hidden");
                     showForgotPasswordModal();
                }, 1000);
            } else {
                document.getElementById("msgToast").classList.remove("hidden");
                document.getElementById("msg").innerHTML = responseData;
                setTimeout(() => {
                    document.getElementById("msgToast").classList.add("hidden");
                }, 1000);
            }
        } else {
            throw new Error("Network Error.");
        }
    } catch (error) {
        console.error("Fetch error:", error);
    }
}

function verifyCode(){
    const email = document.getElementById("email").value;
const verification_code = document.getElementById("verification_code").value;

const request = new XMLHttpRequest();
const form = new FormData();
form.append("verification_code",verification_code);
form.append("email",email);


request.onreadystatechange= () => {
    if(request.readyState==4 && request.status==200){
if(request.responseText=="success"){
openForgotPasswordModel();
}else{
    document.getElementById("msgToast").classList.remove("hidden");
    document.getElementById("msg").innerHTML = request.responseText;
    document.getElementById("msgToast").classList.remove("border-green-500");
    document.getElementById("msgToast").classList.add("border-red-500");
    document.getElementById("msgIcon").classList.remove("bg-green-500");
    document.getElementById("msgIcon").classList.add("bg-red-500");
    document.getElementById("verifyCodeModal").classList.add("hidden");
    setTimeout(function () {
        document.getElementById("msgToast").classList.add("hidden");
         showForgotPasswordModal();
    }, 2000);
}

    }
}

request.open("POST","./controllers/verifyCode2Controller.php",true);
request.send(form);
}

function openForgotPasswordModel(){

    document.getElementById("verifyCodeModal").classList.add("hidden");
    document.getElementById("fpmodal").classList.remove("hidden");

}
