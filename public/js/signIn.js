function signIn() {
    const email = $("#email").val();
    const password = $("#password").val();
    const rememberMe = $("#rememberMe").is(":checked") ? "true" : "false";
    
    const formData = new FormData();
    formData.append("email", email);
    formData.append("password", password);
    formData.append("rememberMe", rememberMe);

    $.ajax({
        url: "/controllers/signInController.php",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(responseData) {
            if (responseData.trim() === "success") {
                window.location.href = "/";
            } else {
                $("#msgToast").removeClass("hidden");
                $("#msg").html(responseData);
                setTimeout(() => {
                    $("#msgToast").addClass("hidden");
                }, 2500);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error("AJAX Error:", errorThrown);
        }
    });
}
