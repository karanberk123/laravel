@extends('layout.layout')


@section('content')

</div>
         <!-- Page Content-->
         <div class="bg-primary">
            <!-- Login -->
            <div class="container px-5 py-5 login">
               <!-- Login -->
               <div>
                  <div class="m-auto bg-white shadow-sm p-5 rounded-3 text-center col-lg-5 mx-auto">
                     <h3 class="fw-bold text-black mb-2">Log in to <span class="text-primary">Medicil</span></h3>
                     <p class="text-muted fw-light">Connect with the best professionals</p>
                     <form action="index.html" class="text-start pt-4">
                        <div class="mb-3">
                           <label  class="form-label small text-muted">username <small class="text-danger">*</small></label>
                           <input id="username" type="text" class="form-control" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                           <label class="form-label small text-muted">Password <small class="text-danger">*</small></label>
                           <input id="password" type="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <p id="alertfield">
                           
                        </p>
                        <div class="d-flex justify-content-between">
                           <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label small text-muted" for="exampleCheck1">Remember me</label>
                           </div>
                           <div>
                              <a href="forgot.html" class="text-mdinfo small">Forgot password?</a>
                           </div>
                        </div>
                        <button onclick="myFunction(this)" id="signin" type="button" class="btn btn-warning fw-bold fs-7 rounded-3 w-100 border-0 px-4 py-3 text-uppercase">Sign In</button>
                     </form>
                     <div class="d-flex align-items-center justify-content-between divide my-3">
                        <hr class="w-100">
                        <span class="text-muted small px-2">OR</span>
                        <hr class="w-100">
                     </div>
                     <div class="social-btn">
                        <a href="#" class="text-dark fw-bold">
                           <div class="d-flex align-items-center py-3 px-3 border rounded-3 mb-3">
                              <img src="img/google-icon.png" class="img-fluid" alt="Medicil">
                              <p class="mb-0 mx-auto">Continue with Google</p>
                           </div>
                        </a>
                        <a href="#" class="text-dark fw-bold">
                           <div class="d-flex align-items-center py-3 px-3 border rounded-3 mb-3">
                              <img src="img/fb-icon.png" class="img-fluid" alt="Medicil">
                              <p class="mb-0 mx-auto">Continue with Facebook</p>
                           </div>
                        </a>
                     </div>
                     <p  class="text-muted mb-0">Don’t have an account? <a href="signup.html" class="text-mdinfo">Sign Up</a></p>
                  </div>
                  <p class="mb-0 text-center small text-white my-5">Having trouble loginng in? <a href="contact.html" class="text-decoration-underline text-white">Learn from our Knowledge Base</a></p>
               </div>
            </div>
         </div>
      </main>
    <script>
      function myFunction(element){
         formData = {
            'username':$( "#username" ).val(),
            'password':$( "#password" ).val(),

         };
         $.ajax({
            headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            type: 'post',
            url: '/signinAjax',
            data: formData,
            dataType: 'json',
            success: function (data) {
               if(data.result){
                  window.location.href="/"
               }else{
                  $('#alertfield').html(`<div> <i class="bi bi-bag-x-fill"></i> ${data.message}</div>`);
   
               }
              console.log(data);
            }
        });
};
    </script>

@endsection