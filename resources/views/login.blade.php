<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fontawesome icons cdn link -->
    <script src="https://kit.fontawesome.com/db540a34d6.js" crossorigin="anonymous"></script>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <title>LOGIN - ELIMU SCHOOL</title>
</head>

<body>
    <section class="login-body">
        <a href="/">
            <img src="images/ES_white.png" alt="">
        </a>


        <div class="login-form-container w-25">
            <form action="{{ route('auth.check') }}" method="POST" class="w-100">
                @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
                @endif

                @csrf
                <div class="input-field w-100">
                    <label for="email">
                        Enter your email here:
                    </label>
                    <input type="email" name="email" required class="form-control w-100">
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>

                </div>
                <div class="input-field">
                    <label for="password">
                        Enter your password here:
                    </label>
                    <input type="password" name="password" required class="form-control w-100">
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                </div>
                <div class="infomatics w-100">
                    <small class="form-text"><a href="">Forgot password</a> </small>
                </div>
                <button class="btn btn-primary w-100" type="submit">LOG IN</button>
            </form>
        </div>
    </section>
    <footer class="footer-section w-100">
        <div class="upper-foot w-100">
            <a href="">CALENDERS</a>
            <a href="">CONTACT</a>
            <a href="">PRIVACY POLICIES</a>
        </div>
        <div class="lower-foot w-100">
            <div class="logo-display">
                <span class="line"></span>
                <img src="images/ES_white.png" alt="">
                <span class="line"></span>
            </div>
            <h3>SUGOI, BONDO WEST DISTRICT, MAZRAWI/P.O. BOX 5100-0011</h3>
            <div class="socials-container">
                <div class="round">
                    <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div class="round">
                    <i class="fa-brands fa-twitter"></i>
                </div>
                <div class="round">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div class="round">
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>