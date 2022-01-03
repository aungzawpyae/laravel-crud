<x-guest-layout>
    <div class="collection-header">
      <div class="w-full h-48  bg-fixed"
        style="background-image: url(https://cdn.pixabay.com/photo/2017/03/13/17/26/ecommerce-2140604_960_720.jpg)"
           >
           <div class="bg-black opacity-50  w-full h-full text-white">
              <div class="max-w-3xl mx-auto text-center ">
                <h1 class="  font-bold text-5xl mb-3 pt-10" >Collection</h1>
                <div class="flex justify-center  ">
                  <a href="" class="hover:text-red-800 font-bold text-1xl">
                    Home
                  </a>
                  
                  <span class="" >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-1 py-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                  </span>
                  <a href="" class="">
                    Collection List
                  </a>
                </div>
              </div>
           </div>
         </h6>
      </div>
    </div>
      <div class="py-12">
          <div class="max-w-7xl mx-auto ">
             
              <div class="grid md:grid-cols-4 gap-4 my-5">
                  <div class="max-w-full ">
                    
                    <div class="grid grid-rows- grid-flow-col gap-4">
                        <div class="justify-center">
                            <div >
                                   <ul role="list" class="font-medium text-gray-900 px-2 py-3">
                                        <li>
                                          <a href="#" class="block ">
                                              Filter
                                          </a>
                                        </li>
                                   </ul>
                            
                                    <div class=" border-gray-200 px-4 py-6">
  
                                      <div x-data="{ active: 1 }" class="space-y-4">
                                        <div x-data="{
                                            id: 1,
                                            get expanded() {
                                                return this.active === this.id
                                            },
                                            set expanded(value) {
                                                this.active = value ? this.id : null
                                            },
                                            }" role="region" class="border border-black">
                                            <h2>
                                                <button
                                                    @click="expanded = !expanded"
                                                    :aria-expanded="expanded"
                                                    class="flex items-center justify-between w-full font-bold text-xl px-6 py-3"
                                                >
                                                    <span>Question #1</span>
                                                    <span x-show="expanded" aria-hidden="true" class="ml-4">&minus;</span>
                                                    <span x-show="!expanded" aria-hidden="true" class="ml-4">&plus;</span>
                                                </button>
                                            </h2>
  
                                            <div x-show="expanded" x-collapse>
                                                <div class="pb-4 px-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. In magnam quod natus deleniti architecto eaque consequuntur ex, illo neque iste repellendus modi, quasi ipsa commodi saepe? Provident ipsa nulla earum.</div>
                                            </div>
                                        </div>
  
                                        <div x-data="{
                                            id: 2,
                                            get expanded() {
                                                return this.active === this.id
                                            },
                                            set expanded(value) {
                                                this.active = value ? this.id : null
                                            },
                                        }" role="region" class="border border-black">
                                            <h2>
                                                <button
                                                    @click="expanded = !expanded"
                                                    :aria-expanded="expanded"
                                                    class="flex items-center justify-between w-full font-bold text-xl px-6 py-3"
                                                >
                                                    <span>Question #2</span>
                                                    <span x-show="expanded" aria-hidden="true" class="ml-4">&minus;</span>
                                                    <span x-show="!expanded" aria-hidden="true" class="ml-4">&plus;</span>
                                                </button>
                                            </h2>
  
                                            <div x-show="expanded" x-collapse.duration.1000ms>
                                                <div class="pb-4 px-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. In magnam quod natus deleniti architecto eaque consequuntur ex, illo neque iste repellendus modi, quasi ipsa commodi saepe? Provident ipsa nulla earum.</div>
                                            </div>
                                        </div>
                                      </div>
                                      <h3 class="-mx-2 -my-3 flow-root">
                                    
                                      </h3>
                                      <div class="pt-6" id="filter-section-mobile-0">
                                        <div class="space-y-6">
                                          <div class="flex items-center">
                                            <div class="justify-contern-betweem flex">
                                              <h2>
                                                Collection Name
                                              </h2>
                                              <h2>
                                                +
                                              </h2>
                                            </div>
                                           
                                          </div>
                            
                                          <div class="flex items-center">
                                            <input id="filter-mobile-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-color-1" class="ml-3 min-w-0 flex-1 text-gray-500">
                                                Out of stock (4)
                                            </label>
                                          </div>
                            
                                    
                                        </div>
                                      </div>
                                    </div>
                            </div>
                        </div>
                      
                        </div>
                  </div>
                  <div class="md:col-span-3 ">
                      <div class="max-w-full mx-auto border border-gray-200 bg-white">
                          <div>
                              <div class="flex mx-5 my-1 flex-row  justify-between py-3">
                                  <div class="col-1 ">
                                      <h1>Mobie Phones</h1>
                                      <h6>
                                          303 items found in Mobiles
                                        
                                      </h6>
                                  </div>
                                  <div class="col-1 ">
                                 
                                          <span class="">Sort By : </span>
                                          <div class="relative inline text-gray-700">
                                            
                                              <select class=" h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline" placeholder="Regular input">
                                                <option>A regular sized select input</option>
                                                <option>Another option</option>
                                                <option>And one more</option>
                                              </select>
                                              
                                            </div>
                                     
      
                                  </div>
                              </div>
                          </div>
      
                      </div>
                      <div class="flex flex-wrap  my-5">
                          
                          <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/3 p-4"> 
                            <div  class="block transition ease-in-out duration-700  bg-white rounded-lg overflow-hidden  shadow-md  hover:-translate-y-1 hover:scale-105  hover:ring-offset-2 hover:ring-2 hover:ring-gray-300/100">
                                <div class="relative pb-48 overflow-hidden">
                                  <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                                </div>
                                <div class="p-4">
                                  <span class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Highlight</span>
                                  <h2 class="mt-2 mb-2  font-bold">iPhone 12 Pro Max 256GB (Official)</h2>
                                
                                  <div class="mt-3 flex items-center">
                                    <span class="font-bold text-x text-pink-600">Ks  2,670,000</span>
                                  </div>
      
                                  
                                </div>
                                <div class=" flex items-center text-sm text-gray-600">
                                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-gray-400"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                                  <span class="ml-2">4 Reviews</span>
                                </div>
                              
                                <div class="flex   mx-3 my-5 card-hover ">
                                  <button class=" h-8 px-4 mr-2  text-indigo-100 transition-colors duration-150 bg-gray-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">Add To Cart</button>
                                  <button class=" h-8 px-4 text-indigo-100 transition-colors duration-150 bg-gray-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                  </button>
                                </div>
                                
                              </div>
                          </div>
                          
                    </div>
                    
                   
                               
                    
                        </div>
                      <div class="grid md:grid-cols-2  lg:grid-cols-4 ">
                          <div>hh</div>
                          <div>d</div>
                          <div>dd</div>
                          <div>fdfdfd</div>
                      </div>
              </div>
                  
                  
             
            </div>
      </div>
  </x-guest-layout>
  