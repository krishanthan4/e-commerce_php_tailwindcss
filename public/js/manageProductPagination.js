let one = document.getElementById("1");
let two = document.getElementById("2");
let three = document.getElementById("3");
    
document.addEventListener("DOMContentLoaded",function(event){
    one.setAttribute("href","/manageProduct?id="+one.innerText);   
    two.setAttribute("href","/manageProduct?id="+two.innerText);
    three.setAttribute("href","/manageProduct?id="+three.innerText);
 
    const page1 = sessionStorage.getItem("mP1");
    const page2 = sessionStorage.getItem("mP2");
    const page3 = sessionStorage.getItem("mP3");
if(page1 || page2 || page3){
one.innerText = page1;
two.innerText = page2;
three.innerText = page3;
}

});



function navigateNext(id){
let maxPage = parseInt(id)/18;
if(Math.ceil(maxPage) ==parseInt(one.innerText)|| Math.ceil(maxPage) ==parseInt(two.innerText) || Math.ceil(maxPage) ==parseInt(three.innerText)){


}else{
    one.innerText = parseInt(one.innerText)+2;
    two.innerText = parseInt(two.innerText)+2;
    three.innerText = parseInt(three.innerText)+2;
    one.setAttribute("href","/manageProduct?id="+one.innerText);   
    two.setAttribute("href","/manageProduct?id="+two.innerText);
    three.setAttribute("href","/manageProduct?id="+three.innerText);

    sessionStorage.setItem("mP1",one.innerText);    
    sessionStorage.setItem("mP2",two.innerText);    
    sessionStorage.setItem("mP3",three.innerText);    
}

}

function navigatePrevious(){


    if(parseInt(one.innerText)!==1){
        one.innerText = parseInt(one.innerText)-2;
        two.innerText = parseInt(two.innerText)-2;
        three.innerText = parseInt(three.innerText)-2;   
    }
    one.setAttribute("href","/manageProduct?id="+one.innerText);   
    two.setAttribute("href","/manageProduct?id="+two.innerText);
    three.setAttribute("href","/manageProduct?id="+three.innerText);
  
    sessionStorage.setItem("mP1",one.innerText);    
    sessionStorage.setItem("mP2",two.innerText);    
    sessionStorage.setItem("mP3",three.innerText); 
}



