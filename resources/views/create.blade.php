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
 

           <h3>Employee Edit</h3><a href="{{URL::To('/')}}" class="btn btn-sm btn-primary">Back</a>

              <form action="{{route('employee.update',$employee->employee_id)}}" method="post" >
                 {{ csrf_field() }}
              <input name="_method" type="hidden" value="PUT">
              <div class="form-group">
                <label for="code">Employee Code:</label>
                <input type="number" class="form-control" value="{{$employee->employee_code}}" id="email" placeholder="Enter Code" name="employee_code">
              </div>

              <div class="form-group">
                <label for="name">Employee Name:</label>
                <input type="text" class="form-control" value="{{$employee->employee_name}}" id="email" placeholder="Enter Name" name="employee_name">
              </div>


              <div class="form-group">
                <label for="email">Employee Email:</label>
                <input type="email" class="form-control" value="{{$employee->employee_email}}" id="pwd" placeholder="Enter Email" name="employee_email">
              </div>



             
              <button type="submit" class="btn btn-default">Submit</button>
          </form>


  
  
</div>

</body>
</html>
