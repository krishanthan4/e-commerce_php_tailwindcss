 <?php require_once "./views/partials/header.php";
require_once "./views/partials/nav.php";
require_once "./function.php";
require_once "./connection.php";

$product_id =$_GET["product_id"];
if(isset($product_id)){

  $single_product_rs = Database::search("SELECT * FROM `product`  WHERE `id`='".$product_id."' AND  `status_status_id`= '1'");
  $singleProduct = $single_product_rs->fetch_assoc();
if($single_product_rs->num_rows!==0){
  ?>
  <div class="bg-white">
    <main class="mt-8 max-w-2xl mx-auto pb-16 px-4 sm:pb-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <div class="lg:grid lg:grid-cols-12 lg:auto-rows-min lg:gap-x-8">
        <div class="lg:col-start-8 lg:col-span-5">
          <div class="flex justify-between">
            <h1 class="text-xl font-medium text-gray-900"><?= $singleProduct["title"] ?></h1>
          </div>
   <!-- reviews divider div -->
  <div class="flex items-center me-5 justify-between">
<div>
         <!-- Reviews -->
         <div class="mt-3 bg-yellow-400 ">
        <?php 

$star_count_rs=  Database::search("SELECT AVG(`stars`) FROM `feedback` WHERE `product_id`='".$product_id."' ");
  
  $feedback_rs = Database::search("SELECT * fROM `feedback` WHERE `product_id`='".$product_id."'");
  $feedback = $feedback_rs->fetch_assoc();
  $star_count = $star_count_rs->fetch_assoc();
  ?>
        </div>
          <div class="mt-4">
            <h2 class="sr-only">Reviews</h2>
            <div class="flex items-center">
              <p class="text-sm text-gray-700">
                
              <?php
                if(ceil($star_count["AVG(`stars`)"]) == 0){
                  
                }else{
                  echo number_format($star_count["AVG(`stars`)"],1);

                }?>
              </p>
              <div class="ml-1 flex items-center">
    
              <?php for ($y=0; $y < ceil($star_count["AVG(`stars`)"]); $y++) { ?>
  <!-- Heroicon name: solid/star -->
  <svg class="text-yellow-400 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
              fill="currentColor" aria-hidden="true">
              <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg> <?php  }  
            
            if(ceil($star_count["AVG(`stars`)"])==0){
              for ($i=0; $i < 5; $i++) { 
                ?>
                  <!-- Heroicon name: solid/star -->
                  <svg class="text-gray-300 hidden flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path
                              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                          </svg>
                <?php
              }
            }else if(ceil($star_count["AVG(`stars`)"])==1){
              for ($i=0; $i < 4; $i++) { 
                ?>
                  <!-- Heroicon name: solid/star -->
                  <svg class="text-gray-300 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path
                              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                          </svg>
                <?php
              }}else if(ceil($star_count["AVG(`stars`)"])==2){
                for ($i=0; $i < 3; $i++) { 
                  ?>
                    <!-- Heroicon name: solid/star -->
                    <svg class="text-gray-300 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                              fill="currentColor" aria-hidden="true">
                              <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                  <?php
                }
                }else if(ceil($star_count["AVG(`stars`)"])==3){
                  for ($i=0; $i < 2; $i++) { 
                    ?>
                      <!-- Heroicon name: solid/star -->
                      <svg class="text-gray-300 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path
                                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                              </svg>
                    <?php
                  }
                  }else if(ceil($star_count["AVG(`stars`)"])==4){
                    for ($i=0; $i < 1; $i++) { 
                      ?>
                        <!-- Heroicon name: solid/star -->
                        <svg class="text-gray-300 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                  fill="currentColor" aria-hidden="true">
                                  <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                      <?php
                    }
                    }?>
           

              </div>
              <div aria-hidden="true" class="ml-4 text-sm text-gray-300">·</div>
              <div class="ml-4 flex">
                <?php 
                       $feedback_count = Database::search("SELECT COUNT(`stars`) fROM `feedback` WHERE `product_id`='".$singleProduct['id']."'");
                       $feedback_number = $feedback_count->fetch_assoc();
                       if($feedback_count->num_rows!==0 && $feedback_number["COUNT(`stars`)"]!==0){ ?>
                          
                <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">See all <?= $feedback_number["COUNT(`stars`)"] ?>  reviews</a>
         <?php }else{
?>
        <p class="text-sm font-medium text-indigo-600 hover:text-indigo-500"></p>
<?php
         } ?>
              </div>
            </div>


          </div>
</div>
<button onclick="wishlist('<?= $singleProduct['id'] ?>');" class="mt-4">
<svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
</svg>

        </button>
  </div>
     
        </div>
  
        <!-- Image gallery -->
        <div class="mt-8 lg:mt-0 lg:col-start-1 lg:col-span-7 lg:row-start-1 lg:row-span-3">
          <h2 class="sr-only">Images</h2>
  
          <div class="flex flex-col items-center justify-center">
            <?php
            $productImage_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='".$product_id."' ORDER BY `product_img`.`img_path` DESC");
            
            if($productImage_rs->num_rows!==0){
  $productImage1 = $productImage_rs->fetch_assoc();

              ?>
               <img src="<?= $productImage1["img_path"]?>" class="w-[60%] mb-4" alt="<?= $productImage1["product_id"]?> ">
              
              <?php
              if($productImage_rs->num_rows>1){
              ?>
              <div class="grid grid-cols-2 justify-center items-center gap-3">
                
         
              <?php
                for ($u=1; $u < $productImage_rs->num_rows ; $u++) { 
                  $productImage = $productImage_rs->fetch_assoc();
                
                 ?>
                             <img src="<?= $productImage["img_path"]?>" class="w-1/2 object-contain" alt="<?= $productImage["product_id"]?> ">
                
                 <?php
                }
                ?>
                     </div><?php
              }

            }
            ?>
  
          </div>
        </div>
  
        <div class="lg:col-span-5">
          <form>
            <!-- Color picker -->
            <div class="mb-4">
            
            <?php 
              $color_rs =Database::search("SELECT * FROM product_has_color INNER JOIN `color` ON `color`.`clr_id`=`product_has_color`.`color_clr_id` WHERE `product_id`='". $singleProduct["id"]."'");

              if($color_rs->num_rows!==0){?> 
            <h2 class="text-sm font-medium text-gray-900">Color</h2>
  <?php }?>
              <fieldset class="mt-2">
                <legend class="sr-only">Choose a color</legend>

                <div class="flex items-center space-x-3">
  
              <?php 
         
              if($color_rs->num_rows!==0){
              for ($t=0; $t < $color_rs->num_rows; $t++) { 
              $color = $color_rs->fetch_assoc();

              ?>
                   <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-<?= strtolower($color["clr_name"])?>-400">
                    <input type="radio" name="color-choice" value="<?=  strtolower($color["clr_name"])?>" class="sr-only" aria-labelledby="color-choice-1-label">
                    <span aria-hidden="true" class="h-8 w-8 bg-<?=  strtolower($color["clr_name"])?>-400 border border-black border-opacity-10 rounded-full"></span>
                  </label>
              <?php
              
              }
              }
              ?> 
                </div>
              </fieldset>
            </div>
            <p class="text-xl font-medium text-gray-900">Rs.<?= ($singleProduct["price"])?>.00</p>

<!-- qty counter -->
<div class="  flex justify-between max-w-60 my-4 items-center">
    <label for="counter-input" class="block mb-1 text-gray-500 ">Choose quantity:</label>
    <div class="relative flex items-center">
        <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="flex-shrink-0 bg-gray-100  hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-6 w-6 focus:ring-gray-100  focus:ring-2 focus:outline-none">
            <svg class="w-2.5 h-2.5 text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
            </svg>
        </button>
        <input type="text" id="counter-input" data-input-counter data-input-counter data-input-counter-min="1" data-input-counter-max="100" class="flex-shrink-0 text-gray-900 border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center" placeholder="" value="1" required />
        <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="flex-shrink-0 bg-gray-100  hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-6 w-6 focus:ring-gray-100  focus:ring-2 focus:outline-none">
            <svg class="w-2.5 h-2.5 text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
        </button>
    </div>
            </div>

<!-- qty counter -->
 
            <!-- Product details -->
       <div class="">
            <h2 class="text-sm font-medium text-gray-900">Description</h2>
  
            <div class="mt-4 prose prose-sm text-gray-500">
              <p><?= $singleProduct["description"]?></p>
            </div>
          </div>
    
   <div class="flex flex-row items-center gap-3">
   <button type="button" onclick="buyNow('<?= $singleProduct['id'] ?>');" class="mt-8 w-full bg-orange-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">Buy Now</button>
   <button type="button" onclick="addToCart('<?= $singleProduct['id'] ?>');" class="mt-8 w-full bg-blue-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Add to cart</button>
   </div>
   
  
          <!-- Policies -->
          <section aria-labelledby="policies-heading" class="mt-10">
            <h2 id="policies-heading" class="sr-only">Our Policies</h2>
  
            <dl class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2">
              <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 text-center">
                <dt>
                  <!-- Heroicon name: outline/globe -->
                  <svg class="mx-auto h-6 w-6 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <span class="mt-4 text-sm font-medium text-gray-900"> International delivery </span>
                </dt>
                <dd class="mt-1 text-sm text-gray-500">Get your order in 2 weeks</dd>
              </div>
  
              <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 text-center">
                <dt>
                  <!-- Heroicon name: outline/currency-dollar -->
                  <svg class="mx-auto h-6 w-6 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <span class="mt-4 text-sm font-medium text-gray-900"> Loyalty rewards </span>
                </dt>
                <dd class="mt-1 text-sm text-gray-500">Don&#039;t look at other tees</dd>
              </div>
            </dl>
          </section>
        </div>
      </div>
    <?php
  
}else{
  ?>
  <script>window.location.href="/"</script><?php
}
 
}else{
?>
<script>
  // window.location.href="/";
</script>

<?php 
}
?>
    <!-- Reviews -->
    <section aria-labelledby="reviews-heading" class="mt-16 sm:mt-24">
      <h2 id="reviews-heading" class="text-lg font-medium text-gray-900">Recent reviews</h2>

      <div class="mt-6 border-t border-b border-gray-200 pb-10 divide-y divide-gray-200 space-y-10">
        <div class="pt-10 lg:grid lg:grid-cols-12 lg:gap-x-8">
          <div class="lg:col-start-5 lg:col-span-8 xl:col-start-4 xl:col-span-9 xl:grid xl:grid-cols-3 xl:gap-x-8 xl:items-start">
            <div class="flex items-center xl:col-span-1">
              <div class="flex items-center">
                <!--
                  Heroicon name: solid/star

                  Active: "text-yellow-400", Inactive: "text-gray-200"
                -->
                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>

                <!-- Heroicon name: solid/star -->
                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>

                <!-- Heroicon name: solid/star -->
                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>

                <!-- Heroicon name: solid/star -->
                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>

                <!-- Heroicon name: solid/star -->
                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
              </div>
              <p class="ml-3 text-sm text-gray-700">5<span class="sr-only"> out of 5 stars</span></p>
            </div>

            <div class="mt-4 lg:mt-6 xl:mt-0 xl:col-span-2">
              <h3 class="text-sm font-medium text-gray-900">Can&#039;t say enough good things</h3>

              <div class="mt-3 space-y-6 text-sm text-gray-500">
                <p>I was really pleased with the overall shopping experience. My order even included a little personal, handwritten note, which delighted me!</p>
                <p>The product quality is amazing, it looks and feel even better than I had anticipated. Brilliant stuff! I would gladly recommend this store to my friends. And, now that I think of it... I actually have, many times!</p>
              </div>
            </div>
          </div>

          <div class="mt-6 flex items-center text-sm lg:mt-0 lg:col-start-1 lg:col-span-4 lg:row-start-1 lg:flex-col lg:items-start xl:col-span-3">
            <p class="font-medium text-gray-900">Risako M</p>
            <time datetime="2021-01-06" class="ml-4 border-l border-gray-200 pl-4 text-gray-500 lg:ml-0 lg:mt-2 lg:border-0 lg:pl-0">May 16, 2021</time>
          </div>
        </div>

        <!-- More reviews... -->
      </div>
    </section>

    <!-- Related products -->
    <section aria-labelledby="related-heading" class="mt-16 sm:mt-24">
      <h2 id="related-heading" class="text-lg font-medium text-gray-900">Customers also purchased</h2>

      <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <div class="group relative">
          <div class="w-full min-h-80 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-02.jpg" alt="Front of men&#039;s Basic Tee in white." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Basic Tee
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">Aspen White</p>
            </div>
            <p class="text-sm font-medium text-gray-900">$35</p>
          </div>
        </div>

        <!-- More products... -->
      </div>
    </section>
  </main>


</div>
<script src="./public/js/singleProductView.js"></script>
<?php require_once "./views/partials/footer.php"?>