<main id="verifyCodeModal" role="main" class="fixed z-50 inset-0 overflow-auto hidden">
                <div class="flex items-center justify-center min-h-screen p-4">
                    <div class="bg-white rounded-xl shadow-lg p-7">
                        <div class="text-center">
                            <h1 class="block text-2xl font-bold text-gray-800 dark:text-black">Verify You!</h1>
                    
                        </div>


                        <div class="mt-5">
                                <div class="grid gap-y-4">
                                    <div>
                                     


                                        <div class="col-span-12 mt-2 ">
                                            <label
                                                class="block text-sm font-medium leading-6 text-gray-900">Verification
                                                Code</label>
                                            <input type="text" id="verification_code"
                                                class="block pl-2 w-full mt-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>

                                    </div>
                                    <div class="flex gap-2 mt-2">
                                        <div class="w-3/4">
                                            <button
                                            onclick="verifyCode();"
                                                class="py-3 px-4 inline-flex justify-center w-full items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">Verify</button>
                                        </div>
                                        <div class="w-1/4">
                                            <button type="button" onclick="hideVerifyCodeModal();"
                                                class="py-3 px-4 inline-flex justify-center w-full items-center gap-2 rounded-md border border-transparent font-semibold bg-gray-500 text-white hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                        </div>
                    </div>
                </div>
            </main>