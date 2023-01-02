<div class="panel units-list w-100 p-2">
    <div class="units-head w-100">
        <h3 class="p-0 m-0">STAFF LIST</h3>
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
                    <th scope="col">STAFF NAME</th>
                    <th scope="col">STAFF EMAIL</th>
                    <th scope="col">STAFF ID</th>
                    <th scope="col">OPTIONS</th>
                </tr>
            </thead>
            <tbody class="">
                @csrf
                @foreach ($staff_data as $item)
                <tr>
                    <td scope="row">{{ $item->staff_id }}</td>
                    <td>{{ $item->staff_name }}</td>
                    <td>{{ $item->staff_email }}</td>
                    <td>{{ $item->staff_role }}</td>
                    <td>
                        <div class="options">
                            <a href=""><button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>
                            <a href="{{ url('delete-staff/'.$item->staff_id) }}"><button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>