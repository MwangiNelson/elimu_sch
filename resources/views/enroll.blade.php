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
    <link rel="stylesheet" href="/css/enroll.css">

    <title>ENROLL - ELIMU SCHOOL</title>
</head>

<body>
    <section class="enroll-section w-100">
        <div class="fixed-section w-25">
            <a href="/">
                <img src="images/ES_white.png" alt="">
            </a>
        </div>


        <div class="enroll-form-container w-75">

            <div class="enrollment-header w-100">
                <h1>Enroll with us today.</h1>
                <p>Online enrollment ends on 20th January 2022, fill in the form below to register for enrollment.</p>
            </div>


            <div class="enrolment-div w-100">
                <form action="{{ route('auth.save') }}" method="POST" class="form w-100">

                    @csrf
                    <div class="enroll-form">
                        <div class="student-data w-50">
                            <div class="data-head">
                                <h3>Student details</h3>
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
                            <div class="split-input w-100 p-0">
                                <div class="s-input w-100">
                                    <label for="f_name">First Name :</label>
                                    <input type="text" class="f_name form-control w-100" name="f_name" id="f_name">
                                </div>
                                <div class="s-input w-100">
                                    <label for="l_name">Last Name :</label>
                                    <input type="text" class="l_name form-control w-100" name="l_name" id="l_name">
                                </div>
                            </div>
                            <div class="split-input w-100 p-0">
                                <div class="split-input">
                                    <div class="s-input w-100">
                                        <label for="age">Age :</label>
                                        <input type="number" min="0" class="age form-control w-100" name="age" id="age">
                                    </div>
                                    <div class="s-input w-100">
                                        <label for="gender">Gender :</label>
                                        <select name="gender" id="" class="w-100 form-control">
                                            <option value="Female" selected>Female</option>
                                            <option value="Male">Male</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="s-input w-100">
                                    <label for="f_name">Date Of Birth :</label>
                                    <input type="date" class="dob form-control w-100" name="dob" id="dob">
                                </div>
                            </div>
                            <div class="s-input w-100">
                                <label for="email">Email address :</label>
                                <input type="email" class="email form-control w-100" name="email" id="email">
                            </div>
                            <div class="s-input w-100">
                                <label for="phone_no">Phone number :</label>
                                <input type="number" class="phone_num form-control w-100" name="phone_num" id="phone_num">
                            </div>
                            <div class="s-input w-100">
                                <label for="password">Temporary password :</label>
                                <input type="password" class="address form-control w-100" name="password" id="password">
                            </div>

                        </div>

                        <div class="secondary-data w-50">
                            <div class="guardian-data w-100">

                                <div class="data-head">
                                    <h3>Guardian details</h3>
                                </div>
                                <div class="split-input w-100 p-0">
                                    <div class="s-input w-100">
                                        <label for="g_f_name">First Name :</label>
                                        <input type="text" class="g_f_name form-control w-100" name="g_f_name" id="g_f_name">
                                    </div>
                                    <div class="s-input w-100">
                                        <label for="l_name">Last Name :</label>
                                        <input type="text" class="l_name form-control w-100" name="g_l_name" id="g_l_name">
                                    </div>
                                </div>
                                <div class="split-input w-100 p-0">
                                    <div class="s-input w-100">
                                        <label for="occupation">Occupation :</label>
                                        <input type="text" class="occupation form-control w-100" name="occupation" id="occupation">
                                        <!-- <small class="form-text text-muted">Optional</small> -->
                                    </div>
                                    <div class="s-input w-100">
                                        <label for="phone_no">Address :</label>
                                        <input type="text" class="address form-control w-100" name="g_address" id="g_address">
                                    </div>
                                </div>
                                <div class="s-input w-100">
                                    <label for="email">Email address :</label>
                                    <input type="email" class="email form-control w-100" name="guardian_email" id="guradian_email">
                                </div>
                                <div class="s-input w-100">
                                    <label for="phone_no">Phone number :</label>
                                    <input type="number" class="phone_num form-control w-100" name="g_phone_num" id="g_phone_num">
                                </div>


                            </div>

                            <div class="prev-sch-data w-100">
                                <div class="data-head">
                                    <h3>Previous school details</h3>
                                </div>
                                <div class="s-input w-100">
                                    <label for="sch_name">Name:</label>
                                    <input type="text" class="passport form-control w-100" name="p_school" id="p_school">
                                </div>
                                <div class="s-input w-100">
                                    <label for="transcript">Transcript :</label>
                                    <input type="file" class="transcript form-control w-100" name="transcript" id="transcript">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-100 submit  py-2">
                        <button class="btn btn-secondary w-50" type="submit">SUBMIT</button>

                    </div>

                </form>
            </div>
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