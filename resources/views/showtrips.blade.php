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

        <div class="title text-center bg-info">
            <h1>Trip Details</h1>
        </div>
        <div class="first">
            <table class="table table-striped" id="showtable">
                <thead>
                <tr>
                    <th>Trip Date</th>
                    <th>Car_number</th>
                    <th>Driver_name</th>
                    <th>Gross Income</th>
                    <th>Net Income</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Costing</th>
                </tr>
                </thead>
                <tbody>



                </tbody>
            </table>
        </div>
    </div>
</div>
{{--Costing Modal--}}
<!-- Modal -->
<div class="modal fade" id="costingModal" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">

                    <h5 class="modal-title bg-info" id="exampleModalLabel">Costing & Commission</h5>




                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="" class="submit-form">
                    @csrf
                    <input type="number" id="trip_id" name="trip_id" value="" hidden>
                    <div class="cost text-center bg-info">
                        <h3>Road Cost</h3>
                    </div>
                    <div class="col-md-12 d-flex">
                        <div class="form-group col-md-3">
                            <label for="Type">Costing Type</label>
                            <input type="text" id="cost_type" name="cost_type">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Type">Amount</label>
                            <input type="number" id="amount" name="amount" value="">
                        </div>
                        <div class="form-group col-md-3" >
                            <label for="Type">Quantity</label>
                            <input type="number" id="quantity" name="quantity" value="">
                        </div>

                        <div class="form-group col-md-3 total_cost">
                            <label for="Type">total cost</label>
                            <input type="number" id="total_cost" name="total_cost"   readonly >
                        </div>


                    </div>
{{--                    <div class="check text-center">--}}
{{--                        <input--}}
{{--                            type="button"--}}
{{--                            class="submit-btn"--}}
{{--                            value="Find Total"--}}
{{--                            name="find_total"--}}
{{--                            id="find_total"--}}

{{--                        />--}}
{{--                    </div>--}}
                    <div class="maintenance text-center bg-info" style="margin-top: 5px;">
                        <h3>Maintenance Cost</h3>
                    </div>
                    <div class="col-md-12 d-flex">
                        <div class="form-group col-md-3">
                            <label for="Type">Maintenance Type</label>
                            <input type="text" id="m_type" name="m_type">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Type">Amount</label>
                            <input type="number" id="m_amount" name="m_amount">
                        </div>
                        <div class="form-group col-md-3" >
                            <label for="Type">Quantity</label>
                            <input type="number" id="m_quantity" name="m_quantity">
                        </div>
                        <div class="form-group col-md-3 total_cost">
                            <label for="Type">total cost</label>
                            <input type="number" id="m_total_cost" name="m_total_cost" readonly >
                        </div>

                    </div>
{{--                    <div class="check text-center">--}}
{{--                        <input--}}
{{--                            type="button"--}}
{{--                            class="submit-btn"--}}
{{--                            value="Total maintenance"--}}
{{--                            name="find_total_maintenance"--}}
{{--                            id="find_total_maintenance"--}}
{{--                        />--}}
{{--                    </div>--}}
                    <div class="Commission text-center bg-info" style="margin-top: 5px;">
                        <h3>Driver Commission</h3>
                    </div>
                    <div class="col-md-12 d-flex">

                        <div class="form-group col-md-6">
                            <label for="Type">Commission Rate</label>
                            <input type="number" id="commission" name="commission">
                        </div>


                    </div>
                    <!-- <div class="check text-center">
                    <input
                      type="button"
                      class="submit-btn"
                      value="Total maintenance"
                      name="find_total_maintenance"
                      id="find_total_maintenance"
                    />
                    </div> -->

                    <button type="submit" class="btn btn-primary bg-info" value="submit" name="submit" id="submit" >Save changes</button>

                </form>
            </div>
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                <button type="submit" class="btn btn-primary" value="submit" name="submit" id="submit" >Save changes</button>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
{{--<div class="modal fade" id="costingModal" tabindex="-1" aria-labelledby="costingModal" aria-hidden="true">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title" id="costingModal">Add Costing</h5>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}

{{--            </div>--}}
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                <button type="button" class="btn btn-primary add_costing">Save</button>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

    {{--End Modal--}}
<script type="text/javascript">
$(document).ready(function() {
    fetchtrips();
    function fetchtrips() {
        $.ajax({
            type: "GET",
            url: "/fetchtrips",
            dataType: "json",
            success: function (response) {
                // console.log(response.fetchtrips);
                $.each(response.fetchtrips, function (key,item) {
                    $('tbody').append('<tr>\
                            <td>'+item.trip_date+'</td>\
                            <td>'+item.car_number+'</td>\
                            <td>'+item.driver_name+'</td>\
                            <td>'+item.gross_income+'</td>\
                            <td>'+item.net_income+'</td>\
                            <td><button type="button" value="'+item.id+'" class="edit_trips btn btn-primary tbn-sm">Edit</button> </td>\
                            <td><button type="button" value="'+item.id+'" class="delete_trips btn btn-primary tbn-sm">Delete</button></td>\
                            <td><button type="button" data-toggle="modal" data-target="#costingModal" value="'+item.id+'" class="costing btn btn-primary tbn-sm">Costing</button></td>\
                        </tr>'

                    );
                });
            }

        });
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).on('click','.costing',function(e){
        e.preventDefault();
        let id = $(this).val();
        $('#trip_id').val(id);
        $('#costingModal').modal('show');

        // $(document).on('click','.add_costing',function(e){
        //     e.preventDefault();
        //    let trip_id = id;
        //    let data = {
        //        'cost_type' : $('#cost_type').val(),
        //        'amount' : $('#amount').val(),
        //        'quantity' : $('#quantity').val(),
        //        'total_cost' : $('#total_cost').val(),
        //        'm_type' : $('#m_type').val(),
        //        'm_amount' : $('#m_amount').val(),
        //        'm_quantity' : $('#m_quantity').val(),
        //        'm_total_cost' : $('#m_total_cost').val(),
        //        'driver_name' : $('#driver_name').val(),
        //        'commission' : $('#commission').val()
        //
        //
        //    }
           // $.ajax({
           //     type: "POST",
           //     url: "/showtrips/",
           //     dataType: "json",
           //     data: data,
           //     success: function (response) {
           //         if(response.status == 200){
           //             console.log("success");
           //         }
           //     }
           //
           // });

        // });

    });


    $('#amount, #quantity').keyup(function(){
        let amount = parseFloat($('#amount').val());
        let quantity = parseFloat($('#quantity').val());

        $('#total_cost').val(amount * quantity );
    });
    $('#m_amount, #m_quantity').keyup(function(){
        let m_amount = parseFloat($('#m_amount').val());
        let m_quantity = parseFloat($('#m_quantity').val());

        $('#m_total_cost').val(m_amount * m_quantity );
    });

});


</script>


</body>

</html>
