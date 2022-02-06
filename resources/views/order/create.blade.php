<x-guest-layout>
    <div class="py-12">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg ">
            <div class="w-full p-4 px-5 py-5">
                <div class="flex flex-row pt-6 pb-5 text-lg">
                    <h5>Customer Information</h5>
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
                 
                        <form action="{{route('order.store')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              
                            <div class="relative pb-5">
                                <label for="" class="text-gray-600 ">Name</label>
                                <input 
                                    type="text" 
                                    name="user_id" 
                                    value="{{ Auth::user()->name }}"
                                    class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" 
                                >
                                <label for="" class="text-gray-600 ">Email</label>
                                <input 
                                    type="text" 
                                    name="email" 
                                    class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" 
                                    placeholder="E-mail"
                                    value="{{ Auth::user()->email }}"
                                    > 
                                <label for="" class="text-gray-600">Phone</label>
                                <input 
                                    type="number" 
                                    name="phone" 
                                    class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" 
                                    placeholder="Phone Number*"
                                    required
                                >
                                <label for="" class="text-gray-600">Address</label>
                                <input 
                                    type="text" 
                                    name="address" 
                                    class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" 
                                    placeholder="Address"
                                    required
                                >
                            </div>  
                            <div class="">
                                @foreach ($carts as $cart)
                                    <input type="hidden" name="carts[]" value="{{ $cart->id }}">
                                 
                                 {{-- <input type="hidden" name="quantity[]" value="{{ $cart->quantity }}">
                                 <input type="hidden" name="price[]"  value="{{ $cart->price }}">
                                 <input type="hidden" name="priduct_id[]" value="{{ $cart->product->id }}"> --}}

                                 
                                @endforeach
                            </div> 
                          
                                <input 
                                    type="hidden" 
                                    name="code"                  
                                    class="w-full h-10 px-2 mt-2 text-sm border rounded focus:outline-none focus:border-green-200" placeholder="Address"
                                >
                          
                           
                            <div class="flex items-center justify-between pt-2"> 
                                <a href="/" class="w-24 h-12 text-xs font-medium text-blue-500">Return to cart</a> 
                                <button type="submit" class="w-48 h-12 text-xs font-medium text-white bg-blue-500 rounded">Make Order</button> 
                            </div>

                    </form>
                    
            </div>
        </div>
    </div>
   
    
</x-guest-layout>
