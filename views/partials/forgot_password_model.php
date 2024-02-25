<main id="fpmodal" role="main" class=" hidden fixed z-50 inset-0 overflow-auto ">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-xl shadow-lg p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-black">Forgot password?</h1>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    Remember your password?
                    <a class="cursor-pointer font-semibold leading-6 text-indigo-600 hover:text-indigo-500"
                        onclick="hideForgotPasswordModal();">
                        Sign In here
                    </a>
                </p>
            </div>


            <div class="mt-5">
                <div class="grid gap-y-4">
                    <div>
                        <div class="flex gap-2 mt-2">
                            <div class="w-1/2">
                                <label class="block text-sm font-medium leading-6 text-gray-900">New
                                    Password</label>
                                    <div class="mt-2 relative">
    <input id="type_password" type="password"
        placeholder="ex:- ****" 
        class="block pl-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

    <span class=" absolute inset-y-0 right-0 pr-2 flex items-center cursor-pointer" id="show_password" onclick="togglePassword();">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden" id="show_eye">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" id="hide_eye">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
        </svg>
    </span>
</div>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById("type_password");
        const type_retype_password = document.getElementById("type_retype_password");
        const showPasswordIcon = document.getElementById("show_eye");
        const hidePasswordIcon = document.getElementById("hide_eye");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            type_retype_password.type = "text";
            showPasswordIcon.classList.remove("hidden");
            hidePasswordIcon.classList.add("hidden");
        } else {
            passwordInput.type = "password";
            type_retype_password.type = "password";
            showPasswordIcon.classList.add("hidden");
            hidePasswordIcon.classList.remove("hidden");
        }
    }
</script>
                            </div>

                            <div class="w-1/2">
                                <label class="block text-sm font-medium leading-6 text-gray-900">Re-type
                                    Password</label>
                                <div class="mt-2 relative">
                                    <input id="type_retype_password" type="password"
                                        placeholder="ex:- ****" 
                                        class="block pl-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">  
                                        <span class=" absolute inset-y-0 right-0 pr-2 flex items-center cursor-pointer" id="show_password" onclick="togglePassword();">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden" id="show_eye">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" id="hide_eye">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
        </svg>
    </span>
                                                       </div>
                            </div>

                
                        </div>


                    </div>
                    <div class="flex gap-2 mt-2">
                        <div class="w-3/4">
                            <button onclick="resetPassword();"
                                class="py-3 px-4 inline-flex justify-center w-full items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">Reset
                                password</button>
                        </div>
                        <div class="w-1/4">
                            <button type="button" onclick="hideForgotPasswordModal();"
                                class="py-3 px-4 inline-flex justify-center w-full items-center gap-2 rounded-md border border-transparent font-semibold bg-gray-500 text-white hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
