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
    <link rel="stylesheet" href="/css/TC/teacher.css">
    <script src="/js/all.js" defer></script>
    <title>Student Portal - ELIMU SCHOOL</title>
</head>

<body>
    <nav class="nav-bar w-100 p-0 m-0">
        <div class="logo-container">
            <a href="/"><img src="images/ES_white.png" class="logo-img" alt=""></a>
        </div>
        <div class="menu-button w-25 pe-2" style="flex-direction: column;">
            <a href="{{ route('auth.logout') }}"><button class="logout-btn"><i class="fa-solid fa-power-off pe-3"></i>LOG OUT</button></a>
            <h4 class="name" style="text-transform: uppercase; font-size:15px;">TR. {{$LoggedUserInfo['staff_name']}}</h4>
        </div>
    </nav>
    <section class="main w-100">
        <div class="notices w-100">

            <div class="notice w-100">
                <div class="header">
                    <h3>POST NOTICE</h3>
                </div>
                <form action="{{route('auth.add-notice')}}" method="post" class="w-100">
                    @csrf
                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    <hr>
                    @endif

                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    <hr>
                    @endif
                    <div class="s-input w-100">
                        <label for="f_name">Notice Header :</label>
                        <input type="text" class="notice_header form-control" name="notice_header" id="notice_header">
                    </div>
                    <div class="s-input w-100">
                        <label for="f_name">Notice details :</label>
                        <textarea class="form-control" rows="5" name="notice_desc" id="notice_desc"></textarea>
                    </div>
                    <div class="btn-holder w-100 py-2">
                        <button class="btn btn-primary w-100" type="submit">
                            SUBMIT
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <div class="view-all w-75 pt-3">
            <a href="noticesteacher" class="w-75"> <button class="btn btn-outline-dark w-50">View all <i class="fa-solid fa-angles-right ps-3"></i></button></a>
        </div>
    </section>
    <section class="units w-75">
        <div class="section-head w-100">
            <h2>My teaching subjects</h2>
        </div>
        <div class="unit-holder">
            @foreach ($unit_data as $item)
            <div class="unit-card w-100">
                <span class="shadow"></span>
                <div class="unit-details">
                    <h4 class="unit_title">
                        {{$item->unit_name}}
                    </h4>
                    <p class="unit_desc">ICS3201</p>
                    <span class="unit-desc">
                        {{$item->unit_desc}}
                    </span>
                </div>
                <a href="{{ url('unit/'.$item->id) }}"><span class="w-100">EDIT COURSEWORK</span></a>

            </div>
            @endforeach


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