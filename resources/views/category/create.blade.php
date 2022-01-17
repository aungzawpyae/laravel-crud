@extends('layouts.app')

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2
      class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
       >

    </h2>
    <!-- CTA -->
      <div
        class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
      
        >
        <div class="flex items-center">
          <span>Category Form</span>
        </div>
        <span>
          <a href="{{ route('category.index') }}">
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
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Name</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="Product Name :"
              type="text"
              name="name"
            />
          </label>
       
          <label class="block  mt-4 text-sm mb-4">
            <span class="text-gray-700 dark:text-gray-400">Photo Upload</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="Product Name :"
              type="file" 
              name="image"
            />
          </label>
          <div class="flex justify-end ">
         
            <button
                type="submit"
                class=" p-3   text-sm font-semibold  text-purple-100 bg-purple-600 hover:bg-purple-500 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
                >
                
                  Create
            </button>
        </div>
        </form>
     

    </div>

   



</main>
@endsection