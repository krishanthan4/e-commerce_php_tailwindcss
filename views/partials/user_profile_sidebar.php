<?php require_once "./function.php" ;
?>

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

        <a href="/purchasedHistory"
            class="<?= urlis('/purchasedHistory') ?
                "text-orange-600 hover:text-orange-700" : "text-gray-900 hover:text-gray-900 " ?> hover:bg-gray-50  group rounded-md px-3 py-2 flex items-center text-sm font-medium"
            aria-current="page">
            <!-- Heroicon name: outline/credit-card -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-handbag  <?= urlis('/purchasedHistory') ?
                "text-orange-600 group-hover:text-orange-700" : "text-gray-400 group-hover:text-gray-500" ?>  flex-shrink-0 -ml-1 mr-4 h-5 w-5"
                viewBox="0 0 16 16">
                <path
                    d="M8 1a2 2 0 0 1 2 2v2H6V3a2 2 0 0 1 2-2m3 4V3a3 3 0 1 0-6 0v2H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 1 0 1 0V6z" />
            </svg>
            <span class="truncate"> Purchased History </span>
        </a>
     <?php 
     if($sellingHistoryNav_rs->num_rows!==0){
?>
   <a href="/sellingHistory"
            class="<?= urlis('/sellingHistory') ?
                "text-orange-600 hover:text-orange-700" : "text-gray-900 hover:text-gray-900 " ?> hover:bg-gray-50  group rounded-md px-3 py-2 flex items-center text-sm font-medium"
            aria-current="page">
            <!-- Heroicon name: outline/credit-card -->
        
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-rocket <?= urlis('/sellingHistory') ?
                "text-orange-600 group-hover:text-orange-700" : "text-gray-400 group-hover:text-gray-500" ?>  flex-shrink-0 -ml-1 mr-4 h-5 w-5" viewBox="0 0 16 16">
  <path d="M8 8c.828 0 1.5-.895 1.5-2S8.828 4 8 4s-1.5.895-1.5 2S7.172 8 8 8"/>
  <path d="M11.953 8.81c-.195-3.388-.968-5.507-1.777-6.819C9.707 1.233 9.23.751 8.857.454a3.5 3.5 0 0 0-.463-.315A2 2 0 0 0 8.25.064.55.55 0 0 0 8 0a.55.55 0 0 0-.266.073 2 2 0 0 0-.142.08 4 4 0 0 0-.459.33c-.37.308-.844.803-1.31 1.57-.805 1.322-1.577 3.433-1.774 6.756l-1.497 1.826-.004.005A2.5 2.5 0 0 0 2 12.202V15.5a.5.5 0 0 0 .9.3l1.125-1.5c.166-.222.42-.4.752-.57.214-.108.414-.192.625-.281l.198-.084c.7.428 1.55.635 2.4.635s1.7-.207 2.4-.635q.1.044.196.083c.213.09.413.174.627.282.332.17.586.348.752.57l1.125 1.5a.5.5 0 0 0 .9-.3v-3.298a2.5 2.5 0 0 0-.548-1.562zM12 10.445v.055c0 .866-.284 1.585-.75 2.14.146.064.292.13.425.199.39.197.8.46 1.1.86L13 14v-1.798a1.5 1.5 0 0 0-.327-.935zM4.75 12.64C4.284 12.085 4 11.366 4 10.5v-.054l-.673.82a1.5 1.5 0 0 0-.327.936V14l.225-.3c.3-.4.71-.664 1.1-.861.133-.068.279-.135.425-.199M8.009 1.073q.096.06.226.163c.284.226.683.621 1.09 1.28C10.137 3.836 11 6.237 11 10.5c0 .858-.374 1.48-.943 1.893C9.517 12.786 8.781 13 8 13s-1.517-.214-2.057-.607C5.373 11.979 5 11.358 5 10.5c0-4.182.86-6.586 1.677-7.928.409-.67.81-1.082 1.096-1.32q.136-.113.236-.18Z"/>
  <path d="M9.479 14.361c-.48.093-.98.139-1.479.139s-.999-.046-1.479-.139L7.6 15.8a.5.5 0 0 0 .8 0z"/>
</svg>
            <span class="truncate"> Selling History </span>
        </a>
<?php
     }
     ?>
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