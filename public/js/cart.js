function changeQTY(id) {

    var qty = $("#qtyNum").val();

    $.ajax({
        url: "/controllers/cartQtyUpdateController.php",
        method: "GET",
        data: { qty: qty, id: id },
        success: function (responseData) {
            if (responseData === "Updated") {
                window.location.reload();
            } else {
                $("#msgToast").removeClass("hidden");
                $("#msg").html(responseData);
                setTimeout(() => {
                    $("#msgToast").addClass("hidden");
                }, 2500);
            }
        },
        error: function (errorThrown) {
            console.error('There was a problem with the fetch operation:', errorThrown);
        }
    });
}

function deleteFromCart(id) {

    $.ajax({
        url: '/controllers/removeCartController.php?id=' + id,
        method: 'GET',
        success: function (responceData) {
            if (responceData === "Removed") {
                $("#msgToast").removeClass("hidden");
                $("#msg").html("Product removed from Cart.");
                $("#msgToast").addClass("border-green-500");
                $("#msgIcon").addClass("bg-green-500");
                setTimeout(() => {
                    $("#msgToast").addClass("hidden");
                    window.location.reload();
                }, 1000);
            } else {
                $("#msgToast").removeClass("hidden");
                $("#msg").html(responseData);
                setTimeout(() => {
                    $("#msgToast").addClass("hidden");
                }, 2500);
            }
        },

        error: function (errorThrown) {
            console.error('There was a problem with the fetch operation:', errorThrown);
        }
    });
}