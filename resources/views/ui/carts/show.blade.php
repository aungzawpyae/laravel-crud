<x-guest-layout>
    <div class="py-12">
        <div class="about">
            <div class="collection-header">
                <div class="w-full h-48 bg-fixed"
                  style="background-image: url(https://cdn.pixabay.com/photo/2017/03/13/17/26/ecommerce-2140604_960_720.jpg)"
                     >
                     <div class="w-full h-full text-white bg-black opacity-50 mt-20">
                        <div class="max-w-3xl mx-auto text-center ">
                          <h1 class="pt-10 mb-3 text-5xl font-bold " >Add To Cart List</h1>
                          <div class="flex justify-center ">
                            <a href="/" class="font-bold hover:text-red-800 text-1xl">
                              Home
                            </a>
                            
                            <span class="text-red-500" >
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4  mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                              </svg>
                            </span>
                            
                            <a href="" class="">
                              Cart 
                            </a>
                          </div>
                        </div>
                     </div>
                   </h6>
                </div>
              </div>
        
            <div class="max-w-5xl mx-auto  ">
                <div class="container p-8 mx-auto mt-12 bg-white">
                    <div class="w-full overflow-x-auto">
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
                      <div class="my-2">
                        <h3 class="text-xl font-bold tracking-wider">
                          Shopping Cart 
                           {{$count}}
                          item(s)
                        </h3>
                      </div>
                      <table class="w-full shadow-inner">
                        <thead>
                          <tr class="bg-gray-100">
                            <th class="px-6 py-3 font-bold whitespace-nowrap">Product</th>
                            <th class="px-6 py-3 font-bold whitespace-nowrap">Qty</th>
                            <th class="px-6 py-3 font-bold whitespace-nowrap">Price</th>
                            <th class="px-6 py-3 font-bold whitespace-nowrap">Remove</th>
                          </tr>
                        </thead>
                        <tbody>
                          @auth
                            @php
                              $total = 0;
                            @endphp
                              @foreach ($carts as $cart)
                                @if (Auth::user()->id === $cart->user->id)
                                <tr>
                                  
                                  <td class="p-4 px-6 text-center whitespace-nowrap">{{ $cart->product->name }}</td>
                                  <td class="p-4 px-6 text-center whitespace-nowrap">
                                        
                                      <div>
                                        {{-- <button class="px-2 py-0 shadow">-</button> --}}
                                  
                                      <input 
                                          type="text" 
                                          name="quantity"  
                                          value="{{ $cart->quantity }}"
                                          class="w-12 text-center bg-gray-100 outline-none quantity"
                                          >
                                  
                                      
                                        {{-- <button class="px-2 py-0 shadow">+</button> --}}
                                        
                                        
                                      </div>
                                    
                                    
                                  </td>
                                  <td class="p-4 px-6 text-center whitespace-nowrap">{{ $cart->product->price }}</td>
                            
                                  <td class="p-4 px-6 text-center whitespace-nowrap">
                                     
                                  <form action="{{ route('cart.destroy',$cart->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')   
                                    <button  class="px-2 py-0 text-red-100 bg-red-600 rounded"  >
                                    x
                                    </button>
                                </form>
                                  
                                  </td>
                                </tr>
                                @php
                                $total  +=  $cart->price * $cart->quantity ;
                                
                              @endphp 
                            
                                @endif
                              @endforeach
                          
                          @endauth
                          
                        </tbody>
                      </table>
                   
                      
                      <div class="flex justify-between mt-4 space-x-2">
                       <div>
                         <h4 class="flex">Total Price : <div class="text-red-700 text-lg font-extrabold flex ml-5"> {{$total}} MMK (or) $</div></h4>
                        
                       </div>
                       <div>
                        <button
                        class="
                          px-6
                          py-3
                          text-sm text-gray-800
                          bg-gray-200
                          hover:bg-gray-400
                        "
                      >
                        Cannel
                      </button>
                      <button
                        class="
                          px-6
                          py-3
                          text-sm text-white
                          bg-indigo-500
                          hover:bg-indigo-600
                        "
                      >
                        Order
                      </button>
                       </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
    </div>
   
    </div>


</x-guest-layout>
