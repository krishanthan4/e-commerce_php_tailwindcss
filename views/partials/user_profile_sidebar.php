<?php require_once "./function.php" ?>

<aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">

    <nav class="space-y-1">

        <a href="/userProfile"
            class="<?= urlis('/userProfile') ?
                "text-orange-600 hover:text-orange-700" : "text-gray-900 hover:text-gray-900 " ?> text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
            <!--
              Heroicon name: outline/user-circle

              Current: "text-orange-500", Default: "text-gray-400 group-hover:text-gray-500"
            -->
            <svg class="<?= urlis('/userProfile') ?
                "text-orange-600 group-hover:text-orange-700" : "text-gray-400 group-hover:text-gray-500" ?>  flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="truncate"> Profile </span>
        </a>


        <a href="myProducts"
            class="<?= urlis('/myProducts') ?
                "text-orange-600 hover:text-orange-700" : "text-gray-900 hover:text-gray-900 " ?> text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
            <!-- Heroicon name: outline/key -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-dropbox  <?= urlis('/myProducts') ?
                "text-orange-600 group-hover:text-orange-700" : "text-gray-400 group-hover:text-gray-500" ?>    flex-shrink-0 -ml-1 mr-4 h-5 w-5"
                viewBox="0 0 16 16">
                <path
                    d="M8.01 4.555 4.005 7.11 8.01 9.665 4.005 12.22 0 9.651l4.005-2.555L0 4.555 4.005 2zm-4.026 8.487 4.006-2.555 4.005 2.555-4.005 2.555zm4.026-3.39 4.005-2.556L8.01 4.555 11.995 2 16 4.555 11.995 7.11 16 9.665l-4.005 2.555z" />
            </svg>
            <span class="truncate"> My Products </span>
        </a>

        <a href="/wishlist"
            class="<?= urlis('/wishlist') ?
                "text-orange-600 hover:text-orange-700" : "text-gray-900 hover:text-gray-900 " ?>  text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
            <!-- Heroicon name: outline/bell -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-heart <?= urlis('/wishlist') ?
                "text-orange-600 group-hover:text-orange-700" : "text-gray-400 group-hover:text-gray-500" ?>   flex-shrink-0 -ml-1  h-5 w-5"
                viewBox="0 0 16 16">
                <path
                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
            </svg>
            <span class="truncate ps-4">Wishlist</span>
        </a>

        <a href="/orderHistory"
            class="<?= urlis('/orderHistory') ?
                "text-orange-600 hover:text-orange-700" : "text-gray-900 hover:text-gray-900 " ?> hover:bg-gray-50  group rounded-md px-3 py-2 flex items-center text-sm font-medium"
            aria-current="page">
            <!-- Heroicon name: outline/credit-card -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-handbag  <?= urlis('/orderHistory') ?
                "text-orange-600 group-hover:text-orange-700" : "text-gray-400 group-hover:text-gray-500" ?>  flex-shrink-0 -ml-1 mr-4 h-5 w-5"
                viewBox="0 0 16 16">
                <path
                    d="M8 1a2 2 0 0 1 2 2v2H6V3a2 2 0 0 1 2-2m3 4V3a3 3 0 1 0-6 0v2H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 1 0 1 0V6z" />
            </svg>
            <span class="truncate"> Purchase History </span>
        </a>

        <a href="/messages"
            class="<?= urlis('/messages') ?
                "text-orange-600 hover:text-orange-700" : "text-gray-900 hover:text-gray-900 " ?>hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
            <!-- Heroicon name: outline/view-grid-add -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-chat-left-dots  <?= urlis('/messages') ?
                "text-orange-600 group-hover:text-orange-700" : "text-gray-400 group-hover:text-gray-500" ?>  flex-shrink-0 -ml-1 mr-4 h-5 w-5"
                viewBox="0 0 16 16">
                <path
                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                <path
                    d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
            </svg>
            </svg>
            <span class="truncate"> Messages </span>
        </a>
        <a href="/contactAdmin"
            class="<?= urlis('/contactAdmin') ?
                "text-orange-600 hover:text-orange-700" : "text-gray-900 hover:text-gray-900 " ?> hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
            <!-- Heroicon name: outline/view-grid-add -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-telephone  <?= urlis('/contactAdmin') ?
                "text-orange-600 group-hover:text-orange-700" : "text-gray-400 group-hover:text-gray-500" ?>  flex-shrink-0 -ml-1 mr-4 h-5 w-5"
                viewBox="0 0 16 16">
                <path
                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
            </svg>
            </svg>
            <span class="truncate"> Contact Admin </span>
        </a>
    </nav>
</aside>