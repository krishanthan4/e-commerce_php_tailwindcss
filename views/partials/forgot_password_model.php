<main id="fpmodal" role="main" class="fixed z-50 inset-0 overflow-auto hidden">
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

                        <div id="toast-default2"
                            class=" flex items-center shadow max-w-xs p-4 border-[1px] text-white bg-white rounded-lg   dark:bg-white hidden"
                            role="alert">
                            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-red-600 dark:text-white"
                                id="iconMsg2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-3 text-sm font-normal dark:text-red-600" id="msg2"></div>
                            <button type="button"
                                class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-white dark:hover:text-white dark:bg-red-500 dark:hover:bg-red-600"
                                id="msgbtn2" data-collapse-toggle="toast-default" aria-label="Close"
                                onclick="hideForgotPasswordModal();">
                                <span class="sr-only">Close</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>

                        <div class="mt-5">
                                <div class="grid gap-y-4">
                                    <div>
                                        <div class="flex gap-2 mt-2">
                                            <div class="w-1/2">
                                                <label class="block text-sm font-medium leading-6 text-gray-900">New
                                                    Password</label>
                                                <div class="mt-2 relative">
                                                    <input id="password" type="password"
                                                        autocomplete="new-password" placeholder="ex:- ****"
                                                        maxlength="18"
                                                        class="block pl-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                                                    <span
                                                        class="material-icons-sharp absolute inset-y-0 right-0 pr-2 flex items-center cursor-pointer"
                                                        onmousedown="handleMouseDown('passwordInput', 'iconInput')"
                                                        onmouseup="handleMouseUp('passwordInput', 'iconInput')"
                                                        onmouseleave="handleMouseUp('passwordInput', 'iconInput')">
                                                        visibility_off
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="w-1/2">
                                                <label class="block text-sm font-medium leading-6 text-gray-900">Re-type
                                                    Password</label>
                                                <div class="mt-2 relative">
                                                    <input id="retype_password" type="password"
                                                        autocomplete="new-password" placeholder="ex:- ****"
                                                        maxlength="18"
                                                        class="block pl-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                                                    <span
                                                        class="material-icons-sharp absolute inset-y-0 right-0 pr-2 flex items-center cursor-pointer"
                                                        onmousedown="handleMouseDown('passwordInput1', 'iconInput1')"
                                                        onmouseup="handleMouseUp('passwordInput1', 'iconInput1')"
                                                        onmouseleave="handleMouseUp('passwordInput1', 'iconInput1')">
                                                        visibility_off
                                                    </span>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="flex gap-2 mt-2">
                                        <div class="w-3/4">
                                            <button
                                            onclick="resetPassword();"
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