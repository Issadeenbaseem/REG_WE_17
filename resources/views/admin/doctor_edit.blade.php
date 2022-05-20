<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
  @include('admin.css')



  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">

      </div>

      @include('admin.side')

      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">

         <div class="container">
            <div class="card" >
                <div class="card-body">
                  @if(session()->has('message'))

                  <div class="alert alert-success">


                {{ session()->get('message') }}
                <button class="close-button" aria-label="Close alert" type="button" data-dismiss>
                  <span aria-hidden="true">&times;</span>
                </button>

                  </div>


               @endif
                  <h4 class="card-title">Add Doctors <i class="ctfas fa-dog "></i></h4>

                  <form class="forms-sample " method="POST" action="{{ url('update_doctor',$data->id) }}" enctype="multipart/form-data">

                      @csrf

                      <div class="form-group" style="color: white">
                      <label for="exampleInputName1">Doctor Name</label>
                      <input style="color: black" type="text" class="form-control" name="name" placeholder="Name" value="{{ $data->name }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input style="color: black" type="email" class="form-control" name="email" id="exampleInputEmail3" value="{{ $data->email }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Phone Number</label>
                      <input style="color: black" type="number" class="form-control" name="phone" id="exampleInputEmail3" value="{{ $data->phone }}">
                    </div>


                    <div class="form-group">
                      <label for="exampleSelectGender">Doctor Special</label>
                      <select value={{ $data->special }} style="color: black" class="form-control" name="special" id="exampleSelectGender">
                        <option value="ENT">ENT</option>
                        <option value="Cardio">Cardio</option>
                        <option value="Radio">Radio</option>
                        <option value="Gynaclo">Gynaclo</option>
                        <option value="pediatric">pediatric</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Doctor Image Upload</label>
                      <input type="file" name="img" >
                    </div>

                    <div class="form-group">
                      <label for="exampleInputCity1">Room</label>
                      <input style="color: black" value="{{ $data->room }}" type="text" class="form-control" name="room"  placeholder="Room">
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                  </form>
                </div>
              </div>


         </div>

         </div>

    @include('admin.script')
  </body>
</html>
