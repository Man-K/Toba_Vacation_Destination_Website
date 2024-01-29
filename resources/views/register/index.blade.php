<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Registration Form | CodingLab</title> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Registration Form</span></div>
            <form action="/register" method="post">
                @csrf
                {{-- <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" id="name" placeholder="Name" required>
                </div> --}}
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" id="username" placeholder="Username" required>
                </div>
                <div class="row">
                    <i class="bi bi-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="name@example.com" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="row button">
                    <input type="submit" value="Register">
                </div>
                <div class="signin-link">Allready Have Account? <a href="/login">Signin now</a></div>
            </form>
        </div>
    </div>

</body>

</html>
