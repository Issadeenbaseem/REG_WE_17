<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center text-primary">
				Update Patient Informations
			</h3>
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
				@foreach($patient as $pats)
				<form role="form" method='post' action="/update/{{$pats->id}}">
				<div class="form-group">
							
				<input type="hidden" name="_method" value="post">
    			<input type="hidden" name="_token" value="{{ csrf_token() }}">

							 	<label>
									 ID
								 </label>
								 <input type="text" class="form-control" id="id" name='id' value='{{$pats->id}}' disabled/>
								 <label>
									 Name
								 </label>
								 <input type="text" class="form-control" id="name" name='name' value='{{$pats->name}}'/>
								 <label>
									 Email address
								 </label>
								 <input type="email" class="form-control" id="email" name="email" value='{{$pats->email}}' />
								 <label>
									 Age
								 </label>
								 <input type="text" class="form-control" id="age"  name="age" value='{{$pats->age}}'/>
								 <label>
									 Appointmemt
								 </label>
								 <input type="text" class="form-control" id="appointment" name="appointment" value='{{$pats->appoitment	}}' />
								 <label for="exampleInputEmail1">
									 Contact
								 </label>
								 <input type="text" class="form-control" id="contact" name="contact" value='{{$pats->contact}}' />
								 @endforeach
							 <br><button type="submit" class="btn btn-primary">
								 Update
							 </button>
							 <input type="reset" class="btn btn-primary">
						 </form>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
	</div>
</div>