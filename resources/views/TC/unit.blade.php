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
    <title>Notices-ELIMU SCH</title>
</head>

<body>

    <nav class="nav-bar w-100 p-0 m-0">

        <div class="back">
            <a href="{{route('teacher')}}"> <button class="btn btn-outline-light"><i class="fa-solid fa-arrow-left"></i></button></a>
        </div>
        <div class="logo-container">
            <img src="/images/ES_LOGO.png" class="logo-img" alt="">
        </div>
        <!-- <div class="menu-button w-25 pe-2">
            <img src="images/teen.png" alt="">
            <h4 class="name">JOHN LENNIN</h4>
        </div> -->
    </nav>

    <section class="unit w-100">
        <div class="unit-head w-100">
            <div class="unit-name w-75">
                <h2>{{$unit->unit_name}}</h2>
                <h4>ICS{{$unit->unit_code}}</h4>
            </div>
            <div class="lecturer w-25">
                <p>Tr. {{$unit->unit_lecturer}}</p>
            </div>
        </div>

        <div class="content w-100 m-0 p-2">
            <div class="header">
                <h4>ADD COURSEWORK</h4>
                <hr>
            </div>
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
            <form action="{{ url('add-work/'.$unit->id) }}" method="post">
                @csrf
                <div class="form-input p-2 w-100">
                    <label for="header">TITLE:</label>
                    <input type="text" required name="cwork_head" class="form-control w-75">
                </div>
                <div class="form-input p-2 w-100">
                    <label for="header">DETAILS:</label>
                    <textarea name="cwork_desc" required class="form-control w-75" id="" rows="4"></textarea>
                </div>
                <div class="form-input p-2 w-100">
                    <button class="btn btn-dark">
                        ADD COURSEWORK
                    </button>
                </div>


            </form>

        </div>
        @foreach ($unit_coursework as $item)
        <div class="content w-100">
            <h3>{{$item->cwork_head}}</h3>
            <p>{{$item->cwork_desc}}</p>
            <a href="{{ url('delete-work/'.$item->id) }}"><button class="btn btn-outline-danger">DELETE WORK</button></a>
        </div>
        @endforeach

    </section>

</body>



</html>