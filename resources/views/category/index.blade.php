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
                class=" p-3 my-8  text-sm font-semibold  text-purple-100 bg-purple-600  rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
                >
                <a href="/category/create" class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
        
         <span>Category List</span>
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
           
                <th class="px-4 py-3">Actions</th>
              </tr>
            </thead>
            <tbody
              class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
            >
              @foreach ($categories as $category)
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm">
                    <!-- Avatar with inset shadow -->
                    <div
                      class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                    >
                      <img
                        class="object-cover w-full h-full rounded-full"
                        src="{{ Storage::url($category->image) }}"
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
                  {{ $category->name}}
                </td>
               
  
                <td class="px-4 py-3">
                  <div class="flex items-center space-x-4 text-sm">
                    <a
                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-green-600 rounded-lg hover:bg-green-800 dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                    aria-label="Show"
                    href="{{ route('category.show', $category->id) }}"
                  >
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                  </svg>
                  </a>
                    <a
                      class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                      aria-label="Edit"
                      href="{{route('category.edit',$category->id)}}"
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
                    <form action="{{route('category.destroy',$category->id)}}" method="post">
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
        
      </div>
    </div>
  </main>
@endsection