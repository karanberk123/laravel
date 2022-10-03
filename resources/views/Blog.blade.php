@extends('layout.layout')


@section('content')
<header class="bg-primary py-5 inner-header">
               <div class="container py-4 px-5">
                  <div class="row gx-5 align-items-center justify-content-center">
                     <div class="col-lg-12">
                        <div class="text-center">
                           <div class="text-center">
                              <h1 class="fw-bold text-white">The Site Blog </h1>
                              <p class="fw-normal text-white-50 mb-0"><a class="text-white" href="index.html">Home</a> <i class="bi-arrow-right"></i> Blog</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </header>
         </div>
         <!-- Page Content-->
         <section class="py-5">
            <div class="container px-5 pt-5">
             
               <div id="show" class="row gx-5">
                  
               </div>
               <div class="d-flex justify-content-center col-lg-12">
                  <div class="card-tools">
                     <ul id="demo" class="pagination pagination-sm">
                        <a href="javascript:prevPage()" class="page-link" id="btn_prev">Prev</a>
                        <a class="page-link" id="page"> page: <span id="page"></span></a>
                        <a href="javascript:nextPage()" class="page-link" id="btn_next">Next</a>
                        
                       
                     </ul>
                   </div>
               </div>
            </div>
         </section>
      </main>
     <script>

var current_page = 1;
var records_per_page = 6;
var pageCount=0;


function prevPage()
{
        current_page--;
        changePage(current_page);
}

function nextPage()
{
   
        current_page++;
        changePage(current_page);
    
}

function changePage(page)
{


    var btn_next = document.getElementById("btn_next");
    var btn_prev = document.getElementById("btn_prev");
    var page_span = document.getElementById("page");

var start = (page-1)*records_per_page

    $.ajax({
            headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            type: 'post',
            url: '/blogAjax',
            data: {
               "start":start,
               "quantity":records_per_page,
            },
            dataType: 'json',
            success: function (data) {
              console.log(data.blogsCount);
              $("#show").html("");
var html="";
for (var i = 0; i < data.blogs.length; i++) {
    html += `<div class="col-lg-4 mb-5">
                     <div class="card h-100 shadow-sm rounded-3 border-0">
                        <img class="card-img-top" src="{{ asset('uploads/gallery/') }}/${data.blogs[i].banner}" alt="...">
                        <div class="card-body p-4">
                           <div class="badge bg-primary bg-gradient rounded-pill mb-2">Media</div>
                           <a class="text-decoration-none link-dark stretched-link" href="#!">
                              <h5 class="card-title mb-3 lh-base">${data.blogs[i].title}</h5>
                           </a>
                           <p class="card-text mb-0">${data.blogs[i].content}</p>
                        </div>
                        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                           <div class="d-flex align-items-end justify-content-between">
                              <div class="d-flex align-items-center">
                                 <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="...">
                                 <div class="small">
                                    <div class="fw-bold">Josiah Barclay</div>
                                    <div class="text-muted">March 23, 2021 · 4 min read</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>`;
}
$("#show").html(html);
pageCount = Math.ceil(data.blogsCount / records_per_page);

if (page == 1) {
        btn_prev.style.visibility = "hidden";
    } else {
        btn_prev.style.visibility = "visible";
    }

    if (page == pageCount) {
        btn_next.style.visibility = "hidden";
    } else {
        btn_next.style.visibility = "visible";
    }

            }
        });

    page_span.innerHTML = page;
}

window.onload = function() {
    changePage(1);
};


     </script>
      @endsection