
let totalStars=1;

function submitReview(product_id){
   const textContent= document.getElementById("textContent").value;
    const request = new XMLHttpRequest();
    const form = new FormData();
    form.append("product_id",product_id);
    form.append("feed",textContent);
    form.append("stars",totalStars);
    request.onreadystatechange=()=>{
    if(request.readyState==4 && request.status ==200){
    if (request.responseText=="success") {
        $("#msgToast").removeClass("hidden");
        $("#msg").html("thanks For your Valuable Feedback !");
        $("#msgToast").removeClass("border-red-500");
        $("#msgToast").addClass("border-green-500");
        $("#msgIcon").removeClass("bg-red-500");
        $("#msgIcon").addClass("bg-green-500");
        setTimeout(function () {
            $("#msgToast").addClass("hidden");
            window.location.href="/";
        }, 2500);
    }else {
        $("#msgToast").removeClass("hidden");
        $("#msg").html("thanks For your Valuable Feedback !");
        setTimeout(function () {
            $("#msgToast").addClass("hidden");
        }, 2500);
    }
    }
    }
    request.open("POST","/controllers/writeReviewController.php",true);
    request.send(form);
    
    }
    function discard(){
    window.location.href="/";
    }
    function startCount (starNumber){
        totalStars=starNumber;
    }