<?php 
require_once "./connection.php";
?>
<section aria-labelledby="products-heading" class="max-w-2xl mx-auto pt-12 pb-16 px-4 sm:pt-16 sm:pb-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 id="products-heading" class="text-xl p-3">Categories</h2>

        <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-3 gap-x-6 lg:grid-cols-5 xl:grid-cols-6 xl:gap-x-8">
<?php
$result = Database::search("SELECT * FROM `category` LIMIT 6");

if($result->num_rows!==0){
for ($x=0; $x < $result->num_rows; $x++) { 
$category = $result->fetch_assoc();
?>
<a href="#" class="group">
            <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
              <img src="<?= $category["cat_img"]?>" alt="<?= $category["cat_name"] ?>" class="w-full h-full object-center object-cover group-hover:opacity-75">
            </div>
            <h3 class="mt-4 text-sm text-gray-700 text-center"><?= $category["cat_name"] ?></h3>
          
          </a>
<?php

}
}
?>

        </div>
      </section>
