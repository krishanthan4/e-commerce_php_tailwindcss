    <!-- Related products -->
<?php function relatedProduct($title,$category_id){
  ?>
  <section aria-labelledby="related-heading" class="mt-16 sm:mt-24">
      <h2 id="related-heading" class="text-lg font-medium text-gray-900"><?= $title ?></h2>

      <?php 
      
      $relatedProduct_rs = Database::search("SELECT * FROM `product` WHERE `product`.`category_cat_id`='".$category_id."' LIMIT 5");
    if($relatedProduct_rs->num_rows!==0){
?>
   <div class=" grid grid-cols-1 gap-6 my-10 sm:grid-cols-2 lg:grid-cols-5 ">
  <?php
      for ($e=0; $e < $relatedProduct_rs->num_rows; $e++) { 
        $relatedProduct = $relatedProduct_rs->fetch_assoc();
?>
    <div class="group flex flex-col justify-between  relative p-4 border-r border-b border-gray-200 sm:p-6">
        <div class="rounded-lg overflow-hidden aspect-w-1 aspect-h-1 group-hover:opacity-75">
<?php 
$relatedProductImage_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='".$relatedProduct["id"]."' ORDER BY `img_path` DESC");
$relatedProductImage = $relatedProductImage_rs->fetch_assoc();
?>

            <img draggable="false" src="<?= $relatedProductImage["img_path"]?>" alt="<?= $relatedProduct["title"]?>" class="w-full min-h-30 min-w-30 max-w-50 max-h-50  h-full object-center object-contain">
          </div>
          <div class="pt-10 pb-4 aspect-w-1 aspect-h-1 max-h-40 min-h-20 text-center">
          <h3 class="text-sm font-medium text-gray-900">
            <a href="/singleProduct?product_id=<?= $relatedProduct["id"]?>">
              <span aria-hidden="true" class="absolute inset-0"></span>
              <?php 
              if( strlen($relatedProduct["title"])>30){
                
                echo substr($relatedProduct["title"], 0, 30)."..."; 
              }else{
                echo $relatedProduct["title"];
              }
              ?>
            </a>
          </h3>
  
  
          <div class="mt-3 flex flex-col items-center">
          <?php 
  
  $star_count=  Database::search("SELECT AVG(`stars`) FROM `feedback` WHERE `product_id`='".$relatedProduct['id']."' ");
    
    $feedback_rs = Database::search("SELECT * fROM `feedback` WHERE `product_id`='".$relatedProduct['id']."'");
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
   
          </div>
          <p class="mt-4 text-base font-medium text-gray-900">Rs.
            <?= $relatedProduct["price"] ?>.00
          </p>
    
        </div>
      </div>  

        <!-- More products... -->
<?php
      }
      ?>
      </div>
      <?php
    }
    ?>
   
    </section>
<?php } ?>