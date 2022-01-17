<x-guest-layout>

<div class="py-12">
    <div class="">
        <div class="collection-header">
            <div class="w-full h-48 bg-fixed"
              style="background-image: url(https://cdn.pixabay.com/photo/2017/03/13/17/26/ecommerce-2140604_960_720.jpg)"
                 >
                 <div class="w-full h-full mt-20 text-white bg-black opacity-50">
                    <div class="max-w-3xl mx-auto text-center ">
                      <h1 class="pt-10 mb-3 text-5xl font-bold " >Announcement Time Line</h1>
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
                          Announcement
                        </a>
                      </div>
                    </div>
                 </div>
               </h6>
            </div>
          </div>
   
    <div class="container w-full h-full mx-auto bg-gray-200">
      <div class="relative h-full p-10 overflow-hidden wrap">
        <div class="absolute h-full border border-gray-700 border-2-2 border-opacity-20" style="left: 50%"></div>
       
        @foreach ($announcements as $key => $item)
        
              @if($key  % 2 == 0)
                 <!-- right timeline -->
                 <div v class="flex items-center justify-between w-full mb-8 right-timeline">
                  <div class="order-1 w-5/12"></div>
                  <div class="z-20 flex items-center order-1 w-8 h-8 bg-gray-800 rounded-full shadow-xl">
                    <h1 class="mx-auto text-lg font-semibold text-white">{{$key + 1}}</h1>
                  </div>
                  <div class="order-1 w-5/12 px-6 py-4 bg-gray-400 rounded-lg shadow-xl">
                    <h6>{{ $item->created_at }}</h6>
                    <h3 class="mb-3 text-xl font-bold text-gray-800">{{ $item->name }}</h3>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">{{ $item->desc }}</p>
                  </div>
                </div>
             @else
              <!-- left timeline -->
              <div class="flex flex-row-reverse items-center justify-between w-full mb-8 left-timeline">
                <div class="order-1 w-5/12"></div>
                <div class="z-20 flex items-center order-1 w-8 h-8 bg-gray-800 rounded-full shadow-xl">
                  <h1 class="mx-auto text-lg font-semibold text-white">{{ $key + 1 }}</h1>
                </div>
                <div class="order-1 w-5/12 px-6 py-4 bg-red-400 rounded-lg shadow-xl">
                  <h6> {{ $item->created_at }} </h6>
                  <h3 class="mb-3 text-xl font-bold text-white">{{ $item->name }}</h3>
                  <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">{{ $item->desc }}</p>
                </div>
              </div>
            
            
          @endif 
      @endforeach
  
      </div>
    </div>
</div>

</x-guest-layout>