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
        <div class="container" align="center" style="padding: 20px;padding-bottom:20px">
            <h1 align="center" style="padding: 20px">Doctor Details Page</h1>
          <table class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">Doctor Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Special</th>
                  <th scope="col">Room</th>
                  <th scope="col">Image</th>
                  <th scope="col">Delete</th>
                  <th scope="col">Edit</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($data as $doctors)
                  <tr>

                     <td>{{ $doctors->name }}</td>
                     <td>{{ $doctors->email }}</td>
                     <td>{{ $doctors->phone }}</td>
                     <td>{{ $doctors->special }}</td>
                     <td>{{ $doctors->room }}</td>
                     <td><img height="100" width="100"  src="doctorimage/{{$doctors->img}}" /></td>
                     <td><a class="btn btn-danger" href="{{ url('doctor_delete',$doctors->id)}}">Delete</a></td>
                     <td><a class="btn btn-primary" href="{{ url('doctor_edit',$doctors->id) }}">Edit</a></td>




                  </tr>
                  @endforeach


              </tbody>
            </table>

        </div>



      </div>
      <!-- page-body-wrapper ends -->
    </div>

    @include('admin.script')
  </body>
</html>
