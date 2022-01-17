<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">


        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen "> 
            <div id="root">
                <nav 
  
                  class="relative z-10 flex flex-wrap items-center justify-between px-6 py-4 text-white shadow-xl md:left-0 md:block md:fixed md:top-0 md:bottom-0 bg-color md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden md:w-64"
                >
                  <div
                    class="flex flex-wrap items-center justify-between w-full px-0 mx-auto md:flex-col md:items-stretch md:min-h-full md:flex-nowrap"
                  >
                    <button
                      class="px-3 py-1 text-xl leading-none text-black bg-transparent border border-transparent border-solid rounded opacity-50 cursor-pointer md:hidden"
                      type="button"
                      onclick="toggleNavbar('example-collapse-sidebar')"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                      </svg>
                    </button>
                    <a
                      class="inline-block p-4 px-0 mr-0 text-sm font-bold text-left uppercase md:block md:pb-2 text-blueGray-600 whitespace-nowrap"
                      href="l"
                    >
                      Ecommerce
                    </a>
                    <ul class="flex flex-wrap items-center list-none md:hidden">
                      <li class="relative inline-block">
                        <a
                          class="block px-3 py-1 text-blueGray-500"
                          href="#pablo"
                          onclick="openDropdown(event,'notification-dropdown')"
                          ><i class="fas fa-bell"></i
                        ></a>
                        <div
                          class="z-50 hidden float-left py-2 text-base text-left list-none bg-black rounded shadow-lg min-w-48"
                          id="notification-dropdown"
                        >
                          <a
                            href="#pablo"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Action</a
                          ><a
                            href="#pablo"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Another action</a
                          ><a
                            href="#pablo"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Something else here</a
                          >
                          <div
                            class="h-0 my-2 border border-solid border-blueGray-100"
                          ></div>
                          <a
                            href="#pablo"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Seprated link</a
                          >
                        </div>
                      </li>
                      <li class="relative inline-block">
                        <a
                          class="block text-blueGray-500"
                          href="#pablo"
                          onclick="openDropdown(event,'user-responsive-dropdown')"
                          ><div class="flex items-center">
                            <span
                              class="inline-flex items-center justify-center w-12 h-12 text-sm text-white rounded-full bg-blueGray-200"
                              ><img
                                alt="..."
                                class="w-full align-middle border-none rounded-full shadow-lg"
                                src="../../assets/img/team-1-800x800.jpg"
                            /></span></div
                        ></a>
                        <div
                          class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48"
                          id="user-responsive-dropdown"
                        >
                          <a
                            href="#pablo"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Action ss</a
                          ><a
                            href="#pablo"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Another action</a
                          ><a
                            href="#pablo"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Something else here</a
                          >
                          <div
                            class="h-0 my-2 border border-solid border-blueGray-100"
                          ></div>
                          <a
                            href="#pablo"
                            class="block w-full px-4 py-2 text-sm font-normal bg-transparent whitespace-nowrap text-blueGray-700"
                            >Seprated link</a
                          >
                        </div>
                      </li>
                    </ul>
                    <div
                      class="absolute top-0 left-0 right-0 z-40 items-center flex-1 hidden h-auto overflow-x-hidden overflow-y-auto rounded shadow md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none"
                      id="example-collapse-sidebar"
                    >
                      <div
                        class="block pb-4 mb-4 border-b border-solid md:min-w-full md:hidden border-blueGray-200"
                      >
                        <div class="flex flex-wrap">
                          <div class="w-6/12">
                            <a
                              class="inline-block p-4 px-0 mr-0 text-sm font-bold text-left uppercase md:block md:pb-2 text-blueGray-600 whitespace-nowrap"
                              href=""
                            >
                              Admin Panel
                            </a>
                          </div>
                          <div class="flex justify-end w-6/12">
                            <button
                              type="button"
                              class="px-3 py-1 text-xl leading-none text-black bg-transparent border border-transparent border-solid rounded opacity-50 cursor-pointer md:hidden"
                              onclick="toggleNavbar('example-collapse-sidebar')"
                            >
                              <i class="fas fa-times"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <form class="mt-6 mb-4 md:hidden">
                        <div class="pt-0 mb-3">
                            
                          <input
                            type="text"
                            placeholder="Search"
                            class="w-full h-12 px-3 py-2 text-base font-normal leading-snug bg-white border-0 border-solid rounded shadow-none outline-none border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 focus:outline-none"
                          />
                        </div>
                      </form>
                      <!-- Divider -->
                      <hr class="my-4 md:min-w-full" />
                      <!-- Heading -->
                      <h6
                        class="block pt-1 pb-4 text-xs font-bold no-underline uppercase md:min-w-full text-blueGray-500"
                      >
                        Admin Layout Pages
                      </h6>
                      <!-- Navigation -->
          
                      <ul class="flex flex-col list-none md:flex-col md:min-w-full">
                        <li class="items-center">
                          <a
                            href=""
                            id="changeColor"
                            class="block py-3 text-xs font-bold uppercase"
                          >
                            <i class="mr-2 text-sm opacity-75 fas fa-tv"></i>
                            Dashboard
                          </a>
                        </li>
                        @auth
                          
                        @if (auth()->user()->role < 0)
                        <li class="items-center">
                          <a
                            href="{{ route('product.index') }}"
                            class="block py-3 text-xs font-bold uppercase text-blueGray-700 hover:text-blueGray-500"
                          >
                            <i class="mr-2 text-sm fas fa-tools text-blueGray-300"></i>
                            Product
                          </a>
                        </li>
                            
                        @endif
                        @endauth
                        <li class="items-center">
                          <a
                            href="{{ route('category.index') }}"
                            class="block py-3 text-xs font-bold uppercase text-blueGray-700 hover:text-blueGray-500"
                          >
                            <i class="mr-2 text-sm fas fa-tools text-blueGray-300"></i>
                            Category
                          </a>
                        </li>
                        @auth
                          <li class="items-center">
                            <a
                              href="{{ route('collection.index') }}"
                              class="block py-3 text-xs font-bold uppercase text-blueGray-700 hover:text-blueGray-500"
                            >
                              <i class="mr-2 text-sm fas fa-table text-blueGray-300"></i>
                              Collection
                            </a>
                          </li>
                          
                        @endauth
                        <li class="items-center">
                          <a
                            href="{{ route('banner.index') }}"
                            class="block py-3 text-xs font-bold uppercase text-blueGray-700 hover:text-blueGray-500"
                          >
                            <i class="mr-2 text-sm fas fa-table text-blueGray-300"></i>
                            Banner
                            </a>
                        </li>
                        <li class="items-center">
                          <a
                            href="{{ route('announcement.index') }}"
                            class="block py-3 text-xs font-bold uppercase text-blueGray-700 hover:text-blueGray-500"
                          >
                            <i class="mr-2 text-sm fas fa-table text-blueGray-300"></i>
                              Announcement
                          </a>
                        </li>
          
                        
                      </ul>
          
                      <!-- Divider -->
                      <hr class="my-4 md:min-w-full" />
                      <!-- Heading -->
                      <h6
                        class="block pt-1 pb-4 text-xs font-bold no-underline uppercase md:min-w-full text-blueGray-500"
                      >
                        Auth Layout Pages
                      </h6>
                      <!-- Navigation -->
          
                      <ul
                        class="flex flex-col list-none md:flex-col md:min-w-full md:mb-4"
                      >
                        <li class="items-center">
                          <a
                            href="/user-list"
                            class="block py-3 text-xs font-bold uppercase text-blueGray-700 hover:text-blueGray-500"
                          >
                            <i
                              class="mr-2 text-sm fas fa-fingerprint text-blueGray-300"
                            ></i>
                            User List
                          </a>
                        </li>
                        <li class="items-center">
                          <a
                            href="{{ route('logout') }}"
                            class="block py-3 text-xs font-bold uppercase text-blueGray-700 hover:text-blueGray-500"
                          onclick="event.preventDefault();document.getElementById('logout-form').submit();
                          
                          "
                          >
                            <i
                              class="mr-2 text-sm fas fa-fingerprint text-blueGray-300"
                            ></i>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"  style="display: none" >
                              @csrf
                            </form>
                            Log Out
                          </a>
                        </li>
                        
                      </ul>
          
        
                      
          
                     
                    </div>
                  </div>
                </nav>
                
              </div>

            

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>

        <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        charset="utf-8"
      ></script>
      <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
      <script type="text/javascript">
          /* Make dynamic date appear */
          (function () {
            if (document.getElementById("get-current-year")) {
              document.getElementById(
                "get-current-year"
              ).innerHTML = new Date().getFullYear();
            }
          })();
          /* Sidebar - Side navigation menu on mobile/responsive mode */
          function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("bg-white");
            document.getElementById(collapseID).classList.toggle("m-2");
            document.getElementById(collapseID).classList.toggle("py-3");
            document.getElementById(collapseID).classList.toggle("px-6");
          }
          /* Function for dropdowns */
          function openDropdown(event, dropdownID) {
            let element = event.target;
            while (element.nodeName !== "A") {
              element = element.parentNode;
            }
            Popper.createPopper(element, document.getElementById(dropdownID), {
              placement: "bottom-start",
            });
            document.getElementById(dropdownID).classList.toggle("hidden");
            document.getElementById(dropdownID).classList.toggle("block");
          }
  
         let btnPrimary = document.querySelector('#changeColor');
 
        btnPrimary.addEventListener('click', () => btnPrimary.style.color = '#f5576c')

        let uploadButton = document.getElementById('#upload-button');
        let fileName = document.getElementById('#file-name');
        let chosenImg = document.getElementById('#chosen-image');
          uploadButton.onchange = () =>{
            let reader = new FileReader();
            reader.readAsDataURL(uploadButton.files[0]);
            console.log(uploadB utton.files[0]);
            reader.onload = () => {
              chosenImg.setAttribute("src",reader.result);
            }
 
          }


     showFile(){
				document.getElementById(this.id +"file-upload").click();
			},

			removeFile(){
				this.file = null;
				this.file_image = null;
				this.emit();
			},

			processFile(event) {
			  	this.file = event.target.files[0];
    			if(this.file){
    				this.file_image = URL.createObjectURL(this.file);
    			}
    			this.emit();
  			},

// <div 
//   					class="justify-center text-sm text-center text-gray-600"
//   				>
//                     <label 
//                     	for="file-upload" 
//                     	class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500"
//                     >
// 						<button 
                      		
//                           onclick="upload-button()"
//                       		class="px-3 py-2 bg-indigo-100 rounded-lg" 
//                       	>
//                       		Upload  Photo
//               </button>
//                       	<input 
                      	
//                           id="file-upload"
//                       		name="file-upload" 
//                       		type="file" 
//                       		class="sr-only"
                      		
//                       	/>
//                     </label><br>
//                     <p class="mt-3 text-xs text-gray-500">
//         				PNG, JPG, GIF up to 10MB
//       				</p>
//   </div>

// File Upload Image

      function uploadImage() {
        document.getElementById("file-upload").createObjectURL = "Hello World";
      }
      </script>
    </body>
</html>
