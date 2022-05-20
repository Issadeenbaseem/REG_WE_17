<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<body>
<div class="container-fluid">


	<div class="row">
		<div class="col-md-12">
			
		<div class="topnav">
		<h3 class="text-center text-primary">
			View and Print All Patients' Details.
			</h3>
  <div class="search-container">
  <form action="/search" method="POST">
  @csrf
      <input type="text" placeholder="Search.." id="searchtxtbox" name ="searchtxtbox " >
      <button type="submit">Search</button>
    </form>
  </div>
</div>

			
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<table class="table">
						<thead>
							<tr>
								<th>
									Patient ID
								</th>
								<th>
                                    Patient Name
								</th>
								<th>
									Email
								</th>
								<th>
									Appointmemt ID
								</th>
                                <th>
									Contact
								</th>
								<th>
									Age
								</th>
								<th>
									Action
								</th>
								<th>
									Delete
								</th>
							</tr>
						</thead>
						<tbody>
                            <!-- patient information -->
						@foreach($patient as $pats)
							<tr>
								<td>
								{{$pats->id}}
								</td>
								<td>
								{{$pats->name}}
								</td>
								<td>
								{{$pats->email}}
								</td>
								<td>
								{{$pats->appoitment}}
								</td>
								<td>
								{{$pats->contact}}
								</td>
								<td>
								{{$pats->age}}
								</td>
								<td>
								<a href='/u-view/{{$pats->id}}'>Update</a>
								</td>
								<td>
								<a href='/delete/{{$pats->id}}'>delete</a>
								</td>
							</tr>
							@endforeach
                            <!-- patient information -->
						</tbody>
					</table>
					
					<button onclick="window.print()" class="btn btn-primary" style="background-color: tomato;">Print</button>
					Sort By
					<select name='sort' id='sort'onchange="javascript:handleSelect(this)" class="btn btn-primary" >
					<option value="all" selected>Sort By age</option>
					<option value="all">All</option>
					<option value="adults">Adults</option>
					<option value="child">Children</option>
					</select>
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>
	</div>
</div>

</body>
<script>
$('.print-window').click(function() {
    window.print();
});
  function handleSelect(elm)
  {
	console.log("patient?sort="+elm.value);
    window.location.href = "patient?sort="+elm.value;
  }
</script>
</script>