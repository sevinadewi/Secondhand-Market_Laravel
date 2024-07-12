<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body>
    {{-- <div class="container">
        <h1 class="text-center">Halo, Bootstrap di Laravel!</h1>
        <button type="button" class="btn btn-warning">Klik Saya!</button>
    </div>
    <div class="d-flex justify-content-center mt-5" >
        <div class="card rounded" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Register</h5>
                <form method="POST" action="{{route('register.post')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input name="confirm_password" type="password" class="form-control" id="confirm-password" placeholder="Confirm your password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </form>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <div class="form-container sign-up-container">
            <form method="POST" action="{{route('register.post')}}">
                @csrf
                <h1>Create Account</h1>
                <br>
                <input name="name" type="text" id="name" placeholder="Enter your name">
                <input name="email" type="email"id="email" placeholder="Enter your email">
                <input name="password" type="password"  id="password" placeholder="Enter your password">
                <br>
                <button type="submit">Register</button>
                <a href="{{route('login')}}" class="switch">Already have an account? Sign In</a>
            </form>
        </div>
        <div class="image-container">
            {{-- <img src="path-to-your-image.jpg" alt="Image Description"> --}}
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>