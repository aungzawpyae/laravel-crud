@extends('layouts.app')

@section('content')
<main class="h-full pb-16 overflow-y-auto">
         
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
    <div class="container grid px-6 mx-auto">

        <div class="flex justify-end">
            <h2
                class="p-3 my-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
                >
                <a href="/product/create" class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                        Add 
                </a>
            </h2>
        </div>
      <!-- CTA -->
        <a
          class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
         href="https://github.com/estevanmaito/windmill-dashboard"
         >
        
         <span>Product List</span>
        </a>
            {{-- Succcess Alert  --}}
          @if ($message = Session::get('success'))
                <div class="flex-1 my-3">
                  <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                <span class="font-medium">
                    {{$message}}
                </span> 
              </div>
              </div>
          @endif
      <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">

          <table class="w-full whitespace-no-wrap">
            <thead>
              <tr
                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
              >
                <th class="px-4 py-3">Photo</th>
                <th class="px-4 py-3">Name</th>
                <th class="px-4 py-3">Price</th>
               
                <th class="px-4 py-3">Qty</th>
                {{-- <th class="px-4 py-3">Stock </th> --}}
                <th class="px-4 py-3">Actions</th>
              </tr>
            </thead>
            <tbody
              class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
            >
              @foreach ($products as $product)
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm">
                    <!-- Avatar with inset shadow -->
                    <div
                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                    >
                      <img
                        class="object-cover w-full h-full rounded-full"
                        src="{{ Storage::url($product->image) }}"
                        alt=""
                        loading="lazy"
                      />
                      <div
                        class="absolute inset-0 rounded-full shadow-inner"
                        aria-hidden="true"
                      ></div>
                    </div>
               
                  </div>
                </td>
                <td class="px-4 py-3 text-sm">
                  {{ $product->name}}
                </td>
                <td class="px-4 py-3 text-sm">
                  {{ $product->price}}
                </td>
                
                <td class="px-4 py-3 text-xs">
                  <div class="flex items-center text-sm">
                    <!-- Avatar with inset shadow -->
                    <div
                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                    >
                      
             
                    </div>
                    <div>
                      <p class="text-xs">
                        totals = {{$product->quantity}} items
                      </p>
                      <p class="text-xs text-gray-600 dark:text-gray-400">
                         left = 
                         {{$product->remaning_item}} 
                         
                         items  
                      </p>
                    </div>
                  </div>
           
                </td>
                {{-- <td class="px-4 py-3 text-sm">
                  <span
                  class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                >
                  Out of Stock

                </span>
                </td> --}}
                <td class="px-4 py-3">
                  <div class="flex items-center space-x-4 text-sm">
                    <a
                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-green-600 rounded-lg hover:bg-green-800 dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                    aria-label="Show"
                    href="{{ route('product.show', $product->id) }}"
                  >
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                  </svg>
                  </a>
                    <a
                      class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                      aria-label="Edit"
                      href="{{route('product.edit',$product->id)}}"
                    >
                      <svg
                        class="w-5 h-5" 
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                      >
                        <path
                          d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                        ></path>
                      </svg>
                    </a>
                    <form action="{{route('product.destroy',$product->id)}}" method="post">
                      @csrf
                      @method('DELETE')   
                      <button
                      class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                      aria-label="Delete"
                    >
                   </form>
                  
                      <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
              @endforeach
              

              
            </tbody>
          </table>
          


        </div>
        
        <div
          class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
        >
       
          {{-- <span class="flex items-center col-span-3">
            Showing 21-30 of 100
          </span>
          <span class="col-span-2"></span>
          
          <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <nav aria-label="Table navigation">
              <ul class="inline-flex items-center">
                <li>
                  <button
                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                    aria-label="Previous"
                  >
                    <svg
                      class="w-4 h-4 fill-current"
                      aria-hidden="true"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                      ></path>
                    </svg>
                  </button>
                </li>
                <li>
                  <button
                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                  >
                    1
                  </button>
                </li>
                <li>
                  <button
                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                  >
                    2
                  </button>
                </li>
                <li>
                  <button
                    class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                  >
                    3
                  </button>
                </li>
                <li>
                  <button
                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                  >
                    4
                  </button>
                </li>
                <li>
                  <span class="px-3 py-1">...</span>
                </li>
                <li>
                  <button
                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                  >
                    8
                  </button>
                </li>
                <li>
                  <button
                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                  >
                    9
                  </button>
                </li>
                <li>
                  <button
                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                    aria-label="Next"
                  >
                    <svg
                      class="w-4 h-4 fill-current"
                      aria-hidden="true"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                        fill-rule="evenodd"
                      ></path>
                    </svg>
                  </button>
                </li>
              </ul>
            </nav>
          </span> --}}
        </div>

        {{ $products->links() }}
      </div>
    </div>
  </main>
@endsection