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
    <link rel="stylesheet" href="/css/HR/admin.css">
    <title>EDITOR</title>
</head>

<body>
    @include('../templates.navbar')

    <section class="section-main w-100">
        <div class="editor-form-container w-50">
            <div class="header">
                <h2>EDITOR MODE</h2>
                <hr>
            </div>
            <form action="{{ url('/update-student/'.$student->stud_id) }}" method="post" class="form-control">

                @csrf
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
                <div class="input-holder">
                    <label for="name">Current Name: <span class="bold">{{$student->stud_name}}</span></label>
                    <input type="text" class="form-control" value="{{$student->stud_name}}" name="new_name">
                </div>
                <div class="input-holder">
                    <label for="name">Current Email: <span class="bold">{{$student->stud_email}}</span></label>
                    <input type="email" class="form-control" value="{{$student->stud_email}}" name="new_email">
                </div>
                <div class="input-holder">
                    <label for="name">Current ID: <span class="bold">{{$student->stud_id}}</span></label>
                    <input type="number" class="form-control" value="{{$student->stud_id}}" name="new_id">
                </div>
                <div class="input-holder">
                    <label for="name">Current Status: <span class="bold">{{$student->stud_enrol_status}}</span></label>
                    <select name="new_status" class="form-control" value="{{$student->stud_enrol_status}}" id="">

                        <option value="enrolled">Enrolled</option>
                        <option value="waiting">Waiting</option>
                    </select>
                </div>
                <div class="buttons-holder p-2 w-50">
                    <a href="{{url('admin')}}" class="w-50"><button type="button" class="w-100 btn btn-outline-danger">Cancel</button></a>
                    <button class="btn btn-primary w-50" type="submit">Update</button>
                </div>
            </form>
        </div>
    </section>

</body>

</html>