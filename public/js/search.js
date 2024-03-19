
  function eventListener() {
    document.addEventListener("keyup", function(event) {
      const MainSearch2 = document.getElementById("MainSearch2");
      const MainSearch = document.getElementById("MainSearch");

      if (event.key === "Enter" && document.activeElement === MainSearch2) {
        searchBar('MainSearch2');
      }

      if (event.key === "Enter" && document.activeElement === MainSearch) {
        searchBar('MainSearch');
      }
    });

    document.getElementById("MainSearch").addEventListener("keydown", function(event) {
      // You might want to consider using 'keydown' or 'input' event instead of 'keypress'
      searchingText(event);
    });

    document.getElementById("MainSearch2").addEventListener("keydown", function(event) {
      searchingText(event);
    });
  }

  // live search text function
  function searchingText(event) {
    if (event.key !== "Backspace") {
      let key = null;
      if (document.getElementById("MainSearch2").value) {
        key = document.getElementById("MainSearch2").value;
      } else if (document.getElementById("MainSearch").value) {
        key = document.getElementById("MainSearch").value;
      }
      if (key) {
        const request = new XMLHttpRequest();
        request.onreadystatechange = () => {
          if (request.status == 200 && request.readyState == 4) {
            const result = JSON.parse(request.responseText);
            if (result.msg == "success") {
              const searchTextMain = document.getElementById("searchTextMain");
              const searchTextSub = document.getElementById("searchTextSub");
              searchTextMain.classList.remove("hidden");
              searchTextMain.classList.add("flex");
              // Clear previous search results
              searchTextSub.innerHTML = "";
              for (let index = 0; index < Object.keys(result).length; index++) {
                let ptext = document.createElement("a");
                ptext.classList.add("border-b", "cursor-pointer", "hover:text-orange-500", "transition-transform");
                ptext.href = "search?query="+result[index].title;
                let chagingtext= result[index].title;
                if(chagingtext){
                  ptext.textContent = chagingtext;
                  searchTextSub.appendChild(ptext);
                }                     
              }
            }
          }
        };
  
        request.open("GET", "./controllers/searchController.php?query=" + key, true);
        request.send();
      }else{
        const searchTextMain = document.getElementById("searchTextMain");

        searchTextMain.classList.add("hidden");
        searchTextMain.classList.remove("flex");
      }
    }
  }
  function onmouseEnterHideSearchText() {
    const searchTextMain = document.getElementById("searchTextMain");
    let timeoutId;
  
    searchTextMain.addEventListener("mouseenter", function (event) {
      // Cancel the setTimeout when mouse enters searchTextMain
      clearTimeout(timeoutId);
    });
  
    searchTextMain.addEventListener("mouseleave", function (event) {
      // Set the setTimeout when mouse leaves searchTextMain
      timeoutId = setTimeout(() => {
        searchTextMain.classList.add("hidden");
        searchTextMain.classList.remove("flex");
      }, 3000);
    });
  }
  

// onclick /enter search function 
  function searchBar(id) {
    const query = document.getElementById(id).value;
    if (query) {
      window.location.href = "search?query=" + query;
    }
  }

  // Call the eventListener function after the DOM has loaded
  eventListener();
