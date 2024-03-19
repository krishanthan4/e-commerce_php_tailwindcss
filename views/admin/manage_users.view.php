<?php require_once "./views/partials/header.php";
 require_once "./views/partials/nav.php";

 if(isset($_GET["id"])){
    $pageId =$_GET["id"]; 
  
  }else{
    $pageId =1; 
  }
?>

<div class="mx-4 md:mx-12 my-3" >
    <div class="w-full flex flex-row items-center">
        <p class="text-xl md:block hidden md:ms-6">Manage Users</p>
        <!-- search bar -->
        <div class="flex md:w-[65%] my-6 min-w-[70%] me-5 md:me-0 flex-row items-center justify-center">
            <form class="flex w-full items-center max-w-lg mx-auto">   
                <div class="relative w-full">
                    <input type="text" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" placeholder="Search" required />
                </div>
                <button type="submit" class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>Search
                </button>
            </form>
        </div>
    </div>
</div>

<!-- product table start -->
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-4 md:-mx-6 lg:mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-4 md:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <!-- Table Headers -->
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                            <th scope="col" class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Profile Image </th>
                            <th scope="col" class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Username </th>
                            <th scope="col" class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Email </th>
                            <th scope="col" class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Mobile </th>
                            <th scope="col" class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Registered Date </th>
                            <th scope="col" class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Action </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
<?php 
$AllUsers_rs = Database::search("SELECT COUNT(`email`) FROM `user` ");
$AllUsers = $AllUsers_rs->fetch_assoc();
if($AllUsers_rs->num_rows){
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

$manageResult = Database::search("SELECT * FROM `user` LIMIT $from,$to");
if($manageResult->num_rows!==0){
    for ($i=0; $i < $manageResult->num_rows; $i++) { 
        $manageUsers= $manageResult->fetch_assoc();
    ?>
    
    <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900"><?= $i+1?></div>
                                
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                        <?php
    $ManageUserProfile = Database::search("SELECT path FROM profile_img WHERE user_email='".$manageUsers["email"]."'");
    $UserProfile = $ManageUserProfile->fetch_assoc();
    
    if ($UserProfile && isset($UserProfile["path"])) {
    ?>
        <img class="border object-center object-cover border-gray-300 h-10 w-10 rounded-full"
             src="<?= $UserProfile["path"]?>"
             alt="">
    <?php
    } else {
    ?>
        <img class="border object-center object-cover grayscale border-gray-300 h-10 w-10 rounded-full"
             src="./resources/new_user.png"
             alt="">
    <?php
    }
    ?>
                                        </div>
                                 
                                    </div>
                                </td>
    
                                <?php 
                                if($manageUsers["fname"]==!null || $manageUsers["lname"]){
    ?>
                                  <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900"><?=  $manageUsers["fname"] ." ".$manageUsers["lname"]?> </div> 
                                </td>
    <?php
                                }else{
                                    ?>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                 <div class="text-sm ps-10 text-gray-900">-</div> 
                                     </td>
                                  <?php
                                }
                                
                                ?>
    
    <td id="email" class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= $manageUsers["email"]?></td>
    
    
    
                              
    
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $manageUsers["mobile"]?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $manageUsers["joined_date"]?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex items-center justify-center">
                               
                               
                                <button id="blockbutton<?= $manageUsers["email"]?>" onclick="<?php if($manageUsers["status_status_id"]==1){?>blockUser('<?= $manageUsers['email'] ?>');<?php }else{?>unblockUser('<?= $manageUsers['email'] ?>');<?php }?>"
                                        class=" <?php if($manageUsers["status_status_id"]==1){?>hover:bg-red-200 text-red-700 border-red-600 <?php }else{?>hover:bg-green-200 text-green-700 border-green-600<?php }?> inline-flex items-center px-6 py-2 border  text-[16px] font-bold rounded  bg-white ">
                                        <?php if($manageUsers["status_status_id"]==1){?>
                                        block<?php
                                        }else{
                                            ?>
                                        unblock<?php
                                        }      
                                        ?>
                            </button>
                                </td>
                            </tr>
    <?php
    }
    ?> <!-- More people... -->
       </tbody>
          </table>
         <?php require_once "./views/partials/pagination.php";
          pagination($AllUsers['COUNT(`email`)'],"manageUsersPagination");
}else{
    ?>
    <script>window.location.href = "/manageUsers?id=1"</script><?php
}

}
                ?>
            </div>
        </div>
    </div>
</div>
<!-- product table start -->

<div>
    
</div>
<script src="./public/js/manageUsers.js"></script>
<?php require_once "./views/partials/footer.php";

?>
