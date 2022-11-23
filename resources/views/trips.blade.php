

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
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#formTwoContainer").on('input', '.fair', function () {
                let total_sum = 0;
                $("#formTwoContainer .fair").each(function () {
                    let alldata = $(this).val();
                    if ($.isNumeric(alldata)) {
                        total_sum += parseFloat(alldata);

                    }
                });
                $("#final_fair").val(total_sum);
            });
        });
    </script>



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
                        <h1>Enter Driver Details</h1>
                    </div>
                    @csrf
                    <div class="form-group">
                        <label>Trip date</label>
                        <input type="date" name="trip_date" id="trip_date" placeholder="Enter Date">
                    </div>
                    <div class="form-group">
                        <label>Select Car</label>
                        <select class="form-control" id="car_name" name="car_name">
                            @foreach($cars as $car)
                                <option value="{{ $car->id }}">{{ $car->car_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Select Driver</label>
                        <select class="form-control" id="driver_name" name="driver_name">
                            @foreach($drivers as $driver)
                                <option value="{{ $driver->id }}">{{ $driver->driver_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="formTwoContainer" class="span6" id="formTwoContainer">
                        <div class="rowsToAdd" id="rowsToAdd">
                            <div class="form-group">
                                <label class="control-label">Destination From :</label>
                                <div class="controls">
                                    <input
                                        type="text"
                                        class="span11"
                                        id="destination_from"
                                        name="destination_from[]"
                                        placeholder="starting point"
                                        value=""
                                    />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Destination To :</label>
                                <div class="controls">
                                    <input
                                        type="text"
                                        class="span11"
                                        id="destination_to"
                                        name="destination_to[]"
                                        placeholder="Endpoint"
                                        value=""

                                    />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Enter Fair :</label>
                                <div class="controls" >
                                    <input
                                        type="number"
                                        class="fair"
                                        name="fair"
                                        id="fair"
                                        placeholder="fair"
                                        value=""




                                    />

                                </div>
                            </div>
                            <input type="button"  class="addButtonTwo" value="+" onclick="addRow()" />

                        </div>
                        <div id="rowsToAdd">


                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Total Fair :</label>
                        <div class="controls">
                            <input
                                type="text"
                                class="span11"
                                name="final_fair"
                                id="final_fair"
                                placeholder=""
                                readonly
                                value=""
                            />
                        </div>
                    </div>





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
