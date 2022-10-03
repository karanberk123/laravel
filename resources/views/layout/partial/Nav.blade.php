<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-0 osahan-nav">
               <div class="container px-5">
                  <a class="navbar-brand" href="/"><img class="img-fluid" src="img/logo.png" alt="..." /></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="/pricing">Pricing</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                     </ul>
                     <div class="d-flex gap-4 align-items-center">
                        @if ($is_login)
                        <a href="/register" type="button" class="btn btn-warning text-uppercase fw-bold">Go Dashboard</a>
                        <a href="/signout" type="button" class="btn btn-warning text-uppercase fw-bold">logout</a>
@else
<a href="/register" type="button" class="btn btn-warning text-uppercase fw-bold">Sign up</a>
<a href="/signin" class="text-decoration-none text-white text-uppercase fw-bold">Log In</a>
@endif
                       
                     </div>
                  </div>
               </div>
            </nav>