<?php require_once "./views/partials/header.php";
require_once "./views/partials/nav.php";


if (isset($_SESSION["user"])) {
  if (isset($_SESSION["product"])) {


    $product = $_SESSION["product"];
    ?>
    <!-- payment detais section -->
    <section class="flex flex-col lg:mx-[20%] " aria-labelledby="payment-details-heading  ">

      <div class="shadow sm:rounded-md sm:overflow-hidden mx-2 my-2 ">
        <div class="bg-white py-6 px-4 sm:p-6">
          <div>
            <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Edit Product</h2>
          </div>
          <div class="mt-6 grid grid-cols-4 gap-6">
            <div class="col-span-4 sm:col-span-2">
              <label for="country" class="block text-sm font-medium text-gray-700">Product Category</label>
              <select disabled
                class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                <?php
                $category_resultSet = Database::search("SELECT * FROM category WHERE cat_id='" . $product["category_cat_id"] . "'");
                $category_data = $category_resultSet->fetch_assoc();


                ?>
                <option>
                  <?php echo $category_data["cat_name"]; ?>
                </option>

              </select>
            </div>
            <div class="col-span-4 sm:col-span-2">
              <label for="country" class="block text-sm font-medium text-gray-700">Select Product Brand</label>
              <select disabled
                class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                <?php
                $brand_rs = Database::search("SELECT * FROM brand WHERE brand_id IN 
                                                    (SELECT brand_brand_id FROM model_has_brand WHERE id='" . $product["model_has_brand_id"] . "')");
                $brand_data = $brand_rs->fetch_assoc();
                ?>
                <option>
                  <?php echo $brand_data["brand_name"]; ?>
                </option>
              </select>
            </div>
            <div class="col-span-4 sm:col-span-2">
              <label for="first-name" class="block text-sm font-medium text-gray-700">Product Title</label>
              <input type="text" value="<?php echo $product["title"]; ?>" id="title"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
            </div>
            <div class="col-span-4 sm:col-span-2">
              <label for="country" class="block text-sm font-medium text-gray-700">Select Product Model</label>
              <select disabled
                class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                <?php
                $model_rs = Database::search("SELECT * FROM model WHERE model_id IN 
                                                    (SELECT model_model_id FROM model_has_brand WHERE id='" . $product["model_has_brand_id"] . "')");
                $model_data = $model_rs->fetch_assoc();
                ?>
                <option>
                  <?php echo $model_data["model_name"];
                  ?>
                </option>
              </select>
            </div>
            <div class="col-span-4 sm:col-span-2">
              <label for="postal-code" class="block text-sm font-medium text-gray-700">Select Product Condition</label>
              <fieldset>
                <?php
                if ($product["condition_condition_id"] == 1) {
                  ?>
                  <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
                    <div class="flex items-center text-base sm:text-sm">
                      <input id="color-0" name="color[]" value="white" type="radio" id="brandNew"
                        class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500" checked
                        disabled>
                      <label for="color-0" class="ml-3 min-w-0 flex-1 text-gray-600">Brand New</label>
                    </div>
                    <div class="flex items-center text-base sm:text-sm">
                      <input id="color-0" name="color[]" value="white" type="radio" id="used"
                        class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500" disabled>
                      <label for="color-0" class="ml-3 min-w-0 flex-1 text-gray-600">USed</label>
                    </div>

                  </div>
                  <?php

                } else {
                  ?>
                  <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
                    <div class="flex items-center text-base sm:text-sm">
                      <input id="color-0" name="color[]" value="white" type="radio" id="brandNew"
                        class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500" disabled>
                      <label for="color-0" class="ml-3 min-w-0 flex-1 text-gray-600">Brand New</label>
                    </div>
                    <div class="flex items-center text-base sm:text-sm">
                      <input id="color-0" name="color[]" value="white" type="radio" id="used"
                        class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500" checked
                        disabled>
                      <label for="color-0" class="ml-3 min-w-0 flex-1 text-gray-600">USed</label>
                    </div>

                  </div>
                  <?php
                }

                ?>

              </fieldset>
            </div>
            <div class="col-span-4 sm:col-span-2">
              <label for="country" class="block text-sm font-medium text-gray-700">Select Product Color</label>
              <select disabled
                class="mt-1 block w-full bg-gray-50 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                <?php
                $color_rs = Database::search("SELECT * FROM color INNER JOIN product_has_color ON 
                                                            color.clr_id=product_has_color.color_clr_id WHERE product_id='" . $product["id"] . "'");
                $color_data = $color_rs->fetch_assoc();
                ?>
                <option>
                  <?php echo $color_data["clr_name"]; ?>
                </option>

              </select>


              <div class="flex">



                <div class="relative w-full pt-3 overflow-hidden">
                  <input type="text" placeholder="Add New Color" id="search-dropdown"
                    class="mt-1 block w-full border bg-gray-50 border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm"
                    disabled />
                  <button type="button" disabled
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
              <label for="first-name" class="block text-sm font-medium text-gray-700">Add Product Quantity</label>
              <input type="number" value="<?php echo $product["qty"]; ?>" id="quantity"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
            </div>

            <div class="col-span-4 sm:col-span-2">
              <label for="first-name" class="block text-sm font-medium text-gray-700">Cost Per Item</label>
              <div class="flex">
                <span
                  class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md">
                  Rs.
                </span>
                <input value="<?php echo $product["price"]; ?>"
                  class="rounded-none outline-none bg-gray-50 border text-gray-900 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 "
                  disabled>
                <span
                  class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-md border-gray-300 rounded-s-0 ">
                  .00
                </span>
              </div>
            </div>
            <div class="col-span-4 sm:col-span-3">
              <label for="first-name" class="block text-sm font-medium text-gray-700">Approved Payment Methods</label>
              <div class="flex">
                <img src="./public/images/visa.png" id="">
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
              <label for="first-name" class="block text-sm font-medium mb-2 text-gray-700">Delivery Cost Within
                Colombo</label>
              <div class="flex">
                <span
                  class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md">
                  Rs.
                </span>
                <input type="text" id="deliveryColombo" value="<?php echo $product["delivery_fee_colombo"]; ?>"
                  class="rounded-none outline-none  border text-gray-900 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 ">
                <span
                  class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-md border-gray-300 rounded-s-0 ">
                  .00
                </span>
              </div>
            </div>

            <div class="col-span-4 sm:col-span-2">
              <label for="first-name" class="block text-sm font-medium mb-2 text-gray-700">Delivery Cost Out of
                Colombo</label>
              <div class="flex">
                <span
                  class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md">
                  Rs.
                </span>
                <input type="text" id="deliveryOther" value="<?php echo $product["delivery_fee_other"]; ?>"
                  class="rounded-none outline-none  border text-gray-900 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 "
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
            <textarea id="description" rows="5" class="p-3 outline-none w-full rounded-md border-2 border-gray-300"><?= trim($product["description"]) ?></textarea>
            <div>
              <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Product Images</h2>
              <label for="first-name" class="block text-sm font-medium text-gray-500 mt-1">Add Atleast 1 Image of the
                Product</label>
            </div>
            <?php

            $image = array();

            $image[0] = "https://static.thenounproject.com/png/3407390-200.png";
            $image[1] = "https://static.thenounproject.com/png/3407390-200.png";
            $image[2] = "https://static.thenounproject.com/png/3407390-200.png";

            $product_image_rs = Database::search("SELECT * FROM product_img WHERE product_id='" . $product["id"] . "'");
            $product_image_num = $product_image_rs->num_rows;

            for ($x = 0; $x < $product_image_num; $x++) {
              $product_image_data = $product_image_rs->fetch_assoc();

              $image[$x] = $product_image_data["img_path"];
            }

            ?>
            <!-- images adding section start -->
            <div class="grid grid-cols-3  gap-4">
              <div class="border-2 rounded-md border-gray-300  w-full h-full justify-center items-center flex flex-col object-cover">
                <img src="<?php echo $image[0]; ?>" id="image0">
              </div>
              <div class="border-2 rounded-md border-gray-300  w-full h-full object-fill justify-center flex flex-col  items-center">
                <img src="<?php echo $image[1]; ?>" id="image1">
              </div>
              <div class="border-2 rounded-md border-gray-300  w-full h-full object-fill justify-center flex flex-col  items-center">
                <img src="<?php echo $image[2]; ?>" id="image2">
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

      </div>

      <div class="px-4 py-3 bg-white text-right sm:px-6">
        <button
          class="bg-gray-800 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
          onclick="updateProduct();">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0 1 20.25 6v12A2.25 2.25 0 0 1 18 20.25H6A2.25 2.25 0 0 1 3.75 18V6A2.25 2.25 0 0 1 6 3.75h1.5m9 0h-9" />
          </svg>
          Save</button>
      </div>
      </div>

    </section>


    <?php

  } else {
    ?>
    <div id="msgToast" class="fixed right-10 top-10 px-5 py-4 border-r-8 border-red-500 bg-white drop-shadow-lg">
      <div class="text-sm">
        <div class="inline-block mr-2 px-3 py-1 rounded-full bg-red-500 text-white font-extrabold" id="msgIcon">i</div>
        <div class="inline-block" id="msg">Please select a product to update.</div>
      </div>
    </div>

    <script>
      var msgToast = document.getElementById('msgToast');
      document.addEventListener('click', function (event) {
        if (event.target === msgToast || !msgToast.contains(event.target)) {
          window.location.href = "/editProduct";
        }
      });
    </script>
    <?php
  }
} else {
  ?>
  <div id="msgToast" class="fixed right-10 top-10 px-5 py-4 border-r-8 border-red-500 bg-white drop-shadow-lg z-50">
    <div class="text-sm">
      <div class="inline-block mr-2 px-3 py-1 rounded-full bg-red-500 text-white font-extrabold" id="msgIcon">i</div>
      <div class="inline-block" id="msg">You have to sign in to the system to access this function.</div>
    </div>
  </div>

  <script>

    var msgToast = document.getElementById('msgToast');

    document.addEventListener('click', function (event) {
      if (event.target === msgToast || !msgToast.contains(event.target)) {
        window.location.href = "/";
      }
    });
  </script>

  <?php
}

?>

<!-- alert model -->
<?php require_once "./views/partials/alert.php"; ?>
<!--alert model -->

<script src="./public/js/uploadProductImages.js"></script>
<script src="./public/js/myProducts.js"></script>

<?php require_once "./views/partials/footer.php";


?>