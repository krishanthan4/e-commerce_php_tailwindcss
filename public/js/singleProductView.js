function wishlist(id){
    alert("wishlist" +id);
    const request = new XMLHttpRequest();
const form = new FormData();

request.onreadystatechange = ()=>{
    if(request.readyState==4 && request.status==200){
if(request.responseText=="success"){

}else{

}
    }
}

request.open("POST","./controllers/singleProductWishlistController.php",true);
request.send(form);
}



function buyNow(id){
    alert("buyNow" +id);
}

function addToCart(id){
    alert("addToCart" +id);
}

