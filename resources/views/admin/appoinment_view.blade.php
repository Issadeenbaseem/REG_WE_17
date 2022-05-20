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
            <h1 align="center" style="padding: 20px">Doctors List</h1>
          <table class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">Customer Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Doctor Name</th>
                  <th scope="col">Massage</th>
                  <th scope="col">Date</th>
                  <th scope="col">Status</th>
                  <th scope="col">Appoiment Approved</th>
                  <th scope="col">Appoiment Cancel</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($data as $appoint)

                <tr align="center">
                   <td>{{$appoint->name  }}</td>
                   <td>{{$appoint->email  }}</td>
                   <td>{{$appoint->phone  }}</td>
                   <td>{{$appoint->doctor  }}</td>
                   <td>{{$appoint->message  }}</td>
                   <td>{{$appoint->date  }}</td>
                   <td>{{$appoint->state  }}</td>
                 <td><a class="btn btn-success" href="{{ url('approve',$appoint->id) }}"onclick="return confirm('Are you sure to Confirme this appoinment')"> Approve</a></td>
                 <td><a class="btn btn-danger" href="{{ url('cancel',$appoint->id)}}"onclick="return confirm('Are you sure to Reject this appoinment')"> Reject</a></td>
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
