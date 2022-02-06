<x-guest-layout>
    <div class="collection-header md:mt-10">
   
    </div>
      <div class="py-12 bg-pink-100">
           <div class="mx-auto max-w-4xl ">
            <div class="w-full grid grid-cols-1 gap-y-8 gap-x-6 items-start sm:grid-cols-12 lg:gap-x-8">
              <div class="aspect-w-2 aspect-h-3 rounded-lg bg-gray-100 overflow-hidden sm:col-span-4 lg:col-span-5">
                <img src="{{ Storage::url($product->image) }}" alt="Two each of gray, white, and black shirts arranged on table." class="object-center object-cover">
              </div>
              <div class="sm:col-span-8 lg:col-span-7">
                <h2 class="text-2xl font-extrabold text-gray-900 sm:pr-12">
                  {{ $product->name}}
                </h2>
    
                <section aria-labelledby="information-heading" class="mt-2">
                  <h3 id="information-heading" class="sr-only">Product information</h3>
    
                  <p class="text-2xl text-gray-900">
                    Ks   {{ numberTranslate($product->price)}}
                  </p>
    
                  <!-- Reviews -->
                  <div class="mt-6">
                    <h4 class="sr-only">Reviews</h4>
                    <div class="flex items-center">
                      <div class="flex items-center">
                        <!--
                          Heroicon name: solid/star
    
                          Active: "text-gray-900", Default: "text-gray-200"
                        -->
                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
    
                        <!-- Heroicon name: solid/star -->
                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
    
                        <!-- Heroicon name: solid/star -->
                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
    
                        <!-- Heroicon name: solid/star -->
                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
    
                        <!-- Heroicon name: solid/star -->
                        <svg class="text-gray-200 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                      </div>
                      <p class="sr-only">3.9 out of 5 stars</p>
                      <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 reviews</a>

                    </div>
                  </div>

                  <p class="mt-5">
                    {{$product->details}}
                  </p>

                </section>
    
                <section aria-labelledby="options-heading" class="mt-10">
                  <h3 id="options-heading" class="sr-only">Product options</h3>
                  <p>
                    
                  </p>
                  @auth()
                        <form action="" method="POST" enctype="multipart/form-data">
                          @csrf
                          
                          <input type="hidden" name="user_id"  value="{{ Auth::user()->id }}">
                          <input type="hidden" name="product_id"  value="{{ $product->id }}">
                          <input type="hidden" name="price"  value="{{($product->price)}}">
                          <input type="hidden" name="quantity"  value="1">
                        
                          <button type="submit"  class="mt-6 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add to Cart</button>
                      </form>
                    @else
                       <a href="{{ route('login') }}" class="mt-6 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add to Cart</a>
                  @endauth
              
                  
                  
                </section>
              </div>
            </div>
          </div>
      </div>
  </x-guest-layout>

  