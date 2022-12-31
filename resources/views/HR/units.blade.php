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
                    <th scope="row">#</th>
                    <th scope="col">UNIT NAME</th>
                    <th scope="col">UNIT CODE</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">CHAPTERS</th>
            
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="">
                @csrf
                @foreach ($unit_data as $item)
                <tr>
                    <td scope="row">{{ $item->id }}</td>
                    <td>{{ $item->unit_name }}</td>
                    <td>{{ $item->unit_code }}</td>
                    <td>{{ $item->unit_desc }}</td>
                    <td>{{ $item->unit_chapters }}</td>
        
                    <!-- <td>{{ $item->unit_lecturer }}</td> -->
                    <td>
                        <a href="{{ url('delete-unit/'.$item->id) }}"><button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>