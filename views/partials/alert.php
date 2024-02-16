<?php require_once "./views/partials/header.php";
 require_once "./views/partials/nav.php";

?>
<body class="bg-amber-100 px-20 py-10">

    <!-- This button is used to call the showToast() function -->
    <div class="mt-10 space-x-5">
        <button onclick="showToast()" class="px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white">Show Toast</button>
    </div>

    <!-- Implement the toast -->
    <div id="myToast"
        class="hidden fixed right-10 bottom-10 px-5 py-4 border-r-8 border-blue-500 bg-white drop-shadow-lg">
        <p class="text-sm">
            <!-- Polish the toast with an circle blue "i" (stands for information) -->
            <span class="mr-2 inline-block px-3 py-1 rounded-full bg-blue-500 text-white font-extrabold">i</span>
            This is a toast. Welcome to SlingAcademy.com
        </p>
    </div>

    <!-- Javascript code -->
    <script>
        function showToast() {
            // Show the toast
            document.getElementById("myToast").classList.remove("hidden");
            // Hide the toast after 5 seconds (5000ms)
            // you can set a shorter/longer time by replacing "5000" with another number
            setTimeout(function () {
                document.getElementById("myToast").classList.add("hidden");
            }, 5000);
        }

    </script>
</body>
<?php require_once "./views/partials/footer.php"?>