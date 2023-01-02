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
    <link rel="stylesheet" href="/css/STC/coursework.css">
    <title>COURSEWORK-ELIMU SCHOOL</title>
</head>

<body>
    <nav class="nav-bar w-100 p-0 m-0">

        <div class="back">
            <a href="{{route('student')}}"> <button class="btn btn-outline-light"><i class="fa-solid fa-arrow-left"></i></button></a>
        </div>
        <div class="logo-container">
            <img src="/images/ES_LOGO.png" class="logo-img" alt="">
        </div>
    </nav>
    <section class="unit w-100">
        <div class="unit-head w-100">
            <div class="unit-name w-75">
                <h2>{{$unit->unit_name}}</h2>
                <h4>ICS{{$unit->unit_code}}</h4>
            </div>
            <div class="lecturer w-25">
                <p>Enrolled On:- {{$unit->created_at}}</p>
            </div>
        </div>

        @foreach ($unit_coursework as $item)
        <div class="content w-100">
            <h4>{{$item->cwork_head}}</h4>
            <hr>
            <p>{{$item->cwork_desc}}</p>

            <div class="content-owner w-100">
                <h3>POSTED BY: {{$item->posted_by}}</h3>
                <h3>CREATED AT: {{$item->created_at}}</h3>
            </div>

        </div>
        @endforeach
    </section>
</body>

</html>