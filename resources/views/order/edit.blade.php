
    @extends('layouts.app')

    @section('content')
    {{-- <main class="h-full pb-16 overflow-y-auto">
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
              <span>Order Edit</span>
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
            <form action="{{ route('order.update',$order->id) }}" method="POST" >
                @csrf
                @method('PUT')
              <label class="block  mt-4 text-sm mb-4"">
                <span class="text-gray-700 dark:text-gray-400">
                   Status 
                </span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  name="status"
                  
                  
                >
                    <option value="0" {{ $order->status == '0' ? 'selected' : '' }}>
                        
                        Pending
                    </option>
                    <option value="1" {{ $order->status == '1' ? 'selected' : '' }}>
                        Success
                    </option>
                </select>
              </label>
              
              <div class="flex justify-end my-5">
             
                <button
                    type="submit"
                    class="p-3 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md hover:bg-purple-500 focus:outline-none focus:shadow-outline-purple"
                    >
                    
                      Update
                </button>
              </div>
            </form>
         
        </div>
        
       

    </main> --}}
<div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold mt-3">
  <div class="flex items-center">
    <span class="text-gray-400 font-serif mr-3">Order code : </span>{{ $order->code }}
  </div>

</div>
    <div class="grid grid-cols-2 gap-4 mt-5">
      <div class="col">

        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
          <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
              Product Info
            </h3>
          
          </div>
          <div class="border-2 border-gray-200">
            <dl>
              <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                   name
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                 
                  {{ $order->product->name_en }}
                </dd>
              </div>
              <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                  Amount
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ $order->product->price }}
                </dd>
              </div>
              <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                  Qty
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ $order->quantity }}
                </dd>
              </div>

            
            </dl>
            <div class="flex justify-end mb-3">
              <h1 class="text-gray-500 mr-3">Total : </h1>
              {{ $order->amount }}
            </div>
          </div>
        </div>
      </div>
      <div class="...">
       <div class="bg-white shadow overflow-hidden sm:rounded-lg">
          <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
              Order Info
            </h3>
        
          </div>
          <div class="border-2 border-gray-200">
            <dl>
              <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                   Customer Name
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ $order->user->name  }}
                </dd>
              </div>
              <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                  User Name
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ Auth::user()->name }}
                </dd>
              </div>
              <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                  Phone
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ $order->phone }}
                </dd>
              </div>
              <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                  Address
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ $order->address }}
                </dd>
              </div>
   
            </dl>
          </div>
        </div>
      </div>

    </div>
    <div class="flex justify-content-end">

      <form action="{{ route('order.update',$order->id) }}" method="POST">
                    @csrf
                    @method('PUT')

        ​<label class="block text-gray-600 font-light mb-2">Order Status : {{ $order->status }} </label>
          <div class="flex">
            @if ($order->status ==0)
              
              <div class="flex items-center mb-2 mr-4">
                <input type="hidden" id="hidden-example-1" name="status" value="1" class="h-4  w-4 text-gray-700 px-3 py-3 border rounded mr-2">
               
              </div>
            @elseif ($order->status ==1)
              <div class="flex items-center mb-2">
                <input type="hidden" id="hidden-example-2" name="status" value="2" class="h-4 w-4 text-gray-700 px-3 py-3 border rounded mr-2">
                
               
              </div>
            @elseif ($order->status ==2)
              <div class="flex items-center mb-2">
                <input type="hidden" id="hidden-example-2" name="status" value="3" class="h-4 w-4 text-gray-700 px-3 py-3 border rounded mr-2">

              </div>
            @elseif ($order->status ==3)
              <div class="flex items-center mb-2">
                <input type="hidden" id="hidden-example-2" name="status" value="4" class="h-4 w-4 text-gray-700 px-3 py-3 border rounded mr-2">

               </div>

            @elseif ($order->status ==4)
                        <div class="flex items-center mb-2">
                          <input type="hidden" id="hidden-example-2" name="status" value="5"
                            class="h-4 w-4 text-gray-700 px-3 py-3 border rounded mr-2">
                          
                        </div>

            
            @elseif ($order->status ==5)
              <div class="flex items-center mb-2">
                <input type="hidden" id="hidden-example-2" name="status" value="6" class="h-4 w-4 text-gray-700 px-3 py-3 border rounded mr-2">

               </div>

            @endif

           
        <div class="">
          <div>
      <button type="submit"
        class="p-3 justify-content-end mb-3 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md hover:bg-purple-500 focus:outline-none focus:shadow-outline-purple">

        Completed
      </button>
          </div>

        </div>

    
         
      </form>
    </div>
    
    @endsection