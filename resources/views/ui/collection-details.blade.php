<x-guest-layout>
  <div class="collection-header">
    <div class="w-full h-48 bg-fixed"
      style="background-image: url(https://cdn.pixabay.com/photo/2017/03/13/17/26/ecommerce-2140604_960_720.jpg)"
         >
         <div class="w-full h-full mt-20 text-white bg-black opacity-50">
            <div class="max-w-3xl mx-auto text-center ">
              <h1 class="pt-10 mb-3 text-5xl font-bold " >{{ $collections->name }}</h1>
              <div class="flex justify-center ">
                <a href="" class="font-bold hover:text-red-800 text-1xl">
                  Home
                </a>
                
                <span class="" >
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 py-8 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>
                </span>
                <a href="" class="">
                  {{ $collections->name }}
                </a>
              </div>
            </div>
         </div>
       </h6>
    </div>
  </div>
    <div class="py-12 bg-pink-100">
         <div class="mx-auto max-w-7xl ">
            <div class="grid gap-4 my-5 md:grid-cols-4">
                <div class="max-w-full ">
                  
                  <div class="grid grid-flow-col gap-4 grid-rows-">
                    <div class="justify-center">
                      
                        <div >
                            <ul role="list" class="px-2 py-3 font-medium text-gray-900">
                                    <li>
                                    <a href="#" class="block text-2xl ">
                                        Collection List
                                    </a>
                                    </li>
                            </ul>
                        
                                <div class="px-4 py-6 border-gray-200 ">
                                    @foreach ($collection as $item)
                                        <div  class="space-y-4">
                                            <div 
                                                x-data="{ expanded : false }"
                                                role="region" class="border border-gray-300">
                                                <h2>
                                                    <button
                                                        @click="expanded = !expanded"
                                                        :aria-expanded="expanded"
                                                        class="flex items-center justify-between w-full px-6 py-3 text-xl font-bold"
                                                    >
                                                        <span class="text-sm text-red-700">{{ $item->name }}</span>
                                                        <span x-show="expanded" aria-hidden="true" class="ml-4">&minus;</span>
                                                        <span x-show="!expanded" aria-hidden="true" class="ml-4">&plus;</span>
                                                    </button>
                                                </h2>
    
                                                <div x-show="expanded" x-collapse>
                                                    <a href="{{route("collection.products", $item)}}">
                                                        <div class="px-6 pb-4 hover:text-pink-700">{{ $item->products->count() }}
                                                            items found
                                                        </div>
                                                </a>
                                                </div>
                                            </div>
    
                                        
                                        </div>
                                    @endforeach
                                
                                  <h3 class="flow-root -mx-2 -my-3">
                                  
                                  </h3>
                              
                                </div>
                        </div>
                    
                    </div>
                  
                    </div>
              </div>
                <div class="md:col-span-3 ">
                    <div class="max-w-full mx-auto border border-gray-200 ">
                        <div>
                            <div class="flex flex-row justify-between py-3 mx-5 my-1">
                                <div class="col-1 ">
                                    <h1> {{$collections->name}}</h1>
                                    <h6>
                                        {{ $collections->products->count() }}
                                         items found
                                      
                                    </h6>
                                </div>
                                <div class="col-1">
                               
                                        <span class="">Sort By : </span>
                                        <div class="relative inline text-gray-700">
                                            <input type="hidden" name="collection_id" id="collection_id" value="{{ $collections->id }}">
                                            <select  class="h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline"
                                                      onchange="filters()"
                                                      name="filter" 
                                                      id="filter"
                                             >
                                                <option  value="price_hight_to_low">Price, hight to low</option>
                                                <option  value="price_low_to_hight">Price, low to hight</option>
                                                <option  value="date_old_new">Date, old to new</option>
                                                <option   value="date_new_old">Date, new to old</option>
                                            </select>
                                            
                                          </div>
                                   
    
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <div class="flex flex-wrap my-5" id="products">
                     
                        {{-- @foreach ($collections->products as $product)
                              <div class="w-full p-4 sm:w-1/2 md:w-1/2 xl:w-1/4">
                                  <a href="" class="block overflow-hidden bg-white rounded-lg shadow-md hover:shadow-xl hover:border h-80">
                                    <div class="relative pb-48 overflow-hidden">
                                    <img class="absolute inset-0 object-cover w-full h-full transition duration-700 ease-in-out hover:scale-125" src="{{ Storage::url($product->image) }}" alt="">
                                    </div>
                                    <div class="p-4">
                                        <div class="flex items-center justify-between text-sm text-gray-600 ">
                        
                                
                                    </div>
                                    <h2 class="mt-2 mb-2 font-bold">
                
                                        {{$product->name}}
                                        {{ $product->id }}
                                    </h2>
                                
                                    <div class="flex items-center mt-3">
                                        <span class="font-bold text-pink-600 text-x">Ks  {{ $product->price }}</span>
                                    </div>
                                    </div>
                          
                              
                                  
                                  </a>
                              </div>
                        @endforeach --}}
                        
                        
                  </div>
                  
                 
                             
                  
                </div>
                   
            </div>
        </div>
    </div>
</x-guest-layout>