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


async function forgotPassword() {

    const email = document.getElementById("email").value;

    try {
        const response = await fetch("/controllers/forgotPasswordController.php?email=" + email);

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
                }, 2500);
            } else {
                document.getElementById("msgToast").classList.remove("hidden");
                document.getElementById("msg").innerHTML = responseData;
                setTimeout(() => {
                    document.getElementById("msgToast").classList.add("hidden");
                }, 2500);
            }
        } else {
            throw new Error("Network response was not ok.");
        }
    } catch (error) {
        console.error("Fetch error:", error);
    }
}