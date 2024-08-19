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
                            <h1 class="m-0">Transaction</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>


            {{-- main content --}}
            <div class="content">
                <div class="container-fluid">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h1 class="card-title ">
                                <i class="fas fa-users" style="font-size: 1.5rem;"></i>
                                <strong style="font-size: 1.5rem;"> List Transaction</strong>
                            </h1>
                        </div>
                        <div class="card-body">
                            {{-- image modal --}}
                            <div class="modal fade" id="imageModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img id="modalImage" src="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <table id="ex" class="table table-bordered table-hover mt-2">
                                <thead>
                                    <tr>
                                        <th style="width: 1%;">NO</th>
                                        <th>Transaction Date</th>
                                        <th>Username</th>
                                        <th>Total Amount</th>
                                        <th>Shipping Address</th>
                                        <th>Biling Addresss</th>
                                        <th style="width: 10%">Invoice Images</th>
                                        <th style="width: 15%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>20-21-2024</td>
                                        <td>NoName</td>
                                        <td>$200</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum esse eius
                                            labore, ea distinctio aliquid? Commodi, quo! Cupiditate reiciendis maxime
                                            aspernatur voluptates atque quae dignissimos fuga? Autem quod voluptatem
                                            quam.</td>
                                        <td>-</td>
                                        <td>
                                            <img width="100%" class="img-fluid view-image" data-toggle="modal"
                                                data-target="#imageModal"
                                                data-image="{{ asset('backend_theme/dist/img/prod-1.jpg') }}">
                                        </td>


                                        <td>
                                            <div class="btn-group" role="group" aria-label="Action buttons">
                                                <a href="" class="btn btn-sm btn-warning"><i
                                                        class="nav-icon fas fa-edit"></i></a>
                                                <form action="" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-sm btn-danger" type="submit">
                                                        <i class="nav-icon fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
        document.addEventListener('DOMContentLoaded', function() {
            var images = document.querySelectorAll('.view-image');
            images.forEach(function(img) {
                img.addEventListener('click', function() {
                    var imageUrl = img.getAttribute('data-image');
                    console.log(imageUrl); // This will log the URL to the console
                    document.getElementById('modalImage').setAttribute('src', imageUrl);
                });
            });
        });

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
