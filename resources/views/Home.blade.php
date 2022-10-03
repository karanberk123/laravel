@extends('layout.layout')


@section('content')
      <!-- Header-->
      <header class="bg-primary pt-0">
               <div class="container px-5">
                  <div class="row gx-5 align-items-center justify-content-center">
                     <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start py-5">
                           <h1 class="display-5 fw-bolder text-white mb-2">We provide  <span class="fw-bold text-warning">medical</span> services that you can <span class="fw-bold text-warning">trust!</span></h1>
                           <p class="lead fw-light text-white-50 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam.</p>
                           <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                              <a class="btn btn-light fw-bold text-primary fs-7 rounded-3 px-4 py-3 text-uppercase me-sm-1" href="#features"> Get Started </a>
                              <a class="btn btn-outline-light fw-bold fs-7 rounded-3 px-4 py-3 text-uppercase" href="appointment.html"> Get Appointment </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid" src="img/banner.png" alt="..." /></div>
                  </div>
               </div>
            </header>
         </div>
         <!-- Features section-->
         <section class="py-5" id="features">
            <div class="container px-5 my-5">
               <div class="row gx-5">
                  <div class="col-lg-4 mb-5 mb-lg-0 pe-lg-5">
                     <p class="text-uppercase text-primary mb-2">OUR SERVICES</p>
                     <h2 class="fw-bold mb-3 text-black">We are always ready to help you & your family</h2>
                     <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                  </div>
                  <div class="col-lg-8">
                     <div class="row gx-5 row-cols-1 row-cols-md-2">
                        <div class="col mb-5 h-100">
                           <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-file-medical"></i></div>
                           <h2 class="h5">General Treatment</h2>
                           <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                        </div>
                        <div class="col mb-5 h-100">
                           <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-soundwave"></i></div>
                           <h2 class="h5">Ear Treatment</h2>
                           <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                        </div>
                        <div class="col mb-5 mb-md-0 h-100">
                           <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-eye"></i></div>
                           <h2 class="h5">Vision Problems</h2>
                           <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                        </div>
                        <div class="col h-100">
                           <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-heart"></i></div>
                           <h2 class="h5">Heart Surgery</h2>
                           <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Testimonial section-->
         <section class="py-5 bg-white">
            <div class="container px-5 mt-5">
               <div class="row gx-5 justify-content-center">
                  <div class="col-lg-8 col-xl-6">
                     <div class="text-center mb-5">
                        <p class="text-uppercase text-primary mb-2">TESTIMONIAL</p>
                        <h2 class="fw-bold mb-3 text-black">What our patients say about our medical treatments</h2>
                     </div>
                  </div>
               </div>
               <div class="row gx-5">
                  <div class="col-lg-4">
                     <div class="text-left mb-5">
                        <span class="text-warning fs-6">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        </span>
                        <p class="fs-5 mb-4 mt-2 fw-light text-primary">"I was impressed with how beautiful and clean this property was. The owner definitely goes the extra mile to help their guests!"</p>
                        <h6 class="fw-bold mb-1">Adam Hall</h6>
                        <p class="fw-light mb-0 text-muted">Lisbon, Portugal</p>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="text-left mb-5">
                        <span class="text-warning fs-6">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        </span>
                        <p class="fs-5 mb-4 mt-2 fw-light text-primary">"Amazing location, convenient parking, and a lots of amenities and extras. I will definitely be returning here whenever I'm in town."
                        </p>
                        <h6 class="fw-bold mb-1">Lia Peterson</h6>
                        <p class="fw-light mb-0 text-muted">Sacramento, CA, USA</p>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="text-left mb-5">
                        <span class="text-warning fs-6">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        </span>
                        <p class="fs-5 mb-4 mt-2 fw-light text-primary">"We was impressed with how beautiful and clean this property was. The owner definitely goes the extra mile to help their guests!"</p>
                        <h6 class="fw-bold mb-1">Osahan Hall</h6>
                        <p class="fw-light mb-0 text-muted">India, Portugal</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Blog preview section-->
         <section class="py-5">
            <div class="container px-5 mt-5">
               <div class="row gx-5 justify-content-center">
                  <div class="col-lg-8 col-xl-6">
                     <div class="text-center mb-5">
                        <p class="text-uppercase text-primary mb-2">LATEST NEWS</p>
                        <h2 class="fw-bold mb-3 text-black">Keep up with our most recent medical news</h2>
                        <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta.</p>
                     </div>
                  </div>
               </div>
               <div class="row gx-5">
                  <div class="col-lg-4 mb-5">
                     <div class="card h-100 shadow-sm rounded-3 border-0">
                        <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." />
                        <div class="card-body p-4">
                           <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                           <a class="text-decoration-none link-dark stretched-link" href="#!">
                              <h5 class="card-title mb-3 lh-base">Things Most People Don't Know About Medical Clinic</h5>
                           </a>
                           <p class="card-text mb-0">Adaptive height of each card this text is a bit longer to illustrate the. Some quick example text to build on the card title bulk of the card's content and make up the.</p>
                        </div>
                        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                           <div class="d-flex align-items-end justify-content-between">
                              <div class="d-flex align-items-center">
                                 <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                 <div class="small">
                                    <div class="fw-bold">Kelly Rowan</div>
                                    <div class="text-muted">March 12, 2021 &middot; 6 min read</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 mb-5">
                     <div class="card h-100 shadow-sm rounded-3 border-0">
                        <img class="card-img-top" src="https://dummyimage.com/600x350/adb5bd/495057" alt="..." />
                        <div class="card-body p-4">
                           <div class="badge bg-primary bg-gradient rounded-pill mb-2">Media</div>
                           <a class="text-decoration-none link-dark stretched-link" href="#!">
                              <h5 class="card-title mb-3 lh-base">The Ugly Truth About Medical Clinic</h5>
                           </a>
                           <p class="card-text mb-0">This text is a bit longer to illustrate the adaptive height of each card. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                           <div class="d-flex align-items-end justify-content-between">
                              <div class="d-flex align-items-center">
                                 <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                 <div class="small">
                                    <div class="fw-bold">Josiah Barclay</div>
                                    <div class="text-muted">March 23, 2021 &middot; 4 min read</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 mb-5">
                     <div class="card h-100 shadow-sm rounded-3 border-0">
                        <img class="card-img-top" src="https://dummyimage.com/600x350/6c757d/343a40" alt="..." />
                        <div class="card-body p-4">
                           <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                           <a class="text-decoration-none link-dark stretched-link" href="#!">
                              <h5 class="card-title mb-3 lh-base">What NOT to Do in the Medical Clinic Industry</h5>
                           </a>
                           <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content This text is a bit longer to illustrate the adaptive height of each card.</p>
                        </div>
                        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                           <div class="d-flex align-items-end justify-content-between">
                              <div class="d-flex align-items-center">
                                 <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                 <div class="small">
                                    <div class="fw-bold">Evelyn Martinez</div>
                                    <div class="text-muted">April 2, 2021 &middot; 10 min read</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="py-5 bg-primary">
            <div class="container px-5 my-4">
               <!-- Call to action-->
               <aside>
                  <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                     <div class="mb-4 mb-xl-0">
                        <div class="fs-1 mb-1 fw-bold text-white">Sign up for newsletter</div>
                        <div class="text-white-50">Sign up to our newsletter to get the latest news and offers.</div>
                     </div>
                     <div class="ms-xl-4">
                        <div class="input-group mb-0">
                           <input class="form-control form-control-lg border-0 fs-6 fw-light py-3 ps-4 pe-5" type="text" placeholder="Enter Your Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
                           <button class="btn btn-warning fw-bold text-uppercase px-4" id="button-newsletter" type="button">Subscribe</button>
                        </div>
                     </div>
                  </div>
               </aside>
            </div>
         </section>
      </main>
    
    
@endsection