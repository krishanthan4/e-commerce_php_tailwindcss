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


function selectAllItems() {
    var isChecked = $('#selectAllCheckBox').prop('checked');
    $('.itemCheckbox').prop('checked', isChecked);
 
}


function orderSummary(cart_id, delivery_cost, requested_total, unit_price) {
    
    const checkbox = $('#' + cart_id);
    const isChecked = checkbox.prop('checked');

    let subtotal = parseFloat($('#subtotal').text().replace('Rs. ', ''));
    let deliveryCost = parseFloat($('#deliveryCost').text().replace('Rs. ', ''));
    let orderTotal = parseFloat($('#orderTotal').text().replace('Rs. ', ''));

    if (isChecked) {
     
        subtotal += parseFloat(unit_price);
        deliveryCost += parseFloat(delivery_cost);
        orderTotal += parseFloat(requested_total);
    } else {
       
        subtotal -= parseFloat(unit_price);
        deliveryCost -= parseFloat(delivery_cost);
        orderTotal -= parseFloat(requested_total);
    }


    $('#subtotal').text('Rs. ' + subtotal.toFixed(2));
    $('#deliveryCost').text('Rs. ' + deliveryCost.toFixed(2));
    $('#orderTotal').text('Rs. ' + orderTotal.toFixed(2));
}