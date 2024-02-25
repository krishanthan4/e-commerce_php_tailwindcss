<?php require_once "./views/partials/carousel.php"; ?>
<?php require_once "./views/partials/category.php";

?>
<!-- Product grid -->
<section aria-labelledby="products-heading" class="max-w-7xl mx-auto overflow-hidden sm:px-6 lg:px-8">
  <p class="text-xl p-3">Just For You</p>
  <div class="-mx-px  gap-1 grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-6">
<?php require_once "./views/partials/home_product_card.php" ?>
  </div>
</section>

<script src="./public/js/singleProductView.js"></script>
<script src="./public/js/homePagination.php"></script>
<?php require_once "./views/partials/pagination.php" ?>
