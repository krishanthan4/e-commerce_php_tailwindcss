
<?php require_once "./views/partials/header.php";
 require_once "./views/partials/nav.php";

?>
<!-- payment detais section -->
<section class="flex flex-col lg:mx-[20%] " aria-labelledby="payment-details-heading  ">
          <form action="#" method="POST">
            <div class="shadow sm:rounded-md sm:overflow-hidden ">
              <div class="bg-white py-6 px-4 sm:p-6">
                <div>
                  <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Add New Product</h2>              
                </div>
                <div class="mt-6 grid grid-cols-4 gap-6">
                  <div class="col-span-4 sm:col-span-2">
                    <label for="country" class="block text-sm font-medium text-gray-700">Product Category</label>
                    <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                      <option>United States</option>
                      <option>Canada</option>
                      <option>Mexico</option>
                    </select>
                  </div>
                  <div class="col-span-4 sm:col-span-2">
                    <label for="country" class="block text-sm font-medium text-gray-700">Select Product Brand</label>
                    <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                      <option>United States</option>
                      <option>Canada</option>
                      <option>Mexico</option>
                    </select>
                  </div>
                  <div class="col-span-4 sm:col-span-2">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">Product Title</label>
                    <input type="text" name="first-name" id="first-name" autocomplete="cc-given-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                  </div> 
                  <div class="col-span-4 sm:col-span-2">
                    <label for="country" class="block text-sm font-medium text-gray-700">Select Product Model</label>
                    <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                      <option>United States</option>
                      <option>Canada</option>
                      <option>Mexico</option>
                    </select>
                  </div>
                  <div class="col-span-4 sm:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium text-gray-700">Select Product Condition</label>
                    <fieldset>
            <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
              <div class="flex items-center text-base sm:text-sm">
                <input id="color-0" name="color[]" value="white" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="color-0" class="ml-3 min-w-0 flex-1 text-gray-600">Latest to Oldest</label>
              </div>
              <div class="flex items-center text-base sm:text-sm">
                <input id="color-0" name="color[]" value="white" type="radio" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                <label for="color-0" class="ml-3 min-w-0 flex-1 text-gray-600">Oldest To Latest</label>
              </div>
       
            </div>
          </fieldset>
                  </div>
                  <div class="col-span-4 sm:col-span-2">
                    <label for="country" class="block text-sm font-medium text-gray-700">Select Product Color</label>
                    <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                      <option>United States</option>
                      <option>Canada</option>
                      <option>Mexico</option>
                    </select>
                            

    <div class="flex">
 
     
     
        <div class="relative w-full pt-3 overflow-hidden">
            <input type="text" placeholder="Add New Color"  id="search-dropdown" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm" placeholder="Search" required />
            <button type="submit" class="absolute top-4 end-0 p-2.5 h-[70%] text-sm font-medium text-blue-700 rounded-e-lg border border-blue-700 ">+Add</button>
        </div>
    </div>



                  </div>
                  <div class="col-span-4 sm:col-span-2">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">Add Product Quantity</label>
                    <input type="number" name="first-name" id="first-name" autocomplete="cc-given-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                  </div>               
                  <div class="col-span-4 sm:col-span-2">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">Cost Per Item</label>
                    <div class="flex">
  <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md">
   Rs.
  </span>
  <input type="text" id="website-admin" class="rounded-none outline-none bg-gray-50 border text-gray-900 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 " placeholder="10000">
  <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-md border-gray-300 rounded-s-0 ">
.00
  </span>
</div>
                  </div>  
                  <div class="col-span-4 sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">Approved Payment Methods</label>
                    <div class="flex">
<img src="./public/images/visa.png" alt="">
</div>
                  </div>  
            
                </div>
              </div>
              <div class="bg-white py-6 px-4 sm:p-6">
              <div >
                  <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Delivery Cost</h2>              
                </div>
                <div class="mt-6 grid grid-cols-4 gap-6 ">
                <div class="col-span-4 sm:col-span-2">
                    <label for="first-name" class="block text-sm font-medium mb-2 text-gray-700">Delivery Cost Within Colombo</label>
                    <div class="flex">
  <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md">
   Rs.
  </span>
  <input type="text" id="website-admin" class="rounded-none outline-none bg-gray-50 border text-gray-900 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 " placeholder="10000">
  <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-md border-gray-300 rounded-s-0 ">
.00
  </span>
</div>
                  </div>  
     
                  <div class="col-span-4 sm:col-span-2">
                    <label for="first-name" class="block text-sm font-medium mb-2 text-gray-700">Delivery Cost Out of Colombo</label>
                    <div class="flex">
  <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md">
   Rs.
  </span>
  <input type="text" id="website-admin" class="rounded-none outline-none bg-gray-50 border text-gray-900 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 " placeholder="10000">
  <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-md border-gray-300 rounded-s-0 ">
.00
  </span>
</div>
                  </div>  
                </div>
            
              </div>
              <div class="bg-white py-6 px-4 sm:p-6">
              <div >
                  <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Product Description</h2>              
                </div>
                <div class="mt-6 grid grid-cols-1 gap-6 ">
             <textarea name="" id=""  rows="5" class="outline-none w-full rounded-md border-2 border-gray-300" ></textarea>
             <div >
                  <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Product Images</h2>   
                  <label for="first-name" class="block text-sm font-medium text-gray-500 mt-1">Add Atleast 1 Image of the Product</label>       
                </div>
             <!-- images adding section start -->
             <div class="grid grid-cols-3 justify-center items-center gap-4">
<!-- image div start -->
             <div class=" ">
  <img src="https://static.thenounproject.com/png/3407390-200.png" alt="" class="py-2 mb-3 border-2 rounded-md border-gray-300">
  <input type="file">
</div>
<!-- image div end -->
      <!-- image div start -->
      <div class=" ">
  <img src="https://static.thenounproject.com/png/3407390-200.png" alt="" class="py-2 mb-3 border-2 rounded-md border-gray-300">
  <input type="file">
</div>
<!-- image div end --><!-- image div start -->
             <div class=" ">
  <img src="https://static.thenounproject.com/png/3407390-200.png" alt="" class="py-2 mb-3 border-2 rounded-md border-gray-300">
  <input type="file">
</div>
<!-- image div end -->       
     
             </div>
                </div>
            
              </div>
          
              <div class="px-4 py-3 bg-white text-right sm:px-6">
                <button type="submit" class="bg-gray-800 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">Save</button>
              </div>
            </div>
          </form>
        </section>


<?php require_once "./views/partials/footer.php";


?>