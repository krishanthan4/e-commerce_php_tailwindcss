    <!-- Reviews -->
   <?php 
$one_reviews_rs=  Database::search("SELECT * FROM `feedback` INNER JOIN `user` ON `user`.`email`=`feedback`.`user_email` WHERE `product_id` = '".$product_id."' ORDER BY `feedback`.`date` DESC LIMIT 5");
      if($one_reviews_rs->num_rows!==0){

   ?>
   
    <section id="recentReviews" aria-labelledby="reviews-heading" class="mt-16 sm:mt-24">
      <h2 id="reviews-heading" class="text-lg font-medium text-gray-900">Recent reviews</h2>
        
      <div class="mt-6 border-t border-b border-gray-200 pb-10 divide-y divide-gray-200 space-y-10">
     
      <?php 

  for ($t=0; $t < $one_reviews_rs->num_rows; $t++) { 
$one_review = $one_reviews_rs->fetch_assoc();
    ?>
      <div class="pt-10 lg:grid lg:grid-cols-12 lg:gap-x-8">
       

        <div class="lg:col-start-5 lg:col-span-8 xl:col-start-4 xl:col-span-9 xl:grid xl:grid-cols-3 xl:ga  p-x-8 xl:items-start">
           
        
        
        <div class="flex items-center xl:col-span-1">
              <div class="flex items-center">
          
<?php for ($y=0; $y < $one_review["stars"]; $y++) { ?>
  <!-- Heroicon name: solid/star -->
  <svg class="text-yellow-400 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
              fill="currentColor" aria-hidden="true">
              <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg> <?php  }  
            
            if($one_review["stars"]==0){
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
            }else if($one_review["stars"]==1){
              for ($i=0; $i < 4; $i++) { 
                ?>
                  <!-- Heroicon name: solid/star -->
                  <svg class="text-gray-300 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path
                              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                          </svg>
                <?php
              }}else if($one_review["stars"]==2){
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
                }else if($one_review["stars"]==3){
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
                  }else if($one_review["stars"]==4){
                    for ($i=0; $i < 1; $i++) { 
                  
                  ?>
                                 <!-- Heroicon name: solid/star -->
                                 <svg class="text-gray-300 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path
                                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                              </svg>  <?php
                  }}   ?>



              </div>
              <p class="ml-3 text-sm text-gray-700"><?= $one_review["stars"]?><span class="sr-only"> out of 5 stars</span></p>
            </div>

            <div class="mt-4 lg:mt-6 xl:mt-0 xl:col-span-2">
              <h3 class="text-sm font-medium text-gray-900"><?= $one_review["feed"]?></h3>

             
            </div>
          </div>



          <div class="mt-6 flex items-center text-sm lg:mt-0 lg:col-start-1 lg:col-span-4 lg:row-start-1 lg:flex-col lg:items-start xl:col-span-3">
            <p class="font-medium text-gray-900"><?php 
            if($one_review["fname"]){
              echo($one_review["fname"] ." ".$one_review["lname"]);

            }else{
              ?>
Unknown User
<?php
            }
          ?></p>
            <p class="ml-4 border-l border-gray-200 pl-4 text-gray-500 lg:ml-0 lg:mt-2 lg:border-0 lg:pl-0"><?php 
            
            $formatTime = strtotime($one_review["date"]);
                      echo(date('d M Y', $formatTime)); ?></p>
          </div>

          
        </div>


        <?php 
  }}
?>
        <!-- More reviews... -->
      </div>
    </section>
