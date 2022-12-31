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
    <title>ADMIN</title>
</head>

<body>
    @include('../templates.navbar')

    <section class="main w-100">
        <div class="side-nav w-25">
            <div class="btn-holder w-100">
                <button class="side-btn selected-btn" id="dash-btn">
                    <i class="fa-solid fa-warehouse font-large"></i>
                    STUDENTS LIST
                </button>
                <button class="side-btn" id="user-btn">
                    <i class="fa-solid font-large fa-users"></i>
                    UNITS LIST
                </button>
                <button class="side-btn" id="products-btn">
                    <i class="fa-solid font-large fa-boxes-packing"></i>
                    ADD UNIT
                </button>
                <button class="side-btn" id="profile-btn">
                    <i class="fa-solid font-large fa-address-card"></i>
                    STAFF LIST
                </button>
                <button class="side-btn" id="profile-btn">
                    <i class="fa-solid font-large fa-address-card"></i>
                    EDIT STAFF
                </button>
                <a href="{{route('auth.logout')}}" style="text-decoration:none ;" class="w-100">
                    <button class="side-btn logout-btn btn-logout w-100">
                        <i class="fa-regular fa-circle-xmark"></i>
                        LOGOUT
                    </button>
                </a>
            </div>
        </div>
        <div class="panel-section w-75 p-2">
            <div class="panel-holder w-100" id="1">
                <!-- students panel -->
                @include('HR\students_list')
                <!-- staff_list panel -->
                
                <!-- units_list panel -->
                @include('HR\units')
                <!-- units_list panel -->
            

                <!-- add_units panel-->
            </div>
        </div>
    </section>
    @include('../templates.footer')
</body>
<script>
    const alert = document.querySelectorAll('.alert');

    alert.forEach((alertElement) => {
        setTimeout(() => alertElement.style.display = "none", 5000)
    })


    const panels = document.querySelectorAll('.panel');
    const panel_buttons = document.querySelectorAll('.side-btn');

    panel_buttons.forEach((btn) => {
        btn.addEventListener('click', () => {
            let previous_select = document.querySelectorAll('.selected-btn');
            previous_select.forEach((select) => {
                select.classList.remove('selected-btn')
            })

            btn.classList.add('selected-btn');

        })
    })

    document.addEventListener('click', () => {
        for (var i = 0; i < panels.length; i++) {
            if (panel_buttons[i].classList.contains('selected-btn')) {
                panels[i].classList.add('panel-selected');
            } else {
                panels[i].classList.remove('panel-selected');
            }
        }
    })
</script>

</html>