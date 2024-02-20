async function updateProfile() {


    const firstName = document.getElementById("fname").value;
    const lastName = document.getElementById("lname").value;
    const mobile = document.getElementById("mobile").value;
    const gender = document.getElementById("gender").value;
    const line1 = document.getElementById("line1").value;
    const line2 = document.getElementById("line2").value;
    const province = document.getElementById("province").value;
    const district = document.getElementById("district").value;
    const city = document.getElementById("city").value;
    const pcode = document.getElementById("pcode").value;
    const image = document.getElementById("userImage").files[0];

    const formData = new FormData();
    formData.append("firstName",firstName);
    formData.append("lastName",lastName);
    formData.append("mobile",mobile);
    formData.append("gender",gender);
    formData.append("line1", line1);
    formData.append("line2", line2);
    formData.append("province", province);
    formData.append("district", district);
    formData.append("city", city);
    formData.append("pcode", pcode);
    formData.append("image", image);

    try {
        const response = await fetch ("/controllers/updateProfileController.php", {
            method: "POST",
            body: formData
        });
        if(response.ok){
            const responseData = await response.text();
            if(responseData.trim() === "Updated" || responseData.trim() === "Saved"){
                document.getElementById("msgToast").classList.remove("hidden");
                document.getElementById("msg").innerHTML = "Profile Image Updated Successfully !";
                document.getElementById("msgToast").classList.add("border-green-500");
                document.getElementById("msgIcon").classList.add("bg-green-500");
                setTimeout(() => {
                    document.getElementById("msgToast").classList.add("hidden");
                    window.location.href="/signin";
                }, 2500);
                    window.location.reload();
            }else if(responseData.trim() == "You have not selected any image."){
                document.getElementById("msgToast").classList.remove("hidden");
                document.getElementById("msg").innerHTML = "You have not selected any image.";
                document.getElementById("msgToast").classList.add("border-green-500");
                document.getElementById("msgIcon").classList.add("bg-green-500");
                setTimeout(() => {
                    document.getElementById("msgToast").classList.add("hidden");
                    window.location.reload();
                }, 2500);
            }else{
                document.getElementById("msgToast").classList.remove("hidden");
                document.getElementById("msg").innerHTML = responseData;
                setTimeout(() => {
                    document.getElementById("msgToast").classList.add("hidden");
                }, 2500);
            }

        }else{
            throw new Error("Network response was not ok.");
        }
    } catch (error) {
        console.error("Fetch error:", error);
    }

}