
<nav class="fixed top-0 left-0 right-0 z-50 bg-gray-100 shadow-md"
      x-data="{ isOpen: false, atTop: true }"
      @keydown.escape="isOpen = false"
      
      x-on:scroll.window="atTop = (window.pageYOffset > 100) ? false : true; "

      x-bind:class="{ 'bg-slate-800': !atTop }"
  >
  <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8"
    
  >
    <div class="relative flex items-center justify-between h-14 ">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
   
        <button 
        @click="isOpen = !isOpen"
          type="button" class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menus</span>
        
          <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>

          <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
        <div class="flex items-center flex-shrink-0">
          <a href="/">
            <img class="block w-auto h-8 lg:hidden" src="{{ asset('images/logo (1).png') }}">
            <img class="hidden w-auto h-8 lg:block" src="{{ asset('images/logo (1).png') }}">
          </a>
        
        </div>
       
      </div>
      
       <!-- Search Bar -->
       <div x-data="{dropdownMenu: false}" class="relative" @click.away="dropdownMenu = false">
       
        <button @click="dropdownMenu = ! dropdownMenu" class="flex items-center p-2 border-2 bg-white hover:bg-gray-100 rounded-md" >
            
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'All Category' }}
                 
        </button>
       
        <div x-show="dropdownMenu" class="absolute right-0 py-2 mt-2 bg-white bg-gray-100 rounded-md shadow-xl w-44">
          @foreach ($categories as $category)
           @if (request()->query('category') == $category->id)
              <a href="{{ url('/search?category=' . $category->id) }}" class="block px-4 py-2 text-sm  hover:bg-gray-400 hover:text-white">
                {{ucwords($category->name)}}   
            </a>  
           @else
            <a href="{{ url('/search?category=' . $category->id) }}" class="block px-4 py-2 text-sm  hover:bg-gray-400 hover:text-white">
              {{$category->name}}   
            </a>  
               
           @endif
          @endforeach      
        </div>
    </div>



        <div class="relative mx-2  ">
          <div class="">
            <form method="GET" action="{{ route('search')}}">

               {{-- @if (request('category'))
                  <input type="hidden" name="category" value="{{ request('category') }}">
               @endif --}}
               {{-- <select
               class="block  mt-1 text-sm dark:text-gray-300  form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
               name="category"
               >
     
               @foreach($categories as $category)
                 <option
                   value="{{ $category->id }}"
                   {{ request()->query('category') == $category->id ? "selected=selected" : '' }}
                   >

                     {{ $category['name'] }}
                 </option>
             @endforeach
           </select> --}}
              <input class="relative  h-10 px-5 pr-16 text-sm bg-white border-2 border-gray-100 rounded-lg focus:outline-none"
                     type="text" 
                     name="search"
                     required
                     value=""
                     placeholder="{{ __('main.search') }}">
                      
              <button type="submit" class="absolute top-0 w-2 h-5 mt-2  ml-3 border-3 rounded-sm">
                <svg class="w-4 h-4 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                  viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                  width="512px" height="512px">
                  <path
                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                </svg>
              </button>
                         
            </form>
          </div>   
        </div>



        <div class="hidden md:pl-16 sm:block sm:ml-6 " id="nav" x-data="nav">
        
          <div class="flex space-x-4" >
       
            <a href="/"   
                  @click=" active = 'home' " 
                  class="px-3 py-2 text-sm hh" id="#navv" aria-current="page" 
                  :class="active == 'home'?'border-b-2 border-indigo-700 text-indigo-400':''"
                  >{{ __('main.home'); }}
                
            </a>

            <a href="/collection" 
                @click=" active = 'collection' "
                :class="active == 'collection'?'border-b-2 border-indigo-400 text-indigo-400':''"
                class="px-3 py-2 text-sm font-medium ">{{ __('main.collection') }}</a>

            <a href="/product-all" 
                class="px-3 py-2 text-sm font-medium " 
                x-bind:class="{ 'text-gray-300': !atTop }"
                >{{ __('main.product') }}</a>

            <a href="/about" 
                class="px-3 py-2 text-sm font-medium  " 
                x-bind:class="{ 'text-gray-300': !atTop }">{{ __('main.about') }}</a>
            <a href="/contact" 
              class="px-3 py-2 text-sm font-medium  " 
              x-bind:class="{ 'text-gray-100': !atTop }">{{ __('main.contact') }}</a>
      
            <a href="/cart" class="px-3 py-2 text-sm font-medium  " x-bind:class="{ 'text-gray-300': !atTop }">
              <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="font-extrabold text-red-700 ">
                  @auth
                      <?php 
                        $count = \App\Models\Cart::where('user_id' , Auth::user()->id)->count();
                      ?>
                      {{$count}}
                  @endauth
                </span>
              </div>
              
            </a>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
              <div class="relative z-20 ml-3 "
                  x-data="{ isOpenDropDown : false}"  
                 >
                  <div >
                    <button 
                      @click="isOpenDropDown = !isOpenDropDown"
                      type="button" class="flex text-sm bg-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                      <span class="sr-only">Open user menu</span>
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                      </svg>
                    </button>
                  </div>
  
                  <div 
                      x-show="isOpenDropDown"
                      x-transition:enter="transition ease-out duration-100"
                      x-transition:enter-start="transform opacity-0 scale-95 "
                      x-transition:enter-end="transform opacity-100 scale-100 "
                      x-transition:leave="transform opacity-100 scale-100"
                      x-transition:leave-start="transform opacity-100 scale-100"
                      x-transition:leave-end="transform opacity-0 scale-95"
                      class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                   
                    
                    @if (Auth::user())
                        {{-- <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a> --}}
                        <a
                        href="{{ route('logout') }}"
               
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();  "
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                      
                       >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                          ></path>
                        </svg>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"  style="display: none" >
                          @csrf
                        </form>
                        <span>{{ __('main.logout') }}</span>
                      </a>
                       
                    @else
                        <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">{{ __('main.login') }} </a>
                        <a href="{{ route('register')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">{{ __('main.register') }}</a>
                    @endif
                  
                  </div>
                </div>
                
                
          </div>

          {{-- Switch Language --}}

            <div class="mr-3">
              <a href="{{ url('/language/en') }}" class="hover:text-red-500" x-bind:class="{ 'text-gray-300': !atTop }">en</a>
                <span class="text-gray-800" x-bind:class="{'text-gray-200' : !atTop}">/</span>
              <a href="{{ url('/language/mm') }}" x-bind:class="{'text-gray-300' : !atTop}">mm</a>
              
            </div>


          </div>
         
        </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div 

        @click.away="isOpen = false"
        x-show="isOpen"
        class="sm:hidden " id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1 bg-slate-900">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="block px-3 py-2 text-base font-medium text-white rounded-md" aria-current="page">Dashboard</a>

        <a href="#" class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Team</a>

        <a href="#" class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Projects</a>

        <a href="#" class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Calendar</a>
      </div>
  </div>
</nav>



