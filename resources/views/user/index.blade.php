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
          >Product List</a
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
          <div>Product List</div>
          <a href="{{route('products.create')}}">
          <div class="p-3 btn-grad"> 
           
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
    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
      <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="table-grad">
            <tr>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Index
              </th>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Email
              </th>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Roll
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
               
              </th>
            </tr>
          </thead>
          <tbody class="">
              
            @foreach ($users as $user)
        
            <tr class="">
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                    <div class="text-sm text-gray-900">{{ $user->id}}</div>                 
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $user->name}}</div>
              
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $user->email}}</div>
              </td>
              <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                <div class="text-sm ">
                    @if ($user->role == 1)
                        <div class="text-green-500">
                            User
                        </div>
                    @else
                        <div class="text-indigo-500">
                            Admin
                        </div>
                    @endif
                </div>
              </td>
              <td class="flex px-1 py-4 text-sm font-medium text-right whitespace-nowrap">
                <a href="/send-email" class="bg-indigo-500 hover:bg-blue-700 text-white text-center py-2 px-4 rounded">
                  Send Mail
                </a>
                {{-- <a href="{{route('user.show',$user->id)}}" class="pr-5 text-green-600 hover:text-green-900">Show</a>
                <a href="{{route('user.edit',$user->id)}}" class="pr-5 text-indigo-600 hover:text-indigo-900">Edit</a>
                <form action="{{route('users.destroy',$user->id)}}" method="post">
                  @csrf
                  @method('DELETE')   
                  <button href="#" class="text-red-600 hover:text-red-900">Delete</button>
               </form> --}}
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