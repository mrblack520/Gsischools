 <section class="explore-sec">
     <img class="outer-gradient" src="assets/images/faqs-bg.png" alt="Gradient">
     <div class="container">
         <div class="row">
             <div class="col-md-12 position-relative d-flex justify-content-around gap-5">
                 <img class="position-absolute" src="assets/images/explore-4.png" alt="">
                 <div class="position-relative">
                     <div class="bg-gradient-e"></div>
                     <div class="explore-main-con">
                         <div class="explore-con">
                             <img src="assets/images/explore-2.png" alt="">
                             <p><span>Sign-up here!</span></p>
                         </div>
                     </div>
                 </div>
                 <div class="position-relative">
                     <div class="bg-gradient-e"></div>
                     <div class="explore-main-con">
                         <div class="explore-con">
                             <img src="assets/images/explore-1.png" alt="">
                             <p>
                                 <span>
                                     @if (Request::is('aficionado'))
                                         Explore available Aficionados
                                     @else
                                         Explore available Aficionados and book your session!
                                     @endif
                                 </span>
                             </p>
                         </div>
                     </div>
                 </div>
                 <div class="position-relative">
                     <div class="bg-gradient-e"></div>
                     <div class="explore-main-con">
                         <div class="explore-con">
                             <img src="assets/images/explore-3.png" alt="">

                             <p>Check out our <span>FAQs</span> and
                                 <span>other pages</span> to learn more
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="explore-btns">
                 <a href="{{ route('frontend.university') }}">Learn more about university</a>
                 <a href="{{ route('frontend.profession') }}">Learn more about professions</a>
             </div>
         </div>
     </div>

 </section>
