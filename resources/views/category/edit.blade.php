@extends('layouts.admin')

@section('content')

<div class="relative md:ml-64 bg-blueGray-50">
  <nav
  
    class="absolute border-b top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4"
  >
    <div
      class="w-full  mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4"
    >
      <a
        class=" text-sm uppercase hidden lg:inline-block font-semibold"
        href=""
        >Category </a
      >
      <form
        class="md:flex hidden flex-row flex-wrap  items-center lg:ml-auto mr-3"
      >
        <div class="relative flex w-full flex-wrap items-stretch">
          
          <span
            class="z-10 h-full leading-snug font-normal   text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3 "
            >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </span>
          <input
            type="text"
            placeholder="Search here..."
            class="border rounded-full px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative   text-sm shadow outline-none focus:outline-none focus:ring w-full pl-10"
          />
        </div>
      </form>
      <ul
        class="flex-col md:flex-row list-none items-center hidden md:flex"
      >
        <a
          class="text-blueGray-500 block"
          href="#pablo"
          onclick="openDropdown(event,'user-dropdown')"
        >
          <div class="items-center flex">
            <span
              class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"
              ><img
                alt="..."
                class="w-full rounded-full align-middle border-none shadow-lg"
                src="{{asset('3.jpg')}}"
            /></span>
          </div>
        </a>
        <div
          class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
          id="user-dropdown"
        >
          <a
            href="#pablo"
            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
            >Action</a
          ><a
            href="#pablo"
            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
            >Another action</a
          ><a
            href="#pablo"
            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
            >Something else here</a
          >
          <div
            class="h-0 my-2 border border-solid border-blueGray-100"
          ></div>
          <a
            href="#pablo"
            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
            >Seprated link</a
          >
        </div>
      </ul>
    </div>
  </nav>
  <!-- Header -->
  <div class="relative  md:pt-32 pb-32 pt-12">
    <div class="px-4 md:px-10 mx-auto w-full">
      <div class=" flex justify-between">
        <div>Edit Category</div>
     
      </div>
      <div>
        <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
      <div>
        <div class="max-w-2xl  py-3">
          
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
            <form action="{{ route('category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium text-gray-700">Name :</label>
                        <input type="text" name="name" value="{{$category->name}}"   id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                  </div>
                
                  
    
                  <div>
                    <label class="block text-sm font-medium text-gray-700">
                      Photo
                    </label>
                    <div class="mt-1 flex items-center">
                      
                        <input type="file" name="image" value="{{ $category->image }}">
                      <span class="inline-block h-16 w-14 rounded-full overflow-hidden bg-gray-100">
                        <img src="{{ Storage::url($category->image) }}" height="200" width="200" alt="" />
                        <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                          <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                      </span>
                      <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Change ..
                      </button>
                    </div>
                  </div>
     
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
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
    