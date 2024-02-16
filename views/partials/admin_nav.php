<!-- Mobile Menu start -->
<div id="MobileMenublack">
  <!--
      Mobile menu

      Off-canvas menu for mobile, show/hide based on off-canvas menu state.
    -->
  <div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">

    <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

    <div class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto" id="MobileMenu">
      <div class="px-4 pt-5 pb-2 flex">
        <button type="button" class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400"
          id="closeMobileMenuButton" onclick="closeMobileMenu();">
          <span class="sr-only">Close menu</span>
          <!-- Heroicon name: outline/x -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <div class="border-t border-gray-200 py-6 text-center space-y-6">
        <div class="flow-root">
          <a href="/adminDashboard" class="-m-2 p-2 block font-medium text-gray-900">Dashboard</a>
        </div>

        <div class="flow-root">
          <a href="/manageUsers" class="-m-2 p-2 block font-medium text-gray-900">Manage Users</a>
        </div>
      
      <div class="flow-root">
        <a href="/manageProduct" class="-m-2 p-2 block font-medium text-gray-900">Manage Products</a>
      </div>
        <div class="flow-root">
          <a href="/manageReviews" class="-m-2 p-2 block font-medium text-gray-900">Manage Reviews</a>
        </div>
          <div class="flow-root">
            <a href="/sellingHistory" class="-m-2 p-2 block font-medium text-gray-900">Selling History</a>
          </div>
        </div>
 
        <!-- Account -->
        <a href="#" class="p-2 text-gray-400 flex flex-row justify-center border border-300 hover:text-gray-500 lg:ml-4">
          <span class="sr-only">Account</span>
        <!-- Heroicon name: outline/user -->
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
          </svg>
        </a>
  


      <div class="border-t text-center border-gray-200 py-6 px-4 space-y-6">
        <!-- Currency selector -->
        <form>
          <div class="inline-block">
            <label for="mobile-currency" class="sr-only">Currency</label>
            <div class="-ml-2 group relative border-transparent rounded-md focus-within:ring-2 focus-within:ring-white">
              <select id="mobile-currency" name="currency"
                class="bg-none border-transparent rounded-md py-0.5 pl-2 pr-5 flex items-center text-sm font-medium text-gray-700 group-hover:text-gray-800 focus:outline-none focus:ring-0 focus:border-transparent">
                <option>CAD</option>

                <option>USD</option>

                <option>AUD</option>

                <option>EUR</option>

                <option>GBP</option>
              </select>
              <div class="absolute right-0 inset-y-0 flex items-center pointer-events-none">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                  class="w-5 h-5 text-gray-500">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M6 8l4 4 4-4" />
                </svg>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>

<?php
//   if($_SESSION["u"]){
?>

<!-- Header and big dropdown start -->
<header class="relative bg-white">
  <p class="bg-indigo-600 h-10 flex items-center justify-center text-sm font-medium text-white px-4 sm:px-6 lg:px-8">Get
    free delivery on orders over $100</p>

  <nav aria-label="Top" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="border-b border-gray-200">
      <div class="h-16 flex items-center">
        <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
        <button type="button" class="bg-white p-2 rounded-md text-gray-400 lg:hidden" onclick="MobileMenuNav();">
          <span class="sr-only">Open menu</span>
          <!-- Heroicon name: outline/menu -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>

        <!-- Logo -->
        <div class="ml-4 flex lg:ml-0">
          <a href="#">
            <span class="sr-only">Workflow</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600"
              alt="">
          </a>
        </div>

        <!-- Flyout menus -->
        <div class="hidden lg:ml-8 lg:block lg:self-stretch">
          <div class="h-full flex space-x-8">
            <!-- Flyout menus -->
            <div class="hidden lg:flex-1 lg:block lg:self-stretch">
              <div class="h-full flex space-x-8">
                <a href="/adminDashboard"
                  class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Dashboard</a>
                <a href="/manageUsers"
                  class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Manage Users</a>
                <a href="/manageProduct"
                  class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Manage Products</a>
                <a href="/manageReviews"
                  class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Manage Reviews</a>
                <a href="/sellingHistory"
                  class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Selling History</a>
              </div>
            </div>
          </div>
        </div>

        <div class="ml-auto flex items-center">
       
            <!-- Account -->
            <a href="#" class="p-2 text-gray-400 rounded-md border border-gray-300 hover:text-gray-500 ">
              <span class="sr-only">Account</span>
              <!-- Heroicon name: outline/user -->
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
            </a>
          

          <div class="hidden lg:ml-8 lg:flex">
            <a href="#" class="text-gray-700 hover:text-gray-800 flex items-center">
              <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt="" class="w-5 h-auto block flex-shrink-0">
              <span class="ml-3 block text-sm font-medium"> CAD </span>
              <span class="sr-only">, change currency</span>
            </a>
          </div>



        </div>
      </div>
    </div>
  </nav>
</header>
<?php
//   }else{
?>

<?php
//   }

?>

<div class="mx-4 md:mx-12 my-3">
  <div class="w-full flex flex-row items-center">

    <!-- search bar -->
    <div class="flex md:w-[65%] my-2 min-w-full me-5 md:me-0 flex-row items-center justify-center">
      <form class="flex w-full items-center max-w-lg mx-auto">
        <div class="relative w-full">
          <input type="text" id="voice-search"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none"
            placeholder="Search" required />
        </div>
        <button type="submit"
          class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
          </svg>Search
        </button>
      </form>
    </div>
  </div>
</div>

<script src="./public/js/nav.js"></script>