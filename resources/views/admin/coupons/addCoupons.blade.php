<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    {{-- css --}}
    @include('imports.backend.css')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        {{-- preloader --}}
        @include('template.backend.preloader')

        {{-- navbar --}}
        @include('template.backend.navbar')

        {{-- sidebar --}}
        @include('template.backend.sidebar')

        <div class="content-wrapper">


            {{-- content header --}}
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Coupons</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <!-- button back -->
                    <a href="{{ url()->previous() }}">
                        <button class="btn btn-sm btn-success">
                            <i class="nav-icon fas fa-arrow-left"></i> Back
                        </button>
                    </a>
                </div><!-- /.container-fluid -->
            </div>


            {{-- main content --}}
            <div class="content">
                <div class="container-fluid">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h1 class="card-title ">
                                <i class="fas fa-ticket-alt" style="font-size: 1.5rem;"></i>
                                <strong style="font-size: 1.5rem;">Add Coupons</strong>
                            </h1>
                        </div>
                        <div class="card-body">


                            <!-- Form add new user accoiunt -->
                            <form action="" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="coupon_code">Coupon Code</label>
                                        <input type="text" class="form-control" id="coupon_code" name="coupon_code"
                                            value="" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Discount Type</label>
                                        <select class="form-control" id="" name="">
                                            <option selected="selected" disabled>Select a Type</option>
                                            <option>Percentage</option>
                                            <option>Fixed Amount</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="discount_value">Discount Value</label>
                                        <input type="text" class="form-control" id="discount_value"
                                            name="discount_value" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="start_date">Start Date</label>
                                        <input type="date" class="form-control" id="start_date" name="start_date">
                                    </div>
                                    <div class="form-group">
                                        <label for="end_date">End Date</label>
                                        <input type="date" class="form-control" id="end_date" name="end_date">
                                    </div>
                                    <div class="form-group">
                                        <label for="usage_limit">Usage Limit</label>
                                        <input type="text" class="form-control" id="usage_limit" name="usage_limit"
                                            value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="used_count">Used Count</label>
                                        <input type="text" class="form-control" id="used_count" name="used_count"
                                            value="">
                                    </div>
                                    <button type="submit" class="btn btn-success form-control">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- footer --}}
        @include('template.backend.footer')


    </div>


    {{-- js --}}
    @include('imports.backend.js')


    {{-- settings for data table  --}}
    <script>
        $(function() {
            $('#ex').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": false,
                "info": false,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

</body>

</html>
