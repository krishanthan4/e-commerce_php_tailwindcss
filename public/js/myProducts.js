function changeStatus(id) {
    $.ajax({
        url: `/controllers/changeStatusController.php?id=${id}`,
        method: 'GET',
        success: function (responseData) {
            if (responseData.trim() === 'activated' || responseData.trim() === 'deactivated') {
                window.location.reload();
            } else {
                $('#msgToast').removeClass('hidden');
                $('#msg').html(responseData);
                setTimeout(() => {
                    $('#msgToast').addClass('hidden');
                }, 2500);
            }
        },
        error: function (errorThrown) {
            console.error('Error:', errorThrown);
        }
    });
}


function sendId(id) {
    $.ajax({
        url: `/controllers/sendIdController.php?id=${id}`,
        method: 'GET',
        success: function (responseData) {
            if (responseData.trim() === 'Success') {
                window.location.href = "/editProduct";
            } else {
                $('#msgToast').removeClass('hidden');
                $('#msg').html(responseData);
                setTimeout(() => {
                    $('#msgToast').addClass('hidden');
                }, 2500);
            }
        },
        error: function (errorThrown) {
            console.error('Error:', errorThrown);
        }
    });
}






function updateProduct() {
    try {
        const title = $("#title").val();
        const quantity = $("#quantity").val();
        const deliveryColombo = $("#deliveryColombo").val();
        const deliveryOther = $("#deliveryOther").val();
        const description = $("#description").val();
        var image = $("#imageUploader")[0].files;

        const form = new FormData();
        form.append("title", title);
        form.append("quantity", quantity);
        form.append("deliveryColombo", deliveryColombo);
        form.append("deliveryOther", deliveryOther);
        form.append("description", description);

        $.each(image, function (index, file) {
            form.append("image" + index, file);
        });

        $.ajax({
            url: '/controllers/updateProductController.php',
            type: 'POST',
            data: form,
            processData: false,
            contentType: false,
            success: function (responseData) {
                if (responseData.trim() === "Product has been Updated." || responseData.trim() !== "Invalid Image Count.") {
                    $("#msgToast").removeClass("hidden");
                    $("#msg").html("Product updated Successfully !");
                    $("#msgToast").addClass("border-green-500");
                    $("#msgIcon").addClass("bg-green-500");
                    setTimeout(() => {
                        $("#msgToast").addClass("hidden");
                        window.location = "/myProducts";
                    }, 2500);
                } else {
                    $("#msgToast").removeClass("hidden");
                    $("#msg").html(responseData);
                    setTimeout(() => {
                        $("#msgToast").addClass("hidden");
                    }, 2500);
                }
            },
            error: function (xhr, status, error) {
                console.error('Error occurred while updating product:', error);
            }
        });
    } catch (error) {
        console.error('Error occurred while updating product:', error);
    }
}

function addProduct() {
    var category = $("#category").val();
    var brand = $("#brand").val();
    var model = $("#model").val();
    var title = $("#title").val();
    var condition = 0;

    if ($("#brandNew").prop("checked")) {
        condition = 1;
    } else if ($("#used").prop("checked")) {
        condition = 2;
    }

    var color = $("#color").val();
    var quantity = $("#quantity").val();
    var cost = $("#cost").val();
    var deliveryColombo = $("#deliveryColombo").val();
    var deliveryOther = $("#deliveryOther").val();
    var description = $("#description").val();
    var image = $("#imageUploader")[0].files;

    var form = new FormData();
    form.append("category", category);
    form.append("brand", brand);
    form.append("model", model);
    form.append("title", title);
    form.append("condition", condition);
    form.append("color", color);
    form.append("quantity", quantity);
    form.append("cost", cost);
    form.append("deliveryColombo", deliveryColombo);
    form.append("deliveryOther", deliveryOther);
    form.append("description", description);

    $.each(image, function (index, file) {
        form.append("image" + index, file);
    });

    $.ajax({
        url: '/controllers/addProductController.php',
        type: 'POST',
        data: form,
        processData: false,
        contentType: false,
        success: function (data) {
            if (data === "success") {
                $("#msgToast").removeClass("hidden");
                $("#msg").html("Product Saved Successfully!");
                $("#msgToast").addClass("border-green-500");
                $("#msgIcon").addClass("bg-green-500");
                setTimeout(function () {
                    $("#msgToast").addClass("hidden");
                    window.location.reload();
                }, 2500);
            } else {
                $("#msgToast").removeClass("hidden");
                $("#msg").html(data);
                setTimeout(function () {
                    $("#msgToast").addClass("hidden");
                }, 2500);
            }
        },
        error: function (error) {
            console.error('Error occurred while adding product:', error);
        }
    });
}