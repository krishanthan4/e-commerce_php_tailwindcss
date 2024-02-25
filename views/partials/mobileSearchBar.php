<!--Mobile search -->
<div class="mx-2 lg:hidden block">
  <div class="w-full flex flex-row justify-center items-center">
    <div class="flex md:w-[65%]  my-6 min-w-[70%] me-5 md:me-0 flex-row items-center justify-center">
      <div class="flex w-full items-center max-w-lg mx-auto">
        <div class="relative w-full">
          <input type="text" id="MainSearch" onmouseleave="onmouseEnterHideSearchText();"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none"
            placeholder="Search" required />
        </div>
        <button type="submit" onclick="searchBar(MainSearch);"
          class="inline-flex items-center py-2.5 px-2 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
          </svg>Search
        </button>
      </div>
    </div>
  </div>
</div>



<!-- view live texts div -->

<div   id="searchTextMain" class="w-full hidden absolute items-center justify-center flex-col  z-20 h-auto">
  <div id="searchTextSub" class="flex rounded-lg shadow-sm bg-white shadow-gray-500 justify-center md:w-[25%] lg:w-[35%] p-4 flex-col lg:min-w-0 min-w-[50%]  md:ms-0 -ms-32  md:min-w-[60%] md:max-w-[80%] ">

  </div>
</div>