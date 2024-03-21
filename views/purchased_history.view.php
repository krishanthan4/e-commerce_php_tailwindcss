<?php require_once "./views/partials/header.php";
require_once "./views/partials/nav.php"; 
?>
<div class="">
  <main class="max-w-7xl mx-auto pb-10 lg:py-12 lg:px-8">
    <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
      <?php require_once "./views/partials/user_profile_sidebar.php" ?>

      <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
        <main class="">
          <div class="max-w-7xl mx-auto sm:px-2 lg:px-8">
            <div class="max-w-2xl mx-auto px-4 lg:max-w-4xl lg:px-0">
              <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">Purchase history</h1>
              <p class="mt-2 text-sm text-gray-500">Check the status of recent orders, manage returns, and discover
                similar products.</p>
            </div>
          </div>
<?php 
$invoiceHistory_rs = Database::search("SELECT * FROM `invoice` WHERE `user_email`= '".$_SESSION["user"]["email"]."'");
if($invoiceHistory_rs->num_rows!==0){
 ?>
    <section aria-labelledby="recent-heading" class="mt-16">
            <div class="max-w-7xl mx-auto sm:px-2 lg:px-8">
              <div class="max-w-2xl mx-auto space-y-8 sm:px-4 lg:max-w-4xl lg:px-0">
 <?php
 for ($t=0; $t < $invoiceHistory_rs->num_rows; $t++) { 
  $invoiceHistory = $invoiceHistory_rs->fetch_assoc();
  ?>
         <div class="bg-white border-t border-b border-gray-200 shadow-sm sm:rounded-lg sm:border">

<div class="flex items-center p-4 border-b border-gray-200 sm:p-6 sm:grid sm:grid-cols-4 sm:gap-x-6">
  <dl class="flex-1 grid grid-cols-2 gap-x-6 text-sm sm:col-span-3 sm:grid-cols-3 lg:col-span-2">
    <div>
      <dt class="font-medium text-gray-900">Order number</dt>
      <dd class="mt-1 text-gray-500"><?= $invoiceHistory["order_id"] ?></dd>
    </div> 
    <div class="hidden sm:block">
      <dt class="font-medium text-gray-900">Date placed</dt>
      <dd class="mt-1 text-gray-500">
        <time datetime="<?= $invoiceHistory["date"] ?>"><?php echo(date('d-M-Y',strtotime($invoiceHistory["date"]))); ?></time>
      </dd>
    </div>
    <div>
      <dt class="font-medium text-gray-900">Total amount</dt>
      <dd class="mt-1 font-medium text-gray-900">Rs.<?= $invoiceHistory["total"] ?>.00</dd>
    </div>
  </dl>

  <div class="relative flex justify-end lg:hidden">
    <div class="flex items-center">
      <button type="button" class="-m-2 p-2 flex items-center text-gray-400 hover:text-gray-500"
        id="menu-0-button" aria-expanded="false" aria-haspopup="true">
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
          stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
        </svg>
      </button>
    </div>

    <div
      class="origin-bottom-right absolute right-0 mt-2 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
      role="menu" aria-orientation="vertical" aria-labelledby="menu-0-button" tabindex="-1">
      <div class="py-1" role="none">
        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
          id="menu-0-item-0"> View </a>
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
          id="menu-0-item-1"> Invoice </a>
      </div>
    </div>
  </div>

  <div class="hidden lg:col-span-2 lg:flex lg:items-center lg:justify-end lg:space-x-4">

    <a href="cart?order_id=<?= $invoiceHistory["order_id"] ?>"
      class="flex items-center justify-center bg-white py-2 px-2.5 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      <span>View Invoice</span>
    </a>
  </div>
</div>

<!-- Products -->
<h4 class="sr-only">Items</h4>
<ul role="list" class="divide-y divide-gray-200">
<?php 

$invoiceProducts_rs = Database::search("SELECT * FROM `invoice_has_products` INNER JOIN `product` ON `invoice_has_products`.`product_id`=`product`.`id` INNER JOIN `product_img` ON `product_img`.`product_id`=`product`.`id` WHERE `invoice_id`='".$invoiceHistory["invoice_id"]."' ");
if($invoiceProducts_rs->num_rows!==0){

  for ($i=0; $i < $invoiceProducts_rs->num_rows; $i++) { 
    $invoiceProducts = $invoiceProducts_rs->fetch_assoc();
?>
  <li class="p-4 sm:p-6">
    <div class="flex items-center sm:items-start">
      <div class="flex-shrink-0 w-20 h-20 bg-gray-200 rounded-lg overflow-hidden sm:w-40 sm:h-40">
        <img src="<?= $invoiceProducts["img_path"] ?>"
          alt="<?= $invoiceProducts["description"] ?>"
          class="w-full h-full object-center object-cover">
      </div>
      <div class="flex-1 ml-6 text-sm">
        <div class="font-medium text-gray-900 sm:flex sm:justify-between">
          <h5><?= $invoiceProducts["title"] ?></h5>
          <p class="mt-2 sm:mt-0">Rs.<?= $invoiceProducts["price"] ?>.00</p>
        </div>
        <p class="hidden text-gray-500 sm:block sm:mt-2"><?= $invoiceProducts["description"] ?></p>
      </div>
    </div>
    <div class="mt-6 sm:flex sm:justify-between">
      <div class="flex items-center">
        <!-- Heroicon name: solid/check-circle -->
        <svg class="w-5 h-5 text-<?php if(intval($invoiceHistory["status"])==1){
?>orange<?php
        }else if(intval($invoiceHistory["status"])==2){
          ?>yellow<?php
                  }else if(intval($invoiceHistory["status"])==3){
                    ?>blue<?php
                            }else if(intval($invoiceHistory["status"])==4){
                              ?>green<?php
                                      }?>-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
          fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd"
            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
            clip-rule="evenodd" />
        </svg>
        <p class="ml-2 text-sm font-medium text-gray-500"><?php if(intval($invoiceHistory["status"])==1){
?>Order Placed<?php
        }else if(intval($invoiceHistory["status"])==2){
          ?>Order Recieved<?php
                  }else if(intval($invoiceHistory["status"])==3){
                    ?>Items Shipped<?php
                            }else if(intval($invoiceHistory["status"])==4){
                              ?>Delivered<?php
                                      }
                            ?></p>
      </div>

      <?php
      if(intval($invoiceHistory["status"])==4){
        ?>      <div
        class="mt-6 border-t border-gray-200 pt-4 flex items-center space-x-4 divide-x divide-gray-200 text-sm font-medium sm:mt-0 sm:ml-4 sm:border-none sm:pt-0">
        <div class="flex-1 flex justify-center">
          <button onclick="writeReview();" class="text-indigo-600 whitespace-nowrap hover:text-indigo-500">Write Review</button>
          <script>
function writeReview(){
window.location.href="/writeReviews?product_id=<?= $invoiceProducts["id"]?>";
}
          </script>
        </div>
        
        <div class="flex-1 pl-4 flex justify-center">
          <a href="/singleProduct?product_id=<?= $invoiceProducts["id"] ?>" class="text-indigo-600 whitespace-nowrap hover:text-indigo-500">Buy again</a>
        </div>
      </div><?php
                }
      ?>

    </div>
<?php
  }
  ?>
   
  </li><?php
}

?>

  <!-- More products... -->
</ul>
</div>

  <?php
 }
 ?><!-- More orders... -->
              </div>
            </div>
          </section>
  <?php
}else{
  ?>
      <div class="col-span-12 lg:col-span-9 border rounded-sm flex justify-center items-center my-2 w-full h-full ">
        <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
          <div class="col-span-12 lg:col-span-6 flex justify-center">
            <img src="./public/images/cart.png" alt="" class="h-[290px] bg-center bg-contain bg-no-repeat my-2">
          </div>
          <div class="col-span-12 lg:col-span-6 text-center my-2 flex justify-center flex-col">
            <label class="text-xl font-semibold mt-2">You have no items in your Purchased Items yet.</label>
            <div class="lg:flex lg:justify-center mt-7">
              <a href="/" class="lg:mr-3">
                <button
                  class="bg-blue-500 text-white px-6 py-2 text-[16px] font-semibold rounded hover:bg-blue-600 transition duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                  </svg>
                  Start Shopping</button>
              </a>
            </div>
          </div>
        </div>
      </div>
  <?php
}

?>
         
        </main>

      </div>
    </div>
  </main>
</div>
<?php require_once "./views/partials/footer.php";
?>