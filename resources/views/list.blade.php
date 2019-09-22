<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1>List of employees</h1>
    <table  class="table">
      <thead>
       <th>Id</th>
       <th>Name</th>
       <th>Email</th>
       <th>Date Of birth</th>
       <th>Salary</th>
       <th>Edit</th>
       <th>Delete</th>
      </thead>
      <tbody>
      @foreach($employee as $e)
        <tr>

            <td>{{$e->id}}</td>
            <td>{{$e->name}}</td>
            <td>{{$e->email}}</td>
            <td>{{$e->birth_date}}</td>
            <td>{{$e->salary}}</td>
            <td><a href="{{ URL::to('edit/'.$e->id)}}">Edit</a></td>
            <td>
            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#{{ $e->id }}">Delete</button>
            <div class="modal fade" id="{{$e->id}}" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Delete Confirmation</h4>
                  </div>
                  <div class="modal-body">
                    <p>Are you sure to delete {{ $e->name}}</p>
                  </div>
                  <div class="modal-footer">
                  <a href="{{ URL::to('delete/'.$e->id) }}" class="btn btn-danger">Delete</a>  
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
                
              </div>
            </div>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
</div>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>