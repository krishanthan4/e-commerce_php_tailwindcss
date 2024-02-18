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
      <div class="checkbox-wrapper-33 mt-2">
        <label class="checkbox">
          <input class="checkbox__trigger visuallyhidden" type="checkbox" id="rememberMe" />
          <span class="checkbox__symbol">
            <svg aria-hidden="true" class="icon-checkbox" width="28px" height="28px" viewBox="0 0 28 28" version="1"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M4 14l8 7L24 7"></path>
            </svg>
          </span>

        </label>
      </div>
      <label class="block text-sm font-medium leading-6 text-gray-900 mt-2">Remember
        Me</label>
    </div>
    <style>
      .checkbox-wrapper-33 {
        --s-xsmall: 0.625em;
        --s-small: 1.2em;
        --border-width: 1px;
        --c-primary: #5F11E8;
        --c-primary-20-percent-opacity: rgb(95 17 232 / 20%);
        --c-primary-10-percent-opacity: rgb(95 17 232 / 10%);
        --t-base: 0.4s;
        --t-fast: 0.2s;
        --e-in: ease-in;
        --e-out: cubic-bezier(.11, .29, .18, .98);
      }

      .checkbox-wrapper-33 .visuallyhidden {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }

      .checkbox-wrapper-33 .checkbox {
        display: flex;
        align-items: center;
        justify-content: flex-start;
      }

      .checkbox-wrapper-33 .checkbox+.checkbox {
        margin-top: var(--s-small);
      }

      .checkbox-wrapper-33 .checkbox__symbol {
        display: inline-block;
        display: flex;
        margin-right: calc(var(--s-small) * 0.7);
        border: var(--border-width) solid var(--c-primary);
        position: relative;
        border-radius: 0.1em;
        width: 1.5em;
        height: 1.5em;
        transition: box-shadow var(--t-base) var(--e-out), background-color var(--t-base);
        box-shadow: 0 0 0 0 var(--c-primary-10-percent-opacity);
      }

      .checkbox-wrapper-33 .checkbox__symbol:after {
        content: "";
        position: absolute;
        top: 0.5em;
        left: 0.5em;
        width: 0.25em;
        height: 0.25em;
        background-color: var(--c-primary-20-percent-opacity);
        opacity: 0;
        border-radius: 3em;
        transform: scale(1);
        transform-origin: 50% 50%;
      }

      .checkbox-wrapper-33 .checkbox .icon-checkbox {
        width: 1em;
        height: 1em;
        margin: auto;
        fill: none;
        stroke-width: 3;
        stroke: currentColor;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-miterlimit: 10;
        color: var(--c-primary);
        display: inline-block;
      }

      .checkbox-wrapper-33 .checkbox .icon-checkbox path {
        transition: stroke-dashoffset var(--t-fast) var(--e-in);
        stroke-dasharray: 30px, 31px;
        stroke-dashoffset: 31px;
      }

      .checkbox-wrapper-33 .checkbox__textwrapper {
        margin: 0;
      }

      .checkbox-wrapper-33 .checkbox_trigger:checked+.checkbox_symbol:after {
        -webkit-animation: ripple-33 1.5s var(--e-out);
        animation: ripple-33 1.5s var(--e-out);
      }

      .checkbox-wrapper-33 .checkbox_trigger:checked+.checkbox_symbol .icon-checkbox path {
        transition: stroke-dashoffset var(--t-base) var(--e-out);
        stroke-dashoffset: 0px;
      }

      .checkbox-wrapper-33 .checkbox_trigger:focus+.checkbox_symbol {
        box-shadow: 0 0 0 0.25em var(--c-primary-20-percent-opacity);
      }

      @-webkit-keyframes ripple-33 {
        from {
          transform: scale(0);
          opacity: 1;
        }

        to {
          opacity: 0;
          transform: scale(20);
        }
      }

      @keyframes ripple-33 {
        from {
          transform: scale(0);
          opacity: 1;
        }

        to {
          opacity: 0;
          transform: scale(20);
        }
      }
    </style>
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
<script src="./public/js/forgotPassword.js"></script>




<!-- Sign Up end -->
<?php include_once "./views/partials/footer.php" ?>