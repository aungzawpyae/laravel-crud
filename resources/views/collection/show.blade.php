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
          >Collection List Details</a
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
     

        <div>
          <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
      
            <div class="computer container   mx-auto">
                 <div class="flex justify-between  my-8 mx-3">
                    <h2 class=" xl:text-3xl">
					  
                        {{$collections->name}}
                    </h2>
            	 </div>
				 <div class="w-full mt-2 px-2">
					
				 </div>
        
                <div class="flex flex-wrap ">
                  @foreach ($collections->products as $item)
                  <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                    <a href="" class=" block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden hover:border">
                    <div class="relative pb-48 overflow-hidden">
                    <img class="absolute inset-0 h-full w-full object-cover transition duration-700 ease-in-out  hover:scale-125" src="{{ Storage::url($item->image) }}" alt="">
                    </div>
                    <div class="p-4">
                        <div class=" flex items-center justify-between text-sm text-gray-600">
          
                   
                    </div>
                    <h2 class="mt-2 mb-2  font-bold">

                        {{$item->name}}
                    </h2>
                
                    <div class="mt-3 flex items-center">
                        <span class="font-bold text-x text-pink-600">Ks  2,670,000</span>
                    </div>
                    </div>
            
                  
                    
                    </a>
                </div>  
                  @endforeach
                    
                   
                    
                </div>
                
        </div>
          
     
     

    </dl>
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