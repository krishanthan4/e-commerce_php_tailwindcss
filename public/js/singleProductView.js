function wishlist(id){

    const outline_heart = document.getElementById("outline_heart");
    const filled_heart = document.getElementById("filled_heart");
const qty =document.getElementById("counter-input").value;
    const request = new XMLHttpRequest();
const form = new FormData();
form.append("product_id",id);
form.append("qty",qty);

request.onreadystatechange = ()=>{
    if(request.readyState==4 && request.status==200){
if(request.responseText=="success"){
outline_heart.classList.add("hidden");
filled_heart.classList.remove("hidden");
}else{
alert(request.responseText);
}
    }
}
request.open("POST","./controllers/singleProductWishlistController.php",true);
request.send(form);
}


function removewishlist(id){

    const outline_heart = document.getElementById("outline_heart");
    const filled_heart = document.getElementById("filled_heart");

    const request = new XMLHttpRequest();
const form = new FormData();
form.append("product_id",id);

request.onreadystatechange = ()=>{
    if(request.readyState==4 && request.status==200){
if(request.responseText=="success"){
outline_heart.classList.remove("hidden");
filled_heart.classList.add("hidden");
}else{
alert(request.responseText);
}
    }
}
request.open("POST","./controllers/singleProductRemoveWishlistController.php",true);
request.send(form);
}


function buyNow(id){
   const qty = document.getElementById("counter-input").value;

    const request = new XMLHttpRequest();
    const form = new FormData();
form.append("product_id",id);
form.append("qty",qty);

request.onreadystatechange =()=> {
        if(request.status==200&& request.readyState==4){
if(request.responseText=="success"||request.responseText=="successsuccess"){
        window.location.href="/cart";
 
}else{
    document.getElementById("msgToast").classList.remove("hidden");
    document.getElementById("msg").innerHTML = request.responseText ;
    setTimeout(() => {
        document.getElementById("msgToast").classList.add("hidden");
    }, 2000);
}
        }
    }

    request.open("POST","./controllers/singleProductBuyNowController.php",true);
    request.send(form);
}


function addToCart(id){
    const qty = document.getElementById("counter-input").value;
 
     const request = new XMLHttpRequest();
     const form = new FormData();
 form.append("product_id",id);
 form.append("qty",qty);
 
 request.onreadystatechange =()=> {
         if(request.status==200&& request.readyState==4){
 if(request.responseText=="success"||request.responseText=="successsuccess"){
    document.getElementById("msgToast").classList.remove("hidden","border-red-500");
    document.getElementById("msgToast").classList.add("border-green-500");
    document.getElementById("msgIcon").classList.remove("bg-red-500");
    document.getElementById("msgIcon").classList.add("bg-green-500");
    document.getElementById("msg").innerHTML = "Product added to cart.Continue Shoping !" ;
setTimeout(() => {
    document.getElementById("msgToast").classList.add("hidden","border-red-500");
}, 2000);
 }else{
     document.getElementById("msgToast").classList.remove("hidden");
     document.getElementById("msg").innerHTML = request.responseText ;
     setTimeout(() => {
         document.getElementById("msgToast").classList.add("hidden");
     }, 2000);
 }
         }
     }
 
     request.open("POST","./controllers/singleProductBuyNowController.php",true);
     request.send(form);
 }
