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
              <h1>Personal Details</h1>
              <p style="padding-top: 15px;">It will only take few seconds</p>
            </div>
            <div class="su_persoanl_details">
              <form class="su_form_details" action="">
                <div class="su_input_item">
                  <label for="">First Name*</label>
                  <input type="text" id="fname" required>
                </div>
                <div class="su_input_item">
                  <label for="">Last Name*</label>
                  <input type="text" id="lname" required>
                </div>
                <div class="su_input_item su_input_flex">
                  <label for="">Mobile Number*</label>
                  <div class="su_input_flex">
                    <input class="su_country_code" type="number" id="country_code" placeholder="Country Code" required>
                    <input class="su_phone_number" type="number" id="mobile_number" required>
                  </div>
                </div>
                <div class="su_input_item">
                  <label for="">e-Mail*</label>
                  <input type="email"  id="email_id" required>
                </div>
              </form>
            </div>
            <div class="su_button">
              <input class="su_primary_button" type="submit" value="Next" onclick="onSignupFormNext()">
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
  <script src="{{ asset('public/js/signup.js') }}"></script>
</body>
</html>
