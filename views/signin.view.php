<?php
include_once "./views/partials/header.php";
include_once "./connection.php";
?>

<!-- signIn part start -->


<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 " id="signInDiv">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
      alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
  </div>
  <?php
                    $email = "";
                    $password = "";

                    if (isset($_COOKIE["email"])) {
                        $email = $_COOKIE["email"];
                    }

                    if (isset($_COOKIE["password"])) {
                        $password = $_COOKIE["password"];
                    }

                    ?>
  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm space-y-6">

    <div>
      <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
      <div class="mt-2">
        <input id="email" name="email" type="email" autocomplete="email"  value="<?php echo $email; ?>"
          class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div>
    </div>

    <div>
      <div class="flex items-center justify-between">
        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
        <div class="text-sm">
          <div onclick="forgotPassword();" class="font-semibold cursor-pointer text-indigo-600 hover:text-indigo-500">Forgot password?</div>
        </div>
      </div>
      <div class="mt-2">
        <input id="password" name="password" type="password" autocomplete="current-password"  value="<?php echo $password ?>"
          class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div>
    </div>

    <div class="flex">
                                <div class="checkbox-wrapper-33 mt-2   flex flex-col items-center justify-center gap-2">
                                    <label class="checkbox ">
                                 
                                            <input id="rememberMe" type="checkbox" value="" class="w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 rounded focus:ring-indigo-500  focus:ring-1 ">
                                    </label>
                                </div>
                                <label class="block text-sm font-medium leading-6 text-gray-900 ">Remember
                                    Me</label>
                            </div>

    <div>
      <button onclick="signIn();"
        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
        in</button>
    </div>


    <p class="mt-10 text-center text-sm text-gray-500">
      Not a member?
      <a href="/signup">
        <button class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign Up</button>

      </a>
    </p>
  </div>
</div>
<!-- signIn Part End -->

<!-- alert model -->
    <?php require_once "./views/partials/alert.php"; ?>
<!--alert model -->

<!-- forgotPassword Model -->
<?php require_once "./views/partials/verify_code_model.php"; ?>
<?php require_once "./views/partials/forgot_password_model.php"; ?>
<!-- forgotPassword Model -->

<!-- black cover -->
<div id="modal-backdrop" class="fixed inset-0 bg-black bg-opacity-30  hidden"></div>
<script src="./public/js/signIn.js"></script>
<script src="./public/js/verifyCode.js"></script>
<!-- <script src="./public/js/forgotPassword.js"></script> -->





<!-- Sign Up end -->
<?php include_once "./views/partials/footer.php" ?>