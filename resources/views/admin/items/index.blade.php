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
                            <h1 class="m-0">Items</h1>
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
                                <i class="fas fa-archive" style="font-size: 1.5rem;"></i>
                                <strong style="font-size: 1.5rem;"> List Items</strong>
                            </h1>
                        </div>
                        <div class="card-body">
                            <!-- button add artikel -->
                            <a href="{{ route('items.create') }}">
                                <button class="btn btn-sm btn-success">
                                    <i class="fas fa-plus"></i> Add Items
                                </button>
                            </a>
                            <!-- Show list of artikel -->
                            <table id="ex" class="table table-bordered table-hover mt-2 text-center">
                                <thead>
                                    <th style="width:10%">Picture</th>
                                    <th style="width: 5%">Tanggal Ditambahkan</th>
                                    <th>Item Name</th>
                                    <th>Brand</th>
                                    <th>Category Item</th>
                                    <th>Size</th>
                                    <th>Genders</th>
                                    <th>Price</th>
                                    <th style="width: 5%">Action</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{ asset('backend_theme/dist/img/prod-1.jpg') }}" alt=""
                                                width="100%">
                                        </td>
                                        <td>29-09-1999</td>
                                        <td>Bag</td>
                                        <td>Gucci</td>
                                        <td>Acsesories</td>
                                        <td>XL</td>
                                        <td>Unisex</td>
                                        <td>$150</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Action buttons">
                                                <a href="" class="btn btn-sm btn-success"><i
                                                        class="nav-icon fas fa-eye"></i></a>
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
