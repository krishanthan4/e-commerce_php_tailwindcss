<?php
include_once "./views/partials/header.php";
include_once "./connection2.php";
?>

<!-- signIn part start -->
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 " id="signInDiv">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
      alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Admin Sign In</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <div class="space-y-6" >
      <div class>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
        <div class="mt-2">
          <input id="adminEmail" name="email" type="email" autocomplete="email" 
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div>
        <button onclick="adminSignin();" 
          class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send
          Verification Code</button>
      </div>
    </div>
    <p class="mt-10 text-center text-sm text-gray-500">
      <a href="/signin" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Back to Customer
        Signin</a>
    </p>
  </div>
</div>

<!-- model -->
<div class="fixed z-10 inset-0 overflow-y-auto hidden" id="verificationModal">
  <div class="flex items-center justify-center  min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
    <div
      class="inline-block  align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
      role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <div class="absolute top-0 right-0 mt-4 mr-4">
        <button type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none" aria-label="Close"
          onclick="closeModal()">
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 w-full">
        <div class="sm:flex sm:items-start  w-full">
          <div
            class="mx-auto  flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 sm:mx-0 sm:h-10 sm:w-10">
            <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 9v2m0 4h.01m-6.938 4a1 1 0 001.378.918l10-4a1 1 0 000-1.836l-10-4a1 1 0 00-.742 1.836l7.225 2.89L5.435 17.08A1 1 0 005 18z" />
            </svg>
          </div>
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left  w-full">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">Admin Verification</h3>
            <div class="mt-2 max-w-lg">
              <label for="vcode" class="block text-sm font-medium text-gray-700">Enter Your Verification Code</label>
              <input type="text" name="vcode" id="verifyCode"
                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

          </div>
        </div>
      </div>
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <button type="button" onclick="verifyAdminCode();"
          class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">Verify</button>
        <button type="button"
          class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
          onclick="closeModal()">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- model -->



<!-- alert model -->
<?php require_once "./views/partials/alert.php"; ?>
<!--alert model -->

<script src="/public/js/adminSignin.js"></script>
<script src="/public/js/verifyAdminCode.js"></script>
<!-- signIn Part End -->
<?php
include_once "./views/partials/footer.php";

?>