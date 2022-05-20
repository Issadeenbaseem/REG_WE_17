<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<body style="background-color: #94b4e2;"><div class="container-fluid" >
<meta name="csrf-token" content="{{ csrf_token() }}">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center " style="color: black;">
			Insert Patient Details 
			</h3>
			<div class="row">
				<div>
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-3">
					<p>
						Health of citizens are very imporant for our country <strong>Insert patient here</strong>.
						We  love to help you.
					</p>
				</div>
				<div class="col-md-5" style="padding-left: 100px; padding-top: 50px;">
				<form role="form" method='post' action="/insert">
					@csrf
						<div class="form-group">
							 
						<label>
								<strong>Name </strong>
							</label>
							<input type="text" class="form-control" id="name" name='name' required/>
							<label>
							<strong>Email address</strong>
							</label>
							<input type="email" class="form-control" id="email" name="email" required/>
							<label>
							<strong>Age</strong>
							</label>
							<input type="number" class="form-control" id="age"  name="age" minlength="1" maxlength="3" required />
							<label>
							<strong>Appointmemt ID</strong>
							</label>
							<input type="text" class="form-control" id="appointment" name="appointment" required/>
							<label for="exampleInputEmail1">
							<strong>Contact</strong>
							</label>
							<input type="text" class="form-control" id="contact" name="contact" placeholder="xxxxxxxxxx" pattern="[0][17][0125678][0-9]{7}" maxlength="10" required/>
						<br><button type="submit" class="btn btn-primary" >
						<strong>Submit</strong>
						</button>
						<input type="reset" class="btn btn-primary">
						<button class="btn btn-primary" onclick="document.location='patient'">View Patients</button>

					</form>
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>
	</div>
</div>
</body>