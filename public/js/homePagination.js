let one = document.getElementById("1");
let two = document.getElementById("2");
let three = document.getElementById("3");
    
document.addEventListener("DOMContentLoaded",function(event){
    one.setAttribute("href","/?id="+one.innerText);   
    two.setAttribute("href","/?id="+two.innerText);
    three.setAttribute("href","/?id="+three.innerText);
 
    const page1 = sessionStorage.getItem("page1");
    const page2 = sessionStorage.getItem("page2");
    const page3 = sessionStorage.getItem("page3");
if(page1 || page2 || page3){
one.innerText = page1;
two.innerText = page2;
three.innerText = page3;
}
    // Parse the stringified array back to a JavaScript array

});



function navigateNext(id){
let maxPage = parseInt(id)/18;
if(Math.ceil(maxPage) ==parseInt(one.innerText)|| Math.ceil(maxPage) ==parseInt(two.innerText) || Math.ceil(maxPage) ==parseInt(three.innerText)){


}else{
    one.innerText = parseInt(one.innerText)+2;
    two.innerText = parseInt(two.innerText)+2;
    three.innerText = parseInt(three.innerText)+2;
    one.setAttribute("href","/?id="+one.innerText);   
    two.setAttribute("href","/?id="+two.innerText);
    three.setAttribute("href","/?id="+three.innerText);

    sessionStorage.setItem("page1",one.innerText);    
    sessionStorage.setItem("page2",two.innerText);    
    sessionStorage.setItem("page3",three.innerText);    
}

}

function navigatePrevious(){


    if(parseInt(one.innerText)!==1){
        one.innerText = parseInt(one.innerText)-2;
        two.innerText = parseInt(two.innerText)-2;
        three.innerText = parseInt(three.innerText)-2;   
    }
    one.setAttribute("href","/?id="+one.innerText);   
    two.setAttribute("href","/?id="+two.innerText);
    three.setAttribute("href","/?id="+three.innerText);
  
    sessionStorage.setItem("page1",one.innerText);    
    sessionStorage.setItem("page2",two.innerText);    
    sessionStorage.setItem("page3",three.innerText); 
}



