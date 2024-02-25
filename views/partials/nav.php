<?php 
    require_once "./connection.php";
    require_once "./function.php";
    
    ?>


<!-- Mobile Menu start -->
<div id="MobileMenublack">
  
    <div class="fixed inset-0 flex z-50 lg:hidden" role="dialog" aria-modal="true">

      <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

      <div class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto" id="MobileMenu">
        <div class="px-4 pt-5 pb-2 flex">
          <button type="button" class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400" id="closeMobileMenuButton" onclick="closeMobileMenu();">
            <span class="sr-only">Close menu</span>
            <!-- Heroicon name: outline/x -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <!-- Links -->
        <div class="mt-2">
          <div class="border-b border-gray-200">
            <div class="-mb-px flex px-4 space-x-8" aria-orientation="horizontal" role="tablist">
              <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
              <button id="tabs-1-tab-1" class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium" aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>

              <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
              <button id="tabs-1-tab-2" class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium" aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
            </div>
          </div>
          </div>
          <!-- 'Women' tab panel, show/hide based on tab state. -->
          <div id="tabs-1-panel-1" class="px-4 py-6 space-y-12" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
            <div class="grid grid-cols-2 gap-x-4 gap-y-10">
              <div class="group relative">
                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-center object-cover">
                </div>
                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                  <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                  New Arrivals
                </a>
                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
              </div>

              <div class="group relative">
                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-center object-cover">
                </div>
                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                  <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                  Basic Tees
                </a>
                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
              </div>

              <div class="group relative">
                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg" alt="Model wearing minimalist watch with black wristband and white watch face." class="object-center object-cover">
                </div>
                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                  <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                  Accessories
                </a>
                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
              </div>

              <div class="group relative">
                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-04.jpg" alt="Model opening tan leather long wallet with credit card pockets and cash pouch." class="object-center object-cover">
                </div>
                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                  <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                  Carry
                </a>
                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
              </div>
            </div>
          </div>

          <!-- 'Men' tab panel, show/hide based on tab state. -->
          <div id="tabs-1-panel-2" class="px-4 py-6 space-y-12" aria-labelledby="tabs-1-tab-2" role="tabpanel" tabindex="0">
            <div class="grid grid-cols-2 gap-x-4 gap-y-10">
              <div class="group relative">
                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg" alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers." class="object-center object-cover">
                </div>
                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                  <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                  New Arrivals
                </a>
                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
              </div>

              <div class="group relative">
                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-02.jpg" alt="Model wearing light heather gray t-shirt." class="object-center object-cover">
                </div>
                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                  <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                  Basic Tees
                </a>
                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
              </div>

              <div class="group relative">
                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-03.jpg" alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body." class="object-center object-cover">
                </div>
                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                  <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                  Accessories
                </a>
                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
              </div>

              <div class="group relative">
                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-04.jpg" alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching." class="object-center object-cover">
                </div>
                <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                  <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                  Carry
                </a>
                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
              </div>
            </div>
          </div> 
        

        <div class="border-t flex flex-col items-center justify-center border-gray-200 py-6 px-4 space-y-6">
          <div class="flow-root">
            <a href="#" class=" p-2 block font-medium text-gray-900">Company</a>
          </div>

          <div class="flow-root">
            <a href="#" class=" p-2 block font-medium text-gray-900">Stores</a>
          </div>
<?php require_once "./views/partials/nav_profile.php"?>

        </div>
        
    

        <div class="border-t text-center border-gray-200 py-6 px-4 space-y-6">
          <!-- Currency selector -->
          <form>
            <div class="inline-block">
              <label for="mobile-currency" class="sr-only">Currency</label>
              <div class="-ml-2 group relative border-transparent rounded-md focus-within:ring-2 focus-within:ring-white">
                <select id="mobile-currency" name="currency" class="bg-none border-transparent rounded-md py-0.5 pl-2 pr-5 flex items-center text-sm font-medium text-gray-700 group-hover:text-gray-800 focus:outline-none focus:ring-0 focus:border-transparent">
                  <option>CAD</option>

                  <option>USD</option>

                  <option>AUD</option>

                  <option>EUR</option>

                  <option>GBP</option>
                </select>
                <div class="absolute right-0 inset-y-0 flex items-center pointer-events-none">
                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" class="w-5 h-5 text-gray-500">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 8l4 4 4-4" />
                  </svg>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>


<!-- Main Nav Bar start -->
<header class="relative z-30 bg-white">
    <p class="bg-indigo-600 h-10  flex items-center justify-center text-sm font-medium text-white px-4 sm:px-6 lg:px-8">Get free delivery on orders over $100</p>

    <nav aria-label="Top" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="border-b border-gray-200">
        <div class="h-16 flex items-center">
          <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
          <button type="button" class="bg-white p-2 rounded-md text-gray-400 lg:hidden" onclick="MobileMenuNav();" >
            <span class="sr-only">Open menu</span>
            <!-- Heroicon name: outline/menu -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>

          <!-- Logo -->
          <div class="ml-4 flex lg:ml-0">
            <a href="/">
              <span class="sr-only">Workflow</span>
              <img draggable="false" class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="">
            </a>
          </div>

          <!-- Flyout menus -->
          <div class="hidden lg:ml-8 lg:block lg:self-stretch">
            <div class="h-full flex space-x-8">
                <!-- Flyout menus -->
                <div class="hidden lg:flex-1 lg:block lg:self-stretch">
            <div class="h-full flex space-x-8">
              <div class="flex">
                <div class="relative flex">
                  <!-- Item active: "text-indigo-600", Item inactive: "text-gray-700 hover:text-gray-800" -->
                  <button type="button" class="text-gray-700 hover:text-gray-800 relative z-10 flex items-center justify-center transition-colors ease-out duration-200 text-sm font-medium" aria-expanded="false" onmouseover="flyoutMenuWomenHover();" onmouseleave="flyoutMenuWomenRemove();">
                    Women
                    <!-- Open: "bg-indigo-600", Closed: "" -->
                    <span class="absolute bottom-0 inset-x-0 h-0.5 transition-colors ease-out duration-200 sm:mt-5 sm:transform sm:translate-y-px" aria-hidden="true"></span>
                  </button>
                </div>

                <!--
                  'Women' flyout menu, show/hide based on flyout menu state.-->
                <div class="absolute z-20 top-full inset-x-0 bg-white text-sm text-gray-500 hidden" id="flyoutMenuWomen">
              
                        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
                        <!-- Fake border when menu is open -->
                        <div class="absolute inset-0 top-0 h-px max-w-7xl mx-auto px-8" aria-hidden="true">
                          <!-- Open: "bg-gray-200", Closed: "bg-transparent" -->
                          <div class="bg-transparent w-full h-px transition-colors ease-out duration-200"></div>
                        </div>

                        <div class="relative">
                          <div class="max-w-7xl mx-auto px-8">
                            <div class="grid grid-cols-4 gap-y-10 gap-x-8 py-16">
                              <div class="group relative">
                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-center object-cover">
                                </div>
                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                  <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                  New Arrivals
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>

                              <div class="group relative">
                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-center object-cover">
                                </div>
                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                  <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                  Basic Tees
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>

                              <div class="group relative">
                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg" alt="Model wearing minimalist watch with black wristband and white watch face." class="object-center object-cover">
                                </div>
                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                  <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                  Accessories
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>

                              <div class="group relative">
                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-04.jpg" alt="Model opening tan leather long wallet with credit card pockets and cash pouch." class="object-center object-cover">
                                </div>
                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                  <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                  Carry
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
              </div>

              <div class="flex">
                <div class="relative flex">
      
                  <button type="button" class="text-gray-700 hover:text-gray-800 relative z-10 flex items-center justify-center transition-colors ease-out duration-200 text-sm font-medium" aria-expanded="false" onmouseover="flyoutMenumenHover();" onmouseleave="flyoutMenumenRemove();">
                    Men
                    <!-- Open: "bg-indigo-600", Closed: "" -->
                    <span class="absolute bottom-0 inset-x-0 h-0.5 transition-colors ease-out duration-200 sm:mt-5 sm:transform sm:translate-y-px" aria-hidden="true"></span>
                  </button>
                </div>

                <div class="absolute z-30 top-full inset-x-0 bg-white text-sm text-gray-500 hidden" id="flyoutMenumen">
            
                        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
              
                        <div class="absolute inset-0 top-0 h-px max-w-7xl mx-auto px-8" aria-hidden="true">
                 
                          <div class="bg-transparent w-full h-px transition-colors ease-out duration-200"></div>
                        </div>

                        <div class="relative">
                          <div class="max-w-7xl mx-auto px-8">
                            <div class="grid grid-cols-4 gap-y-10 gap-x-8 py-16">
                              <div class="group relative">
                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg" alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers." class="object-center object-cover">
                                </div>
                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                  <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                  New Arrivals
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>

                              <div class="group relative">
                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-02.jpg" alt="Model wearing light heather gray t-shirt." class="object-center object-cover">
                                </div>
                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                  <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                  Basic Tees
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>

                              <div class="group relative">
                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-03.jpg" alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body." class="object-center object-cover">
                                </div>
                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                  <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                  Accessories
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>

                              <div class="group relative">
                                <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-04.jpg" alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching." class="object-center object-cover">
                                </div>
                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                  <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                  Carry
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
              </div>

              <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>

              <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a>
          

    <!--main search bar -->
    <div class="flex  ms-10 flex-row items-center justify-center">
      <form class="flex  items-center mx-auto">
        <div class="relative md:min-w-[60%] md:max-w-[80%] xl:min-w-[140%]">
          <input type="text" id="MainSearch"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none"
            placeholder="Search" required />
        </div>
        <button type="submit"
          class="inline-flex items-center py-2.5 px-3 ms-5 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
            </div>
          </div>

          <div class="ml-auto flex items-center">
          <?php
        
          if(isset($_SESSION["user"]) && $_SESSION["user"]){

$result =  Database::search("SELECT * FROM `profile_img` WHERE `user_email`='".$_SESSION["user"]["email"]."'");
$path = $result->fetch_assoc();

if($result->num_rows!==0 && $path["path"]!=="resources/new_user.png" ){

            ?>
               <!-- Account -->
            
               <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class=" text-sm bg-gray-800 rounded-full md:block hidden md:me-0 focus:ring-1 focus:ring-gray-300 " type="button">
            
               <img  draggable="false" class=" border-2 border-gray-500 object-center object-cover w-10 h-10 rounded-full" src="<?= $path["path"]?>" alt="<?= $path["user_email"]?>">
            </button>

                  <!-- Dropdown menu -->
                  <div id="dropdownAvatar" class=" hidden z-30 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
               
       
                  <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownUserAvatarButton">
                <li class=" flex items-center hover:bg-gray-100">
                  <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 ml-2"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16"
                    height="16" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <a href="/userProfile" class="block px-4 py-2 hover:bg-gray-100 ">Profile</a>
                </li>
                <li class=" flex items-center hover:bg-gray-100">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-dropbox  text-gray-400  ml-2 group-hover:text-gray-500 flex-shrink-0"
                    viewBox="0 0 16 16">
                    <path
                      d="M8.01 4.555 4.005 7.11 8.01 9.665 4.005 12.22 0 9.651l4.005-2.555L0 4.555 4.005 2zm-4.026 8.487 4.006-2.555 4.005 2.555-4.005 2.555zm4.026-3.39 4.005-2.556L8.01 4.555 11.995 2 16 4.555 11.995 7.11 16 9.665l-4.005 2.555z" />
                  </svg>
                  <a href="/myProducts" class="block px-4 py-2 hover:bg-gray-100 d">My Products</a>
                </li>
                <li class="  flex items-center hover:bg-gray-100">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chat-left-dots text-gray-400 ml-2 group-hover:text-gray-500 flex-shrink-0 "
                    viewBox="0 0 16 16">
                    <path
                      d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                    <path
                      d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                  </svg>
              
                  <a href="/messages" class="block px-4 py-2 ">Messages</a>
                </li>
              </ul>
               <div class="py-2">
                 <a  onclick="signOut();" class="cursor-pointer block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
               </div>
           </div>
            <?php
           } else{
?>
    
    <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class=" text-sm bg-gray-800 rounded-full md:block hidden md:me-0 focus:ring-1 focus:ring-gray-300 " type="button">
            
            <img  draggable="false" class="grayscale border-2 border-gray-500 object-center object-cover w-10 h-10 rounded-full" src="./resources/new_user.png" alt="sample image">
         </button>

               <!-- Dropdown menu -->
               <div id="dropdownAvatar" class=" hidden z-30 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
            
    
               <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownUserAvatarButton">
             <li class=" flex items-center hover:bg-gray-100">
               <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 ml-2"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16"
                 height="16" aria-hidden="true">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                   d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
               </svg>
               <a href="/userProfile" class="block px-4 py-2 hover:bg-gray-100 ">Profile</a>
             </li>
             <li class=" flex items-center hover:bg-gray-100">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                 class="bi bi-dropbox  text-gray-400  ml-2 group-hover:text-gray-500 flex-shrink-0"
                 viewBox="0 0 16 16">
                 <path
                   d="M8.01 4.555 4.005 7.11 8.01 9.665 4.005 12.22 0 9.651l4.005-2.555L0 4.555 4.005 2zm-4.026 8.487 4.006-2.555 4.005 2.555-4.005 2.555zm4.026-3.39 4.005-2.556L8.01 4.555 11.995 2 16 4.555 11.995 7.11 16 9.665l-4.005 2.555z" />
               </svg>
               <a href="/myProducts" class="block px-4 py-2 hover:bg-gray-100 d">My Products</a>
             </li>
             <li class="  flex items-center hover:bg-gray-100">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                 class="bi bi-chat-left-dots text-gray-400 ml-2 group-hover:text-gray-500 flex-shrink-0 "
                 viewBox="0 0 16 16">
                 <path
                   d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                 <path
                   d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
               </svg>
           
               <a href="/messages" class="block px-4 py-2 ">Messages</a>
             </li>
           </ul>
            <div class="py-2">
              <a  onclick="signOut();" class="cursor-pointer block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
            </div>
        </div>
<?php
            }
        
                      }else{
                      ?>  
                      <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                          <a href="/signin" class="text-sm font-medium text-gray-700 hover:text-gray-800">Sign in</a>
                          <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                          <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Create account</a>
                        </div>
            <?php }
      
?>

            <div class="hidden lg:ml-8 lg:flex">
              <a href="#" class="text-gray-700 hover:text-gray-800 flex items-center">
                <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt="" class="w-5 h-auto block flex-shrink-0">
                <span class="ml-3 block text-sm font-medium"> CAD </span>
                <span class="sr-only">, change currency</span>
              </a>
            </div>

        

            <!-- Cart -->
            <div class="ml-4 flow-root lg:ml-6">
              <a href="/cart" class="group -m-2 p-2 flex items-center">
                <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
                <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                <span class="sr-only">items in cart, view bag</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  
  <!--Mobile search -->
<div class="mx-2 lg:hidden block">
  <div class="w-full flex flex-row justify-center items-center">
    <div class="flex md:w-[65%]  my-6 min-w-[70%] me-5 md:me-0 flex-row items-center justify-center">
      <form class="flex w-full items-center max-w-lg mx-auto">
        <div class="relative w-full">
          <input type="text" id="MainSearch"
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