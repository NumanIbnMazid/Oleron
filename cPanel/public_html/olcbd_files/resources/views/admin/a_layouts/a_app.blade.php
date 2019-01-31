<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <!-- Head -->
  @include('admin.a_inc._a_head')

  <body>
    <div id="app">
      <!-- Side Navbar -->
      @include('admin.a_inc._a_left-sidebar')

      <div class="page" id="admin">
        <!-- navbar-->
        @include('admin.a_inc._a_navbar')
        <!-- breadcrumb-->
        @include('admin.a_inc._a_breadcrumb')
        <!-- message-->
        @include('admin.a_inc._a_messages')

          <!-- admin-content -->
            @yield('a-content')
          <!-- /admin-content -->
            
        <!-- footer -->
        @include('admin.a_inc._a_footer')
      </div>

      <!-- JavaScript files-->
      @include('admin.a_inc._a_scripts')
    </div>
  </body>
</html>