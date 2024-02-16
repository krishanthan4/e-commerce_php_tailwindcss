
<?php require_once "./views/partials/header.php";
 require_once "./views/partials/nav.php";

?>
<div class="w-full mt-32">
    <nav class="absolute w-full z-50 flex flex-wrap items-center justify-between px-2 py-3 mb-3 lg:bg-transparent bg-white">
       <div class="flex container mx-auto flex flex-wrap items-center justify-between px-0 lg:px-4">
          <a class="text-sm font-bold leading-relaxed inline-flex items-center mr-4 py-2 whitespace-nowrap uppercase lg:text-white text-blueGray-500" href="#/"><img class="rounded-full mr-2" style="width: 30px;"><span>Notus Design System PRO</span></a><button class="ml-auto cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-blueGray-400 rounded bg-transparent block outline-none focus:outline-none text-blueGray-300 lg:hidden" type="button"><i class="fas fa-bars"></i></button>
          <div class="items-center w-full lg:flex lg:w-auto flex-grow duration-300 transition-all ease-in-out hidden">
             <ul class="lg:items-center flex flex-wrap list-none pl-0 mb-0 flex flex-col list-none pl-0 mb-0 lg:flex-row">
                <li><a href="javascript:;" class="hover:opacity-75 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold transition-all duration-150 ease-in-out lg:text-white text-blueGray-500"><i class="lg:text-blueGray-300 text-blueGray-500 far fa-file-alt text-lg leading-lg mr-2"></i> Docs</a></li>
             </ul>
             <ul class="lg:items-center lg:ml-auto flex flex-wrap list-none pl-0 mb-0 flex flex-col list-none pl-0 mb-0 lg:flex-row">
                <li class="relative">
                   <a class="hover:opacity-75 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold transition-all duration-150 ease-in-out lg:text-white text-blueGray-800" href="javascript:;">Demo Pages <i class="ml-1 fas fa-caret-down transition-all duration-200 ease-in-out transform "></i></a>
                   <div class="hidden  z-50">
                      <div class="origin-top-right bg-white text-base float-left p-2 border list-none text-left rounded-lg shadow-lg min-w-48 transition-all duration-100 ease-in-out transform scale-95 opacity-0 absolute "><span class="uppercase font-bold text-xs px-3 pt-4 block w-full whitespace-nowrap bg-transparent text-blueGray-400">Group 1</span><a href="javascript:;" class="text-sm px-3 py-2 block w-full whitespace-nowrap bg-transparent hover:bg-blueGray-100 rounded transition-all duration-100">Demo Page 1</a><a href="javascript:;" class="text-sm px-3 py-2 block w-full whitespace-nowrap bg-transparent hover:bg-blueGray-100 rounded transition-all duration-100">Demo Page 2</a><span class="uppercase font-bold text-xs px-3 pt-4 block w-full whitespace-nowrap bg-transparent text-blueGray-400">Group 2</span><a href="javascript:;" class="text-sm px-3 py-2 block w-full whitespace-nowrap bg-transparent hover:bg-blueGray-100 rounded transition-all duration-100">Demo Page 3</a><a href="javascript:;" class="text-sm px-3 py-2 block w-full whitespace-nowrap bg-transparent hover:bg-blueGray-100 rounded transition-all duration-100">Demo Page 4</a><span class="uppercase font-bold text-xs px-3 pt-4 block w-full whitespace-nowrap bg-transparent text-blueGray-400">Group 3</span><a href="javascript:;" class="text-sm px-3 py-2 block w-full whitespace-nowrap bg-transparent hover:bg-blueGray-100 rounded transition-all duration-100">Demo Page 5</a><a href="javascript:;" class="text-sm px-3 py-2 block w-full whitespace-nowrap bg-transparent hover:bg-blueGray-100 rounded transition-all duration-100">Demo Page 6</a><span class="uppercase font-bold text-xs px-3 pt-4 block w-full whitespace-nowrap bg-transparent text-blueGray-400">Group 4</span><a href="javascript:;" class="text-sm px-3 py-2 block w-full whitespace-nowrap bg-transparent hover:bg-blueGray-100 rounded transition-all duration-100">Demo Page 7</a><a href="javascript:;" class="text-sm px-3 py-2 block w-full whitespace-nowrap bg-transparent hover:bg-blueGray-100 rounded transition-all duration-100">Demo Page 8</a></div>
                   </div>
                </li>
                <li><a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75 transition-all duration-150 ease-in-out lg:text-white text-blueGray-500" href="https://www.facebook.com/CreativeTim" target="_blank"><i class="fab fa-facebook text-lg leading-lg opacity-75 hover:opacity-50 lg:text-white text-blueGray-500"></i><span class="lg:hidden lg:ml-0 ml-2">Share on Facebook</span></a></li>
                <li><a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75 transition-all duration-150 ease-in-out lg:text-white text-blueGray-500" href="https://twitter.com/CreativeTim" target="_blank"><i class="fab fa-twitter text-lg leading-lg opacity-75 hover:opacity-50 lg:text-white text-blueGray-500"></i><span class="lg:hidden lg:ml-0 ml-2">Tweet on Twitter</span></a></li>
                <li><a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75 transition-all duration-150 ease-in-out lg:text-white text-blueGray-500" href="https://github.com/creativetimofficial" target="_blank"><i class="fab fa-github text-lg leading-lg opacity-75 hover:opacity-50 lg:text-white text-blueGray-500"></i><span class="lg:hidden lg:ml-0 ml-2">Star on Github</span></a></li>
             </ul>
          </div>
       </div>
    </nav>
    <section class="flex relative items-center p-0 min-h-screen-60 max-h-440-px">
       <div class="absolute w-full h-full block bg-blueGray-900 opacity-75 z-1 left-0 top-0"></div>
       <div class="bg-blueGray-800 w-full h-full absolute bg-cover bg-50 z-0" style="background-image: url('../../assets/img/pages/nathan-dumlao.jpg');"></div>
       <div class="relative h-full text-center text-white container mx-auto px-4 z-3 mb-16">
          <div class="justify-center flex flex-wrap -mx-4">
             <div class="px-12 px-4 relative w-full lg:w-6/12 w-full md:w-8/12">
                <h1 class="text-4xl font-bold leading-tight">Invoice</h1>
                <p class="text-lg opacity-75 pt-2">Everyone’s born confident, and everything’s taken away from</p>
             </div>
          </div>
       </div>
       <div class="w-full bottom-0 absolute z-2">
          <div class="w-full pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px);">
             <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-blueGray-100 fill-current" points="2560 0 2560 100 0 100"></polygon>
             </svg>
          </div>
       </div>
    </section>
    <section class="relative bg-blueGray-100 py-12 z-2">
       <div class="container mx-auto px-4 -mt-64">
          <div class="flex flex-wrap -mx-4">
             <div class="mx-auto px-4 relative w-full lg:w-10/12">
                <div class="bg-white shadow-lg rounded-lg relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg">
                   <div class="px-5 pt-6 pb-4 border-b border-blueGray-200">
                      <div class="justify-between flex flex-wrap -mx-4">
                         <div class="text-left px-4 relative w-full md:w-4/12">
                            <div class="text-left">
                               <img alt="..." src="https://demos.creative-tim.com/notus-pro-react/static/media/ct-logo-text-black.3f86d99c.png" class="w-full mb-2" style="max-width: 150px;">
                               <h6 class="block capitalize text-blueGray-700 mt-6">St. Independence Embankment, 050105 Bucharest, Romania</h6>
                               <h6 class="text-blueGray-700">tel: +4 (074) 1090873</h6>
                            </div>
                         </div>
                         <div class="text-left px-4 relative w-full lg:w-3/12 w-full md:w-5/12">
                            <div class="flex justify-center py-6 lg:pt-6 pt-12">
                               <div class="text-left">
                                  <h3 class="text-2xl font-bold leading-normal mt-0 mb-2">Billed to:</h3>
                                  <h6 class="block mt-2 mb-0 text-xl">James Thompson</h6>
                                  <p class="text-blueGray-500">Bld Mihail Kogalniceanu, 7652 Bucharest, Romania</p>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="md:justify-between flex flex-wrap -mx-4">
                         <div class="text-left px-4 relative w-full md:w-4/12">
                            <h4 class="text-2xl font-semibold leading-normal mb-2 mt-12 text-left">Invoice no</h4>
                            <h3 class="text-2xl font-normal leading-normal mt-1 mb-2 font-light">#0453119</h3>
                         </div>
                         <div class="text-left px-4 relative w-full lg:w-3/12 w-full md:w-5/12">
                            <div class="flex justify-center py-6 lg:pt-4">
                               <div class="mt-12">
                                  <p class="float-left mb-0">Invoice date:</p>
                                  <p class="ml-4 float-right mb-0">06/03/2021</p>
                                  <br>
                                  <p class="float-left">Due date:</p>
                                  <p class="ml-4 float-right">11/03/2021</p>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="px-4 py-5 flex-auto">
                      <table class="text-right w-full mb-4 text-blueGray-800 border-collapse">
                         <thead class="bg-blueGray-800">
                            <tr class="text-right text-white uppercase font-light">
                               <th class="p-3 border-t" scope="col">Item</th>
                               <th class="p-3 border-t" scope="col">Qty</th>
                               <th class="p-3 border-t" scope="col">Rate</th>
                               <th class="p-3 border-t" scope="col">Amount</th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                               <td class="py-4 p-3 border-t">Premium Support</td>
                               <td class="py-4 p-3 border-t">1</td>
                               <td class="py-4 p-3 border-t">$9.00</td>
                               <td class="py-4 p-3 border-t">$9.00</td>
                            </tr>
                            <tr>
                               <td class="py-4 p-3 border-t">Notus Design System PRO</td>
                               <td class="py-4 p-3 border-t">2</td>
                               <td class="py-4 p-3 border-t">$150.00</td>
                               <td class="py-4 p-3 border-t">$300.00</td>
                            </tr>
                            <tr>
                               <td class="py-4 p-3 border-t">Parts for service</td>
                               <td class="py-4 p-3 border-t">1</td>
                               <td class="py-4 p-3 border-t">$89.00</td>
                               <td class="py-4 p-3 border-t">$89.00</td>
                            </tr>
                         </tbody>
                         <tfoot>
                            <tr class="mt-4">
                               <th class="border-b-0 p-3 border-t">
                                  <p class="text-lg font-semibold pt-2">Total</p>
                               </th>
                               <th class="border-b-0 p-3 border-t" colspan="3">
                                  <p class="text-right text-lg font-semibold pt-2">$750</p>
                               </th>
                            </tr>
                         </tfoot>
                      </table>
                   </div>
                   <div class="px-4 py-3 border-t border-blueGray-200">
                      <div class="text-right ml-auto px-4 relative w-full md:w-5/12">
                         <h5 class="text-2xl font-semibold leading-normal mt-0 mb-2">Thank you!</h5>
                         <p class="">If you encounter any issues can contact us</p>
                         <h6 class="flex items-center justify-end mb-4"><span class="mr-2">email:</span><span class="text-blueGray-500">support@creative-tim.com</span></h6>
                      </div>
                   </div>
                </div>
                <div class="float-right"><button class="inline-block outline-none focus:outline-none align-middle transition-all duration-150 ease-in-out uppercase border border-solid font-bold last:mr-0 mr-2  text-white bg-pink-500 border-pink-500 active:bg-pink-600 active:border-pink-600 text-sm px-6 py-2 shadow hover:shadow-lg rounded-md"><i class="fas fa-print mr-2"></i>Print</button></div>
             </div>
          </div>
       </div>
    </section>
    <div class="pt-12 pb-4 border-b bg-blueGray-100">
       <div class="container mx-auto px-4">
          <div class="justify-between items-center flex flex-wrap -mx-4">
             <div class="px-4 relative w-full lg:w-6/12">
                <h3 class="text-xl font-bold leading-normal mt-0">Thank you for supporting us!</h3>
                <h4 class="leading-normal mt-1 mb-2 text-blueGray-500">Let's get in touch on any of these platforms.</h4>
             </div>
             <div class="text-right pr-6 px-4 relative w-full lg:w-6/12"><button class="inline-block outline-none focus:outline-none align-middle transition-all duration-150 ease-in-out uppercase border border-solid font-bold last:mr-0 mr-2  text-blueGray-800 bg-white border-white active:bg-blueGray-100 active:border-blueGray-100 text-xs px-3 py-2 shadow hover:shadow-md rounded-md"><i class="fab fa-twitter"></i></button><button class="inline-block outline-none focus:outline-none align-middle transition-all duration-150 ease-in-out uppercase border border-solid font-bold last:mr-0 mr-2  text-blueGray-800 bg-white border-white active:bg-blueGray-100 active:border-blueGray-100 text-xs px-3 py-2 shadow hover:shadow-md rounded-md"><i class="fab fa-facebook"></i></button><button class="inline-block outline-none focus:outline-none align-middle transition-all duration-150 ease-in-out uppercase border border-solid font-bold last:mr-0 mr-2  text-blueGray-800 bg-white border-white active:bg-blueGray-100 active:border-blueGray-100 text-xs px-3 py-2 shadow hover:shadow-md rounded-md"><i class="fab fa-dribbble"></i></button><button class="inline-block outline-none focus:outline-none align-middle transition-all duration-150 ease-in-out uppercase border border-solid font-bold last:mr-0 mr-2  text-blueGray-800 bg-white border-white active:bg-blueGray-100 active:border-blueGray-100 text-xs px-3 py-2 shadow hover:shadow-md rounded-md"><i class="fab fa-github"></i></button></div>
          </div>
       </div>
    </div>
    <footer class="bg-blueGray-100">
       <div class="container mx-auto px-4">
          <div class="items-center xl:justify-between flex flex-wrap -mx-4">
             <div class="px-4 relative w-full xl:w-6/12 w-full sm:w-full">
                <div class="text-center xl:text-left py-6 text-sm text-blueGray-500">Copyright © 2021<a href="https://www.creative-tim.com" target="_blank" class="font-semibold ml-1">Creative Tim</a>. All rights reserved.</div>
             </div>
             <div class="px-4 relative w-full xl:w-6/12 w-full sm:w-full">
                <ul class="justify-center xl:justify-end mx-auto flex flex-wrap list-none pl-0 mb-0">
                   <li><a href="https://www.creative-tim.com" target="_blank" class="text-sm block px-4 bg-transparent no-underline text-blueGray-500 hover:text-blueGray-700 py-4 md:py-6 mx-auto">Creative Tim</a></li>
                   <li><a href="https://www.creative-tim.com/presentation" target="_blank" class="text-sm block px-4 bg-transparent no-underline text-blueGray-500 hover:text-blueGray-700 py-4 md:py-6 mx-auto">About us</a></li>
                   <li><a href="https://www.creative-tim.com/blog" target="_blank" class="text-sm block px-4 bg-transparent no-underline text-blueGray-500 hover:text-blueGray-700 py-4 md:py-6 mx-auto">Blog</a></li>
                </ul>
             </div>
          </div>
       </div>
    </footer>
 </div>

<?php require_once "./views/partials/footer.php";


?>