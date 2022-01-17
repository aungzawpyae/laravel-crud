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

              <div class="flex flex-row">
                <div class="basis-1/2">
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
                                        <button class="px-2 py-0 shadow bg-gray-300" id=""  onclick="decrease({{ $cart->id }})">-</button>
                                  
                                      <input 
                                          type="text"
                                          disabled
                                          id="quantity_{{ $cart->id }}"
                                          name="quantity"  
                                          value="{{ $cart->quantity }}"
                                          class="w-12 text-center bg-gray-100 outline-none quantity"
                                          >
                                  
                                      
                                        <button class="px-2 py-0 shadow bg-gray-300" onclick="increase({{ $cart->id }})">+</button>
                                        
                                        
                                      </div>
                                    
                                    
                                  </td>
                                 
                                  <td class="p-4 px-6 text-center whitespace-nowrap">{{ $cart->product->price }}</td>
                                  <input type="text" id="price" value="{{ $cart->product->price }}">
                            
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
                   
                      
                      <div class="flex justify-end md:mt-10 space-x-2">
                       <div>
                         <h4 class="flex">Total Price : <div class="text-indiog-600 text-lg font-extrabold flex ml-5"> {{$total}} MMK (or) $</div></h4>
                       
                        
                       </div>
                       <div>
                        {{-- <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="user_id"  value="{{ Auth::user()->id }}">
                              <input type="hidden" name="amount"  value="{{ $total}}">

                              <a
                              class="
                                px-6
                                py-3
                                text-sm text-gray-800
                                bg-gray-200
                                hover:bg-gray-400
                              "
                              href="/"
                            >
                              Cannel
                            </a>
                            <button
                              class="
                                px-6
                                py-3
                                text-sm text-white
                                bg-indigo-500
                                hover:bg-indigo-600
                              "
                              type="submit"
                            >
                              Order
                            </button>
                      
                       </form> --}}
                       
                       </div>
                      </div>
                     
                    </div>
                </div>
                </div>
                {{-- <div class="basis-1/2">
                  <div class="bg-gray-300">
                    <div class="">
                        <div class="max-w-md  bg-white shadow-lg rounded-lg md:max-w-xl mx-2">
                            <div class="md:flex ">
                                <div class="w-full p-4 px-5 py-5">
                                   
                                    <div class="flex flex-row pt-2 text-xs pt-6 pb-5"> <span class="font-bold">Information</span> <small class="text-gray-400 ml-1">></small> <span class="text-gray-400 ml-1">Shopping</span> <small class="text-gray-400 ml-1">></small> <span class="text-gray-400 ml-1">Payment</span> </div> <span>Customer Information</span>
                                    <div class="relative pb-5"> 
                                      <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="E-mail"> <span class="absolute text-blue-500 right-2 top-4 font-medium text-sm">Log out</span> </div> <span>Shipping Address</span>
                                    <div class="grid md:grid-cols-2 md:gap-2"> <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="First name*"> <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Last name*"> </div> <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Company (optional)"> <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Address*"> <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Apartment, suite, etc. (optional)">
                                    <div class="grid md:grid-cols-3 md:gap-2"> <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Zipcode*"> <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="City*"> <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="State*"> </div> <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Country*"> <input type="text" name="mail" class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm" placeholder="Phone Number*">
                                    <div class="flex justify-between items-center pt-2"> <button type="button" class="h-12 w-24 text-blue-500 text-xs font-medium">Return to cart</button> <button type="button" class="h-12 w-48 rounded font-medium text-xs bg-blue-500 text-white">Continue to Shipping</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                </div>
                
              </div>

            <div class="max-w-2xl mx-auto  ">
                
            </div>
          </div>
    </div>
   
    </div>


</x-guest-layout>
