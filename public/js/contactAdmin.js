function contactAdmin(){
    
    const email = $("#email").val();
    const subject = $("#subject").val();
    const message = $("#message").val();
    
    const formData = new FormData();
    formData.append("email", email);
    formData.append("subject", subject);
    formData.append("message", message);

    $.ajax({
        url: "/controllers/contactAdminController.php",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(responseData) {
            if (responseData.trim() === "Success") {
                 document.getElementById("msgToast").classList.remove("hidden");
                document.getElementById("msg").innerHTML = "Your messages was successfully sent to the Administrator.";
                document.getElementById("msgToast").classList.add("border-green-500");
                document.getElementById("msgIcon").classList.add("bg-green-500");
                setTimeout(() => {
                    document.getElementById("msgToast").classList.add("hidden");
                    window.location.href = "/contactAdmin";
                }, 2500);
               
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