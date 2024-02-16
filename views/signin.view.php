<?php
 include_once "./views/partials/header.php";
include_once "./connection.php";
?>

<!-- signIn part start -->
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 " id="signInDiv">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="#" method="POST">
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
        <div class="mt-2">
          <input id="signIn_email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          <div class="text-sm">
            <a href="" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
          </div>
        </div>
        <div class="mt-2">
          <input id="signIn_password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <button onclick="signInProcess();" type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      Not a member?
<a href="/signup">
<button  class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign Up</button>

</a>
    </p>
  </div>
</div>
<!-- signIn Part End -->




<?php require_once "./views/partials/forgot_password_model.view.php";?>
<!-- black cover -->
<div id="modal-backdrop" class="fixed inset-0 bg-black bg-opacity-70 backdrop-blur-md hidden"></div>
<script>
function showForgotPasswordModal() {

var modal = document.getElementById("fpmodal");
var backdrop = document.getElementById("modal-backdrop");


modal.classList.remove("hidden");
backdrop.classList.remove("hidden");


document.body.classList.add("overflow-hidden");
}


function hideForgotPasswordModal() {

var modal = document.getElementById("fpmodal");
var backdrop = document.getElementById("modal-backdrop");

modal.classList.add("hidden");
backdrop.classList.add("hidden");


document.body.classList.remove("overflow-hidden");
}



let mouseDown = false;

function handleMouseDown(inputId) {
mouseDown = true;
togglePasswordVisibility(inputId);
}

function handleMouseUp(inputId) {
mouseDown = false;
togglePasswordVisibility(inputId);  // Call the same function for both mouse down and up
}

function togglePasswordVisibility(inputId) {
const passwordInput = document.getElementById(inputId);
const icon = passwordInput.nextElementSibling;

if (passwordInput.type === 'password' && mouseDown) {
    passwordInput.type = 'text';
    icon.textContent = 'visibility';
} else {
    passwordInput.type = 'password';
    icon.textContent = 'visibility_off';
}
}
</script>
<!-- Sign Up end -->
<?php include_once "./views/partials/footer.php"?>
