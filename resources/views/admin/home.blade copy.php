<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">

      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.side')
      <!-- partial -->
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">

     

      </div>
      <!-- page-body-wrapper ends -->
    </div>

    @include('admin.script')
  </body>
</html>
