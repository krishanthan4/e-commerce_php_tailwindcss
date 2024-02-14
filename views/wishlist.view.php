<?php require_once "./views/partials/header.php";
 require_once "./views/partials/nav.php";

?>
<p class="text-4xl font-normal p-5 ps-20">Wishlist</p>

<div class="flex  flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product Name</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Unit Price</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock Status</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
         
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                  <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                  </div>
                  <div class="ml-4">
                  
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Jane Cooper </div>
          
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">$100 </div>
          
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">In Stock</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><button class="p-3 rounded-md bg-black text-white">Add to Cart</button></td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
              </td>
            </tr>
            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php require_once "./views/partials/footer.php";

?>