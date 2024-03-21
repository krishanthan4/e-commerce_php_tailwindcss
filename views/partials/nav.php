<?php
require_once "./connection2.php";
require_once "./function.php";
$sellingHistoryNav_rs = Database::search("SELECT `user_email` FROM `product` WHERE `user_email`=?",[$_SESSION["user"]["email"]]);

?>


<!-- Mobile Menu start -->
<div id="MobileMenublack">
  <div class="fixed inset-0 flex z-50 lg:hidden" role="dialog" aria-modal="true">
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

      <!-- Links -->
      <div class="mt-2">
        <div class="border-b border-gray-200">
          <div class="-mb-px flex px-4 space-x-8" aria-orientation="horizontal" role="tablist">
            <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
            <button id="tabs-1-tab-1"
              class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium"
              aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>
            <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
            <button id="tabs-1-tab-2"
              class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium"
              aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
          </div>
        </div>
      </div>
      <!-- 'Women' tab panel, show/hide based on tab state. -->
      <div id="tabs-1-panel-1" class="px-4 py-6 space-y-12" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
        <div class="grid grid-cols-2 gap-x-4 gap-y-10">
          <div class="group relative">
            <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                alt="Models sitting back to back, wearing Basic Tee in black and bone."
                class="object-center object-cover">
            </div>
            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
              <span class="absolute z-10 inset-0" aria-hidden="true"></span>
              New Arrivals
            </a>
            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
          </div>

          <div class="group relative">
            <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                class="object-center object-cover">
            </div>
            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
              <span class="absolute z-10 inset-0" aria-hidden="true"></span>
              Basic Tees
            </a>
            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
          </div>

          <div class="group relative">
            <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg"
                alt="Model wearing minimalist watch with black wristband and white watch face."
                class="object-center object-cover">
            </div>
            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
              <span class="absolute z-10 inset-0" aria-hidden="true"></span>
              Accessories
            </a>
            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
          </div>

          <div class="group relative">
            <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-04.jpg"
                alt="Model opening tan leather long wallet with credit card pockets and cash pouch."
                class="object-center object-cover">
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
              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg"
                alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers."
                class="object-center object-cover">
            </div>
            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
              <span class="absolute z-10 inset-0" aria-hidden="true"></span>
              New Arrivals
            </a>
            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
          </div>

          <div class="group relative">
            <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-02.jpg"
                alt="Model wearing light heather gray t-shirt." class="object-center object-cover">
            </div>
            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
              <span class="absolute z-10 inset-0" aria-hidden="true"></span>
              Basic Tees
            </a>
            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
          </div>

          <div class="group relative">
            <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-03.jpg"
                alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body."
                class="object-center object-cover">
            </div>
            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
              <span class="absolute z-10 inset-0" aria-hidden="true"></span>
              Accessories items-center
            </a>
            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
          </div>

          <div class="group relative">
            <div class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-04.jpg"
                alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching."
                class="object-center object-cover">
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
        <?php require_once "./views/partials/nav_profile.php" ?>

      </div>



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


<!-- Main Nav Bar start -->
<header class="relative z-30 bg-white">
  <p class="bg-indigo-600 h-10  flex items-center justify-center text-sm font-medium text-white px-4 sm:px-6 lg:px-8">
    Get free delivery on orders over $100</p>

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
          <a href="/">
            <span class="sr-only">Workflow</span>
            <img draggable="false" class="h-8 w-auto"
              src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="">
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
                    <button type="button"
                      class="text-gray-700 hover:text-gray-800 relative z-10 flex items-center justify-center transition-colors ease-out duration-200 text-sm font-medium"
                      aria-expanded="false" onmouseover="flyoutMenuWomenHover();"
                      onmouseleave="flyoutMenuWomenRemove();">
                      Women
                      <!-- Open: "bg-indigo-600", Closed: "" -->
                      <span
                        class="absolute bottom-0 inset-x-0 h-0.5 transition-colors ease-out duration-200 sm:mt-5 sm:transform sm:translate-y-px"
                        aria-hidden="true"></span>
                    </button>
                  </div>

                  <!--
                  'Women' flyout menu, show/hide based on flyout menu state.-->
                  <div class="absolute z-20 top-full inset-x-0 bg-white text-sm text-gray-500 hidden"
                    id="flyoutMenuWomen">

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
                            <div
                              class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-4 block font-medium text-gray-900">
                              <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                              New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                          </div>

                          <div class="group relative">
                            <div
                              class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                                alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-4 block font-medium text-gray-900">
                              <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                              Basic Tees
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                          </div>

                          <div class="group relative">
                            <div
                              class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg"
                                alt="Model wearing minimalist watch with black wristband and white watch face."
                                class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-4 block font-medium text-gray-900">
                              <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                              Accessories
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                          </div>

                          <div class="group relative">
                            <div
                              class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-04.jpg"
                                alt="Model opening tan leather long wallet with credit card pockets and cash pouch."
                                class="object-center object-cover">
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

                    <button type="button"
                      class="text-gray-700 hover:text-gray-800 relative z-10 flex items-center justify-center transition-colors ease-out duration-200 text-sm font-medium"
                      aria-expanded="false" onmouseover="flyoutMenumenHover();" onmouseleave="flyoutMenumenRemove();">
                      Men
                      <!-- Open: "bg-indigo-600", Closed: "" -->
                      <span
                        class="absolute bottom-0 inset-x-0 h-0.5 transition-colors ease-out duration-200 sm:mt-5 sm:transform sm:translate-y-px"
                        aria-hidden="true"></span>
                    </button>
                  </div>

                  <div class="absolute z-30 top-full inset-x-0 bg-white text-sm text-gray-500 hidden"
                    id="flyoutMenumen">

                    <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                    <div class="absolute inset-0 top-0 h-px max-w-7xl mx-auto px-8" aria-hidden="true">

                      <div class="bg-transparent w-full h-px transition-colors ease-out duration-200"></div>
                    </div>

                    <div class="relative">
                      <div class="max-w-7xl mx-auto px-8">
                        <div class="grid grid-cols-4 gap-y-10 gap-x-8 py-16">
                          <div class="group relative">
                            <div
                              class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg"
                                alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers."
                                class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-4 block font-medium text-gray-900">
                              <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                              New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                          </div>

                          <div class="group relative">
                            <div
                              class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-02.jpg"
                                alt="Model wearing light heather gray t-shirt." class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-4 block font-medium text-gray-900">
                              <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                              Basic Tees
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                          </div>

                          <div class="group relative">
                            <div
                              class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-03.jpg"
                                alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body."
                                class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-4 block font-medium text-gray-900">
                              <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                              Accessories
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                          </div>

                          <div class="group relative">
                            <div
                              class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                              <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-04.jpg"
                                alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching."
                                class="object-center object-cover">
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


                <?php require_once "./views/partials/mainSearchBar.php" ?>

              </div>
            </div>
          </div>
        </div>

        <div class="ml-auto flex items-center">
          <?php

          if (isset($_SESSION["user"]) && $_SESSION["user"]) {

            $result = Database::search("SELECT * FROM profile_img WHERE user_email='" . $_SESSION["user"]["email"] . "'");
            $path = $result->fetch_assoc();

            if ($result->num_rows !== 0 && $path["path"] !== "resources/new_user.png") {

              ?>
              <!-- Account -->

              <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"
                class=" text-sm bg-gray-800 rounded-full md:block hidden md:me-0 focus:ring-1 focus:ring-gray-300 "
                type="button">

                <img draggable="false" class=" border-2 border-gray-500 object-center object-cover w-10 h-10 rounded-full"
                  src="<?= $path["path"] ?>" alt="<?= $path["user_email"] ?>">
              </button>

              <!-- Dropdown menu -->
              <div id="dropdownAvatar" class=" hidden z-30 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownUserAvatarButton">
                  <a href="/userProfile">
                    <li class=" flex items-center hover:bg-gray-100">
                      <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 ml-2"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16"
                        height="16" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <p class="block px-4 py-2 hover:bg-gray-100 ">Profile</p>
                    </li>
                  </a>

                  <a href="/myProducts">
                    <li class=" flex items-center hover:bg-gray-100">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-dropbox  text-gray-400  ml-2 group-hover:text-gray-500 flex-shrink-0"
                        viewBox="0 0 16 16">
                        <path
                          d="M8.01 4.555 4.005 7.11 8.01 9.665 4.005 12.22 0 9.651l4.005-2.555L0 4.555 4.005 2zm-4.026 8.487 4.006-2.555 4.005 2.555-4.005 2.555zm4.026-3.39 4.005-2.556L8.01 4.555 11.995 2 16 4.555 11.995 7.11 16 9.665l-4.005 2.555z" />
                      </svg>
                      <p class="block px-4 py-2 hover:bg-gray-100 d">My Products</p>
                    </li>
                  </a>
                  <a href="/wishlist">
                    <li class="  flex items-center hover:bg-gray-100">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-dropbox  text-gray-400  ml-2 group-hover:text-gray-500 flex-shrink-0"
                        viewBox="0 0 16 16">
                        <path
                          d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                      </svg>
                      <p class="block px-4 py-2 ">Wishlist</p>
                    </li>
                  </a>

                  <a href="/purchasedHistory">
                    <li class="  flex items-center hover:bg-gray-100">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-dropbox  text-gray-400  ml-2 group-hover:text-gray-500 flex-shrink-0"
                        viewBox="0 0 16 16">
                        <path
                          d="M8 1a2 2 0 0 1 2 2v2H6V3a2 2 0 0 1 2-2m3 4V3a3 3 0 1 0-6 0v2H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 1 0 1 0V6z" />
                      </svg>
                      <p class="block px-4 py-2 ">Purchased History</p>
                    </li>
                  </a>
                  <?php 
     if($sellingHistoryNav_rs->num_rows!==0){
?>
                  <a href="/sellingHistory">
                    <li class="  flex items-center hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-rocket  text-gray-400  ml-2 group-hover:text-gray-500 flex-shrink-0" viewBox="0 0 16 16">
  <path d="M8 8c.828 0 1.5-.895 1.5-2S8.828 4 8 4s-1.5.895-1.5 2S7.172 8 8 8"/>
  <path d="M11.953 8.81c-.195-3.388-.968-5.507-1.777-6.819C9.707 1.233 9.23.751 8.857.454a3.5 3.5 0 0 0-.463-.315A2 2 0 0 0 8.25.064.55.55 0 0 0 8 0a.55.55 0 0 0-.266.073 2 2 0 0 0-.142.08 4 4 0 0 0-.459.33c-.37.308-.844.803-1.31 1.57-.805 1.322-1.577 3.433-1.774 6.756l-1.497 1.826-.004.005A2.5 2.5 0 0 0 2 12.202V15.5a.5.5 0 0 0 .9.3l1.125-1.5c.166-.222.42-.4.752-.57.214-.108.414-.192.625-.281l.198-.084c.7.428 1.55.635 2.4.635s1.7-.207 2.4-.635q.1.044.196.083c.213.09.413.174.627.282.332.17.586.348.752.57l1.125 1.5a.5.5 0 0 0 .9-.3v-3.298a2.5 2.5 0 0 0-.548-1.562zM12 10.445v.055c0 .866-.284 1.585-.75 2.14.146.064.292.13.425.199.39.197.8.46 1.1.86L13 14v-1.798a1.5 1.5 0 0 0-.327-.935zM4.75 12.64C4.284 12.085 4 11.366 4 10.5v-.054l-.673.82a1.5 1.5 0 0 0-.327.936V14l.225-.3c.3-.4.71-.664 1.1-.861.133-.068.279-.135.425-.199M8.009 1.073q.096.06.226.163c.284.226.683.621 1.09 1.28C10.137 3.836 11 6.237 11 10.5c0 .858-.374 1.48-.943 1.893C9.517 12.786 8.781 13 8 13s-1.517-.214-2.057-.607C5.373 11.979 5 11.358 5 10.5c0-4.182.86-6.586 1.677-7.928.409-.67.81-1.082 1.096-1.32q.136-.113.236-.18Z"/>
  <path d="M9.479 14.361c-.48.093-.98.139-1.479.139s-.999-.046-1.479-.139L7.6 15.8a.5.5 0 0 0 .8 0z"/>
</svg>
                      <p class="block px-4 py-2 ">selling History</p>
                    </li>
                  </a>
                  <?php
     }
     ?>
                  <a href="/messages">
                    <li class="  flex items-center hover:bg-gray-100">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chat-left-dots text-gray-400 ml-2 group-hover:text-gray-500 flex-shrink-0 "
                        viewBox="0 0 16 16">
                        <path
                          d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path
                          d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                      </svg>
                      <p class="block px-4 py-2 ">Messages</p>
                    </li>
                  </a>

                  <a href="/contactAdmin">
                    <li class="  flex items-center hover:bg-gray-100">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-dropbox  text-gray-400  ml-2 group-hover:text-gray-500 flex-shrink-0"
                        viewBox="0 0 16 16">
                        <path
                          d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                      </svg>
                      <p class="block px-4 py-2 ">Contact Admin</p>
                    </li>
                  </a>
                </ul>
                <div class="py-2 ">
                  <li class="  flex items-center hover:bg-gray-100 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="16" height="16"
                      stroke="currentColor" class="text-gray-400  ml-1 group-hover:text-gray-500 flex-shrink-0">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                    </svg>
                    <a onclick="signOut();" class="ml-2">
                      Sign out</a>
                  </li>
                </div>
              </div>
              <?php
            } else {
              ?>

<button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"
                class=" text-sm bg-gray-800 rounded-full md:block hidden md:me-0 focus:ring-1 focus:ring-gray-300 "
                type="button">

                <img draggable="false" class="grayscale border-2 border-gray-500 object-center object-cover w-10 h-10 rounded-full"
                  src="./resources/new_user.png">
              </button>

              <!-- Dropdown menu -->
              <div id="dropdownAvatar" class=" hidden z-30 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownUserAvatarButton">
                  <a href="/userProfile">
                    <li class=" flex items-center hover:bg-gray-100">
                      <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 ml-2"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16"
                        height="16" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      <p class="block px-4 py-2 hover:bg-gray-100 ">Profile</p>
                    </li>
                  </a>

                  <a href="/myProducts">
                    <li class=" flex items-center hover:bg-gray-100">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-dropbox  text-gray-400  ml-2 group-hover:text-gray-500 flex-shrink-0"
                        viewBox="0 0 16 16">
                        <path
                          d="M8.01 4.555 4.005 7.11 8.01 9.665 4.005 12.22 0 9.651l4.005-2.555L0 4.555 4.005 2zm-4.026 8.487 4.006-2.555 4.005 2.555-4.005 2.555zm4.026-3.39 4.005-2.556L8.01 4.555 11.995 2 16 4.555 11.995 7.11 16 9.665l-4.005 2.555z" />
                      </svg>
                      <p class="block px-4 py-2 hover:bg-gray-100 d">My Products</p>
                    </li>
                  </a>
                  <a href="/wishlist">
                    <li class="  flex items-center hover:bg-gray-100">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-dropbox  text-gray-400  ml-2 group-hover:text-gray-500 flex-shrink-0"
                        viewBox="0 0 16 16">
                        <path
                          d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                      </svg>
                      <p class="block px-4 py-2 ">Wishlist</p>
                    </li>
                  </a>

                  <a href="/purchasedHistory">
                    <li class="  flex items-center hover:bg-gray-100">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-dropbox  text-gray-400  ml-2 group-hover:text-gray-500 flex-shrink-0"
                        viewBox="0 0 16 16">
                        <path
                          d="M8 1a2 2 0 0 1 2 2v2H6V3a2 2 0 0 1 2-2m3 4V3a3 3 0 1 0-6 0v2H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 1 0 1 0V6z" />
                      </svg>
                      <p class="block px-4 py-2 ">Purchased History</p>
                    </li>
                  </a>
                  <?php 
     if($sellingHistoryNav_rs->num_rows!==0){
?>
                  <a href="/sellingHistory">
                    <li class="  flex items-center hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-rocket   text-gray-400  ml-2 group-hover:text-gray-500 flex-shrink-0" viewBox="0 0 16 16">
  <path d="M8 8c.828 0 1.5-.895 1.5-2S8.828 4 8 4s-1.5.895-1.5 2S7.172 8 8 8"/>
  <path d="M11.953 8.81c-.195-3.388-.968-5.507-1.777-6.819C9.707 1.233 9.23.751 8.857.454a3.5 3.5 0 0 0-.463-.315A2 2 0 0 0 8.25.064.55.55 0 0 0 8 0a.55.55 0 0 0-.266.073 2 2 0 0 0-.142.08 4 4 0 0 0-.459.33c-.37.308-.844.803-1.31 1.57-.805 1.322-1.577 3.433-1.774 6.756l-1.497 1.826-.004.005A2.5 2.5 0 0 0 2 12.202V15.5a.5.5 0 0 0 .9.3l1.125-1.5c.166-.222.42-.4.752-.57.214-.108.414-.192.625-.281l.198-.084c.7.428 1.55.635 2.4.635s1.7-.207 2.4-.635q.1.044.196.083c.213.09.413.174.627.282.332.17.586.348.752.57l1.125 1.5a.5.5 0 0 0 .9-.3v-3.298a2.5 2.5 0 0 0-.548-1.562zM12 10.445v.055c0 .866-.284 1.585-.75 2.14.146.064.292.13.425.199.39.197.8.46 1.1.86L13 14v-1.798a1.5 1.5 0 0 0-.327-.935zM4.75 12.64C4.284 12.085 4 11.366 4 10.5v-.054l-.673.82a1.5 1.5 0 0 0-.327.936V14l.225-.3c.3-.4.71-.664 1.1-.861.133-.068.279-.135.425-.199M8.009 1.073q.096.06.226.163c.284.226.683.621 1.09 1.28C10.137 3.836 11 6.237 11 10.5c0 .858-.374 1.48-.943 1.893C9.517 12.786 8.781 13 8 13s-1.517-.214-2.057-.607C5.373 11.979 5 11.358 5 10.5c0-4.182.86-6.586 1.677-7.928.409-.67.81-1.082 1.096-1.32q.136-.113.236-.18Z"/>
  <path d="M9.479 14.361c-.48.093-.98.139-1.479.139s-.999-.046-1.479-.139L7.6 15.8a.5.5 0 0 0 .8 0z"/>
</svg>
                      <p class="block px-4 py-2 ">selling History</p>
                    </li>
                  </a>
                  <?php
     }
     ?>
                  <a href="/messages">
                    <li class="  flex items-center hover:bg-gray-100">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chat-left-dots text-gray-400 ml-2 group-hover:text-gray-500 flex-shrink-0 "
                        viewBox="0 0 16 16">
                        <path
                          d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path
                          d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                      </svg>
                      <p class="block px-4 py-2 ">Messages</p>
                    </li>
                  </a>

                  <a href="/contactAdmin">
                    <li class="  flex items-center hover:bg-gray-100">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-dropbox  text-gray-400  ml-2 group-hover:text-gray-500 flex-shrink-0"
                        viewBox="0 0 16 16">
                        <path
                          d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                      </svg>
                      <p class="block px-4 py-2 ">Contact Admin</p>
                    </li>
                  </a>
                </ul>
                <div class="py-2 ">
                  <li class="  flex items-center hover:bg-gray-100 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="16" height="16"
                      stroke="currentColor" class="text-gray-400  ml-1 group-hover:text-gray-500 flex-shrink-0">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                    </svg>
                    <a onclick="signOut();" class="ml-2">
                      Sign out</a>
                  </li>
                </div>
              </div>
              <?php
            }

          } else {
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
              <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
              </svg>
              <?php
              try {
                if (isset($_SESSION["user"]) && $_SESSION["user"]) {


                  $cartNumber_rs = Database::search("SELECT  COUNT(user_email) FROM cart WHERE user_email='" . $_SESSION["user"]["email"] . "'");
                  $cartNumber = $cartNumber_rs->fetch_assoc();
                  ?>
                  <span class="-ms-3 -mt-4 <?php if ($cartNumber["COUNT(user_email)"] > 0) {
                    ?>bg-red-400<?php } ?>  w-[1.1rem] text-center h-[1.1rem] rounded-full text-sm  text-white">
                    <?php
                    if ($cartNumber["COUNT(user_email)"] > 0) {
                      echo ($cartNumber["COUNT(user_email)"]);

                    }
                    ?>
                  </span>
                </a>
              <?php } else {

                  ?>
                <span class="-ms-3 -mt-4 w-[1.1rem] text-center h-[1.1rem] rounded-full text-sm  text-white">
                </span>
                </a>
                <?php
                }
              } catch (\Throwable $th) {
                //throw $th;
              } ?>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>

<?php require_once "./views/partials/mobileSearchBar.php" ?>