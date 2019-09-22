<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<h1>Edit Employee</h1>
<div class="container">
			    <form role="form" method="post" action="{{ URL:: to('update/'.$employee->id) }}">
                            {{ csrf_field() }}
                            <div class="form-row">

			    			<div class="col-md-4 mb-3">
                            <label>Name</label>
			                    <input type="text" name="name" class="form-control-is-valid"
                                 placeholder="Name" required value="{{ $employee->name }}">
			    			</div>
                            <div class="col-md-4 mb-3">
                            <label>Email</label>
			    			     <input type="email" name="email" 
                                 class="form-control-is-valid" 
                                 placeholder="Email Address" required value="{{ $employee->email }}">
		                    </div>
                            <div class="col-md-4 mb-3">
                            <label>Birth Date</label>
			    				<input type="date" name="birth_date" class="form-control-is-valid"
                                required value="{{ $employee->birth_date }}">	
			    			</div>

                           <div class="col-md-4 mb-3">
                           <label>salary</label>
			    				<input type="number" name="salary" 
                                class="form-control-is-valid" value="{{ $employee->salary }}">
                            </div>
                            <div>
			    			<button class="btn btn-primary" type="submit">Update</button>
                            </div>
                            </div>
			    		</form>
	    		</div>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>


</body>
</html>






