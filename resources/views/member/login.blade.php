
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
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
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
                  <h4 class="card-title ">Login Form</h4>
                  
                </div>
                <div class="card-body">
                  <center>
                    <img src="{{URL::to('images/logo.png')}}" width="100px">
                  </center>
                  <div class="table-responsive">
                    <form action="{{route('login')}}" method="POST">
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
                        <a href="{{url('/auth/register')}}" class="btn btn-danger">Register</a>
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
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script type="text/javascript">
    @if(Session::has('register'))
    Toastify({
      text: "You have registered successfully!",
      duration: 3000, 
      newWindow: true,
      close: true,
      gravity: "top", // `top` or `bottom`
      position: 'right', // `left`, `center` or `right`
      backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
      stopOnFocus: true, // Prevents dismissing of toast on hover
      onClick: function(){} // Callback after click
    }).showToast();

    @endif

    @if(Session::has('logout'))
    Toastify({
      text: "Thank You!",
      duration: 3000, 
      newWindow: true,
      close: true,
      gravity: "top", // `top` or `bottom`
      position: 'right', // `left`, `center` or `right`
      backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
      stopOnFocus: true, // Prevents dismissing of toast on hover
      onClick: function(){} // Callback after click
    }).showToast();
     @endif

    

    @if(Session::has('invalid'))
    Toastify({
      text: "Invalid Email/Password Combination",
      duration: 3000, 
      newWindow: true,
      close: true,
      gravity: "top", // `top` or `bottom`
      position: 'right', // `left`, `center` or `right`
      backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
      stopOnFocus: true, // Prevents dismissing of toast on hover
      onClick: function(){} // Callback after click
    }).showToast();

    @endif

   

    @if(Session::has('banned'))
      Toastify({
      text: "User account has been locked!",
      duration: 3000, 
      newWindow: true,
      close: true,
      gravity: "top", // `top` or `bottom`
      position: 'right', // `left`, `center` or `right`
      backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
      stopOnFocus: true, // Prevents dismissing of toast on hover
      onClick: function(){} // Callback after click
    }).showToast();
       
    @endif
    
  </script>
  
  
</body>

</html>