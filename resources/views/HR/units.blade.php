<div class="panel units-list w-100 p-2">
    <div class="units-head w-100">
        <h3 class="p-0 m-0">UNITS LIST</h3>
    </div>
    <hr class="w-100">


    <div class="display-tbl w-100">
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
        <table class="table table-striped w-100">
            <thead class="table-thead">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">UNIT NAME</th>
                    <th scope="col">UNIT CODE</th>
                    <th scope="col">OPTIONS</th>
                </tr>
            </thead>
            <tbody class="">
                @csrf
                @foreach ($student_data as $item)
                <tr>
                    <td scope="row">{{ $item->stud_id }}</td>
                    <td>{{ $item->stud_name }}</td>
                    <td>{{ $item->stud_id }}</td>
                    <td>
                        <div class="options">
                            <a href=""><button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>
                            <a href="{{ url('delete-student/'.$item->stud_id) }}"><button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>