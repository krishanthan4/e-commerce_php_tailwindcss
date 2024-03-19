<?php 
function pagination($parsedId,$parsedJs){
  
?>
<!-- Pagination -->
<nav aria-label="Pagination"
  class="max-w-xl mx-auto px-4 mt-6 flex justify-between text-sm font-medium text-gray-700 sm:px-6 lg:px-8">
  <div class="min-w-0 flex-1">
    <button onclick="navigatePrevious();"
      class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25">
      Previous </button>
  </div>
  <div class="hidden space-x-2 sm:flex">


      <!-- Current: "border-indigo-600 ring-1 ring-indigo-600", Default: "border-gray-300" -->
      <a id="1" onclick="navigateWithsave();"
      class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25">
      1</a>
    <a id="2" onclick="navigateWithsave();"
      class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25">
      2</a>
    <a id="3" onclick="navigateWithsave();"
      class="inline-flex items-center px-4 h-10 border border-gray-300  ring-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25">
      3</a>
    <a 
      class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25">
      ... </a>




  </div>
  <div class="min-w-0 flex-1 flex justify-end">
    <button onclick="navigateNext('<?= $parsedId?>');"
      class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25">
      Next </button>
  </div>
</nav>


<script src="./public/js/<?= $parsedJs?>.js"></script>
<?php 
}

?>