@extends('layout.layout')


@section('content')
</div>
<div class="py-5">
            <!-- Login -->
            <div class="container px-5 py-5 login">
               <!-- Login -->
               <div class="row align-items-center gx-5">
                  <div class="col-lg-6">
                     <h1 class="text-black display-4 fw-bold">Get in touch</h1>
                     <p class="fs-6 mb-0 text-dark-50">We will confirm your appointment within 2 hours</p>
                     <div class="row gx-5 row-cols-2 row-cols-lg-2 pt-5">
                        <div class="col my-3">
                           <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
                           <div class="h5 mb-2">Chat with us</div>
                           <p class="text-muted mb-0">Chat live with one of our support specialists.</p>
                        </div>
                        <div class="col my-3">
                           <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                           <div class="h5">Ask the community</div>
                           <p class="text-muted mb-0">Explore our community forums and communicate with other users.</p>
                        </div>
                        <div class="col my-3">
                           <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-question-circle"></i></div>
                           <div class="h5">Support center</div>
                           <p class="text-muted mb-0">Browse FAQ's and support articles to find solutions.</p>
                        </div>
                        <div class="col my-3">
                           <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                           <div class="h5">Call us</div>
                           <p class="text-muted mb-0">Call us during normal business hours at (555) 892-9403.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="bg-white shadow-sm p-5 rounded-3">
                        <h3 class="fw-bold text-black mb-2">Send us a Message</h3>
                        <p class="text-muted fw-light">We'd love to hear from you</p>
                        <form action="index.html" class="text-start pt-3">
                           <div class="row">
                              <div class="mb-3 col-6 pe-2">
                                 <label for="exampleInputFirst" class="form-label small text-muted">First Name <small class="text-danger">*</small></label>
                                 <input type="text" class="form-control" id="exampleInputFirst" aria-describedby="emailHelp" placeholder="Enter First Name">
                              </div>
                              <div class="mb-3 col-6 ps-2">
                                 <label for="exampleInputLast" class="form-label small text-muted">Last Name</label>
                                 <input type="text" class="form-control" id="exampleInputLast" placeholder="Enter Last Name">
                              </div>
                           </div>
                           <div class="row">
                              <div class="mb-3 col-6 pe-2">
                                 <label class="form-label small text-muted">Mobile Number <small class="text-danger">*</small></label>
                                 <input type="number" class="form-control" placeholder="Enter Mobile Number">
                              </div>
                              <div class="mb-3 col-6 ps-2">
                                 <label class="form-label small text-muted">E-Mail Address <small class="text-danger">*</small></label>
                                 <input type="email" class="form-control" placeholder="Enter E-Mail">
                              </div>
                           </div>
                           <div class="mb-3">
                              <label class="form-label small text-muted">Message <small class="text-danger">*</small></label>
                              <textarea class="form-control hight-auto" type="text" placeholder="Enter your message here..." rows="4" data-sb-validations="required"></textarea>
                           </div>
                           <button type="button" class="btn btn-warning fw-bold fs-7 rounded-3 w-100 border-0 px-4 py-3 text-uppercase">Submit</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
     
      @endsection