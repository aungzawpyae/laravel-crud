<x-guest-layout>
    <div class="py-12">
        <div class="about">
     
        
            <div class="max-w-2xl mx-auto  ">
                <div class="container p-8 mx-auto mt-12 bg-white">
                    <div class="w-full ">
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
                      <div class="border-4 border-indigo-200 border-x-green-500  p-4">
                        <h1 class="">Success Your Order.</h1>
                        <h5>Checked Your Eamil.</h5>
                        <ul class="list-none mt-8">
                           
                            <li>097888888</li>
                            <li>info@company.com</li>
                          </ul>
                      </div>
                      <h4 class="mt-10">
                        
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
                        Home
                      </a>
                      </h4>
                    </div>
                  </div>
            </div>
          </div>
    </div>
   
    </div>


</x-guest-layout>
