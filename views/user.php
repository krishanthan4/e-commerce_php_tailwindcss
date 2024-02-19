<?php 
require_once "./views/partials/header.php";
require_once "./views/partials/nav.php";


?>

<?php
require_once "./views/partials/footer.php";

?>

<!-- home for you -->
<p class="mt-4 text-base font-medium text-gray-900">
          <?= $product["condition_name"] ?>
        </p>
        <p class="mt-4 text-base font-medium text-gray-900">
          <?php if ($product["qty"] !== 0) {
      echo ($product["qty"]); ?>Items Available
          <?php } else {
            ?>
            Out of Stock
            <?php
          } ?>
        </p>