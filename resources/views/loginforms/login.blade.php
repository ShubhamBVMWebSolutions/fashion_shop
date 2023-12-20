<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form | CoderGirl</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="{{asset('login forms/style.css')}}">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
       @if (Session::has('alert'))
        <div style="text-align: center; background-color: #bcfbef;">
             <span>{{ Session::get('alert') }}</span>
        </div>
      @endif
      <form action="{{route('user_login')}}" method="post">
        @csrf
        <input type="email" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <a href="#">Forgot password?</a>
        <input type="submit" class="button" value="Login">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Signup</header>
      <form action="{{route('register')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter your Name">
        <input type="email" name="email" placeholder="Enter your Email">
        <input type="password" name="password" placeholder="Create a password">
        <input type="submit" class="button" value="Signup">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>
