<?php require_once "./views/partials/header.php";
require_once "./views/partials/nav.php";

if (isset ($_SESSION["user"])) {

  $watchlist_rs = Database::search("SELECT * FROM `wishlist` INNER JOIN `product` ON 
  `wishlist`.`product_id`=`product`.`id` INNER JOIN `product_has_color` ON 
  `product_has_color`.`product_id`=`product`.`id` INNER JOIN `color` ON 
  `product_has_color`.`color_clr_id`=`color`.`clr_id` INNER JOIN `condition` ON 
  `product`.`condition_condition_id`=`condition`.`condition_id` INNER JOIN `user` ON 
  `product`.`user_email`=`user`.`email` WHERE `wishlist`.`user_email`='" . $_SESSION["user"]["email"] . "'");

  $watchlist_num = $watchlist_rs->num_rows;


  ?>

  <div class="h-full  ">

    <main class="max-w-7xl mx-auto pb-5 lg:py-12 lg:px-2  ">
      <div class="lg:grid lg:grid-cols-12 lg:gap-x-5 ">
        <?php require_once "./views/partials/user_profile_sidebar.php" ?>

        <div class="space-y-2 sm:px-6 lg:px-0 lg:col-span-9 h-full ">
          <div class="max-w-7xl mx-auto sm:px-2 lg:px-6   h-full ">
            <div class="max-w-2xl  mx-auto px-4 lg:max-w-4xl lg:px-0">
              <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">Wishlist</h1>
              <p class="mt-2 text-sm text-gray-500">Check the status of recent orders, manage returns, and discover
                similar products.</p>
            </div>

            <?php
            if ($watchlist_num == 0) {

              ?>
              <div class="col-span-12 lg:col-span-9 border rounded-sm flex justify-center items-center my-2 w-full h-full ">
                <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
                  <div class="col-span-12 lg:col-span-6 flex justify-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/4689/4689880.png" alt=""
                      class="h-[290px] bg-center bg-contain bg-no-repeat my-2">
                  </div>
                  <div class="col-span-12 lg:col-span-6 text-center my-2 flex justify-center flex-col">
                    <label class="text-xl font-semibold mt-2">You have no items in your Watchlist yet.</label>
                    <div class="lg:flex lg:justify-center mt-7">
                      <a href="/" class="lg:mr-3">
                        <button
                          class="bg-yellow-500 text-white px-6 py-2 text-[16px] font-semibold rounded hover:bg-yellow-600 transition duration-300">
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
              <div class="flex mt-7  flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:mx-2">
                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                      <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                          <tr>
                            <th scope="col"
                              class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">image
                            </th>
                            <th scope="col"
                              class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product
                              Name</th>
                            <th scope="col"
                              class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                              Color</th>
                            <th scope="col"
                              class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                              Condition</th>
                            <th scope="col"
                              class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Unit
                              Price</th>
                            <th scope="col"
                              class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                              Quantity</th>
                            <th scope="col"
                              class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                              Seller
                            </th>
                            <th scope="col"
                              class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                              Actions
                            </th>
                          </tr>
                        </thead>

                        <?php
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


                          return isset ($colors[$colorName]) ? $colors[$colorName] : "#000000";
                        }
                        for ($x = 0; $x < $watchlist_num; $x++) {
                          $watchlist_data = $watchlist_rs->fetch_assoc();
                          $list_id = $watchlist_data["w_id"];
                          $colorName = $watchlist_data["clr_name"];
                          $product_id = $watchlist_data["product_id"];
                          $hexColor = colorNameToHex($colorName);

                          ?>
                          <tbody class="bg-white divide-y divide-gray-200">
                            <tr>

                              <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                  <div class="flex-shrink-0 h-10 w-10">
                                    <?php


                                    $img_rs = Database::search("SELECT * FROM product_img WHERE product_id='" . $product_id . "'");
                                    $img_data = $img_rs->fetch_assoc();

                                    ?>
                                    <img class="h-10 w-10 rounded-full" src="<?php echo $img_data["img_path"]; ?>" alt="">
                                  </div>
                                  <div class="ml-4">

                                  </div>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                  <?php echo $watchlist_data["title"]; ?>
                                </div>

                              </td>
                              <td class="px-6 py-4 whitespace-nowrap ">
                                <div
                                  class=" w-12 h-8 overflow-hidden flex justify-center items-center border border-black cursor-pointer">
                                  <input type="color" class="w-full h-[32px] border-white p-0 m-0 cursor-pointer"
                                    value="<?php echo $hexColor; ?>" disabled />
                                </div>
                              </td>

                              <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                  class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                  <?php echo $watchlist_data["condition_name"]; ?>
                                </span>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <!-- <button  class="p-3 rounded-md bg-black text-white">Add to Cart</button> -->
                                Rs.
                                <?php echo $watchlist_data["price"]; ?> .00

                              </td>

                              <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                                <!-- <a href="#" class="text-red-600 hover:text-red-900">Delete</a> -->
                                <input type="number" class="border-none w-full" value="<?php echo $watchlist_data["qty"]; ?>"
                                  id="quantity" disabled>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                                <!-- <a href="#" class="text-red-600 hover:text-red-900">Delete</a> -->
                                <?php echo $watchlist_data["fname"] . " " . $watchlist_data["lname"]; ?>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap  flex text-[12px] gap-2 items-center">
                                <button
                                  class="p-1  border border-green-600 font-bold rounded text-green-700 bg-white hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-offset-2 gap-1 focus:ring-green-500 flex items-center justify-center">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-cash-coin" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                      d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0" />
                                    <path
                                      d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z" />
                                    <path
                                      d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z" />
                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567" />
                                  </svg>
                                  Buy</button>

                                <?php
                                if (isset ($_SESSION["user"])) {
                                  $cart_rs = Database::search("SELECT * FROM cart WHERE user_email='" . $_SESSION["user"]["email"] . "' AND product_id='" . $product_id . "'");
                                  $cart_num = $cart_rs->num_rows;
                                  if ($cart_num == 1) {
                                    ?>
                                    <button onclick='addToCart(<?php echo $product_id; ?>);' id="shop<?php echo $product_id; ?>"
                                      class="text-yellow-500 hover:text-yellow-700 w-[30px] h-[30px] border border-yellow-500 rounded-full flex items-center justify-center p-1 bg-white hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        className="w-20 h-20">
                                        <path fillRule="evenodd"
                                          d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z"
                                          clipRule="evenodd" />
                                      </svg>
                                    </button>
                                    <?php
                                  } else {
                                    ?>
                                    <button onclick='addToCart(<?php echo $product_id; ?>);' id="shop<?php echo $product_id; ?>"
                                      class="text-yellow-500 hover:text-yellow-700 w-[30px] h-[30px] border border-yellow-500 rounded-full flex items-center justify-center p-1 bg-white hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" class="w-20 h-20">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                      </svg>
                                    </button>
                                    <?php
                                  }
                                }
                                ?>
                                <button onclick="removeFromWatchlist(<?php echo $list_id; ?>);"
                                  class="text-red-500 hover:text-red-700 w-[30px] h-[30px] border border-red-500 rounded-full flex items-center justify-center p-1 bg-white hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                      d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                    <path
                                      d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                  </svg></b>

                              </td>
                            </tr>
                            <!-- More people... -->
                          </tbody>
                          <?php

                        }
                        ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
            ?>
          </div>
        </div>
    </main>
  </div>
  <?php
} else {
  ?>
  <script>window.location.href = "/";</script>
<?php
}


?>

<!-- alert model -->
<?php require_once "./views/partials/alert.php"; ?>
<!--alert model -->


<script src="./public/js/wishlist.js"></script>
<?php require_once "./views/partials/footer.php";

?>