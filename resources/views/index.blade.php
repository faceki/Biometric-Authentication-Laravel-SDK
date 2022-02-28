<!doctype html>
<html lang="en">
<head>
  <title>Faceki</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('public/css/responsive.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body class="mb-body">
  <header class="bg-dark">
    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <div class="text-right">
              <a class="navbar-brand" href="/">
                <img src="{{ asset('public/image/logo.png') }}" alt="Logo">
              </a>
            </div>
          </div>
        </div>
      </div>
  </header>
  <!--header-end-->
  <div class="signup">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <div class="user-signup">
             <p>Don't have a FACEKI account?</p>
             <a href="javascript:void(0);" onclick="getToken('pre_signup');">
              <img src="https://app.faceki.com/img/group-88@1x.png" alt="logo">
             </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="newsignIn">
    <h4>Sign In</h4>
    <a href="javascript:void(0);" onclick="getToken('login');">
      <img src="https://app.faceki.com/img/group-89@1x.png" class="img-responsive signBtn">
    </a>
  </div>

<!--Script-Start-->
<script src="{{ asset('public/js/jquery-3.3.1.slim.min.js') }}"></script>
<script src="{{ asset('public/js/popper.min.js') }}"></script>
<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js/faceki-startup.js') }}"></script>
<!--Script-End-->
</body>

</html>
