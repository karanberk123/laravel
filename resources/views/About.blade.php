@extends('layout.layout')


@section('content')
<header class="bg-primary py-5 inner-header">
               <div class="container py-5 px-5">
                  <div class="row align-items-center justify-content-center">
                     <div class="col-lg-8 col-xxl-7">
                        <div class="text-center">
                           <h1 class="fw-bold text-white mb-3">Short Story About<br>Fovia Clinic Since 1999.</h1>
                           <p class="lead fw-normal text-white-50 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel.</p>
                           <a class="btn btn-warning fw-bold fs-7 rounded-3 border-0 px-4 py-3 text-uppercase" href="#scroll-target">Read our story</a>
                        </div>
                     </div>
                  </div>
               </div>
            </header>
         </div>
         <!-- About section one-->
         <section class="py-5" id="scroll-target">
            <div class="container px-5 my-5">
               <div class="row gx-5 align-items-center">
                  <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
                  <div class="col-lg-6 ps-lg-5">
                     <p class="text-uppercase text-primary mb-2">Brief History</p>
                     <h1 class="fw-bold mb-3 text-black">Get to know us more</h1>
                     <p class="lead">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                     <p class="fs-6 fw-light text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
                  </div>
               </div>
            </div>
         </section>
         <!-- About section two-->
         <section class="py-5 bg-white">
            <div class="container px-5 my-5">
               <div class="row gx-5 align-items-center">
                  <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
                  <div class="col-lg-6 pe-lg-5">
                     <p class="text-uppercase text-primary mb-2">Our Mission & Vision</p>
                     <h1 class="fw-bold mb-3 text-black">Better Information,<br> Better Health</h1>
                     <p class="fs-6 fw-light text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
                  </div>
               </div>
            </div>
         </section>
         <!-- Team members section-->
         <section class="py-5">
            <div class="container px-5 mt-5">
               <div class="text-center mb-5">
                  <h2 class="fw-bold mb-2 text-black">Our Team</h2>
                  <p class="text-muted">Dedicated to quality and your success</p>
               </div>
               <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                  <div class="col mb-5 mb-5 mb-xl-0">
                     <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                        <h5 class="fw-bolder">Ibbie Eckart</h5>
                        <div class="fst-italic text-muted">Founder &amp; CEO</div>
                     </div>
                  </div>
                  
                  
                 
               </div>
            </div>
         </section>
      </main>
    
      @endsection