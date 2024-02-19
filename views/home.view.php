


<!-- carsel  -->
<?php require_once "./views/partials/carousel.php"; ?>

<!-- catgory -->
<?php require_once "./views/partials/category.php"; ?>

<!-- flash sale -->

<!-- products -->


<!-- first row -->

<!-- Product grid -->
<section aria-labelledby="products-heading" class="max-w-7xl mx-auto overflow-hidden sm:px-6 lg:px-8">
  <p class="text-xl p-3">Just For You</p>
  <div class="-mx-px border-l border-gray-200 grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
  
  <?php 
  $product_result =Database::search("SELECT DISTINCT `product`.`id`,`product`.`price`,`product`.`title`,`product_img`.`img_path`,`product`.`datetime_added` FROM `product` INNER JOIN `product_img` ON `product`.`id`=`product_img`.`product_id` INNER JOIN `condition` ON `product`.`condition_condition_id`= `condition`.`condition_id`ORDER BY `product`.`datetime_added` DESC LIMIT 18 OFFSET 0 ;");

  for($x =0;$x < $product_result->num_rows;$x++){
$product = $product_result->fetch_assoc();  
?>
  
  <div class="group flex flex-col justify-between  relative p-4 border-r border-b border-gray-200 sm:p-6">
      <div class="rounded-lg overflow-hidden aspect-w-1 aspect-h-1 group-hover:opacity-75">
    
        <img src="<?= $product["img_path"]?>" alt="<?= $product["title"]?>"
          class="w-full min-h-10 min-w-10 max-w-40 max-h-40  h-full object-center object-contain">
      </div>
      <div class="pt-10 pb-4 aspect-w-1 aspect-h-1 max-h-40 min-h-20 text-center">
        <h3 class="text-sm font-medium text-gray-900">
          <a href="#">
            <span aria-hidden="true" class="absolute inset-0"></span>
            <?= $product["title"]?>
          </a>
        </h3>
        <div class="mt-3 flex flex-col items-center">
          <p class="sr-only">5 out of 5 stars</p>
          <div class="flex items-center">
            <!-- Heroicon name: solid/star -->
            <svg class="text-yellow-400 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
              fill="currentColor" aria-hidden="true">
              <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>

            <!-- Heroicon name: solid/star -->
            <svg class="text-yellow-400 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
              fill="currentColor" aria-hidden="true">
              <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>

            <!-- Heroicon name: solid/star -->
            <svg class="text-yellow-400 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
              fill="currentColor" aria-hidden="true">
              <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>

            <!-- Heroicon name: solid/star -->
            <svg class="text-yellow-400 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
              fill="currentColor" aria-hidden="true">
              <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>

            <!-- Heroicon name: solid/star -->
            <svg class="text-yellow-400 flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
              fill="currentColor" aria-hidden="true">
              <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
          </div>
          <p class="mt-1 text-sm text-gray-500">38 reviews</p>
        </div>
        <p class="mt-4 text-base font-medium text-gray-900">Rs.
          <?= $product["price"] ?>.00
        </p>
  
      </div>
    </div>


<?php

  }


  
  ?>


    <!-- More products... -->
  </div>
</section>

<!-- Pagination -->
<nav aria-label="Pagination"
  class="max-w-7xl mx-auto px-4 mt-6 flex justify-between text-sm font-medium text-gray-700 sm:px-6 lg:px-8">
  <div class="min-w-0 flex-1">
    <a href="#"
      class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25">
      Previous </a>
  </div>
  <div class="hidden space-x-2 sm:flex">
    <!-- Current: "border-indigo-600 ring-1 ring-indigo-600", Default: "border-gray-300" -->
    <a href="#"
      class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25">
      1 </a>
    <a href="#"
      class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25">
      2 </a>
    <a href="#"
      class="inline-flex items-center px-4 h-10 border border-indigo-600 ring-1 ring-indigo-600 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25">
      3 </a>
    <span class="inline-flex items-center text-gray-500 px-1.5 h-10"> ... </span>
    <a href="#"
      class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25">
      8 </a>
    <a href="#"
      class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25">
      9 </a>
    <a href="#"
      class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25">
      10 </a>
  </div>
  <div class="min-w-0 flex-1 flex justify-end">
    <a href="#"
      class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25">
      Next </a>
  </div>
</nav>
