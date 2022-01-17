<x-guest-layout>
    <div class="mt-10 collection-header">
      <div class="w-full bg-fixed h-52"
        style="background-image: url(https://cdn.pixabay.com/photo/2017/03/13/17/26/ecommerce-2140604_960_720.jpg)"
           >
           <div class="w-full h-full text-white bg-black opacity-50 ">
              <div class="max-w-3xl mx-auto text-center ">
                <h1 class="mb-3 text-5xl font-bold md:pt-20" >Collection</h1>
                <div class="flex justify-center mt-5 ">
                  <a href="" class="font-bold hover:text-red-800 text-1xl">
                    Home
                  </a>
                  
                  <span class="" >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mt-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                      </svg>
                    </span>
                  <a href="" class="text-gray-400">
                        Collection List
                  </a>
                </div>
              </div>
           </div>
         </h6>
      </div>
    </div>
         <div class="z-20 py-12 bg-pink-100">
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
                                            @foreach ($collections as $collection)
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
                                                                <span class="text-sm text-red-700">{{ $collection->name }}</span>
                                                                <span x-show="expanded" aria-hidden="true" class="ml-4">&minus;</span>
                                                                <span x-show="!expanded" aria-hidden="true" class="ml-4">&plus;</span>
                                                            </button>
                                                        </h2>
            
                                                        <div x-show="expanded" x-collapse>
                                                            <a href="{{url("/collection/details/{$collection->id}")}}">
                                                                <div class="px-6 pb-4 hover:text-pink-700">{{ $collection->products->count() }}
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
                    <div class="z-30 md:col-span-3">
                        <div class="max-w-full mx-auto border border-gray-200 ">
                            <div>
                                <div class="flex flex-row justify-between py-3 mx-5 my-1">
                                    <div class="col-1 ">
                                        <h1></h1>
                                        <h6>
                                            {{$products->count()}}
                                            products found 
                                            
                                        </h6>
                                    </div>
            
                                </div>
                            </div>
        
                        </div>
                        <div class="flex flex-wrap my-5">
                            @foreach ($products  as $product)
                                    <div class="p-4 l sm:w-1/2 md:w-1/2 xl:w-1/4">
                                        <a href="{{url("/product/details/{$product->id}")}}" class="block overflow-hidden bg-white rounded-lg shadow-md h-80 hover:shadow-xl hover:border">
                                            <div class="relative z-50 overflow-hidden">
                                                <img class="inset-0 object-contain w-full transition duration-700 ease-in-out absoslute h-44 hover:scale-110" src="{{ Storage::url($product->image) }}" alt="">
                                            </div>
                                        
                                        
                                        
                                            <div class="p-4">
                                                <div class="flex items-center justify-between text-sm text-gray-600 ">
                                
                                        
                                            </div>
                                            <h2 class="mt-2 mb-2 font-bold">
                                                {{ $product->name}}
                                            </h2>
                                        
                                            <div class="flex items-center mt-3">
                                                <span class="font-bold text-pink-600 text-x">Ks  {{ $product->price }}</span>
                                            </div>
                                            </div>
                                
                                    
                                        
                                        </a>
                                    </div>
                            @endforeach
                            <br>
                           
                            
                        </div>
                        
                        {{ $products->links() }}
                                
                        
                            </div>
                      
                </div>

            </div>
         </div>
  </x-guest-layout>
  