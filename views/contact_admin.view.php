<?php
require_once "./views/partials/header.php";
require_once "./views/partials/nav.php";

?>
<div class="">

    <main class="max-w-7xl mx-auto pb-10 lg:py-12 lg:px-8">
        <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
            <?php require_once "./views/partials/user_profile_sidebar.php" ?>


            <div class="space-y-2  sm:px-6 lg:px-0 lg:col-span-9">

                <!-- content -->

                <div class="max-w-2xl  mx-auto px-4 lg:max-w-4xl lg:px-0">
                    <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">Contact Admin</h1>
                    <p class="mt-2 text-sm text-gray-500">Update your billing information. Please note that updating
                        your
                        location could affect your tax rates..</p>
                </div>
                <section class="bg-white ">
                    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">

                        <form action="#" class="space-y-8">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your
                                    email</label>
                                <input type="email" id="email"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  "
                                    placeholder="name@flowbite.com" required>
                            </div>
                            <div>
                                <label for="subject"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Subject</label>
                                <input type="text" id="subject"
                                    class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 "
                                    placeholder="Let us know how we can help you" required>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Your
                                    message</label>
                                <textarea id="message" rows="6"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 "
                                    placeholder="Leave a comment..."></textarea>
                            </div>
                            <button type="submit"
                                class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 ">Send
                                message</button>
                        </form>
                    </div>
                </section>

            </div>
        </div>
    </main>
</div>

<?php
require_once "./views/partials/footer.php";
?>