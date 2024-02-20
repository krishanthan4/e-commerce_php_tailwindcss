async function changeStatus(id) {
    try {
        const response = await fetch(`/controllers/changeStatusController.php?id=${id}`);
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        const responseData = await response.text();
        if (responseData.trim() === 'activated' || responseData.trim() === 'deactivated') {
            window.location.reload();
        } else {
            document.getElementById("msgToast").classList.remove("hidden");
            document.getElementById("msg").innerHTML = responseData;
            setTimeout(() => {
                document.getElementById("msgToast").classList.add("hidden");
            }, 1000);
        }
    } catch (error) {
        console.error('Error:', error);
    }
}


async function sendId(id) {
    try {
        const response = await fetch(`/controllers/sendIdController.php?id=${id}`);

        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        const responseData = await response.text();
        if (responseData.trim() ==='Success') {

            window.location.href = "/editProduct";
        } else {
            document.getElementById("msgToast").classList.remove("hidden");
            document.getElementById("msg").innerHTML = responseData;
            setTimeout(() => {
                document.getElementById("msgToast").classList.add("hidden");
            }, 1000);
        }
    } catch (error) {
        console.error('Error:', error);
    }
}


async function updateProduct() {
    try {
        const title = document.getElementById("title").value;
        const quantity = document.getElementById("quantity").value;
        const deliveryColombo = document.getElementById("deliveryColombo").value;
        const deliveryOther = document.getElementById("deliveryOther").value;
        const description = document.getElementById("description").value;
        const images = document.getElementById("imageUploader");

        const form = new FormData();
        form.append("title", title);
        form.append("quantity", quantity);
        form.append("deliveryColombo", deliveryColombo);
        form.append("deliveryOther", deliveryOther);
        form.append("description", description);

        var file_count = images.files.length;

        for (var x = 0; x < file_count; x++) {
            form.append("image" + x, images.files[x]);
        }

        const response = await fetch('/controllers/updateProductController.php', {
            method: 'POST',
            body: form
        });

        if (response.ok) {
            const responseData = await response.text();
            if (responseData.trim() === "Product has been Updated." || responseData.trim() !=="Invalid Image Count." ) {
                document.getElementById("msgToast").classList.remove("hidden");
                document.getElementById("msg").innerHTML = "Product updated Successfully !";
                document.getElementById("msgToast").classList.add("border-green-500");
                document.getElementById("msgIcon").classList.add("bg-green-500");
                setTimeout(() => {
                    document.getElementById("msgToast").classList.add("hidden");
                    window.location = "/myProducts";
                }, 2500);

            } else {
                document.getElementById("msgToast").classList.remove("hidden");
                document.getElementById("msg").innerHTML = responseData;
                setTimeout(() => {
                    document.getElementById("msgToast").classList.add("hidden");
                }, 1000);
            }
        } else {
            throw new Error('Network response was not ok.');
        }
    } catch (error) {
        console.error('Error occurred while updating product:', error);
    }
}
