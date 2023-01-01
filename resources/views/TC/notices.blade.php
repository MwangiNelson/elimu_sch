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
    <link rel="stylesheet" href="/css/STC/notices.css">
    <title>Notices-ELIMU SCH</title>
</head>

<body>

    <nav class="nav-bar w-100 p-0 m-0">

        <div class="back">
            <a href="{!! URL::previous() !!}"> <button class="btn btn-outline-light"><i class="fa-solid fa-arrow-left"></i></button></a>
        </div>
        <div class="logo-container">
            <img src="images/ES_LOGO.png" class="logo-img" alt="">
        </div>
        <!-- <div class="menu-button w-25 pe-2">
            <img src="images/teen.png" alt="">
            <h4 class="name">JOHN LENNIN</h4>
        </div> -->
    </nav>

    <section class="notices w-100">
        <div class="page-head">
            <div class="extra">
                <img src="images/pin.png" alt="">
                <h2>NOTICES</h2>
            </div>
            <span class="line w-25"></span>
        </div>
        @foreach ($notices as $item)
        <div class="notice w-100">
            <h3>{{$item->notice_header}}</h3>
            <span class="line"></span>
            <p>{{$item->notice_desc}}</p>

            <div class="owner w-100" style="flex-direction:column;">
                <p>{{$item->posted_by}}</p>
                <p>{{$item->created_at}}</p>
            </div>
        </div>
        @endforeach


    </section>

</body>



</html>