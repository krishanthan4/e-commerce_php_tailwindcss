<?php

require_once "./views/partials/header.php";
$categoryPublicId;
?>

<?php if (isset($_GET["order_id"])){
require_once "./connection2.php";

   $order_idrrr = $_GET["order_id"];
      $invoicerrrs_rs = Database::search("SELECT * FROM `invoice` WHERE `order_id`='".$order_idrrr."' ");
      $userAddress_rss = Database::search("SELECT * FROM `user_has_address` INNER JOIN `city` ON `city`.`city_id`=`user_has_address`.`city_city_id` INNER JOIN `district` ON `district`.`district_id`=`city`.`district_district_id` WHERE `user_email`='".$_SESSION["user"]["email"]."'");
      $userAddress= $userAddress_rss->fetch_assoc();
      if($invoicerrrs_rs->num_rows!==0){
      for ($r=0; $r < $invoicerrrs_rs->num_rows; $r++) { 
      $invoicerrr = $invoicerrrs_rs->fetch_assoc(); ?>
          <div onclick="redirect();" class="w-full opacity-15 bg-black h-screen z-30 fixed">
          </div>
          <div class="flex w-full absolute">
                   <div id="cartDiv" class="mx-auto mt-12 bg-white z-50 relative rounded-md  p-5">
            <p onclick="redirect();" class="float-right mb-5 text-red-900 cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
        <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
      </svg>
      </p>  
       <div id="showInvoiceTitle" class="bg-white hidden rounded-t-3xl md:p-20 p-10 ">
                    <div class="flex gap-3 mt-2 uppercase text-3xl items-center tracking-[2px]">
                        <img class="object-cover rounded-full w-10 h-10 overflow-hidden " src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUbDARRn5nmT3Z3nqUZ7fu9vylxTYYa72qocdOWQzwOm3ujJ6u" alt="">
                        <p>CodeSpace</p>
                    </div>
                    <p class="flex w-full justify-center font-bold uppercase text-2xl">Invoice</p>

                    <div class="flex flex-wrap justify-between gap-6 mt-14">
                        <div>
                            <h2 class="text-xl font-medium mb-4"><?php echo($_SESSION["user"]["fname"]." ".$_SESSION["user"]["lname"]) ?></h2>
                        </div>

                        <div>
                            <p class="text-base text-right font-normal"><?= $userAddress["line1"]?>,</p>
                            <p class="text-base text-right font-normal"><?= $userAddress["line2"]?>,</p>
                            <p class="text-base text-right font-normal"><?= $userAddress["city_name"]?>,</p>
                            <p class="text-base text-right font-normal"><?= $userAddress["district_name"]?>.</p>
                        </div>
                    </div>

                </div>
                         <div class=" pt-2 pb-4 border-b border-blueGray-200 px-3">
                            <div class="justify-between flex md:-mx-4  items-center">
                                  <h4 class="text-xl font-semibold leading-normal mb-2 text-left">Invoice no : <?= $invoicerrr["invoice_id"] ?></h4>
                                        <p class="float-left mb-0">Invoice date: <?= date("d/m/Y", strtotime($invoicerrr["date"])) ?></p>
                            </div>
                         </div>
                         <div class=" py-5 flex-auto">
                            <table class="text-right w-full mb-4 text-blueGray-800 border-collapse">
                               <thead class="bg-blueGray-800">
                                  <tr class="text-right  uppercase font-light">
                                     <th class="p-3 border-t" scope="col">Item</th>
                                     <th class="p-3 border-t" scope="col">Qty</th>
                                     <th class="p-3 border-t" scope="col">Category</th>
                                     <th class="p-3 border-t" scope="col">Rate</th>
                                  </tr>
                               </thead>
                               <tbody>
                                <?php $invoicerrrProduct_rs = Database::search("SELECT * FROM `invoice_has_products`  INNER JOIN `product` ON `invoice_has_products`.`product_id`=`product`.`id` INNER JOIN `category` ON `product`.`category_cat_id`=`category`.`cat_id`  WHERE `invoice_has_products`.`invoice_id`='".$invoicerrr["invoice_id"]."'");
                            for ($t=0; $t < $invoicerrrProduct_rs->num_rows; $t++) { 
                              $invoicerrrProduct =   $invoicerrrProduct_rs->fetch_assoc(); ?>
           <tr>
                                     <td class="py-4 p-3 border-t"><?= $invoicerrrProduct["title"] ?></td>
                                     <td class="py-4 p-3 border-t"><?= $invoicerrrProduct["bought_qty"] ?></td>
                                     <td class="py-4 p-3 border-t"><?= $invoicerrrProduct["cat_name"] ?></td>
                                     <td class="py-4 p-3 border-t">Rs.<?= $invoicerrrProduct["price"] ?>.00</td>
                                  </tr>
      <?php } ?>
                               </tbody>
                               <tfoot>
                                  <tr class="mt-4">
                                     <th class="border-b-0 p-3 border-t">
                                        <p class="text-lg font-semibold pt-2">Total</p>
                                     </th>
                                     <th class="border-b-0 p-3 border-t" colspan="3">
                                        <p class="text-right text-lg font-semibold pt-2">Rs.<?= $invoicerrr["total"]?>.00</p>
                                     </th>
                                  </tr>
                               </tfoot>
                            </table>
                         </div>
                      <div class="float-right"><button id="printButton" onclick="println();" class="outline-none focus:outline-none  uppercase  font-bold text-white bg-pink-500 text-sm px-6 py-2 rounded-md">Print</button></div>
                   </div>
                </div>
       <script>
         function println(){
          var printContent = document.getElementById('cartDiv').innerHTML;
    var originalContent = document.body.innerHTML;
    document.body.innerHTML = printContent;
document.getElementById("showInvoiceTitle").classList.remove("hidden");
document.getElementById("printButton").classList.add("hidden");
    window.print();
    document.body.innerHTML = originalContent;
           }
      function redirect(){
         window.location.href="/cart";
      }
       </script>
      <?php }}}else{
require_once "./views/partials/nav.php";
        
      } ?>











<?php if (isset($_SESSION["user"])) {
  $user = $_SESSION["user"]["email"];
  $total = 0;
  $subtotal = 0;
  $deliveryCost = 0;

  ?>
  <main  class="max-w-2xl mx-auto pt-16 pb-24 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
    <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl ">Shopping Cart <img
        src="https://www.svgrepo.com/show/86079/shopping-cart.svg" class="w-[50px] inline-block h-[50px]"></h1>

    <?php

    $cart_rs = Database::search("SELECT *, `cart`.`qty`  AS cart_qty FROM `cart` INNER JOIN `product` ON 
`cart`.`product_id`=`product`.`id` INNER JOIN `product_has_color` ON 
`product_has_color`.`product_id`=`product`.`id` INNER JOIN `color` ON 
`product_has_color`.`color_clr_id`=`color`.`clr_id` INNER JOIN `condition` ON 
`product`.`condition_condition_id`=`condition`.`condition_id` INNER JOIN `user` ON 
`product`.`user_email`=`user`.`email` WHERE `cart`.`user_email`='" . $user . "' ");

    $cart_num = $cart_rs->num_rows;

    // $cart_rs1 = Database::search("SELECT * FROM cart  WHERE user_email='" . $user . "'");
    // $cart_num1 = $cart_rs1->num_rows;
  
    if ($cart_num == 0) {

      ?>
      <div class="col-span-12 lg:col-span-9 border rounded-sm flex justify-center items-center my-2 w-full h-full ">
        <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
          <div class="col-span-12 lg:col-span-6 flex justify-center">
            <img src="./public/images/cart.png" alt="" class="h-[290px] bg-center bg-contain bg-no-repeat my-2">
          </div>
          <div class="col-span-12 lg:col-span-6 text-center my-2 flex justify-center flex-col">
            <label class="text-xl font-semibold mt-2">You have no items in your Cart yet.</label>
            <div class="lg:flex lg:justify-center mt-7">
              <a href="/" class="lg:mr-3">
                <button
                  class="bg-blue-500 text-white px-6 py-2 text-[16px] font-semibold rounded hover:bg-blue-600 transition duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                  </svg>
                  Start Shopping</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php

    } else {
      ?>
      <div class="mt-12 lg:grid lg:grid-cols-12 lg:gap-x-12 lg:items-start xl:gap-x-16">
        <section aria-labelledby="cart-heading" class="lg:col-span-7  ">
          <div class="flex flex-row items-center justify-between mb-3">
            <div class="flex items-center gap-4">
              <input onchange="toggleCheckout();" type="checkbox" class="ms-2" id="selectAllCheckBox" onclick="sendToPHP2();">
              
              <p class="text-sm text-gray-600">Select All Items</p>
            </div>
          </div>
          <?php

      //  require_once "./partials/color.php";
      //  colorNameToHex($colorName);

      function colorNameToHex($colorName)
      {
        $colors = array(
          "aliceblue" => "#F0F8FF",
          "antiquewhite" => "#FAEBD7",
          "aqua" => "#00FFFF",
          "aquamarine" => "#7FFFD4",
          "azure" => "#F0FFFF",
          "beige" => "#F5F5DC",
          "bisque" => "#FFE4C4",
          "black" => "#000000",
          "blanchedalmond" => "#FFEBCD",
          "blue" => "#0000FF",
          "blueviolet" => "#8A2BE2",
          "brown" => "#A52A2A",
          "burlywood" => "#DEB887",
          "cadetblue" => "#5F9EA0",
          "chartreuse" => "#7FFF00",
          "chocolate" => "#D2691E",
          "coral" => "#FF7F50",
          "cornflowerblue" => "#6495ED",
          "cornsilk" => "#FFF8DC",
          "crimson" => "#DC143C",
          "cyan" => "#00FFFF",
          "darkblue" => "#00008B",
          "darkcyan" => "#008B8B",
          "darkgoldenrod" => "#B8860B",
          "darkgray" => "#A9A9A9",
          "darkgreen" => "#006400",
          "darkgrey" => "#A9A9A9",
          "darkkhaki" => "#BDB76B",
          "darkmagenta" => "#8B008B",
          "darkolivegreen" => "#556B2F",
          "darkorange" => "#FF8C00",
          "darkorchid" => "#9932CC",
          "darkred" => "#8B0000",
          "darksalmon" => "#E9967A",
          "darkseagreen" => "#8FBC8F",
          "darkslateblue" => "#483D8B",
          "darkslategray" => "#2F4F4F",
          "darkslategrey" => "#2F4F4F",
          "darkturquoise" => "#00CED1",
          "darkviolet" => "#9400D3",
          "deeppink" => "#FF1493",
          "deepskyblue" => "#00BFFF",
          "dimgray" => "#696969",
          "dimgrey" => "#696969",
          "dodgerblue" => "#1E90FF",
          "firebrick" => "#B22222",
          "floralwhite" => "#FFFAF0",
          "forestgreen" => "#228B22",
          "fuchsia" => "#FF00FF",
          "gainsboro" => "#DCDCDC",
          "ghostwhite" => "#F8F8FF",
          "gold" => "#FFD700",
          "goldenrod" => "#DAA520",
          "gray" => "#808080",
          "green" => "#008000",
          "greenyellow" => "#ADFF2F",
          "grey" => "#808080",
          "honeydew" => "#F0FFF0",
          "hotpink" => "#FF69B4",
          "indianred" => "#CD5C5C",
          "indigo" => "#4B0082",
          "ivory" => "#FFFFF0",
          "khaki" => "#F0E68C",
          "lavender" => "#E6E6FA",
          "lavenderblush" => "#FFF0F5",
          "lawngreen" => "#7CFC00",
          "lemonchiffon" => "#FFFACD",
          "lightblue" => "#ADD8E6",
          "lightcoral" => "#F08080",
          "lightcyan" => "#E0FFFF",
          "lightgoldenrodyellow" => "#FAFAD2",
          "lightgray" => "#D3D3D3",
          "lightgreen" => "#90EE90",
          "lightgrey" => "#D3D3D3",
          "lightpink" => "#FFB6C1",
          "lightsalmon" => "#FFA07A",
          "lightseagreen" => "#20B2AA",
          "lightskyblue" => "#87CEFA",
          "lightslategray" => "#778899",
          "lightslategrey" => "#778899",
          "lightsteelblue" => "#B0C4DE",
          "lightyellow" => "#FFFFE0",
          "lime" => "#00FF00",
          "limegreen" => "#32CD32",
          "linen" => "#FAF0E6",
          "magenta" => "#FF00FF",
          "maroon" => "#800000",
          "mediumaquamarine" => "#66CDAA",
          "mediumblue" => "#0000CD",
          "mediumorchid" => "#BA55D3",
          "mediumpurple" => "#9370DB",
          "mediumseagreen" => "#3CB371",
          "mediumslateblue" => "#7B68EE",
          "mediumspringgreen" => "#00FA9A",
          "mediumturquoise" => "#48D1CC",
          "mediumvioletred" => "#C71585",
          "midnightblue" => "#191970",
          "mintcream" => "#F5FFFA",
          "mistyrose" => "#FFE4E1",
          "moccasin" => "#FFE4B5",
          "navajowhite" => "#FFDEAD",
          "navy" => "#000080",
          "oldlace" => "#FDF5E6",
          "olive" => "#808000",
          "olivedrab" => "#6B8E23",
          "orange" => "#FFA500",
          "orangered" => "#FF4500",
          "orchid" => "#DA70D6",
          "palegoldenrod" => "#EEE8AA",
          "palegreen" => "#98FB98",
          "paleturquoise" => "#AFEEEE",
          "palevioletred" => "#DB7093",
          "papayawhip" => "#FFEFD5",
          "peachpuff" => "#FFDAB9",
          "peru" => "#CD853F",
          "pink" => "#FFC0CB",
          "plum" => "#DDA0DD",
          "powderblue" => "#B0E0E6",
          "purple" => "#800080",
          "rebeccapurple" => "#663399",
          "red" => "#FF0000",
          "rosybrown" => "#BC8F8F",
          "royalblue" => "#4169E1",
          "saddlebrown" => "#8B4513",
          "salmon" => "#FA8072",
          "sandybrown" => "#F4A460",
          "seagreen" => "#2E8B57",
          "seashell" => "#FFF5EE",
          "sienna" => "#A0522D",
          "silver" => "#C0C0C0",
          "skyblue" => "#87CEEB",
          "slateblue" => "#6A5ACD",
          "slategray" => "#708090",
          "slategrey" => "#708090",
          "snow" => "#FFFAFA",
          "springgreen" => "#00FF7F",
          "steelblue" => "#4682B4",
          "tan" => "#D2B48C",
          "teal" => "#008080",
          "thistle" => "#D8BFD8",
          "tomato" => "#FF6347",
          "turquoise" => "#40E0D0",
          "violet" => "#EE82EE",
          "wheat" => "#F5DEB3",
          "white" => "#FFFFFF",
          "whitesmoke" => "#F5F5F5",
          "yellow" => "#FFFF00",
          "yellowgreen" => "#9ACD32",
      
        );
        $colorName = strtolower($colorName);
        return isset($colors[$colorName]) ? $colors[$colorName] : "#000000";
      }
          $selectAllArray = [];
          for ($x = 0; $x < $cart_num; $x++) {
            $singleProductObject = new stdClass();
            $cart_data = $cart_rs->fetch_assoc();
            // $cart_data1 = $cart_rs1->fetch_assoc();
      
            $colorName = $cart_data["clr_name"];
            $hexColor = colorNameToHex($colorName);
            $product_rs = Database::search("SELECT * FROM product INNER jOIN product_img ON `product`.`id`=`product_img`.`product_id` WHERE id='" . $cart_data["product_id"] . "'");
            $product_data = $product_rs->fetch_assoc();
            $categoryPublicId =$product_data["category_cat_id"];
            $unitPrice = $product_data["price"];
            $total = $total + ($unitPrice * $cart_data["cart_qty"]);

            $address_rs = Database::search("SELECT district_id AS did FROM user_has_address INNER JOIN city ON `user_has_address`.`city_city_id`=`city`.`city_id` INNER JOIN district  ON  `city`.`district_district_id`=`district`.`district_id` WHERE user_email='" . $user . "' ");
            $address_data = $address_rs->fetch_assoc();

            $cost = 0;

            if ($address_data["did"] == 2) {
              $cost = $product_data["delivery_fee_colombo"];
              $deliveryCost = $deliveryCost + $cost;
            } else {
              $cost = $product_data["delivery_fee_other"];
              $deliveryCost = $deliveryCost + $cost;
            }

            $seller_rs = Database::search("SELECT * FROM user WHERE email='" . $product_data["user_email"] . "'");
            $seller_data = $seller_rs->fetch_assoc();
            $seller = $seller_data["fname"] . " " . $seller_data["lname"];

            $requested_total = ($unitPrice * $cart_data["cart_qty"]) + $cost;
            $orderTotal = $total + $deliveryCost;
            ?>
            <div class="overflow-x-auto ">
              <ul role="list" class="border-t border-b border-gray-200 divide-y divide-gray-200">
                <li  class="flex flex-row sm:flex-row py-6 sm:py-6 px-2 ">
                  <input class="product_id" type="hidden" value="<?= $product_data["id"] ?>">
                  <div class="flex justify-center mb-2 sm:mb-0">
                    <input type="checkbox" class="itemCheckbox" name="singleCheckbox"
                      onchange="orderSummary('<?= $cart_data['cart_qty'] ?>','<?= $product_data['id'] ?>','<?= $cart_data['cart_id'] ?>','<?= $cost ?>','<?= $requested_total ?>','<?= $unitPrice ?>');"
                      id="<?= $cart_data["cart_id"] ?>">
                            </div>
                  <div class="flex-shrink-0">
                    <img src="<?php echo $product_data["img_path"]; ?>" alt="Front of men&#039;s Basic Tee in sienna."
                      class="w-24 h-24 rounded-md object-center object-cover sm:w-48 sm:h-48 ml-2">
                  </div>
                  <div class="ml-4 flex-1 flex flex-col justify-between sm:ml-6  relative">
                    <div class="relative pr-9 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
                      <div>
                        <div class="flex justify-between w-full sm:w-auto">
                          <h3 class="text-xl">
                            <span class="font-medium text-gray-800 hover:text-gray-900">
                              <?php echo $product_data["title"]; ?>
                            </span>
                          </h3>
                        </div>
                        <div class="mt-2 flex text-sm items-center ">
                          <div
                            class="w-12 h-8 overflow-hidden flex justify-center items-center border border-black cursor-pointer mt-2">
                            <input type="color" class="w-full h-[34px] border-white p-0 m-0 cursor-pointer"
                              value="<?php echo $hexColor; ?>" disabled />
                          </div>
                          <div class="w-[1px] h-[32px] border-l-[1px] border-gray-400 ml-4 mt-[5px] mr-4"></div>
                          <span
                            class="px-2 py-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 mt-2">
                            <?php echo $cart_data["condition_name"]; ?>
                          </span>
                        </div>
                        <div class="flex gap-2 mt-2">
                          <p class="mt-2 text-sm font-medium text-gray-400 ">Unit Price</p>
                          <p class="mt-2 text-sm font-medium text-gray-900">:</p>
                          <p class=" text-lg mt-1 font-medium text-gray-900">Rs.
                            <?php echo $unitPrice; ?>.00
                          </p>
                        </div>
<?php $singleProductObject->unitPrice = $unitPrice;?>
                        <div class="flex gap-2 items-center mt-2">
                          <p class="mt-2 text-sm font-medium text-gray-400 ">Quanity</p>
                          <p class="mt-2 text-sm font-medium text-gray-900">:</p>
                          <input min="1" type="number" class="product_qty w-[50px] mt-2 h-8 rounded-md p-2 font-medium text-gray-900"
                            value="<?php echo $cart_data["cart_qty"] ?>"
                            onchange="changeQTY(<?php echo $cart_data['cart_id']; ?>);" id="qtyNum">
                        </div>

                        <div class="flex  gap-2 mt-2">
                          <p class="mt-2 text-sm font-medium text-gray-400 ">Deliver Free</p>
                          <p class="mt-2 text-sm font-medium text-gray-900">:</p>
                          <p class="mt-2 text-sm font-medium text-gray-900">Rs.
                            <?php echo $cost; ?>.00
                          </p>
                        </div>
                        <?php $singleProductObject->deliveryFee = $cost;?>
                      </div>
                    </div>
                    <!-- Move SVG icon to the right -->
                    <div class="absolute top-0 right-0">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        onclick="deleteFromCart(<?php echo $cart_data['cart_id']; ?>);" stroke="currentColor"
                        class="w-8 h-8 cursor-pointer  hover:text-red-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                    </div>
                    <div class="flex  items-center gap-2  absolute bottom-0 right-0">
                      <p class="mt-2 text-sm font-medium text-gray-400 ">Requested Total</p>
                      <p class="mt-2 text-sm font-medium text-gray-900">:</p>
                      <p class="mt-2  text-sm font-medium text-gray-900">Rs.
                        <?= $requested_total ?>.00
                      </p>
                    </div>
                  </div>
                  <?php $singleProductObject->requested_total = $requested_total;?>
                </li>
              </ul>
            </div>
            <?php
            $selectAllArray[$x] = $singleProductObject;
          }
$encodedSelectAll = json_encode($selectAllArray);
          ?>
        </section>
<script>
  function sendToPHP2(array=<?= $encodedSelectAll?>){
    const selectAllCheckbox = document.getElementById("selectAllCheckBox");
    const checkboxes = document.querySelectorAll('input[name="singleCheckbox"]');

    if(selectAllCheckbox.checked==true){
      checkboxes.forEach(checkbox => {
    checkbox.checked = true;
});

const decodedObject = array;
 let AllunitPrices = 0;
let AllDeliveryCosts = 0;

for (let index = 0; index < Object.keys(decodedObject).length; index++) {
  // console.log(decodedObject[index].unitPrice);
AllunitPrices = parseInt(decodedObject[index].unitPrice) +parseInt(AllunitPrices);
AllDeliveryCosts = parseInt(decodedObject[index].deliveryFee)+parseInt(AllDeliveryCosts);
    
}
// console.log(AllunitPrices);
// console.log(AllDeliveryCosts);
const AllOrderTotal = AllunitPrices+AllDeliveryCosts;

document.getElementById('subtotal').innerText = "Rs." + AllunitPrices+ ".00";
document.getElementById('deliveryCost').innerText = "Rs."+ AllDeliveryCosts + ".00";
document.getElementById('orderTotal').innerText = "Rs." + AllOrderTotal + ".00";
    }else{
      checkboxes.forEach(checkbox => {
    checkbox.checked = false;
});
document.getElementById('subtotal').innerText = "Rs. 0.00";
document.getElementById('deliveryCost').innerText = "Rs. 0.00";
document.getElementById('orderTotal').innerText = "Rs. 0.00";

    }
}
</script>
        <!-- Order summary -->
        <section aria-labelledby="summary-heading"
          class="mt-16 bg-gray-50 rounded-lg px-4 py-6 sm:p-6 lg:p-8 lg:mt-0 lg:col-span-5">
          <h2 id="summary-heading" class="text-lg font-medium text-gray-900">Order summary</h2>
          <dl class="mt-6 space-y-4">
            <div class="flex items-center justify-between">
              <dt class="text-sm text-gray-600">Subtotal</dt>
              <dd id="subtotal" class="text-sm font-medium text-gray-900">Rs. 0.00</dd>
            </div>
            <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
              <dt class="flex items-center text-sm text-gray-600">
                <span>Delivery Cost</span>
                <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                  <span class="sr-only">Learn more about how shipping is calculated</span>
                  <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                      d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                      clip-rule="evenodd" />
                  </svg>
                </a>
              </dt>
              <dd id="deliveryCost" class="text-sm font-medium text-gray-900">Rs. 0.00</dd>
            </div>
            <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
              <dt class="text-base font-medium text-gray-900">Order total</dt>
              <dd  id="orderTotal" class="text-base font-medium text-gray-900">Rs. 0.00</dd>
            </div>
          </dl>
          <div class="mt-6">
            <button id="checkoutButton" onclick="checkout();" 
              class="w-full  bg-indigo-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Checkout</button>
          </div>
        </section>
      </div>
      <!-- Related products -->
  
      <?php
require_once "./views/partials/singleproductView/relatedProducts.php";
relatedProduct("Based On your Favour",$categoryPublicId);    }
    ?>
  </main>
  <?php
} else {
  ?>
  <script>
window.location.href="/";
  </script>
  <?php
}
?>

<!-- alert model -->
<?php require_once "./views/partials/alert.php"; ?>
<!-- < !--alert model-- > -->
<script src="./public/js/cart.js"></script>
<script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
<?php require_once "./views/partials/footer.php"; ?>
