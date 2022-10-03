@extends('layout.layout')


@section('content')

</div>
         <!-- Page Content-->
         <div class="bg-primary">
            <!-- Login -->
            <div class="container px-5 py-5 login">
               
               <!-- Login -->
               <div>
                  
                  <div  class="m-auto bg-white shadow-sm p-5 rounded-3 text-center col-lg-5 mx-auto">
                     <h3 class="fw-bold text-black mb-2">Sign up for <span class="text-primary">Medicil</span></h3>
                     <p class="text-muted fw-light">Connect with the best local pros</p>
                     <form action="index.html" class="text-start pt-4">
                        <div class="row">
                           <div class="mb-3">
                              <label for="exampleInputFirst" class="form-label small text-muted">UserName <small class="text-danger">*</small></label>
                              <input  id="username" type="text" class="form-control" id="exampleInputFirst" aria-describedby="emailHelp" placeholder="Enter User Name">
                              
                           </div>
                        </div>
                        <div class="mb-3">
                           <label class="form-label small text-muted">E-Mail Address <small class="text-danger">*</small></label>
                           <input  id="email" type="email" class="form-control" placeholder="Enter E-Mail">
                        </div>
                        <div class="mb-3">
                           <label class="form-label small text-muted">Password <small class="text-danger">*</small></label>
                           <input id="password" type="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="mb-3">
                           <label class="form-label small text-muted">Confirm Password <small class="text-danger">*</small></label>
                           <input  id="confirmpassword" type="password" class="form-control" placeholder="Enter Confirm Password">
                        </div>
                        <p id="alertfield">
                        </p>
                        <div class="mb-3 form-check">
                           <input type="checkbox" class="form-check-input" id="exampleCheck1">
                           <label class="form-check-label small text-muted" for="exampleCheck1">I agree to the <a href="terms-and-conditions.html" class="text-mdinfo">Terms &amp; Conditions</a></label>
                        </div>
                        <button onclick="myFunction(this)" id="register" type="button" class="btn btn-warning fw-bold fs-7 rounded-3 w-100 border-0 px-4 py-3 text-uppercase">Sign Up</button>
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
                     <p class="text-muted mb-0">Already have an account? <a href="signin.html" class="text-mdinfo">Sign In</a></p>
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
            'email':$( "#email" ).val(),
            'password':$( "#password" ).val(),
            'confirmpassword':$( "#confirmpassword" ).val(),

         };
         $.ajax({
            headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            type: 'post',
            url: '/registerAjax',
            data: formData,
            dataType: 'json',
            success: function (data) {
               if(data.result){
                  window.location.href="/signin"
               }else{
                  $('#alertfield').html(`<div> <i class="bi bi-bag-x-fill"></i> ${data.message}</div>`);
               }
              console.log(data);
            }
        });
};
    </script>
@endsection