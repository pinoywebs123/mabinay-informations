
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
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
  @yield('styles')
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Mabinay Information
        </a>
    </div>
      @include('shared.user.side')

    </div> <!-- End SideBar -->
    <div class="main-panel">
      <!-- Navbar -->
      @include('shared.user.nav')
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            
            
            
           
          </div>
          <div class="row">
            @yield('contents')
            
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="{{URL::to('/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{URL::to('/assets/js/core/popper.min.js')}}"></script>
  <script src="{{URL::to('/assets/js/core/bootstrap-material-design.min.js')}}"></script>
  @yield('scripts')
  
</body>

</html>