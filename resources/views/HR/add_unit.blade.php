<div class="panel units-list w-100 p-2">
    <div class="units-head w-100">
        <h3 class="p-0 m-0">ADD UNITS</h3>
    </div>
    <hr class="w-100">


    <div class="display-tbl w-100">
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


        <div class="form-holder w-100 p-4">
            <form action="{{route('auth.add-unit')}}" method="post" class="form-control w-75 py-4 ">
                @csrf
                <div class="w-100">
                    <label for="unit_name">Unit name:</label>
                    <input type="text" name="unit_name" class="form-control w-100">
                    <span class="text-danger">@error('unit_name'){{ $message }} @enderror</span>
                </div>
                <div class="w-100">
                    <label for="unit_desc">Unit description:</label>
                    <textarea class="form-control" name="unit_desc" rows="5" id="comment"></textarea>
                    <span class="text-danger">@error('unit_desc'){{ $message }} @enderror</span>
                </div>
                <div class="w-100">
                    <label for="unit_name">Unit code:</label>
                    <input type="text" name="unit_code" class="form-control w-100">
                    <span class="text-danger">@error('unit_code'){{ $message }} @enderror</span>
                </div>
                <div class="w-100">
                    <label for="unit_name">Unit chapters:</label>
                    <input type="number" name="unit_chapters" class="form-control w-100">
                    <span class="text-danger">@error('unit_chapters'){{ $message }} @enderror</span>
                </div>
                <div class="w-100">
                    <label for="unit_name">Unit lecturer:</label>
                    <input type="text" name="unit_lec" class="form-control w-100" value="1">
                </div>
                <div class="w-50 py-2">
                    <button class="btn btn-primary w-100">ADD UNIT</button>
                </div>
            </form>
        </div>
    </div>


</div>