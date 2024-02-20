<?php require_once "./views/partials/header.php";
require_once "./views/partials/nav.php";

if (isset($_SESSION["user"])) {
    $email = $_SESSION["user"]["email"];

?>
<div class="">

    <main class="max-w-7xl mx-auto pb-10 lg:py-12 lg:px-8">
        <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
            <?php require_once "./views/partials/user_profile_sidebar.php" ?>
            <div class="space-y-1 sm:px-6 lg:px-0 lg:col-span-9">
                <!-- content start -->
                <div class="max-w-2xl  mx-auto px-4 lg:max-w-4xl lg:px-0">
                    <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">My Products</h1>
                    <p class="mt-2 text-sm text-gray-500">Update your billing information. Please note that updating
                        your
                        location could affect your tax rates..</p>
                </div>
                <div class="w-full flex px-5 flex-row items-center ">

                    <!-- search bar -->
                    <div
                        class="flex md:w-[65%] my-6 pe-4 min-w-[70%]  md:px-0 md:me-0 flex-row items-center justify-center">
                        <form class="flex w-full items-center  max-w-lg mx-auto">
                            <div class="relative w-full">

                                <input type="text" id="voice-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5  outline-none"
                                    placeholder="Search " required />

                            </div>
                            <button type="submit"
                                class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>Search
                            </button>
                        </form>
                    </div>

                    <button
                        class="bg-yellow-500 w-fit align-left text-white rounded-md sm:py-2.5 py-1  text-sm px-3">Add
                        New Product</button>
                </div>
                <div class="">
                    <!-- sort -->
                    <div class="bg-white">


                        <!-- Filters -->
                        <?php require_once "./views/partials/myProducts/filter.php" ?>
                    </div>
                    <!-- sort -->
                    <div>
                        <div class="grid grid-cols-2 justify-center items-center">

                            <?php


                            $product_resultSet = Database::search("SELECT * FROM product WHERE user_email='" . $email . "'");
                            $product_numRows = $product_resultSet->num_rows;
                            for ($x = 0; $x < $product_numRows; $x++) {
                                $selected_data = $product_resultSet->fetch_assoc();
                                ?>
                                <!-- card start -->
                                <div
                                    class="flex m-5 flex-col items-center bg-white border border-gray-200 rounded-lg shadow lg:flex-row lg:max-w-xl md:max-w-72  sm:max-w-60 hover:bg-gray-100 ">
                                    <div class="lg:w-[40%] lg:ms-3 md:w-full sm:[30%]">
                                        <?php

                                        $product_img_resultSet = Database::search("SELECT * FROM product_img WHERE product_id='" . $selected_data["id"] . "'");
                                        $product_img_data = $product_img_resultSet->fetch_assoc();

                                        ?>
                                        <img class="rounded-md h-auto w-full  "
                                            src="<?php echo $product_img_data["img_path"]; ?>" alt="">
                                    </div>
                                    <div class="flex flex-col justify-between px-4 py-2 leading-normal">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                                            <?php echo $selected_data["title"]; ?>
                                        </h5>
                                        <p class="mb-3 font-normal text-gray-700 ">Rs.
                                            <?php echo $selected_data["price"]; ?> .00
                                        </p>
                                        <p class="mb-3 font-normal text-gray-700 ">
                                            <?php echo $selected_data["qty"]; ?> items left
                                        </p>

                                        <label class="inline-flex items-center me-5 cursor-pointer">
                                            <input type="checkbox" role="switch" class="sr-only peer" 
                                            id="toggle<?php echo $selected_data["id"]; ?>" 
                                            onchange="changeStatus(<?php echo $selected_data['id']; ?>);" 
                                            <?php if ($selected_data["status_status_id"] == 2) { ?> checked <?php } ?>
                                            >
                                            <div
                                                class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-red-300 dark:peer-focus:ring-red-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-red-600">
                                            </div>
                                            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300" for="toggle<?php echo $selected_data["id"]; ?>">
                                            <?php
                                            if($selected_data["status_status_id"] == 1){
                                                ?>
                                                <p>  Make Your Product Deactivate</p>
                                             
                                                <?php

                                            }else{
                                             ?>
                                             <p> Make Your Product Activate</p>
                                              
                                                <?php
                                            }

                                            
                                            ?>
                                            </span>
                                            
                                        </label>
                                        <button class="p-2 m-3 rounded-md bg-green-500 text-white"  onclick="sendId(<?php echo $selected_data['id']; ?>);">Update</button>
                                    </div>
                                </div>
                                <!-- card end -->
                                <?php
                            }
                            ?>


                        </div>


                    </div>
                </div>


            </div>


        </div>
    </main>
</div>
<?php
}else{
header("Location:/");
}                       
?>
<!-- alert model -->
<?php require_once "./views/partials/alert.php"; ?>
<!--alert model -->

<script src="./public/js/myProducts.js"></script>





<?php require_once "./views/partials/footer.php"; ?>