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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script
        src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">
    <link href="{{asset('/css/style.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#mytable').DataTable();
        } );

    </script>

    <style rel="stylesheet">
        .tg  {border-collapse:collapse;border-color:#9ABAD9;border-spacing:0;}
        .tg td{background-color:#EBF5FF;border-color:#9ABAD9;border-style:solid;border-width:1px;color:#444;
            font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;word-break:normal;}
        .tg th{background-color:#409cff;border-color:#9ABAD9;border-style:solid;border-width:1px;color:#fff;
            font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;padding:5px;word-break:normal;}
        .tg .tg-phtq{background-color:#D2E4FC;border-color:inherit;text-align:left;vertical-align:top;text-align: center;}
        .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top;padding:25px;text-align: center;}
    </style>

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
{{--End Navbar--}}
<div class="main">
    <div class="container">
        <div class="show_details text-center bg-info">
            <h1>Full Details</h1>
        </div>
        <table class="tg" id="mytable">
            <tbody>
            <tr>
                <td class="tg-phtq">Trip Date</td>
                <td class="tg-phtq">Car Number</td>
                <td class="tg-phtq">Driver Name</td>
                <td class="tg-phtq">Gross Income</td>
                <td class="tg-phtq">Road Cost</td>
                <td class="tg-phtq">Maintenance Cost</td>
                <td class="tg-phtq">Driver Commission</td>
                <td class="tg-phtq">Net Income</td>
                <td class="tg-phtq">Trip From</td>
                <td class="tg-phtq">Trip To</td>
            </tr>
            $i=0;
            @foreach($data as $key)
                <tr>
                    <td class="tg-phtq">{{ $key->trip_date }}</td>
                    <td class="tg-phtq">{{ $key->car_number }}</td>
                    <td class="tg-phtq">{{ $key->driver_name }}</td>
                    <td class="tg-phtq">{{ $key->gross_income }}</td>
                    <td class="tg-phtq">{{ $key->road_cost }}</td>
                    <td class="tg-phtq">{{ $key->maintenance_cost }}</td>
                    <td class="tg-phtq">{{ $key->driver_commission }}</td>
                    <td class="tg-phtq">{{ $key->net_income }}</td>
                    <td class="tg-phtq">{{ $key->destination_from }}</td>
                    <td class="tg-phtq">{{ $key->destination_to }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
</div>
</div>



</body>

</html>
