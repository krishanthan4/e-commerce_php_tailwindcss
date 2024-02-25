
      <!--main search bar -->
      <div onmouseleave="onmouseEnterHideSearchText();" class="flex  ms-10 flex-row items-center justify-center">
                  <div class="flex  items-center mx-auto">
                    <div class="relative md:min-w-[60%] md:max-w-[80%] xl:min-w-[140%]">
                      <input type="text" id="MainSearch2"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none"
                        placeholder="Search" required />
                    </div>
                    <button id="searchbutton" type="submit" onclick="searchBar('MainSearch2');"
                      class="inline-flex items-center py-2.5 px-2 ms-5 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                      </svg>Search
                    </button>
                  </div>
                </div>


