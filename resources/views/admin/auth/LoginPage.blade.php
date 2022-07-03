<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}} Admin | </title>
    <link rel="icon" type="image/x-icon" href="{{asset('adminAssets/res/applogo.png')}}">
    <!-- Bootstrap -->
    <link href="{{asset('adminAssets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('adminAssets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('adminAssets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('adminAssets/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('adminAssets/build/css/custom.min.css')}}" rel="stylesheet">

    <link href="{{asset('adminAssets/res/app.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <h1><img class="loginpagelogo" src="{{asset('adminAssets/res/applogo.png')}}"></h1>
            <form action="{{route('admin.login.post')}}" method="post">
                @csrf
              <h1>Login Form</h1>
              <div>
                <input type="text" name="email" class="form-control" placeholder="Username" value="{{ old('email') }}" required="" />
                 @error('email')
                    <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                 @enderror
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" value="{{ old('password') }}" required="" />
                 @error('password')
                    <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                 @enderror
              </div>
              <div>
                <button class="btn btn-default submit" type="submit">Log in</button>
              </div>
                @error('loginerror')
                    <div class="alert alert-danger">{{ $errors->first('loginerror') }}</div>
                 @enderror
              <div class="clearfix"></div>.<div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>

                  <p>©2016 All Rights Reserved. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
