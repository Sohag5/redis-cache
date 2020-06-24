<!DOCTYPE html>
<html lang="en">
<head>
  <title>Redis Cache</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
 
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Employee</button>



  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          
 

            <form action="{{route('employee.store')}}" method="post" >
              {{ csrf_field() }}
              <div class="form-group">
                <label for="code">Employee Code:</label>
                <input type="number" class="form-control" id="email" placeholder="Enter Code" name="employee_code">
              </div>

              <div class="form-group">
                <label for="name">Employee Name:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter Name" name="employee_name">
              </div>


              <div class="form-group">
                <label for="email">Employee Email:</label>
                <input type="email" class="form-control" id="pwd" placeholder="Enter Email" name="employee_email">
              </div>



             
              <button type="submit" class="btn btn-default">Submit</button>
          </form>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>




  <h2>Employee Data table</h2>

  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Employee Code</th>
        <th>Employee Name</th>
        <th>Employee Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($employee as $key=> $item)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$item->employee_code}}</td>
        <td>{{$item->employee_name}}</td>
        <td>{{$item->employee_email}}</td>
        <td style="display: flex;">
          <a href="{{route('employee.edit',$item->employee_id)}}" type="button" class="btn btn-primary btn-sm" value="Edit" name="">Edit</a>&nbsp;
          <a href="{{route('employee.show',$item->employee_id)}}" type="button" class="btn btn-primary btn-sm" value="Edit" name="">show</a>&nbsp;
          <form action="{{route('employee.destroy',$item->employee_id)}}" method="post" >
          {{ csrf_field() }}
          <input name="_method" type="hidden" value="DELETE">
          <input type="submit"  class="btn btn-sm btn-danger"  value="Delete" name="">
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  
</div>

</body>
</html>
