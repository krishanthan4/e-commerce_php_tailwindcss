<?php require_once "./views/partials/header.php";
require_once "./views/partials/nav.php";
if($_GET["product_id"]){
    $ReviewProduct_rs = Database::search("SELECT * FROM `invoice` INNER JOIN `invoice_has_products` ON `invoice`.`invoice_id`=`invoice_has_products`.`invoice_id` INNER JOIN `product` ON `invoice_has_products`.`product_id`=`product`.`id` WHERE `invoice`.`user_email`=? AND `invoice_has_products`.`product_id`=?",[$_SESSION["user"]["email"],$_GET["product_id"]]);
    if($ReviewProduct_rs->num_rows!==0){
$ReviewProduct = $ReviewProduct_rs->fetch_assoc();
      ?>
      <div class="sm:px-20 px-5 py-10">
    <h1 class="text-3xl pb-3">Write A Review</h1>
    <p class="text-gray-500 text-sm">Tell us what you think about this product and share your experience with others.Please include only information that is relavent to the product you are reviewing.</p>
<!-- product table start -->
<div class="flex  flex-col">
    <div class="-my-2 flex flex-col justify-center items-center sm:-mx-6 lg:mx-8">
        <div class="py-2  inline-block sm:min-w-[80%] min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full mt-5">
                    <tbody class="bg-white ">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                <p class="text-gray-800">Your rating*</p>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
<!-- Rating -->
<div class="flex flex-row-reverse justify-end items-center">
  <input id="hs-ratings-readonly-1" onclick="startCount(5);" type="radio" class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0" name="hs-ratings-readonly" value="1">
  <label for="hs-ratings-readonly-1" class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-300">
    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
    </svg>
  </label>
  <input id="hs-ratings-readonly-2" onclick="startCount(4);" type="radio" class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0" name="hs-ratings-readonly" value="2">
  <label for="hs-ratings-readonly-2" class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-300">
    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
    </svg>
  </label>
  <input id="hs-ratings-readonly-3" onclick="startCount(3);" type="radio" class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0" name="hs-ratings-readonly" value="3">
  <label for="hs-ratings-readonly-3" class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-300">
    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
    </svg>
  </label>
  <input id="hs-ratings-readonly-4" onclick="startCount(2);" type="radio" class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0" name="hs-ratings-readonly" value="4">
  <label for="hs-ratings-readonly-4" class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-300">
    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
    </svg>
  </label>
  <input id="hs-ratings-readonly-5" onclick="startCount(1);" type="radio" class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0" name="hs-ratings-readonly" value="5">
  <label for="hs-ratings-readonly-5" class="peer-checked:text-yellow-400 text-yellow-300 pointer-events-none dark:peer-checked:text-yellow-300">
    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
    </svg>
  </label>
</div>
<!-- End Rating -->
                            </td>                  
                        </tr>
                     
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                <p class="text-gray-800">Reviewing Product</p>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                          <input disabled id="" type="text" class="border-1 border w-full py-1 px-3 border-gray-300 rounded-md" value="<?= $ReviewProduct["title"]?>">                            
                            </td>                  
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                <p class="text-gray-800">Description
                                </div>
                            </td>
                            <td class="px-6 py-4">
                    <textarea name="" id="textContent" class="w-full order-1 border border-gray-300 rounded-md p-3 outline-none focus:ring-gray-500 focus:ring-1" rows="5" ></textarea>   
                            </td>                  
                        </tr>
                        <!-- More people... -->
                    </tbody>
                </table>
            <div class="mx-10 mb-20">
            <div class="w-full flex flex-row gap-4 justify-end ">
                    <button onclick="submitReview('<?= $ReviewProduct['id']?>');" class="bg-green-500 py-2 px-3 text-white rounded-md">Submit</button>
                    <button onclick="discard();" class="bg-yellow-500 py-2 px-3 text-white rounded-md">Discard</button>
                </div>
            </div>
             
            </div>
        </div>
    </div>
</div>
<!-- product table start -->
</div>
<?php require_once "./views/partials/alert.php"; ?>
<script src="/public/js/writeReviews.js"></script>
      <?php  
    }else{
        ?><script>window.location.href="/";</script><?php
    } ?>

<?php require_once "./views/partials/footer.php";}else{
    ?><script>window.location.href="/";</script><?php
} ?>


