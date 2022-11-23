

    <!DOCTYPE html>
<html>
<head>
    <title>VMS form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"
        rel="stylesheet"
    />


    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />

    <script
        src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">
    <link href="{{asset('/css/style.css') }}" rel="stylesheet">





</head>
<body>
<!-- Nvabar Bootstrap -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="#"
    ><img src="./logo.png" class="logo" alt=""
        /></a>
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ">
            <li class="nav-item active">
                <a class="nav-link" href="cars.blade.php"
                >ADD Form <span class="sr-only"></span></a
                >
            </li>
            <li class="nav-item">
                <a class="nav-link" href="report.php">Report</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="showdetails.php">Show details</a>
            </li>

        </ul>
    </div>
</nav>
<!-- End Navbar -->
<div class="main">
    <div class="container">
        <div class="first">
            <div class="row">
                <form action="" method="POST">
                    <div class="heading bg-info text-center">
                        <h1>Enter Car Details</h1>
                    </div>
                    @csrf
                    <div class="form-group">
                        <label>Car Name</label>
                        <input type="text" name="car_name" id="car_name" placeholder="Enter car_name">
                    </div>
                    <div class="form-group">
                        <label>Car Number</label>
                        <input type="text" name="car_number" id="car_number" placeholder="Enter car number">
                    </div>
                    <div class="form-group">
                        <label>Car License</label>
                        <input type="text" name="car_license" id="car_license" placeholder="Enter car license">
                    </div>
                    <!-- <div class="form-group">
                        <label>Trip ID</label>
                        <input type="text" name="trip_id" id="trip_id" placeholder="Enter ID">
                    </div>  -->


            <input
                type="submit"
                class="submit-btn"
                value="submit"
                name="submit"
                id="submit"
                style="justify-content: center;"
            />
            </form>
        </div>
    </div>
</div>
</div>
</body>

</html>
