function closeModal() {
    $("#verificationModal").addClass("hidden");
}

function openModal() {
    $("#verificationModal").removeClass("hidden");
}


function adminSignin() {
    const email = $("#adminEmail").val();

    const formData = new FormData();
    formData.append("adminEmail", email);

    $.ajax({
        url: "/controllers/adminSigninController.php",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function (responseData) {
            if (responseData.trim() === "success") {
                $("#msgToast").removeClass("hidden");
                $("#msg").html("Please take a look at your email to find the VERIFICATION CODE.");
                $("#msgToast").addClass("border-green-500");
                $("#msgIcon").addClass("bg-green-500");
                setTimeout(() => {
                    $("#msgToast").addClass("hidden");
                    openModal();
                }, 2000);

            } else {
                $("#msgToast").removeClass("hidden");
                $("#msg").html(responseData);
                setTimeout(() => {
                    $("#msgToast").addClass("hidden");
                }, 2500);
            }

        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error("AJAX Error:", errorThrown);
        }
    });


}





function verifyAdminCode() {
    const verifyCode = $("#verifyCode").val();

    const formData = new FormData();
    formData.append("verifyCode", verifyCode);

    $.ajax({
        url: "/controllers/adminVerificationController.php",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function (responseData) {
            if (responseData.trim() === "success") {
                $("#msgToast").removeClass("hidden");
                $("#msg").html("Successfully Verified!");
                $("#msgToast").addClass("border-green-500");
                $("#msgIcon").addClass("bg-green-500");
                setTimeout(() => {
                    closeModal();
                    window.location = "/adminDashboard";
                }, 1000);
               
            } else {
                $("#msgToast").removeClass("hidden");
                $("#msg").html(responseData);
                $("#msgIcon").removeClass("bg-green-500").addClass("bg-red-500"); 
                $("#msgToast").removeClass("border-green-500").addClass("border-red-500"); 
                setTimeout(() => {
                    $("#msgToast").addClass("hidden");
                    $("#msgIcon").removeClass("bg-red-500").addClass("bg-green-500"); 
                    $("#msgToast").removeClass("border-red-500").addClass("border-green-500"); 
                }, 2500);
            }
        }
    });
}
