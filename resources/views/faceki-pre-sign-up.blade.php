<!DOCTYPE html>
<html lang="en">
<head>
  <title>FACEKI</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no" />
  <meta name="author" content="goodSide" />
  <meta name="description" content="goodSide" />
  <meta name="keywords" content="goodSide" />
  <!--link shortcut-icon-->
  <link rel="shortcut icon" href="{{ asset('public/image/favicon.png') }}" />
  <!--link font css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/signup_assets/fonts/fonts.css') }}" />
  <!--link bootstarp css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/signup_assets/css/bootstrap.min.css') }}" />
  <!--link style css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/signup_assets/css/style.css') }}" />
  <!-- link Responsive css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/signup_assets/css/responsive.css') }}" />
</head>

<body>

  <section class="su_signup_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="su_signup_item">
            <div class="su_signup_heading">
              <h1>Sign-up</h1>
              <p>It will only take few seconds, <br>Then you will never need to use your password again. <br>You can sign-in simply with a selfie</p>
              <p>Faster & More Secure</p>
            </div>
            <div class="su_signup_step">
              <ul>
                <li>
                  <span><img src="{{ asset('public/signup_assets/images/fillup.png') }}" alt="icon"></span>
                  <span>Fill your details</span></li>
                  <li>
                    <span><img src="{{ asset('public/signup_assets/images/take-selfie.png') }}" alt="icon"></span>
                    <span>Take a selfie picture</span>
                  </li>
                </ul>
              </div>
              <div class="su_button">
                <a href="javascript:void(0);" onclick="getToken('signup');" class="su_primary_button">START</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--JS file-->
    <script src="{{ asset('public/signup_assets/js/jquery-1.3.2.min.js') }}"></script>
    <script src="{{ asset('public/signup_assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/signup_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/js/faceki-startup.js') }}"></script>
  </body>
  </html>
