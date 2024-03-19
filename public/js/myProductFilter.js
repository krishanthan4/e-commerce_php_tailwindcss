
function filterPriceTick(startPrice , endPrice){
// alert(startPrice +" , "+endPrice);
const request = new XMLHttpRequest();
const form  =new FormData();
form.append("startPrice",startPrice);
form.append("endPrice",endPrice);

request.onreadystatechange = ()=>{
    if(request.readyState==4 && request.status==200){
        updateContent(request.responseText);
}
}
request.open("POST","./controllers/filterController.php",true);
request.send(form);
}


function getFilterImages(id) {
    const request = new XMLHttpRequest();
    const form = new FormData();
    form.append("id", id);

    request.onreadystatechange = () => {
        if (request.readyState === 4 && request.status === 200) {
            const result = JSON.parse(request.responseText);

            if (result.message === "success") {
                const newImg = document.createElement("img");
                newImg.classList.add("object-center", "object-cover", "rounded-md", "max-w-full");

                if (result.img_path) {
                    newImg.src = "./" + result.img_path;
                } else {
                    newImg.classList.add("grayscale");
                    newImg.src = "./resources/new_user.png";
                }

                const container = document.getElementById("existCardNew2" + id);
                container.appendChild(newImg);
            }
        }
    };

    request.open("POST", "./controllers/filterImagesController.php", true);
    request.send(form);
}


function filterActiveTime(order){

    const request = new XMLHttpRequest();
    const form  =new FormData();
    form.append("order",order);
    
    request.onreadystatechange = ()=>{
        if(request.readyState==4 && request.status==200){
            updateContent(request.responseText);
    }
    }
    request.open("POST","./controllers/filterController.php",true);
    request.send(form);
}


function filterByQuantity(quantity){
    const quantityButtons1 = document.getElementById("quantityButtons1");

    if(quantityButtons1.checked){

    }
    const request = new XMLHttpRequest();
    const form  =new FormData();
    form.append("quantity",quantity);
    
    request.onreadystatechange = ()=>{
        if(request.readyState==4 && request.status==200){
            updateContent(request.responseText);
    }
    }
    request.open("POST","./controllers/filterController.php",true);
    request.send(form);
}

function filterByCondition(condition){

    const request = new XMLHttpRequest();
    const form  =new FormData();
    form.append("condition",condition);
    
    request.onreadystatechange = ()=>{
        if(request.readyState==4 && request.status==200){
            updateContent(request.responseText);
    }
    }
    request.open("POST","./controllers/filterController.php",true);
    request.send(form);
}

function filterByCategory(category){

    const request = new XMLHttpRequest();
    const form  =new FormData();
    form.append("category",category);
    
    request.onreadystatechange = ()=>{
        if(request.readyState==4 && request.status==200){
            updateContent(request.responseText);
    }
    }
    request.open("POST","./controllers/filterController.php",true);
    request.send(form);
}


function updateContent(responseText){
    let result = JSON.parse(responseText);
    // console.log(result);
if(result["message"]=="success"){
   //disapearing existing card
   document.getElementById("CardsMaindiv").remove();
   document.getElementById("AllMainDiv").classList.remove("hidden");

   const cardsMainDivNew = document.createElement("div");
       cardsMainDivNew.id = "CardsMaindiv";
       cardsMainDivNew.classList.add("grid","grid-cols-2","justify-center","items-center");
       document.getElementById("AllMainDiv").append(cardsMainDivNew);
   //disapearing existing card -- end

for (let index = 0; index < Object.keys(result).length; index++) {

    // const element = ;
    // alert(result[index].title);

    var newDiv = document.createElement("div");
    newDiv.id = "existCardNew"+result[index].id;
    newDiv.classList.add("flex", "m-5", "flex-col", "items-center", "bg-white", "border", "border-gray-200", "rounded-lg", "shadow", "lg:flex-row", "lg:max-w-xl", "md:max-w-72", "sm:max-w-60", "hover:bg-gray-100");
    document.getElementById("CardsMaindiv").appendChild(newDiv);

    
  let newDiv2 = document.createElement("div");
  newDiv2.id = "existCardNew2"+result[index].id;
  newDiv2.classList.add("lg:w-[40%]","lg:ms-3","md:w-full","sm:[30%]");
  document.getElementById("existCardNew"+result[index].id).append(newDiv2);
getFilterImages(result[index].id);

 let newDiv3 = document.createElement("div");
newDiv3.id = "existCardNew3"+result[index].id;
newDiv3.classList.add("flex","flex-col","justify-between","px-4","py-2","leading-normal");
document.getElementById("existCardNew"+result[index].id).append(newDiv3);

let newH5 = document.createElement("h5");
newH5.id = "existCardH5"+result[index].id;
newH5.classList.add("mb-2","text-2xl","font-bold","tracking-tight","text-gray-900");
newH5.innerText=result[index].title;
document.getElementById("existCardNew3"+result[index].id).append(newH5);

let newP = document.createElement("p");
newP.id = "existCardP"+result[index].id;
newP.classList.add("mb-3","font-normal","text-gray-700");
newP.innerText = "Rs."+result[index].price+".00";
document.getElementById("existCardNew3"+result[index].id).append(newP);

let newP2 = document.createElement("p");
newP2.id = "existCardP2"+result[index].id;
newP2.classList.add("mb-3","font-normal","text-gray-700");
newP2.innerText = result[index].qty+" items left";
document.getElementById("existCardNew3"+result[index].id).append(newP2);


let newLabel = document.createElement('label');
newLabel.id = "existCardLabel"+result[index].id;
newLabel.classList.add("inline-flex","items-center","me-5","cursor-pointer");
document.getElementById("existCardNew3"+result[index].id).append(newLabel);

let newInput = document.createElement("input");
newInput.id = "toggle"+result[index].id;
newInput.classList.add("sr-only","peer");
newInput.role="switch";
newInput.type="checkbox";
// newInput.onchange=changeStatus(result[index].id);

newInput.addEventListener("change",(event)=>{
    changeStatus(result[index].id)
});
if(result[index].status_status_id==2){
newInput.checked;
}
document.getElementById("existCardLabel"+result[index].id).append(newInput);


let newDiv4 = document.createElement("div");
newDiv4.id = "existCardNew4"+result[index].id;
newDiv4.classList.add("relative","w-11","h-6","bg-gray-200","rounded-full","peer","peer-focus:ring-4","peer-focus:ring-red-300","dark:peer-focus:ring-red-800","dark:bg-gray-700","peer-checked:after:translate-x-full","rtl:peer-checked:after:-translate-x-full","peer-checked:after:border-white","after:content-['']","after:absolute","after:top-0.5","after:start-[2px]","after:bg-white","after:border-gray-300","after:border","after:rounded-full","after:h-5","after:w-5","after:transition-all","dark:border-gray-600","peer-checked:bg-red-600");
document.getElementById("existCardLabel"+result[index].id).append(newDiv4);


let newSpan = document.createElement("span");
newSpan.id = "span"+result[index].id;
newSpan.classList.add("ms-3","text-sm","font-medium","text-gray-900","dark:text-gray-300");
if(result[index].status_status_id==1){
newSpan.innerHTML= "<p>Make Your Product Deactivate</p>";
}else{
newSpan.innerHTML= "<p>Make Your Product Activate</p>";
}
document.getElementById("existCardLabel"+result[index].id).append(newSpan);

let newButton = document.createElement("button");
newButton.classList.add("p-2","m-3","rounded-md","bg-green-500","text-white");
newButton.innerText= "Update";
// newButton.onclick=setndId(result[index].id);
newButton.addEventListener("click",()=>{
    setndId(result[index].id);
});
document.getElementById("existCardNew3"+result[index].id).append(newButton);


}

}else if(result["message"]=="error"){
    alert("something went wrong !");
}else{

    var existCards = document.querySelectorAll("#existCard");
    existCards.forEach(function(card) {
        card.remove();
    });

    document.getElementById("AllMainDiv").classList.toggle("hidden");
}
}

function clearAll(){
    window.location.reload();
  }