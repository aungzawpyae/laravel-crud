@extends('layouts.admin')

@section('content')

<div class="relative md:ml-64 bg-blueGray-50">
  <nav
  
    class="absolute top-0 left-0 z-10 flex items-center w-full p-4 bg-transparent border-b md:flex-row md:flex-nowrap md:justify-start"
  >
    <div
      class="flex flex-wrap items-center justify-between w-full px-4 mx-autp md:flex-nowrap md:px-10"
    >
      <a
        class="hidden text-sm font-semibold uppercase lg:inline-block"
        href=""
        >Announcement </a
      >
      <form
        class="flex-row flex-wrap items-center hidden mr-3 md:flex lg:ml-auto"
      >
        <div class="relative flex flex-wrap items-stretch w-full">
          
          <span
            class="absolute z-10 items-center justify-center w-8 h-full py-3 pl-3 text-base font-normal leading-snug text-center bg-transparent rounded text-blueGray-300 "
            >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </span>
          <input
            type="text"
            placeholder="Search here..."
            class="relative w-full px-3 py-3 pl-10 text-sm border rounded-full shadow outline-none placeholder-blueGray-300 text-blueGray-600 focus:outline-none focus:ring"
          />
        </div>
      </form>
      <ul
        class="flex-col items-center hidden list-none md:flex-row md:flex"
      >
        <a
          class="block text-blueGray-500"
          href="#pablo"
          onclick="openDropdown(event,'user-dropdown')"
        >
          <div class="flex items-center">
            <span
              class="inline-flex items-center justify-center w-12 h-12 text-sm text-white rounded-full bg-blueGray-200"
              ><img
                alt="..."
                class="w-full align-middle border-none rounded-full shadow-lg"
                src="{{asset('3.jpg')}}"
            /></span>
          </div>
        </a>
        <div
          class="z-50 hidden float-left py-2 text-base text-left list-none bg-white rounded shadow-lg min-w-48"
          id="user-dropdown"
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
      </ul>
    </div>
  </nav>
  <!-- Header -->
  <div class="relative pt-12 pb-32 md:pt-32">
    <div class="w-full px-4 mx-auto md:px-10">
      <div class="flex justify-between ">
        <div>Announcement Form</div>
     
      </div>
      <div>
        <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
  <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
      <div>
        <div class="max-w-2xl py-3">
          
            @if ($errors->any())
              
              @foreach ($errors->all() as $error)
                      <div class="flex flex-col my-3">
                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-green-800" role="alert">
                      <span class="font-medium">
                          {{$error}}
                      </span> 
                    </div>
                    </div>
              @endforeach
               
            @endif
        </div>
        <div class="md:grid md:grid-cols-3 md:gap-6 ">
          <div class="mt-5 md:mt-0 md:col-span-2 ">
            <form action="{{ route('announcement.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                <div class="grid grid-cols-3 gap-6">
                  <div class="col-span-6 sm:col-span-3">
                      <label for="first-name" class="block text-sm font-medium text-gray-700">Name :</label>
                      <input type="text" name="name" id="first-name" autocomplete="given-name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  </div>
                </div>
                <div class="grid grid-cols-3 gap-6">
                  <div class="col-span-6 sm:col-span-3">
                    
                    <div>
                      <label for="about" class="block text-sm font-medium text-gray-700">
                        Description :
                      </label>
                      <div class="mt-1">
                        <textarea id="about" name="desc" rows="3" class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Input Text"></textarea>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="grid grid-cols-3 gap-6">
                  <div class="col-span-6 sm:col-span-3">
                   <input type="hidden" name="creater_id" value="{{Auth::user()->id}}">

                     </div>
                  </div>
                </div>
              
  
              
   
              </div>
              <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Submit
                </button>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
</div>

      </div>
    </div>
  </div>
  
</div>
  
        
    @endsection
    

