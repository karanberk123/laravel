@extends('layout.layout')


@section('content')


<header class="bg-primary py-5 inner-header">
               <div class="container py-4 px-5">
                  <div class="row gx-5 align-items-center justify-content-center">
                     <div class="col-lg-12">
                        <div class="text-center">
                           <h1 class="fw-bold text-white">Pay as you grow</h1>
                           <p class="lead fw-normal text-white-50 mb-0">With our no hassle pricing plans</p>
                        </div>
                     </div>
                  </div>
               </div>
            </header>
         </div>
         <!-- Pricing section-->
         <section class="bg-light py-5">
            <div class="container px-5 my-5">
               <div class="row gx-5 justify-content-center">
                  <!-- Pricing card free-->
                  <div class="col-lg-6 col-xl-4">
                     <div class="card shadow-sm rounded-3 border-0 mb-5 mb-xl-0">
                        <div class="card-body p-5">
                           <div class="small text-uppercase fw-bold text-muted">Free</div>
                           <div class="mb-3">
                              <span class="display-2 fw-bold">$25</span>
                              <span class="text-muted">/ mo.</span>
                           </div>
                           <ul class="list-unstyled mb-4">
                              <li class="mb-3">
                                 <i class="bi bi-check text-primary"></i>
                                 <strong>1 users</strong>
                              </li>
                              <li class="mb-3">
                                 <i class="bi bi-check text-primary"></i>
                                 5GB storage
                              </li>
                              <li class="mb-3">
                                 <i class="bi bi-check text-primary"></i>
                                 Unlimited public projects
                              </li>
                              <li class="mb-3">
                                 <i class="bi bi-check text-primary"></i>
                                 Community access
                              </li>
                              <li class="mb-3 text-muted">
                                 <i class="bi bi-x"></i>
                                 Unlimited private projects
                              </li>
                              <li class="mb-3 text-muted">
                                 <i class="bi bi-x"></i>
                                 Dedicated support
                              </li>
                              <li class="mb-3 text-muted">
                                 <i class="bi bi-x"></i>
                                 Free linked domain
                              </li>
                              <li class="text-muted">
                                 <i class="bi bi-x"></i>
                                 Monthly status reports
                              </li>
                           </ul>
                           <div class="d-grid"><a class="btn btn-outline-primary fw-bold fs-7 rounded-3 w-100 px-4 py-3 text-uppercase" href="#!">Choose plan</a></div>
                        </div>
                     </div>
                  </div>
                  <!-- Pricing card pro-->
                  <div class="col-lg-6 col-xl-4">
                     <div class="card shadow-sm rounded-3 border-0 mb-5 mb-xl-0">
                        <div class="card-body p-5">
                           <div class="small text-uppercase fw-bold">
                              <i class="bi bi-star-fill text-warning"></i>
                              Pro
                           </div>
                           <div class="mb-3">
                              <span class="display-2 fw-bold">$50</span>
                              <span class="text-muted">/ mo.</span>
                           </div>
                           <ul class="list-unstyled mb-4">
                              <li class="mb-3">
                                 <i class="bi bi-check text-primary"></i>
                                 <strong>5 users</strong>
                              </li>
                              <li class="mb-3">
                                 <i class="bi bi-check text-primary"></i>
                                 5GB storage
                              </li>
                              <li class="mb-3">
                                 <i class="bi bi-check text-primary"></i>
                                 Unlimited public projects
                              </li>
                              <li class="mb-3">
                                 <i class="bi bi-check text-primary"></i>
                                 Community access
                              </li>
                              <li class="mb-3">
                                 <i class="bi bi-check text-primary"></i>
                                 Unlimited private projects
                              </li>
                              <li class="mb-3">
                                 <i class="bi bi-check text-primary"></i>
                                 Dedicated support
                              </li>
                              <li class="mb-3">
                                 <i class="bi bi-check text-primary"></i>
                                 Free linked domain
                              </li>
                              <li class="text-muted">
                                 <i class="bi bi-x"></i>
                                 Monthly status reports
                              </li>
                           </ul>
                           <div class="d-grid"><a class="btn btn-primary fw-bold fs-7 rounded-3 w-100 px-4 py-3 text-uppercase" href="#!">Choose plan</a></div>
                        </div>
                     </div>
                  </div>
                  <!-- Pricing card enterprise-->
                  <div class="col-lg-6 col-xl-4">
                     <div class="card shadow-sm rounded-3 border-0">
                        <div class="card-body p-5">
                           <div class="small text-uppercase fw-bold text-muted">Enterprise</div>
                           <div class="mb-3">
                              <span class="display-2 fw-bold">$999</span>
                              <span class="text-muted">/ mo.</span>
                           </div>
                           <ul class="list-unstyled mb-4">
                              <li class="mb-3">
                                 <i class="bi bi-check text-primary"></i>
                                 <strong>Unlimited users</strong>
                              </li>
                              <li class="mb-3">
                                 <i class="bi bi-check text-primary"></i>
                                 5GB storage
                              </li>
                              <li class="mb-3">
                                 <i class="bi bi-check text-primary"></i>
                                 Unlimited public projects
                              </li>
                              <li class="mb-3">
                                 <i class="bi bi-check text-primary"></i>
                                 Community access
                              </li>
                              <li class="mb-3">
                                 <i class="bi bi-check text-primary"></i>
                                 Unlimited private projects
                              </li>
                              <li class="mb-3">
                                 <i class="bi bi-check text-primary"></i>
                                 Dedicated support
                              </li>
                              <li class="mb-3">
                                 <i class="bi bi-check text-primary"></i>
                                 <strong>Unlimited</strong>
                                 linked domains
                              </li>
                              <li class="text-muted">
                                 <i class="bi bi-check text-primary"></i>
                                 Monthly status reports
                              </li>
                           </ul>
                           <div class="d-grid"><a class="btn btn-outline-primary fw-bold fs-7 rounded-3 w-100 px-4 py-3 text-uppercase" href="#!">Choose plan</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
@endsection