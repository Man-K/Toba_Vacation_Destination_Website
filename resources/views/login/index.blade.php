{{-- @extends('layouts.main')

@section('title')
    <title>Toba Vacation Destination | Login</title>
@endsection

@section('form')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="container">
                <section class="comment-section">
                    <div class="comment-form">
                        <h2 class="text-center">Please LOGIN, Now</h2>
                        <form>
                            <input type="email" placeholder="Email*">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            {{-- <input type="submit" value="Submit"> --}}
{{-- <button class="w-100 btn btn-lg btn-primary" type="submit" value="Submit">Sign in</button>
                        </form>
                        <small class="d-block text-center">Not Registered? <a href="/register">Register Now</a></small>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection --}}

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Login Form | </title> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Login Form</span></div>
            <form action="/login" method="post">
                @csrf
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show " role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert1 alert-danger alert-dismissible fade show " role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Succes!</strong> Registration Succesfull! Please Login.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> --}}

                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" name="email" class="@error('email') is-invalid @enderror" id="email"
                        placeholder="Email" autofocus required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="pass"><a href="#">Forgot password?</a></div>
                <div class="row button">
                    <input type="submit" value="Login">
                </div>
                {{-- <div class="signup-link">Not Registered? <a href="/register">Signup now</a></div> --}}
            </form>
        </div>
    </div>

</body>

</html>
