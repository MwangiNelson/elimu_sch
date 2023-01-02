<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <!-- Fontawesome icons cdn link -->
    <script src="https://kit.fontawesome.com/db540a34d6.js" crossorigin="anonymous"></script>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/STC/students.css">
    <style>
        nav {
            position: relative !important;
        }
    </style>
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
        <a href="student"> <button class="back-btn"><i class="fa-solid fa-arrow-left pe-3"></i>BACK</button></a>
    </div>
    <section class="main-section w-100 m-0">
        @if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
        @endif
        <div class="header w-75">
            <h3>AVAILABLE COURSES</h3>
            <hr>
        </div>
        <div class="registration-section w-75">
            @foreach ($unit as $item)
            <div class="unit-card-reg">
                <div class="card-details w-100">
                    <h6>COURSE NAME</h6>
                    <h4>{{$item->unit_name}}</h4>
                    <p>Chapters: <span class="chapters">{{$item->unit_chapters}}</span></p>
                </div>
                <form action="{{url('reg_unit/'.$item->id )}}" method="post">@csrf<button class="register-btn">REGISTER</button></form>
            </div>
            @endforeach
        </div>
    </section>

</body>

</html>