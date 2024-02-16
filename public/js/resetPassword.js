async function resetPassword() {
    
    const email = document.getElementById("email").value;
    const newPassword = document.getElementById("passwordInput").value;
    const retypePassword = document.getElementById("passwordInput1").value;
    const verification = document.getElementById("vcode").value;

    const formData = new FormData();
    formData.append("email", email);
    formData.append("newPassword", newPassword);
    formData.append("retypePassword", retypePassword);
    formData.append("verification", verification);

    try {
        const response = await fetch("/controllers/resetPasswordController.php", {
            method: "POST",
            body: formData
        });


        if (response.ok) {
            const responseData = await response.text();
            if (responseData.trim() === "success") {
                document.getElementById("msgToast").classList.remove("hidden");
                document.getElementById("msg").innerHTML = "Password updated successfully.";
                document.getElementById("msgToast").classList.add("border-green-500");
                document.getElementById("msgIcon").classList.add("bg-green-500");
                setTimeout(function () {
                    document.getElementById("msgToast").classList.add("hidden");
                    hideForgotPasswordModal();
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