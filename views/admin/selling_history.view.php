<?php require_once "./views/partials/header.php";
require_once "./views/partials/nav.php";
if(isset($_GET["id"])){
    $pageId =$_GET["id"]; 
  
  }else{
    $pageId =1; 
  }
?>

<div class="                ">
    <main class="max-w-7xl mx-auto pb-5 lg:py-12 lg:px-2  ">
      <div class="lg:grid lg:grid-cols-12 lg:gap-x-5 ">
        <?php require_once "./views/partials/user_profile_sidebar.php" ?>
        <div class="space-y-2 sm:px-6 lg:px-0 lg:col-span-9 h-full ">
          <div class="max-w-7xl mx-auto sm:px-2 lg:px-2   h-full ">
<h1 class="text-3xl py-3 ps-3">Selling History</h1>

<!-- product table start -->
<div class="flex my-10 flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-2">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Invoice ID</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Product</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Buyer</th>
                                <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Amount</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Quantity</th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
<?php 
                        $AllProductsHistory_rs = Database::search("SELECT COUNT(`product_id`) FROM `invoice_has_products` INNER JOIN `product` ON `product`.`id`=`invoice_has_products`.`product_id` WHERE `user_email`=? ",[$_SESSION["user"]["email"]]);
                        $AllProductsHistory = $AllProductsHistory_rs->fetch_assoc();
                        if($AllProductsHistory_rs->num_rows){
                            $output = preg_replace( '/[^0-9]/', '', $pageId );
                            if($output){
                              $pageId = $pageId-1;
                              $from = 0;
                              $to = 10;
                              $from = $to * $pageId;
                            }else{
                              $from = 0;
                            $to = 10;
                            }
$sellingHistory_rs  = Database::search("SELECT * FROM `invoice_has_products` INNER JOIN `product` ON `product`.`id`=`invoice_has_products`.`product_id` WHERE `user_email`=? LIMIT $from,$to",[$_SESSION["user"]["email"]]);
if($sellingHistory_rs->num_rows!==0){
for ($i=0; $i < $sellingHistory_rs->num_rows; $i++) { 
$sellingHistory = $sellingHistory_rs->fetch_assoc();
$boughtBuyer_rs = Database::search("SELECT * FROM `invoice` INNER JOIN `user` ON `invoice`.`user_email`=`user`.`email` WHERE `invoice_id`=?",[$sellingHistory["invoice_id"]]);
$boughtBuyer = $boughtBuyer_rs->fetch_assoc();
    ?>
         <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $sellingHistory["invoice_id"]?></td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?= $sellingHistory["title"]?></div>
                            
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo($boughtBuyer["fname"] ." ". $boughtBuyer["lname"]); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo($boughtBuyer["date"]) ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rs. <?= $sellingHistory["price"]?>.00</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $sellingHistory["bought_qty"]?></td> 
                        </tr>
    <?php
}
}
?>
                   
                        <!-- More people... -->
                    </tbody>
                </table>
                <?php require_once "./views/partials/pagination.php";
pagination($AllProductsHistory['COUNT(`product_id`)'],"sellingHistoryPagination");
}else{
    ?><script>window.location.href="/sellingHistory?id=1"</script><?php
} ?>
                <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                    <div class="flex flex-1 justify-between sm:hidden">
                        <a href="#"
                            class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                        <a href="#"
                            class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                    </div>
                    <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                  
                       <?php require_once "./views/partials/pagination.php";?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
        </div>
    </main>
  </div>

<!-- product table start -->
<?php require_once "./views/partials/footer.php";
?>