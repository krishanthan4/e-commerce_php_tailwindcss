<?php require_once "./views/partials/header.php";
require_once "./views/partials/nav.php";

if(isset($_GET["id"])){
    $pageId =$_GET["id"]; 
  
  }else{
    $pageId =1; 
  }
?>
<div class="mx-4 md:mx-12 my-3">
    <div class="w-full flex flex-row items-center">
        <p class="text-xl md:block hidden md:ms-6">Manage Products</p>

        <!-- search bar -->
        <div class="flex md:w-[65%] my-6 min-w-[70%] me-5 md:me-0 flex-row items-center justify-center">
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

<!-- product table start -->
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-4 md:-mx-6 lg:mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-4 md:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <!-- Table Headers -->
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Product Image</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Title</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Price</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Quantity</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Registered Date</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200">

                        <?php
$AllProducts_rs = Database::search("SELECT COUNT(`id`) FROM `product` ");
$AllProducts = $AllProducts_rs->fetch_assoc();
if($AllProducts_rs->num_rows){
    $output = preg_replace( '/[^0-9]/', '', $pageId );
    if($output){
      $pageId = $pageId-1;
      $from = 0;
      $to = 10;
      $from = $to * $pageId;
    }else{
      $from = 0;
    $to = 10;
    }


                      $manageProducts_rs =  Database::search("SELECT * FROM `product` WHERE `user_email`='" . $_SESSION["user"]["email"] . "' LIMIT $from,$to");
if($manageProducts_rs->num_rows>0){
for ($q=0; $q < $manageProducts_rs->num_rows; $q++) { 
    $manageProducts = $manageProducts_rs->fetch_array();
?>
 <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <?php 
                                        $mangeProductsImage_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='".$manageProducts["id"]."'");
                                        if($mangeProductsImage_rs->num_rows>0){
$mangeProductsImage = $mangeProductsImage_rs->fetch_assoc();
?>
  <img class=" border border-gray-300 h-10 w-10 rounded-full"
                                            src="<?= $mangeProductsImage["img_path"]?>"
                                            alt="">
<?php
                                        }else{
                                      ?>
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path d="M12.378 1.602a.75.75 0 0 0-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03ZM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 0 0 .372-.648V7.93ZM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 0 0 .372.648l8.628 5.033Z" /></svg>

                                      <?php      
                                        }
                                        ?>
                                      
                                    </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?= $manageProducts["title"] ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rs.<?= $manageProducts["price"] ?>,000</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $manageProducts["qty"] ?> stocks available</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $manageProducts["datetime_added"] ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                              
                            <button id="blockbutton<?= $manageProducts["id"]?>" onclick="<?php if($manageProducts["status_status_id"]==1){?>blockProduct('<?= $manageProducts['id'] ?>');<?php }else{?>unblockProduct('<?= $manageProducts['id'] ?>');<?php }?>"
                                    class=" <?php if($manageProducts["status_status_id"]==1){?>hover:bg-red-200 text-red-700 border-red-600 <?php }else{?>hover:bg-green-200 text-green-700 border-green-600<?php }?> inline-flex items-center px-6 py-2 border  text-[16px] font-bold rounded  bg-white ">
                                    <?php if($manageProducts["status_status_id"]==1){?>
                                    Block<?php
                                    }else{
                                        ?>
                                    UnBlock<?php
                                    }      
                                    ?>
                        </button>
                            </td>
                        </tr><?php
}
?>
                
                    </tbody>
                </table>
           
<?php require_once "./views/partials/pagination.php";
pagination($AllProducts['COUNT(`id`)'],"manageProductPagination");
}else{
    ?><script>window.location.href="/manageProduct?id=1"</script><?php
}
                       }                       ?>
                
            </div>
        </div>
    </div>
</div>
<!-- product table start -->

<hr class="mt-5 mb-5">
<div>
</div>
<hr class="mt-5 mb-5">
<script src="./public/js/manageProduct.js"></script>
<?php
require_once "./views/partials/manage_category.php";
require_once "./views/partials/footer.php";
?>