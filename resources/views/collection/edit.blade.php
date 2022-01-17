
    
    @extends('layouts.app')

    @section('content')
    <main class="h-full pb-16 overflow-y-auto">
      <div class="container grid px-6 mx-auto">
        <h2
          class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
           >
    
        </h2>
        <!-- CTA -->
          <div
            class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
          
            >
            <div class="flex items-center">
              <span>Collection Edit</span>
            </div>
            <span>
              <a href="{{ route('product.index') }}">
                Back &LeftArrow;
              </a>
            </span>
          </div>
    
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
        <div
            class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
            <form action="{{ route('collection.update', $collection->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Product Name :"
                  type="text"
                  name="name"
                  value="{{ $collection->name }}"
                />
              </label>
          
              <label class="block mb-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Product Name
                </span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  name="product_id[]"
                  multiple
                  
                >
                    @foreach($products as $product)
                        <option 
                            value="{{ $product['id'] }}"
                        >
                          {{ $product['name'] }}
                        </option>
                    @endforeach
                </select>
              </label>
             
              <div class="flex justify-end ">
             
                <button
                    type="submit"
                    class="p-3 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md hover:bg-purple-500 focus:outline-none focus:shadow-outline-purple"
                    >
                    
                      Update
                </button>
            </div>
            </form>
         
        </div>
    
       
    </main>
    @endsection