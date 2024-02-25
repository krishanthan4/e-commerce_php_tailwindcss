<?php 
require_once "./views/partials/header.php";
require_once "./views/partials/nav.php";


?>

<?php
require_once "./views/partials/footer.php";

?>

<!-- home for you -->
<p class="mt-4 text-base font-medium text-gray-900">
          <?= $product["condition_name"] ?>
        </p>
        <p class="mt-4 text-base font-medium text-gray-900">
          <?php if ($product["qty"] !== 0) {
      echo ($product["qty"]); ?>Items Available
          <?php } else {
            ?>
            Out of Stock
            <?php
          } ?>
        </p>
        <!-- home for you end -->










        <?php require_once "./views/partials/carousel.php"; ?>
<?php require_once "./views/partials/category.php"; ?>
<!-- Product grid -->
<section aria-labelledby="products-heading" class="max-w-7xl mx-auto overflow-hidden sm:px-6 lg:px-8">
  <p class="text-xl p-3">Just For You</p>
  <div class="-mx-px border-l border-gray-200 grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
    <?php $from = 0;$to = 18;
$product_result =Database::search("SELECT DISTINCT `product`.`id`,`product`.`price`,`product`.`title`,`product`.`datetime_added` FROM `product` INNER JOIN `condition` ON `product`.`condition_condition_id`= `condition`.`condition_id` ORDER BY `product`.`datetime_added` DESC LIMIT $from,$to;");

for($x =0;$x < $product_result->num_rows;$x++){
  $product = $product_result->fetch_assoc();  
  ?>
    
    <div class="group flex flex-col justify-between  relative p-4 border-r border-b border-gray-200 sm:p-6">
        <div class="rounded-lg overflow-hidden aspect-w-1 aspect-h-1 group-hover:opacity-75">
      
  <?php 
        $productImage_rs =Database::search("SELECT * FROM `product_img` INNER JOIN `product` ON `product_img`.`product_id`=`product`.`id` WHERE `product`.`id`='".$product["id"]."' ORDER BY `img_path` DESC");
        $productImage = $productImage_rs->fetch_assoc();
  
  ?>
        <img src="<?= $productImage["img_path"]?>" alt="<?= $product["title"]?>"
            class="w-full min-h-10 min-w-10 max-w-40 max-h-40  h-full object-center object-contain">
        </div>
        <div class="pt-10 pb-4 aspect-w-1 aspect-h-1 max-h-40 min-h-20 text-center">
          <h3 class="text-sm font-medium text-gray-900">
            <a href="/singleProduct?product_id=<?= $product["id"]?>">
              <span aria-hidden="true" class="absolute inset-0"></span>
              <?php 
              if( strlen($product["title"])>30){
                
                echo substr($product["title"], 0, 30)."..."; 
              }else{
                echo $product["title"];
              }
              ?>
            </a>
          </h3>
  
  
          <div class="mt-3 flex flex-col items-center">
          <?php 
  
  $star_count=  Database::search("SELECT AVG(`stars`) FROM `feedback` WHERE `product_id`='".$product['id']."' ");
    
    $feedback_rs = Database::search("SELECT * fROM `feedback` WHERE `product_id`='".$product['id']."'");
    $feedback = $star_count->fetch_assoc();
    ?>
            <div class="flex items-center">
            <?php for ($y=0; $y < ceil($feedback["AVG(`stars`)"]); $y++) { ?>
    <!-- Heroicon name: solid/star -->
    <svg class="text-yellow-400 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg> <?php  }  
              
              if(ceil($feedback["AVG(`stars`)"])==0){
  for ($i=0; $i < 5; $i++) { 
    ?>
      <!-- Heroicon name: solid/star -->
      <svg class="text-gray-300 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>
    <?php
  }
              }else if(ceil($feedback["AVG(`stars`)"])==1){
                for ($i=0; $i < 4; $i++) { 
                  ?>
                    <!-- Heroicon name: solid/star -->
                    <svg class="text-gray-300 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                              fill="currentColor" aria-hidden="true">
                              <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                  <?php
                }}else if(ceil($feedback["AVG(`stars`)"])==2){
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
                  }else if(ceil($feedback["AVG(`stars`)"])==3){
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
                    }else if(ceil($feedback["AVG(`stars`)"])==4){
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
                      }
              ?>
             
  
            </div>
            <?php
            
            $feedback_count = Database::search("SELECT COUNT(`stars`) fROM `feedback` WHERE `product_id`='".$product['id']."'");
            $feedback_number = $feedback_count->fetch_assoc();
            ?>
            <p class="mt-1 text-sm text-gray-500"><?php
             if($feedback_number["COUNT(`stars`)"]>=1000){
             echo $feedback_number["COUNT(`stars`)"]/1000;?>k reviews</p>
             <?php
            }else{
              echo $feedback_number["COUNT(`stars`)"];
             
             } ?> reviews</p>
          </div>
          <p class="mt-4 text-base font-medium text-gray-900">Rs.
            <?= $product["price"] ?>.00
          </p>
    
        </div>
      </div>
  <?php
    }
  ?>
  </div>
</section>

<script src="./public/js/singleProductView.js"></script>
<script src="./public/js/homePagination.php"></script>
<?php require_once "./views/partials/pagination.php" ?>

