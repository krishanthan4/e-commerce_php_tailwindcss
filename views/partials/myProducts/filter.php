<section aria-labelledby="filter-heading" class="relative z-10 border-t border-b border-gray-200 grid items-center">
    <h2 id="filter-heading" class="sr-only">Filters</h2>
    <div class="relative col-start-1 row-start-1 py-4">
      <div class="max-w-7xl mx-auto flex space-x-6 divide-x divide-gray-200 text-sm px-4 sm:px-6 lg:px-8">
        <div>
          <button onclick="filterToggler();" type="button" class="group text-gray-700 font-medium flex items-center" aria-controls="disclosure-1" aria-expanded="false">
            <svg class="flex-none w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
            </svg>
            Filters
          </button>
        </div>
        <div class="pl-6">
          <button type="button" onclick="clearAll();" class="text-gray-500">Clear all</button>
    
        </div>
      </div>
    </div>
    <div id="filterDiv" class="border-t border-gray-200 py-10" id="disclosure-1">
      <div class="ms-10 ">
        <div class="grid grid-cols-1 gap-y-10 auto-rows-min lg:grid-cols-5 sm:grid-cols-2 md:gap-x-6">
          <fieldset>
            <legend class="block font-medium">Price</legend>
            <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
              <div class="flex items-center text-base sm:text-sm">
              <input id="radioButtons" onchange="filterPriceTick(0,2500);" name="color[]" value="white" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="price-0" class="ml-3 min-w-0 flex-1 text-gray-600"> Rs.0 - Rs.2,500 </label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
              <input id="radioButtons" onchange="filterPriceTick(2500,5000);" name="color[]" value="white" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="price-1" class="ml-3 min-w-0 flex-1 text-gray-600"> Rs.2,500 - Rs.5,000 </label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
              <input id="radioButtons" onchange="filterPriceTick(5000,10000);" name="color[]" value="white" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="price-2" class="ml-3 min-w-0 flex-1 text-gray-600"> Rs.5,000 - Rs.10,000 </label>
              </div>

              <div class="flex items-center text-base sm:text-sm">
              <input id="radioButtons" onchange="filterPriceTick(10000,0);" name="color[]" value="white" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="price-3" class="ml-3 min-w-0 flex-1 text-gray-600"> Rs.10,000 + </label>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend class="block font-medium">Active Time</legend>
            <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
              <div class="flex items-center text-base sm:text-sm">
                <input id="radioButtons" onchange="filterActiveTime('DESC');" name="color[]" value="white" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="radioButtons" class="ml-3 min-w-0 flex-1 text-gray-600">Latest to Oldest</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="radioButtons" onchange="filterActiveTime('ASC');" name="color[]" value="white" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="radioButtons" class="ml-3 min-w-0 flex-1 text-gray-600">Oldest To Latest</label>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend class="block font-medium">By Quantity</legend>
            <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
              <div class="flex items-center text-base sm:text-sm">
                <input id="quantityButtons1" onchange="filterByQuantity('DESC');" name="color[]" value="DESC" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="quantityButtons"  class="ml-3 min-w-0 flex-1 text-gray-600">High to Low</label>  <div class="col-start-1 row-start-1 py-4 ">
      <div class="flex justify-end max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative inline-block">
      
        </div>
      </div>
    </div>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="quantityButtons2" onchange="filterByQuantity('ASC');"  name="color[]" value="ASC" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="quantityButtons"  class="ml-3 min-w-0 flex-1 text-gray-600">Low To High</label>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend class="block font-medium">Condition</legend>
            <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
              <div class="flex items-center text-base sm:text-sm">
              <input id="category-0" name="category[]"  onchange="filterByCondition(1);" value="1" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="size-0" class="ml-3 min-w-0 flex-1 text-gray-600">Brand New</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
              <input id="category-0" name="category[]"  onchange="filterByCondition(2);" value="2" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="size-1" class="ml-3 min-w-0 flex-1 text-gray-600">Used </label>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend class="block font-medium">Category</legend>
            <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
              <div class="flex items-center text-base sm:text-sm">
                <input id="category-0" name="category[]"   onchange="filterByCategory(1);" value="all-new-arrivals" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="category-0" class="ml-3 min-w-0 flex-1 text-gray-600"> Fashion </label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="category-1" name="category[]"  onchange="filterByCategory(6);" value="tees" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="category-1" class="ml-3 min-w-0 flex-1 text-gray-600"> Tech Gadgets </label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="category-2" name="category[]"  onchange="filterByCategory(7);" value="objects" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="category-2" class="ml-3 min-w-0 flex-1 text-gray-600"> Games </label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="category-3" name="category[]"  onchange="filterByCategory(4);" value="sweatshirts" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="category-3" class="ml-3 min-w-0 flex-1 text-gray-600"> Home & Kitchen </label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="category-4" name="category[]"  onchange="filterByCategory(3);" value="pants-and-shorts" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="category-4" class="ml-3 min-w-0 flex-1 text-gray-600"> Productivity </label>
              </div>
            </div>
          </fieldset>
        </div>
      </div>
    </div>
  
  </section>

  <script src="./public/js/myProductFilter2.js"></script>
  <script src="./public/js/myProductFilter.js"></script>