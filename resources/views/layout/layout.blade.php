<!DOCTYPE html>
<html lang="en">
@include('layout.partial.Header')
<body class="d-flex flex-column h-100 bg-light">
      <main class="flex-shrink-0">
         <div class="bg-primary">
            <!-- Navigation-->
          
            @include('layout.partial.Nav')

        
      @yield('content')
      @include('layout.partial.Footer')
      @include('layout.partial.Js')
   </body>
</html>