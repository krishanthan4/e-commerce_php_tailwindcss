<?php require_once "./views/partials/header.php";
require_once "./views/partials/nav.php";

if (isset($_SESSION["user"])) {
  ?>

  <!-- payment detais section -->
  <section class="flex flex-col lg:mx-[20%] " aria-labelledby="payment-details-heading  ">

    <div class="shadow sm:rounded-md sm:overflow-hidden ">
      <div class="bg-white py-6 px-4 sm:p-6">
        <div>
          <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Add New Product</h2>
        </div>
        <div class="mt-6 grid grid-cols-4 gap-6">
          <div class="col-span-4 sm:col-span-2">
            <label for="country" class="block text-sm font-medium text-gray-700">Product Category</label>
            <select id="category"
              class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
              <option value="0">Select Category</option>
              <?php
              $category_rs = Database::search("SELECT * FROM category");
              $category_num = $category_rs->num_rows;

              for ($x = 0; $x < $category_num; $x++) {
                $category_data = $category_rs->fetch_assoc();
                ?>
                <option value="<?php echo $category_data["cat_id"]; ?>">
                  <?php echo $category_data["cat_name"]; ?>
                </option>
                <?php
              }
              ?>
            </select>
          </div>
          <div class="col-span-4 sm:col-span-2">
            <label for="country" class="block text-sm font-medium text-gray-700">Select Product Brand</label>
            <select id="brand"
              class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
              <option value="0">Select Brand</option>
              <?php
              $brand_rs = Database::search("SELECT * FROM brand");
              $brand_num = $brand_rs->num_rows;

              for ($x = 0; $x < $brand_num; $x++) {
                $brand_data = $brand_rs->fetch_assoc();
                ?>
                <option value="<?php echo $brand_data["brand_id"]; ?>">
                  <?php echo $brand_data["brand_name"]; ?>
                </option>
                <?php
              }
              ?>
            </select>
          </div>
          <div class="col-span-4 sm:col-span-2">
            <label class="block text-sm font-medium text-gray-700">Product Title</label>
            <input type="text" id="title"
              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
          </div>
          <div class="col-span-4 sm:col-span-2">
            <label for="country" class="block text-sm font-medium text-gray-700">Select Product Model</label>
            <select id="model"
              class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
              <option value="0">Select Model</option>
              <?php
              $model_rs = Database::search("SELECT * FROM model");
              $model_num = $model_rs->num_rows;

              for ($x = 0; $x < $model_num; $x++) {
                $model_data = $model_rs->fetch_assoc();
                ?>
                <option value="<?php echo $model_data["model_id"]; ?>">
                  <?php echo $model_data["model_name"]; ?>
                </option>
                <?php
              }
              ?>
            </select>
          </div>
          <div class="col-span-4 sm:col-span-2">
            <label for="postal-code" class="block text-sm font-medium text-gray-700">Select Product Condition</label>
            <fieldset>
              <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
                <div class="flex items-center text-base sm:text-sm">
                  <input type="radio" name="c" id="brandNew" 
                    class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="color-0" class="ml-3 min-w-0 flex-1 text-gray-600">Brand New</label>
                </div>
                <div class="flex items-center text-base sm:text-sm">
                  <input type="radio" name="c" id="used"
                    class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                  <label for="color-0" class="ml-3 min-w-0 flex-1 text-gray-600">Used</label>
                </div>

              </div>
            </fieldset>
          </div>
          <div class="col-span-4 sm:col-span-2">
            <label for="country" class="block text-sm font-medium text-gray-700">Select Product Color</label>
            <select id="color"
              class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
              <option value="0">Select Color</option>
              <?php
              $clr_rs = Database::search("SELECT * FROM color");
              $clr_num = $clr_rs->num_rows;

              for ($x = 0; $x < $clr_num; $x++) {
                $clr_data = $clr_rs->fetch_assoc();
                ?>
                <option value="<?php echo $clr_data["clr_id"]; ?>">
                  <?php echo $clr_data["clr_name"]; ?>
                </option>
                <?php
              }
              ?>
            </select>
            <div class="flex">
              <div class="relative w-full pt-3 overflow-hidden">
                <input type="text" placeholder="Add New Colour"
                  class="mt-1 block w-full border bg-gray-50 border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm" />
                <button type="button" onclick="addColor();"
                  class="absolute top-4 end-0 p-2.5 h-[70%] text-sm bg-gray-800 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center items-center font-medium text-white hover:bg-[#374151] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 ">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="mr-1 w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>
                  Add</button>
              </div>
            </div>



          </div>
          <div class="col-span-4 sm:col-span-2">
            <label class="block text-sm font-medium text-gray-700">Add Product Quantity</label>
            <input type="number" id="quantity"
              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
          </div>
          <div class="col-span-4 sm:col-span-2">
            <label class="block text-sm font-medium text-gray-700">Cost Per Item</label>
            <div class="flex">
              <span
                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md">
                Rs.
              </span>
              <input type="text" id="cost"
                class="rounded-none outline-none bg-gray-50 border text-gray-900 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 "
                placeholder="10000">
              <span
                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-md border-gray-300 rounded-s-0 ">
                .00
              </span>
            </div>
          </div>
          <div class="col-span-4 sm:col-span-3">
            <label class="block text-sm font-medium text-gray-700">Approved Payment Methods</label>
            <div class="flex">
              <img src="./public/images/visa.png" alt="">
            </div>
          </div>

        </div>
      </div>
      <div class="bg-white py-6 px-4 sm:p-6">
        <div>
          <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Delivery Cost</h2>
        </div>
        <div class="mt-6 grid grid-cols-4 gap-6 ">
          <div class="col-span-4 sm:col-span-2">
            <label class="block text-sm font-medium mb-2 text-gray-700">Delivery Cost Within
              Colombo</label>
            <div class="flex">
              <span
                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md">
                Rs.
              </span>
              <input type="text" id="deliveryColombo"
                class="rounded-none outline-none bg-gray-50 border text-gray-900 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 "
                placeholder="10000">
              <span
                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-md border-gray-300 rounded-s-0 ">
                .00
              </span>
            </div>
          </div>

          <div class="col-span-4 sm:col-span-2">
            <label class="block text-sm font-medium mb-2 text-gray-700">Delivery Cost Out of
              Colombo</label>
            <div class="flex">
              <span
                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md">
                Rs.
              </span>
              <input type="text" id="deliveryOther"
                class="rounded-none outline-none bg-gray-50 border text-gray-900 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 "
                placeholder="10000">
              <span
                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-md border-gray-300 rounded-s-0 ">
                .00
              </span>
            </div>
          </div>
        </div>

      </div>
      <div class="bg-white py-6 px-4 sm:p-6">
        <div>
          <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Product Description</h2>
        </div>
        <div class="mt-6 grid grid-cols-1 gap-6 ">
          <textarea id="description" rows="5" class="p-3 outline-none w-full rounded-md border-2 border-gray-300"></textarea>
          <div>
            <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Product Images</h2>
            <label class="block text-sm font-medium text-gray-500 mt-1">Add Atleast 1 Image of the
              Product</label>
          </div>
          <!-- images adding section start -->
          <div class="grid grid-cols-3  gap-4">
            <div
              class="border-2 rounded-md border-gray-300  w-full h-full justify-center items-center flex flex-col object-cover">
              <img src="https://static.thenounproject.com/png/3407390-200.png" id="image0">
            </div>
            <div
              class="border-2 rounded-md border-gray-300  w-full h-full object-fill justify-center flex flex-col  items-center">
              <img src="https://static.thenounproject.com/png/3407390-200.png" id="image1">
            </div>
            <div
              class="border-2 rounded-md border-gray-300  w-full h-full object-fill justify-center flex flex-col  items-center">
              <img src="https://static.thenounproject.com/png/3407390-200.png" id="image2">
            </div>
          </div>
          <div>
            <input type="file" class="hidden" id="imageUploader" multiple />
            <label for="imageUploader" onclick="uploadProductImages();"
              class="bg-gray-800 border cursor-pointer border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-[#374151] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M7.5 7.5h-.75A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-7.5a2.25 2.25 0 0 0-2.25-2.25h-.75m0-3-3-3m0 0-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 0 1 2.25 2.25v7.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25v-.75" />
              </svg>
              Upload Images</label>
          </div>

        </div>

      </div>

      <div class="px-4 py-3 bg-white text-right sm:px-6">
        <button onclick="addProduct();"
          class="bg-gray-800 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">Save</button>
      </div>
    </div>

  </section>


  <?php

} else {
  header("Location:/");
}

?>

<!-- alert model -->
<?php require_once "./views/partials/alert.php"; ?>
<!--alert model -->

<script src="./public/js/uploadProductImages.js"></script>
<script src="./public/js/myProducts.js"></script>
<?php require_once "./views/partials/footer.php";


?>