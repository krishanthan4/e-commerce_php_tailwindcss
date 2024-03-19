function blockProduct(product_id) {
    const unblockbutton = document.getElementById("blockbutton" + product_id);
    const request = new XMLHttpRequest();
    const form = new FormData();
    form.append("product_id", product_id);
    form.append("active", '2');

    request.onreadystatechange = () => {
        if (request.readyState == 4) {
            if (request.status == 200) {
                if (request.responseText == "success") {
                    unblockbutton.textContent = "unblock";
                    unblockbutton.classList.remove("hover:bg-red-200", "text-red-700", "border-red-600");
                    unblockbutton.classList.add("hover:bg-green-200", "text-green-700", "border-green-600");
                    window.location.reload();

                } else {
                    alert("Error: " + request.responseText);
                }
            } else {
                alert("Error: " + request.statusText);
            }
        }
    };

    request.onerror = () => {
        alert("Network error occurred.");
    };

    request.open("POST", "./controllers/manageProductBlockController.php", true);
    request.send(form);
}


function unblockProduct(product_id) {
    const unblockbutton = document.getElementById("blockbutton" + product_id);
    const request = new XMLHttpRequest();
    const form = new FormData();
    form.append("product_id", product_id);
    form.append("active", '1');

    request.onreadystatechange = () => {
        if (request.readyState == 4) {
            if (request.status == 200) {
                if (request.responseText == "success") {
                    unblockbutton.textContent = "block";
                    unblockbutton.classList.remove("hover:bg-green-200", "text-green-700", "border-green-600");
                    unblockbutton.classList.add("hover:bg-red-200", "text-red-700", "border-red-600");

                    window.location.reload();
                } else {
                    alert("Error: " + request.responseText);
                }
            } else {
                alert("Error: " + request.statusText);
            }
        }
    };

    request.onerror = () => {
        alert("Network error occurred.");
    };

    request.open("POST", "./controllers/manageProductBlockController.php", true);
    request.send(form);
}


