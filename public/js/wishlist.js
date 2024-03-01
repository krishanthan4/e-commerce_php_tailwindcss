function removeFromWatchlist(id) {
    $.ajax({
        url: "/controllers/removeWatchlistController.php?id=" + id,
        method: "GET",
        success: function (responseData) {
            if (responseData === "success") {
                $("#msgToast").removeClass("hidden");
                $("#msg").html("Product successfully removed from Wishlist!");
                $("#msgToast").addClass("border-green-500");
                $("#msgIcon").addClass("bg-green-500");
                setTimeout(() => {
                    $("#msgToast").addClass("hidden");
                    window.location.reload();
                }, 2500);
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

function addToCart(id) {

    var qty = $("#quantity").val();

    var form = new FormData();
    form.append("qty", qty);
    form.append("id", id);

    $.ajax({
        url: "/controllers/addToCartController.php",
        method: "POST",
        data: form,
        processData: false,
        contentType: false,

        success: function (responceData) {
       
            if (responceData === "added") {
               
                $("#msgToast").removeClass("hidden");
                $("#msg").html("Product successfully added to the Cart !");
                $("#msgToast").addClass("border-green-500");
                $("#msgIcon").addClass("bg-green-500");
                setTimeout(() => {
                    $("#msgToast").addClass("hidden");
                    window.location.reload();
                    $("#shop" + id).className("text-yellow-500 hover:text-yellow-700 w-[30px] h-[30px] border border-yellow-500 rounded-full flex items-center justify-center p-1 bg-white hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500");
                }, 1000);
            } else if (responceData == "removed") {
                
                $("#msgToast").removeClass("hidden");
                $("#msg").html("Product successfully removed from the Cart !");
                $("#msgToast").addClass("border-green-500");
                $("#msgIcon").addClass("bg-green-500");
                setTimeout(() => {
                    $("#msgToast").addClass("hidden");
                    window.location.reload();
                    $("#shop" + id).className("text-yellow-500 hover:text-yellow-700 w-[30px] h-[30px] border border-yellow-500 rounded-full flex items-center justify-center p-1 bg-white hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500");
                }, 1000);
            }

            else {
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