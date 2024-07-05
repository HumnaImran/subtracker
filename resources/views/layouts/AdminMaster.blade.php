<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('layouts.userpageCSS')
  </head>
  <body >
    @include('layouts.AdminSidebar')
{{-- @include('layouts.header') --}}
        <!-- partial -->
      {{-- @include('admin.body') --}}
        <!-- main-panel ends -->
        @yield('content')

{{-- @include('layouts.footer') --}}

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('layouts.userpageJS')
    <!-- End custom js for this page -->
  </body>
</html>
