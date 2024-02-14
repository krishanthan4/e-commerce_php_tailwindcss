<section aria-labelledby="filter-heading" class="relative z-10 border-t border-b border-gray-200 grid items-center">
    <h2 id="filter-heading" class="sr-only">Filters</h2>
    <div class="relative col-start-1 row-start-1 py-4">
      <div class="max-w-7xl mx-auto flex space-x-6 divide-x divide-gray-200 text-sm px-4 sm:px-6 lg:px-8">
        <div>
          <button type="button" class="group text-gray-700 font-medium flex items-center" aria-controls="disclosure-1" aria-expanded="false">
            <!-- Heroicon name: solid/filter -->
            <svg class="flex-none w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
            </svg>
            2 Filters
          </button>
        </div>
        <div class="pl-6">
          <button type="button" class="text-gray-500">Clear all</button>
        </div>
      </div>
    </div>
    <div class="border-t border-gray-200 py-10" id="disclosure-1">
      <div class="ms-10 ">
        <div class="grid grid-cols-1 gap-y-10 auto-rows-min lg:grid-cols-5 sm:grid-cols-2 md:gap-x-6">
          <fieldset>
            <legend class="block font-medium">Price</legend>
            <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
              <div class="flex items-center text-base sm:text-sm">
                <input id="price-0" name="price[]" value="0" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="price-0" class="ml-3 min-w-0 flex-1 text-gray-600"> $0 - $25 </label>
              </div>

              <div class="flex items-center text-base sm:text-sm">
                <input id="price-1" name="price[]" value="25" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="price-1" class="ml-3 min-w-0 flex-1 text-gray-600"> $25 - $50 </label>
              </div>

              <div class="flex items-center text-base sm:text-sm">
                <input id="price-2" name="price[]" value="50" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="price-2" class="ml-3 min-w-0 flex-1 text-gray-600"> $50 - $75 </label>
              </div>

              <div class="flex items-center text-base sm:text-sm">
                <input id="price-3" name="price[]" value="75" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="price-3" class="ml-3 min-w-0 flex-1 text-gray-600"> $75+ </label>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend class="block font-medium">Active Time</legend>
            <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
              <div class="flex items-center text-base sm:text-sm">
                <input id="color-0" name="color[]" value="white" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="color-0" class="ml-3 min-w-0 flex-1 text-gray-600">Latest to Oldest</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="color-0" name="color[]" value="white" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="color-0" class="ml-3 min-w-0 flex-1 text-gray-600">Oldest To Latest</label>
              </div>
       
            </div>
          </fieldset>
          <fieldset>
            <legend class="block font-medium">By Quantity</legend>
            <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
              <div class="flex items-center text-base sm:text-sm">
                <input id="color-0" name="color[]" value="white" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="color-0" class="ml-3 min-w-0 flex-1 text-gray-600">High to Low</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="color-0" name="color[]" value="white" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="color-0" class="ml-3 min-w-0 flex-1 text-gray-600">Low To High</label>
              </div>
       
            </div>
          </fieldset>
          <fieldset>
            <legend class="block font-medium">Condition</legend>
            <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
              <div class="flex items-center text-base sm:text-sm">
                <input id="size-0" name="size[]" value="xs" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="size-0" class="ml-3 min-w-0 flex-1 text-gray-600">Brand New</label>
              </div>

              <div class="flex items-center text-base sm:text-sm">
                <input id="size-1" name="size[]" value="s" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500" checked>
                <label for="size-1" class="ml-3 min-w-0 flex-1 text-gray-600">Used </label>
              </div>

            </div>
          </fieldset>
          <fieldset>
            <legend class="block font-medium">Category</legend>
            <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
              <div class="flex items-center text-base sm:text-sm">
                <input id="category-0" name="category[]" value="all-new-arrivals" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="category-0" class="ml-3 min-w-0 flex-1 text-gray-600"> All New Arrivals </label>
              </div>

              <div class="flex items-center text-base sm:text-sm">
                <input id="category-1" name="category[]" value="tees" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="category-1" class="ml-3 min-w-0 flex-1 text-gray-600"> Tees </label>
              </div>

              <div class="flex items-center text-base sm:text-sm">
                <input id="category-2" name="category[]" value="objects" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="category-2" class="ml-3 min-w-0 flex-1 text-gray-600"> Objects </label>
              </div>

              <div class="flex items-center text-base sm:text-sm">
                <input id="category-3" name="category[]" value="sweatshirts" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="category-3" class="ml-3 min-w-0 flex-1 text-gray-600"> Sweatshirts </label>
              </div>

              <div class="flex items-center text-base sm:text-sm">
                <input id="category-4" name="category[]" value="pants-and-shorts" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="category-4" class="ml-3 min-w-0 flex-1 text-gray-600"> Pants &amp; Shorts </label>
              </div>
            </div>
          </fieldset>
        </div>
 
      </div>
    </div>
    <div class="col-start-1 row-start-1 py-4">
      <div class="flex justify-end max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative inline-block">
          <div class="flex">
            <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
              Sort
              <!-- Heroicon name: solid/chevron-down -->
              <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>

          <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="py-1" role="none">
              <!--
                Active: "bg-gray-100", Not Active: ""

                Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
              -->
              <a href="#" class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0"> Most Popular </a>

              <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1"> Best Rating </a>

              <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2"> Newest </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>