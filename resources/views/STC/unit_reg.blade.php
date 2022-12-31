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
    <link rel="stylesheet" href="/css/STC/students.css">
    <title>Student Portal - ELIMU SCHOOL</title>
</head>

<body>
    <nav class="nav-bar w-100 p-0 m-0">
        <div class="logo-container">
            <a href="/"><img src="images/ES_white.png" class="logo-img" alt=""></a>
        </div>
        <div class="menu-button w-25 pe-2">
            <a href="{{ route('auth.logout') }}"><button class="logout-btn"><i class="fa-solid fa-power-off pe-3"></i>LOG OUT</button></a>

            <h4 class="name">{{$LoggedUserInfo['stud_name']}}</h4>
        </div>
    </nav>
    <div class="back w-100">
        <a href="student"> <button class="btn-back"><i class="fa-solid fa-arrow-left pe-3"></i>BACK</button></a>
    </div>
    <section class="main w-100">
        <div class="header w-75">
            <h3>UNIT REGISTRATION TAKING PLACE NOW!</h3>
            <hr>
        </div>
        <div class="registration-section w-75">
            <div class="unit-card">
                <h6>COURSE NAME</h6>
                <h4>Java Fundamentals</h4>
                <p>Chapters: <span class="chapters">20</span></p>

                <button class="register-btn">REGISTER</button>
            </div>
        </div>
    </section>

</body>

</html>