<!DOCTYPE html>
<html>
  <head> 
    
    @include('admin.css')

  </head>
  <body>
    @include('admin.header')

    <!-- Sidebar started-->
    
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      @include('admin.body')
        @include('admin.footer')
  </body>
</html>