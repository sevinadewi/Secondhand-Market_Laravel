<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <title>Login</title>
</head>
<body>
{{--     
    <div class="d-flex justify-content-center mt-5" >
        <div class="card rounded" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Login</h5>
                <form method="POST" action="{{route('login.post')}}">
                    @csrf
                
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                  
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
                <p class="text-center mt-3">Don't have an account? <a href="{{ route('register.get') }}">Register</a></p>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <div class="form-container sign-in-container">
            <form method="POST" action="{{route('login.post')}}">
                @csrf
                <h1>Sign in</h1>
               <br>
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
              <br>
                <button>Sign In</button>
                <a href="{{ route('register.get') }}" class="switch">Don't have an account? Sign Up</a>
            </form>
        </div>
        <div class="image-container">
            {{-- <img src="path-to-your-image.jpg" alt="Image Description"> --}}
        </div>
    </div>
    
</body>
</html>