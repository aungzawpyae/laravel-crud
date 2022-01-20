 // ScrollTop Function
 var mybutton = document.getElementById("myBtn");

 // When the user scrolls down 20px from the top of the document, show the button
 window.onscroll = function() {scrollFunction()};

 function scrollFunction() {
   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
     mybutton.style.display = "block";
   } else {
     mybutton.style.display = "none";
   }
 }

 // When the user clicks on the button, scroll to the top of the document
 function topFunction() {
   document.body.scrollTop = 0;
   document.documentElement.scrollTop = 0;
 }


 
  const swiper = new Swiper('.swiper', {
  // Optional parameters
//   direction: 'vertical',
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});


    

            filters();

               function filters(){
                      let collectionId = document.querySelector("#collection_id").value;
                        let value = document.querySelector('#filter option:checked').value;
                        fetch(`/ajax/collection/details/${collectionId}?type=${value}`, {
                          headers: {
                              "Content-Type": "application/json",
                              "Accept": "application/json"
                          },
                          method: "GET",
                      })
                     .then(res => res.json())
                     .then(data => {
                            let productsHtml = document.querySelector('#products');
                            let products = data.data;
                            
                            let html = "";
                            products.forEach(product => {
                              console.log(product);
                            let image = product.image;
                            // let slug = product.slug;

                            if(product) {
                                html += `
                                    <div class="w-full p-4 sm:w-1/2 md:w-1/4 xl:w-1/4">
                                      <a href="${product.id}" class="block overflow-hidden bg-white rounded-lg shadow-md hover:shadow-xl hover:border h-80">
                                        <div class="relative pb-48 overflow-hidden">
                                        <img class="absolute inset-0 object-cover w-full h-full transition duration-700 ease-in-out hover:scale-125" src=" ${product.image }"" >
                                        </div>
                                        <div class="p-4">
                                            <div class="flex items-center justify-between text-sm text-gray-600 ">
                            
                                    
                                        </div>
                                        <h2 class="mt-2 mb-2 font-bold">
                                            
                                        </h2>
                                    
                                        <div class="flex items-center mt-3">
                                            <span class="font-bold text-pink-600 text-x">Ks   ${product.id}</span>
                                        </div>
                                        </div>
                               
                                      </a>
                                </div>
                                `;
                            }
                        })
                
                      productsHtml.innerHTML = html;
                    })
             }

             function decrease(id){

               let decrease = parseInt(document.querySelector(`#quantity_${id}`).value) - 1;
                    document.getElementById(`quantity_${id}`).value= decrease;


             }
             function increase(id){
               
                  let increase = parseInt(document.querySelector(`#quantity_${id}`).value) + 1;
                    document.getElementById(`quantity_${id}`).value= increase;
                   
            }
            
  /**
   * 
   * Announcement 
   */

  
  function myFunction() {
    var element = document.getElementById("myDIV");
    element.classList.add("mystyle");
  }
   
    
    