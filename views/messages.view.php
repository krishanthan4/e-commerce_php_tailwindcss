

<?php require_once "./views/partials/header.php";
 require_once "./views/partials/nav.php";

?>

<div class="relative w-full ct-docs-disable-nav-fixed">
    
    <nav class="w-full z-50 flex flex-wrap items-center justify-between px-2 py-3 mb-0 bg-blueGray-800 shadow-md">
       <div class="flex container mx-auto flex flex-wrap items-center justify-between px-0 lg:px-4">
          <a class="text-sm font-bold leading-relaxed inline-flex items-center mr-4 py-2 whitespace-nowrap uppercase text-white" href="#/"><img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/creative-tim/logo.png" class="rounded-full mr-2" style="width: 30px;"><span>Creative Tim</span></a><button class="ml-auto cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-blueGray-400 rounded bg-transparent block outline-none focus:outline-none text-blueGray-300 lg:hidden" type="button"><i class="fas fa-bars"></i></button>
          <div class="items-center w-full lg:flex lg:w-auto flex-grow duration-300 transition-all ease-in-out hidden">
             <ul class="lg:items-center flex flex-wrap list-none pl-0 mb-0 flex flex-col list-none pl-0 mb-0 lg:flex-row">
                <li><a href="javascript:;" class="hover:opacity-75 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold transition-all duration-150 ease-in-out text-white">Elements</a></li>
                <li><a href="javascript:;" class="hover:opacity-75 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold transition-all duration-150 ease-in-out text-white">Sections</a></li>
                <li class="relative">
                   <a class="hover:opacity-75 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold transition-all duration-150 ease-in-out text-white" href="javascript:;">Demo Pages <i class="ml-1 fas fa-caret-down transition-all duration-200 ease-in-out transform "></i></a>
                   <div class="hidden  z-50">
                      <div class="origin-top-right bg-white text-base float-left p-2 border list-none text-left rounded-lg shadow-lg min-w-48 transition-all duration-100 ease-in-out transform scale-95 opacity-0 absolute "><span class="uppercase font-bold text-xs px-3 pt-4 block w-full whitespace-nowrap bg-transparent text-blueGray-400">Group 1</span><a href="javascript:;" class="text-sm px-3 py-2 block w-full whitespace-nowrap bg-transparent hover:bg-blueGray-100 rounded transition-all duration-100">Demo Page 1</a><a href="javascript:;" class="text-sm px-3 py-2 block w-full whitespace-nowrap bg-transparent hover:bg-blueGray-100 rounded transition-all duration-100">Demo Page 2</a><span class="uppercase font-bold text-xs px-3 pt-4 block w-full whitespace-nowrap bg-transparent text-blueGray-400">Group 2</span><a href="javascript:;" class="text-sm px-3 py-2 block w-full whitespace-nowrap bg-transparent hover:bg-blueGray-100 rounded transition-all duration-100">Demo Page 3</a><a href="javascript:;" class="text-sm px-3 py-2 block w-full whitespace-nowrap bg-transparent hover:bg-blueGray-100 rounded transition-all duration-100">Demo Page 4</a><span class="uppercase font-bold text-xs px-3 pt-4 block w-full whitespace-nowrap bg-transparent text-blueGray-400">Group 3</span><a href="javascript:;" class="text-sm px-3 py-2 block w-full whitespace-nowrap bg-transparent hover:bg-blueGray-100 rounded transition-all duration-100">Demo Page 5</a><a href="javascript:;" class="text-sm px-3 py-2 block w-full whitespace-nowrap bg-transparent hover:bg-blueGray-100 rounded transition-all duration-100">Demo Page 6</a><span class="uppercase font-bold text-xs px-3 pt-4 block w-full whitespace-nowrap bg-transparent text-blueGray-400">Group 4</span><a href="javascript:;" class="text-sm px-3 py-2 block w-full whitespace-nowrap bg-transparent hover:bg-blueGray-100 rounded transition-all duration-100">Demo Page 7</a><a href="javascript:;" class="text-sm px-3 py-2 block w-full whitespace-nowrap bg-transparent hover:bg-blueGray-100 rounded transition-all duration-100">Demo Page 8</a></div>
                   </div>
                </li>
             </ul>
             <ul class="lg:items-center lg:ml-auto flex flex-wrap list-none pl-0 mb-0 flex flex-col list-none pl-0 mb-0 lg:flex-row">
                <li><a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75 transition-all duration-150 ease-in-out text-white" href="https://www.facebook.com/CreativeTim" target="_blank"><i class="fab fa-facebook text-lg leading-lg opacity-75 hover:opacity-50 text-white"></i><span class="lg:hidden lg:ml-0 ml-2">Share on Facebook</span></a></li>
                <li><a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75 transition-all duration-150 ease-in-out text-white" href="https://www.instagram.com/creativetimofficial/" target="_blank"><i class="fab fa-instagram text-lg leading-lg opacity-75 hover:opacity-50 text-white"></i><span class="lg:hidden lg:ml-0 ml-2">Follow on Instagram</span></a></li>
                <li><a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75 transition-all duration-150 ease-in-out text-white" href="https://twitter.com/CreativeTim" target="_blank"><i class="fab fa-twitter text-lg leading-lg opacity-75 hover:opacity-50 text-white"></i><span class="lg:hidden lg:ml-0 ml-2">Tweet on Twitter</span></a></li>
                <li><a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75 transition-all duration-150 ease-in-out text-white" href="https://github.com/creativetimofficial" target="_blank"><i class="fab fa-github text-lg leading-lg opacity-75 hover:opacity-50 text-white"></i><span class="lg:hidden lg:ml-0 ml-2">Star on Github</span></a></li>
             </ul>
          </div>
       </div>
    </nav>
    
    <section class="flex relative items-center p-0 min-h-screen-60 max-h-440-px">
       <div class="absolute w-full h-full block bg-blueGray-900 opacity-75 z-1 left-0 top-0"></div>
       <div class="bg-blueGray-800 w-full h-full absolute bg-cover bg-50 z-0" style="background-image: url('../../assets/img/broofoac.jpg');"></div>
       <div class="relative h-full text-center text-white container mx-auto px-4 z-3 mb-16">
          <div class="justify-center flex flex-wrap -mx-4">
             <div class="px-12 px-4 relative w-full lg:w-6/12 w-full md:w-8/12">
                <h1 class="text-4xl font-bold leading-tight">Chat / Messages</h1>
                <p class="text-lg opacity-75 pt-2">Don’t be afraid to be wrong because you can’t learn anything from a compliment.</p>
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
    <section class="relative bg-blueGray-100 py-4 z-2">
       <div class="container mx-auto px-4 -mt-24">
          <div class="flex flex-wrap justify-center">
             <div class="px-4 relative w-full lg:w-4/12">
                <div class="flex justify-center bg-white border-0 shadow-lg rounded-lg relative flex flex-col min-w-0 break-words w-full mb-6">
                   <div class="bg-blueGray-200 rounded-t-lg">
                      <div class="my-4 mb-3 px-3 relative">
                         <div class="relative flex w-full flex-wrap items-stretch mb-3"><span class="z-10 h-full flex absolute text-center text-blueGray-300 text-sm items-center w-8 pl-3"><i class="fas fa-search"></i></span><input placeholder="Search contact" class="border-transparent shadow px-3 py-2 text-sm  w-full placeholder-blueGray-200 text-blueGray-700 relative bg-white rounded-md outline-none focus:ring focus:ring-lightBlue-500 focus:ring-1 focus:border-lightBlue-500 border border-solid transition duration-200 pl-10 "></div>
                      </div>
                   </div>
                   <div class="mt-4 flex pl-0 mb-3 flex-col">
                      <div class="mx-4 rounded-md relative block my-1 bg-blueGray-800 text-white">
                         <a href="javascript:;">
                            <div class="flex items-center p-3">
                               <img src="https://demos.creative-tim.com/notus-pro-react/static/media/christian.5e3b567c.jpg" class="rounded-full max-w-40-px" alt="...">
                               <div class="flex-1">
                                  <div class="justify-between items-center">
                                     <h6 class="text-lg font-semibold leading-normal pl-3 inline-block">Charlie Watson</h6>
                                     <p class="text-blueGray-200 uppercase font-bold text-xs inline-block float-right text-blueGray-200">Online<span class="p-1 mt-2 ml-2 text-xs font-semibold inline-block uppercase last:mr-0 mr-1 p-1 rounded bg-emerald-400"></span></p>
                                     <div class="pl-3"><span class="block truncate text-blueGray-100 font-normal">Typing...</span></div>
                                  </div>
                               </div>
                            </div>
                         </a>
                      </div>
                      <div class="mx-4 rounded-md relative block my-1 bg-blueGray-200 text-blueGray-800">
                         <a href="javascript:;">
                            <div class="flex items-center p-3">
                               <img src="https://demos.creative-tim.com/notus-pro-react/static/media/team-2.b81557ef.jpg" class="rounded-full max-w-40-px" alt="...">
                               <div class="flex-1">
                                  <div class="justify-between items-center">
                                     <h6 class="text-lg font-semibold leading-normal pl-3 inline-block">Jane Doe</h6>
                                     <p class="text-blueGray-200 uppercase font-bold text-xs inline-block float-right text-blueGray-500">Online<span class="p-1 mt-2 ml-2 text-xs font-semibold inline-block uppercase last:mr-0 mr-1 p-1 rounded bg-emerald-400"></span></p>
                                     <div class="pl-3"><span class="block truncate text-blueGray-500 font-normal">Computer users and programmers</span></div>
                                  </div>
                               </div>
                            </div>
                         </a>
                      </div>
                      <div class="mx-4 rounded-md relative block my-1 bg-blueGray-200 text-blueGray-800">
                         <a href="javascript:;">
                            <div class="flex items-center p-3">
                               <img src="https://demos.creative-tim.com/notus-pro-react/static/media/team-3.c5d0c11c.jpg" class="rounded-full max-w-40-px" alt="...">
                               <div class="flex-1">
                                  <div class="justify-between items-center">
                                     <h6 class="text-lg font-semibold leading-normal pl-3 inline-block">Mila Skylar</h6>
                                     <p class="text-blueGray-200 uppercase font-bold text-xs inline-block float-right text-blueGray-500">23 min ago</p>
                                     <div class="pl-3"><span class="block truncate text-blueGray-500 font-normal">You can subscribe to receive weekly...</span></div>
                                  </div>
                               </div>
                            </div>
                         </a>
                      </div>
                      <div class="mx-4 rounded-md relative block my-1 bg-blueGray-200 text-blueGray-800">
                         <a href="javascript:;">
                            <div class="flex items-center p-3">
                               <img src="https://demos.creative-tim.com/notus-pro-react/static/media/team-4.639c2559.jpg" class="rounded-full max-w-40-px" alt="...">
                               <div class="flex-1">
                                  <div class="justify-between items-center">
                                     <h6 class="text-lg font-semibold leading-normal pl-3 inline-block">Sofia Scarlett</h6>
                                     <p class="text-blueGray-200 uppercase font-bold text-xs inline-block float-right text-blueGray-500">1 hour ago</p>
                                     <div class="pl-3"><span class="block truncate text-blueGray-500 font-normal">It’s an effective resource regardless...</span></div>
                                  </div>
                               </div>
                            </div>
                         </a>
                      </div>
                      <div class="mx-4 rounded-md relative block my-1 bg-blueGray-200 text-blueGray-800">
                         <a href="javascript:;">
                            <div class="flex items-center p-3">
                               <img src="https://demos.creative-tim.com/notus-pro-react/static/media/team-1.26905a67.jpg" class="rounded-full max-w-40-px" alt="...">
                               <div class="flex-1">
                                  <div class="justify-between items-center">
                                     <h6 class="text-lg font-semibold leading-normal pl-3 inline-block">Tom Klein</h6>
                                     <p class="text-blueGray-200 uppercase font-bold text-xs inline-block float-right text-blueGray-500">Offline<span class="p-1 mt-2 ml-2 text-xs font-semibold inline-block uppercase last:mr-0 mr-1 p-1 rounded bg-red-500"></span></p>
                                     <div class="pl-3"><span class="block truncate text-blueGray-500 font-normal">Be sure to check it out if your dev pro...</span></div>
                                  </div>
                               </div>
                            </div>
                         </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="pl-6 lg:text-right lg:self-center px-4 relative w-full lg:w-8/12">
                <div class="flex justify-center border-0 flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg">
                   <div class="bg-blueGray-800 inline-block rounded-t-lg px-5 py-3">
                      <div class="py-4 flex flex-row justify-between">
                         <div class="flex items-center">
                            <img src="https://demos.creative-tim.com/notus-pro-react/static/media/christian.5e3b567c.jpg" class="rounded-full mr-4 max-w-64-px" alt="...">
                            <div class="text-left flex-1">
                               <div class="justify-between items-center">
                                  <h5 class="text-2xl text-white font-semibold leading-tight">Charlie Watson</h5>
                                  <span class="text-blueGray-500"><span class="mr-2">last seen today at 7:38 AM</span></span>
                               </div>
                            </div>
                         </div>
                         <div><button class="inline-block outline-none focus:outline-none align-middle transition-all duration-150 ease-in-out uppercase border border-solid font-bold last:mr-0 mr-2  text-white border-white active:bg-blueGray-100 active:border-blueGray-100 active:text-blueGray-800 text-xs px-3 py-2 shadow hover:shadow-md rounded-md">edit</button><button class="inline-block outline-none focus:outline-none align-middle transition-all duration-150 ease-in-out uppercase border border-solid font-bold last:mr-0 mr-2  text-white border-white active:bg-blueGray-100 active:border-blueGray-100 active:text-blueGray-800 text-xs px-3 py-2 shadow hover:shadow-md rounded-md">call</button><button class="inline-block outline-none focus:outline-none align-middle transition-all duration-150 ease-in-out uppercase border border-solid font-bold last:mr-0 mr-2  text-blueGray-800 bg-white border-white active:bg-blueGray-100 active:border-blueGray-100 text-xs px-3 py-2 shadow hover:shadow-md rounded-md">video</button></div>
                      </div>
                   </div>
                   <div class="px-4 flex flex-col-reverse flex-auto max-h-screen-70 overflow-auto overflow-x-hidden bg-blueGray-200">
                      <div class="justify-start text-left flex flex-wrap -mx-4">
                         <a href="pablo">
                            <div class="px-4 relative w-auto">
                               <div class="relative flex px-4 py-2 my-4 break-words shadow-lg rounded-lg bg-blueGray-100 text-blueGray-800">
                                  <div>
                                     <p class="mb-1 text-lg leading-relaxed font-normal">Typing...</p>
                                     <p class="block uppercase font-semibold opacity-75 text-sm"></p>
                                  </div>
                               </div>
                            </div>
                         </a>
                      </div>
                      <div class="justify-end text-right flex flex-wrap -mx-4">
                         <a href="javascript:;">
                            <div class="px-4 relative w-auto">
                               <div class="relative flex px-4 py-2 my-4 break-words shadow-lg rounded-lg bg-lightBlue-500 text-white">
                                  <div>
                                     <p class="mb-1 text-lg leading-relaxed font-normal">At the end of the day... the native dev apps is where users are</p>
                                     <p class="block uppercase font-semibold opacity-75 text-sm"><span class="mr-2">4:47am</span><i class="fas fa-check"></i></p>
                                  </div>
                               </div>
                            </div>
                         </a>
                      </div>
                      <div class="justify-start text-left flex flex-wrap -mx-4">
                         <a href="javascript:;">
                            <div class="px-4 relative w-auto">
                               <div class="relative flex px-4 py-2 my-4 break-words shadow-lg rounded-lg bg-blueGray-100 text-blueGray-800">
                                  <div>
                                     <img src="https://demos.creative-tim.com/notus-pro-react/static/media/img-1.f2fd521a.jpg" class="rounded my-2 max-w-250-px" alt="...">
                                     <p class="block uppercase font-semibold opacity-75 text-sm"><i class="far fa-clock mr-2"></i><span>4:46am</span></p>
                                  </div>
                               </div>
                            </div>
                         </a>
                      </div>
                      <div class="justify-end text-right flex flex-wrap -mx-4">
                         <a href="javascript:;">
                            <div class="px-4 relative w-auto">
                               <div class="relative flex px-4 py-2 my-4 break-words shadow-lg rounded-lg bg-lightBlue-500 text-white">
                                  <div>
                                     <p class="mb-1 text-lg leading-relaxed font-normal">Awesome, blog is important source material for anyone who creates apps?</p>
                                     <p class="mb-1 text-lg leading-relaxed font-normal">Because these blogs offer a lot of information about website development.</p>
                                     <p class="block uppercase font-semibold opacity-75 text-sm"><span class="mr-2">4:46am</span><i class="fas fa-check"></i></p>
                                  </div>
                               </div>
                            </div>
                         </a>
                      </div>
                      <div class="justify-start text-left flex flex-wrap -mx-4">
                         <a href="javascript:;">
                            <div class="px-4 relative w-auto">
                               <div class="relative flex px-4 py-2 my-4 break-words shadow-lg rounded-lg bg-blueGray-100 text-blueGray-800">
                                  <div>
                                     <p class="mb-1 text-lg leading-relaxed font-normal">You can easily get it; The content here is all free</p>
                                     <p class="block uppercase font-semibold opacity-75 text-sm"><i class="far fa-clock mr-2"></i><span>4:45am</span></p>
                                  </div>
                               </div>
                            </div>
                         </a>
                      </div>
                      <div class="justify-end text-right flex flex-wrap -mx-4">
                         <a href="javascript:;">
                            <div class="px-4 relative w-auto">
                               <div class="relative flex px-4 py-2 my-4 break-words shadow-lg rounded-lg bg-lightBlue-500 text-white">
                                  <div>
                                     <p class="mb-1 text-lg leading-relaxed font-normal">Excellent, I want it now!</p>
                                     <p class="block uppercase font-semibold opacity-75 text-sm"><span class="mr-2">4:44am</span><i class="fas fa-check"></i></p>
                                  </div>
                               </div>
                            </div>
                         </a>
                      </div>
                      <div class="justify-start text-left flex flex-wrap -mx-4">
                         <a href="javascript:;">
                            <div class="px-4 relative w-auto">
                               <div class="relative flex px-4 py-2 my-4 break-words shadow-lg rounded-lg bg-blueGray-100 text-blueGray-800">
                                  <div>
                                     <p class="mb-1 text-lg leading-relaxed font-normal">Yeah! Responsive Design is geared towards those trying to build web apps</p>
                                     <p class="block uppercase font-semibold opacity-75 text-sm"><i class="far fa-clock mr-2"></i><span>4:31am</span></p>
                                  </div>
                               </div>
                            </div>
                         </a>
                      </div>
                      <div class="mt-6 flex flex-wrap -mx-4">
                         <div class="px-4 relative w-full lg:w-full"><span class="text-blueGray-500 font-semibold flex justify-center mt-4">Wed, 3:27pm</span></div>
                      </div>
                      <div class="justify-end text-right flex flex-wrap -mx-4">
                         <a href="javascript:;">
                            <div class="px-4 relative w-auto">
                               <div class="relative flex px-4 py-2 my-4 break-words shadow-lg rounded-lg bg-lightBlue-500 text-white">
                                  <div>
                                     <p class="mb-1 text-lg leading-relaxed font-normal">Can it generate daily design links that include essays and data visualizations?</p>
                                     <p class="block uppercase font-semibold opacity-75 text-sm"><span class="mr-2">3:30am</span><i class="fas fa-check"></i></p>
                                  </div>
                               </div>
                            </div>
                         </a>
                      </div>
                      <div class="justify-start text-left flex flex-wrap -mx-4">
                         <a href="javascript:;">
                            <div class="px-4 relative w-auto">
                               <div class="relative flex px-4 py-2 my-4 break-words shadow-lg rounded-lg bg-blueGray-100 text-blueGray-800">
                                  <div>
                                     <p class="mb-1 text-lg leading-relaxed font-normal">It contains a lot of good lessons about effective practices</p>
                                     <p class="block uppercase font-semibold opacity-75 text-sm"><i class="far fa-clock mr-2"></i><span>3:14am</span></p>
                                  </div>
                               </div>
                            </div>
                         </a>
                      </div>
                   </div>
                   <div class="bg-white rounded-b-lg px-4 py-3 border-t border-blueGray-300">
                      <div class="my-4 mb-3 pt-0 relative">
                         <div class="mb-3 pt-0"><input placeholder="Your message" class="border-blueGray-300 px-3 py-2 text-sm  w-full placeholder-blueGray-200 text-blueGray-700 relative bg-white rounded-md outline-none focus:ring focus:ring-lightBlue-500 focus:ring-1 focus:border-lightBlue-500 border border-solid transition duration-200 "></div>
                      </div>
                   </div>
                </div>
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
