<?php require_once "./views/partials/header.php";
require_once "./views/partials/nav.php";?>
  <main>
    <!-- Hero -->
    <div class="flex flex-col border-b border-gray-200 lg:border-0">

      <div class="relative">
        <div aria-hidden="true" class="hidden absolute w-1/2 h-full bg-gray-100 lg:block"></div>
        <div class="relative bg-gray-100 lg:bg-transparent">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:grid lg:grid-cols-2">
            <div class="max-w-2xl mx-auto py-24 lg:py-64 lg:max-w-none">
              <div class="lg:pr-16">
                <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl xl:text-6xl">Focus on what matters</h1>
                <p class="mt-4 text-xl text-gray-600">All the charts, datepickers, and notifications in the world can't beat checking off some items on a paper card.</p>
                <div class="mt-6">
                  <a href="#" class="inline-block bg-indigo-600 border border-transparent py-3 px-8 rounded-md font-medium text-white hover:bg-indigo-700">Shop Productivity</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full h-48 sm:h-64 lg:absolute lg:top-0 lg:right-0 lg:w-1/2 lg:h-full">
          <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-hero-half-width.jpg" alt="" class="w-full h-full object-center object-cover">
        </div>
      </div>
    </div>

    <!-- Category section -->
    <section aria-labelledby="category-heading" class="bg-gray-50">
      <div class="max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-baseline sm:justify-between">
          <h2 id="category-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">Shop by Category</h2>
          <a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">Browse all categories<span aria-hidden="true"> &rarr;</span></a>
        </div>

        <div class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:grid-rows-2 sm:gap-x-6 lg:gap-8">
          <div class="group aspect-w-2 aspect-h-1 rounded-lg overflow-hidden sm:aspect-h-1 sm:aspect-w-1 sm:row-span-2">
            <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-featured-category.jpg" alt="Two models wearing women's black cotton crewneck tee and off-white cotton crewneck tee." class="object-center object-cover group-hover:opacity-75">
            <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50"></div>
            <div class="p-6 flex items-end">
              <div>
                <h3 class="font-semibold text-white">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    New Arrivals
                  </a>
                </h3>
                <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
              </div>
            </div>
          </div>
          <div class="group aspect-w-2 aspect-h-1 rounded-lg overflow-hidden sm:relative sm:aspect-none sm:h-full">
            <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg" alt="Wooden shelf with gray and olive drab green baseball caps, next to wooden clothes hanger with sweaters." class="object-center object-cover group-hover:opacity-75 sm:absolute sm:inset-0 sm:w-full sm:h-full">
            <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0"></div>
            <div class="p-6 flex items-end sm:absolute sm:inset-0">
              <div>
                <h3 class="font-semibold text-white">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Accessories
                  </a>
                </h3>
                <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
              </div>
            </div>
          </div>
          <div class="group aspect-w-2 aspect-h-1 rounded-lg overflow-hidden sm:relative sm:aspect-none sm:h-full">
            <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg" alt="Walnut desk organizer set with white modular trays, next to porcelain mug on wooden desk." class="object-center object-cover group-hover:opacity-75 sm:absolute sm:inset-0 sm:w-full sm:h-full">
            <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0"></div>
            <div class="p-6 flex items-end sm:absolute sm:inset-0">
              <div>
                <h3 class="font-semibold text-white">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Workspace
                  </a>
                </h3>
                <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-6 sm:hidden">
          <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">Browse all categories<span aria-hidden="true"> &rarr;</span></a>
        </div>
      </div>
    </section>
   <!-- Collections -->
   <section aria-labelledby="collections-heading" class="bg-gray-100">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto py-16 sm:py-24 lg:py-32 lg:max-w-none">
          <h2 id="collections-heading" class="text-2xl font-extrabold text-gray-900">Collections</h2>

          <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">
            <div class="group relative">
              <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="w-full h-full object-center object-cover">
              </div>
              <h3 class="mt-6 text-sm text-gray-500">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Desk and Office
                </a>
              </h3>
              <p class="text-base font-semibold text-gray-900">Work from home accessories</p>
            </div>

            <div class="group relative">
              <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="w-full h-full object-center object-cover">
              </div>
              <h3 class="mt-6 text-sm text-gray-500">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Self-Improvement
                </a>
              </h3>
              <p class="text-base font-semibold text-gray-900">Journals and note-taking</p>
            </div>

            <div class="group relative">
              <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="w-full h-full object-center object-cover">
              </div>
              <h3 class="mt-6 text-sm text-gray-500">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Travel
                </a>
              </h3>
              <p class="text-base font-semibold text-gray-900">Daily commute essentials</p>
            </div>
          </div>
        </div>
      </div>
    </section>

   
    <!-- Featured section -->
    <section aria-labelledby="cause-heading">
      <div class="relative bg-gray-800 py-32 px-6 sm:py-40 sm:px-12 lg:px-16">
        <div class="absolute inset-0 overflow-hidden">
          <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-feature-section-full-width.jpg" alt="" class="w-full h-full object-center object-cover">
        </div>
        <div aria-hidden="true" class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
        <div class="relative max-w-3xl mx-auto flex flex-col items-center text-center">
          <h2 id="cause-heading" class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Long-term thinking</h2>
          <p class="mt-3 text-xl text-white">We're committed to responsible, sustainable, and ethical manufacturing. Our small-scale approach allows us to focus on quality and reduce our impact. We're doing our best to delay the inevitable heat-death of the universe.</p>
          <a href="#" class="mt-8 w-full block bg-white border border-transparent rounded-md py-3 px-8 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Read our story</a>
        </div>
      </div>
    </section>
 <!-- Sale and testimonials -->
 <div class="relative overflow-hidden">
   
   <!-- Testimonials -->
   <section aria-labelledby="testimonial-heading" class="relative py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:py-32 lg:px-8">
     <div class="max-w-2xl mx-auto lg:max-w-none">
       <h2 id="testimonial-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">What are people saying?</h2>

       <div class="mt-16 space-y-16 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-8">
         <blockquote class="sm:flex lg:block">
           <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="flex-shrink-0 text-gray-300">
             <path d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z" fill="currentColor" />
           </svg>
           <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
             <p class="text-lg text-gray-600">My order arrived super quickly. The product is even better than I hoped it would be. Very happy customer over here!</p>
             <cite class="mt-4 block font-semibold not-italic text-gray-900"> Sarah Peters, New Orleans </cite>
           </div>
         </blockquote>

         <blockquote class="sm:flex lg:block">
           <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="flex-shrink-0 text-gray-300">
             <path d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z" fill="currentColor" />
           </svg>
           <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
             <p class="text-lg text-gray-600">I had to return a purchase that didn’t fit. The whole process was so simple that I ended up ordering two new items!</p>
             <cite class="mt-4 block font-semibold not-italic text-gray-900"> Kelly McPherson, Chicago </cite>
           </div>
         </blockquote>

         <blockquote class="sm:flex lg:block">
           <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="flex-shrink-0 text-gray-300">
             <path d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z" fill="currentColor" />
           </svg>
           <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
             <p class="text-lg text-gray-600">Now that I’m on holiday for the summer, I’ll probably order a few more shirts. It’s just so convenient, and I know the quality will always be there.</p>
             <cite class="mt-4 block font-semibold not-italic text-gray-900"> Chris Paul, Phoenix </cite>
           </div>
         </blockquote>
       </div>
     </div>
   </section>
 </div>
    <!-- Favorites section -->
    <section aria-labelledby="favorites-heading">
      <div class="max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-baseline sm:justify-between">
          <h2 id="favorites-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">Our Favorites</h2>
          <a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">Browse all favorites<span aria-hidden="true"> &rarr;</span></a>
        </div>

        <div class="mt-6 grid grid-cols-1 gap-y-10 sm:grid-cols-3 sm:gap-y-0 sm:gap-x-6 lg:gap-x-8">
          <div class="group relative">
            <div class="w-full h-96 rounded-lg overflow-hidden group-hover:opacity-75 sm:h-auto sm:aspect-w-2 sm:aspect-h-3">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-01.jpg" alt="Model wearing women&#039;s black cotton crewneck tee." class="w-full h-full object-center object-cover">
            </div>
            <h3 class="mt-4 text-base font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Black Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">$32</p>
          </div>

          <div class="group relative">
            <div class="w-full h-96 rounded-lg overflow-hidden group-hover:opacity-75 sm:h-auto sm:aspect-w-2 sm:aspect-h-3">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-02.jpg" alt="Model wearing women&#039;s off-white cotton crewneck tee." class="w-full h-full object-center object-cover">
            </div>
            <h3 class="mt-4 text-base font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Off-White Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">$32</p>
          </div>

          <div class="group relative">
            <div class="w-full h-96 rounded-lg overflow-hidden group-hover:opacity-75 sm:h-auto sm:aspect-w-2 sm:aspect-h-3">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-03.jpg" alt="Model wearing women&#039;s burgundy red crewneck artwork tee with small white triangle overlapping larger black triangle." class="w-full h-full object-center object-cover">
            </div>
            <h3 class="mt-4 text-base font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Mountains Artwork Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">$36</p>
          </div>
        </div>

        <div class="mt-6 sm:hidden">
          <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">Browse all favorites<span aria-hidden="true"> &rarr;</span></a>
        </div>
      </div>
    </section>

    <!-- CTA section -->
    <section aria-labelledby="sale-heading">
      <div class="pt-32 overflow-hidden sm:pt-14">
        <div class="bg-gray-800">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative pt-48 pb-16 sm:pb-24">
              <div>
                <h2 id="sale-heading" class="text-4xl font-extrabold tracking-tight text-white md:text-5xl">
                  Final Stock.
                  <br>
                  Up to 50% off.
                </h2>
                <div class="mt-6 text-base">
                  <a href="#" class="font-semibold text-white">Shop the sale<span aria-hidden="true"> &rarr;</span></a>
                </div>
              </div>

              <div class="absolute -top-32 left-1/2 transform -translate-x-1/2 sm:top-6 sm:translate-x-0">
                <div class="ml-24 flex space-x-6 min-w-max sm:ml-3 lg:space-x-8">
                  <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                    <div class="flex-shrink-0">
                      <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg" alt="">
                    </div>

                    <div class="mt-6 flex-shrink-0 sm:mt-0">
                      <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg" alt="">
                    </div>
                  </div>
                  <div class="flex space-x-6 sm:-mt-20 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                    <div class="flex-shrink-0">
                      <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-01.jpg" alt="">
                    </div>

                    <div class="mt-6 flex-shrink-0 sm:mt-0">
                      <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-02.jpg" alt="">
                    </div>
                  </div>
                  <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                    <div class="flex-shrink-0">
                      <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg" alt="">
                    </div>

                    <div class="mt-6 flex-shrink-0 sm:mt-0">
                      <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php require_once "./views/partials/footer.php";
?>