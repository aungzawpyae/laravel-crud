<x-guest-layout>
    <div class="py-12">
        <div class="about">
            <div class="collection-header">
                <div class="w-full h-48 bg-fixed"
                  style="background-image: url(https://cdn.pixabay.com/photo/2017/03/13/17/26/ecommerce-2140604_960_720.jpg)"
                     >
                     <div class="w-full h-full mt-20 text-white bg-black opacity-50">
                        <div class="max-w-3xl mx-auto text-center ">
                          <h1 class="pt-10 mb-3 text-5xl font-bold " >Add To Cart List</h1>
                          <div class="flex justify-center ">
                            <a href="/" class="font-bold hover:text-red-800 text-1xl">
                              Home
                            </a>
                            
                            <span class="text-red-500" >
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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

              <div class="flex ">
                <div class="flex-1">
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
                           {{$carts->count()}}
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
                                {{-- @if (Auth::user()->id === $cart->user->id) --}}
                                <tr>
                                  
                                  <td class="p-4 px-6 text-center whitespace-nowrap">{{ $cart->product->name }}</td>
                                  <td class="p-4 px-6 text-center whitespace-nowrap">
                                        
                                      <div class="flex">
                                       
                                  
                                      
                                        <form action="{{ route('cart.update',$cart->id) }}" method="post">
                                            @csrf
                                            @method('PUT')   
                                            <button class="px-2 py-0 bg-gray-300 shadow" onclick="decrease({{ $cart->id }})">-</button>
                                            <input 

                                              type="number"
                                              id="quantity_{{ $cart->id }}"
                                              name="quantity"  
                                              value="{{ $cart->quantity }}"
                                              class="w-16 bg-gray-100 outline-none quantity"
                                              min="1"
                                            >
                                            <button class="px-2 py-0 bg-gray-300 shadow" onclick="increase({{ $cart->id }})">+</button>
                                            
                                        </form>
                                      
                                        
                                        
                                      </div>
                                    
                                    
                                  </td>
                                 
                                  <td class="p-4 px-6 text-center whitespace-nowrap" id="price_{{ $cart->id}}">{{ $cart->product->price }}</td>
                                  
                            
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
                            
                                {{-- @endif --}}
                              @endforeach
                          
                          @endauth
                          
                        </tbody>
                      </table>
                   
                      
                      <div class="flex justify-end space-x-2 md:mt-10">
                       <div>
                         <h4 class="flex">Total Price : <div class="flex ml-5 text-lg font-extrabold text-indiog-600"> {{$total}} MMK (or) $</div></h4>
                       
                        
                       </div>
                       <div>
                        <a
                        class="px-6 py-3 text-sm text-gray-800 bg-gray-200 hover:bg-gray-400"
                        href="/"
                      >
                        Cannel
                      </a>
                      <a 
                        href="{{ route('order.create') }}"
                        class="px-6 py-3 text-sm text-white bg-indigo-500 hover:bg-indigo-600"
                        type="submit"
                      >
                        Continue to Shipping
                      </a>
                       
                       
                       </div>
                      </div>
                     
                    </div>
                </div>
                </div>
                {{-- <div class="basis-1/2">
                  <div class="bg-gray-300">
                    <div class="">
                        <div class="max-w-md mx-2 bg-white rounded-lg shadow-lg md:max-w-xl">
                            <div class="md:flex ">
                                <div class="w-full p-4 px-5 py-5">
                                   
                                    <div class="flex flex-row pt-2 pt-6 pb-5 text-xs"> <span class="font-bold">Information</span> <small class="ml-1 text-gray-400">></small> <span class="ml-1 text-gray-400">Shopping</span> <small class="ml-1 text-gray-400">></small> <span class="ml-1 text-gray-400">Payment</span> </div> <span>Customer Information</span>
                                    <div class="relative pb-5"> 
                                      <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="E-mail"> <span class="absolute text-sm font-medium text-blue-500 right-2 top-4">Log out</span> </div> <span>Shipping Address</span>
                                    <div class="grid md:grid-cols-2 md:gap-2"> <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="First name*"> <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="Last name*"> </div> <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="Company (optional)"> <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="Address*"> <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="Apartment, suite, etc. (optional)">
                                    <div class="grid md:grid-cols-3 md:gap-2"> <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="Zipcode*"> <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="City*"> <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="State*"> </div> <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="Country*"> <input type="text" name="mail" class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="Phone Number*">
                                    <div class="flex items-center justify-between pt-2"> <button type="button" class="w-24 h-12 text-xs font-medium text-blue-500">Return to cart</button> <button type="button" class="w-48 h-12 text-xs font-medium text-white bg-blue-500 rounded">Continue to Shipping</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                </div>
                
              </div>

            <div class="max-w-2xl mx-auto ">
                
            </div>
          </div>
    </div>
   
    </div>


</x-guest-layout>
