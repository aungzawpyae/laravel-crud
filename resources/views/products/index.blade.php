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
          >Product List</a
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
          <div>Product List</div>
          <a href="{{route('products.create')}}">
          <div class="  p-3 btn-grad"> 
           
              Create
            
          </div>
        </a>
        </div>
        @if ($message = Session::get('success'))
        <div class="flex-1 my-3">
          <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
        <span class="font-medium">
            {{$message}}
        </span> 
      </div>
      </div>
  @endif
        <div>
          <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="table-grad">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Image
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Price
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Category ID
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
               
              </th>
            </tr>
          </thead>
          <tbody class="">
            @foreach ($products as $product)
            <tr class="table-grad ">
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    
                    <img class="h-10 w-10 rounded-full" src="{{ Storage::url($product->image) }}" alt="">
                  </div>
                 
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $product->name}}</div>
              
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $product->price}}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <div class="text-sm ">{{ $product->category->name }}</div>
              </td>
              <td class=" px-1 py-4 whitespace-nowrap text-right text-sm font-medium flex">
                <a href="{{route('products.show',$product->id)}}" class="pr-5 text-green-600 hover:text-green-900">Show</a>
                <a href="{{route('products.edit',$product->id)}}" class="pr-5 text-indigo-600 hover:text-indigo-900">Edit</a>
                <form action="{{route('products.destroy',$product->id)}}" method="post">
                  @csrf
                  @method('DELETE')   
                  <button href="#" class="text-red-600 hover:text-red-900">Delete</button>
               </form>
              </td>
            </tr>
            @endforeach
            

            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

        </div>
      </div>
    </div>
    
  </div>
@endsection