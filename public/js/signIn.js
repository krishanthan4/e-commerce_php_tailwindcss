async function signIn() {
    
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const rememberMe = document.getElementById("rememberMe").checked;

    const formData = new FormData();
    formData.append("email", email);
    formData.append("password", password);
    formData.append("rememberMe", rememberMe);

    try {
        const response = await fetch("/controllers/signInController.php", {
            method: "POST",
            body: formData
        });

        if (response.ok) {
            const responseData = await response.text();
            if (responseData.trim() === "success") {
                window.location.href = "/";
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