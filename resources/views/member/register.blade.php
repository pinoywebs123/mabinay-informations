
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Mabinay Information System
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{URL::to('/assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{URL::to('/assets/demo/demo.css')}}" rel="stylesheet" />
  <style type="text/css">
    body{
      background-color: #dcdde1;
    }
  </style>
</head>

<body class="">
  <div class="content">
        <div class="container-fluid">
          
          <div class="row ">
            <div class="col-md-6 offset-md-3 pt-5">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Registration Form</h4>
                 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <form action="{{route('register')}}" method="POST">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        @csrf 
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                        
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
    </div>
  </body>
  <!--   Core JS Files   -->
  <script src="{{URL::to('/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{URL::to('/assets/js/core/popper.min.js')}}"></script>
  <script src="{{URL::to('/assets/js/core/bootstrap-material-design.min.js')}}"></script>
  
  
</body>

</html>