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
                            <h1 class="m-0">Categories Brand</h1>
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
                                <i class="fas fa-layer-group" style="font-size: 1.5rem;"></i>
                                <strong style="font-size: 1.5rem;"> List Brand</strong>
                            </h1>
                        </div>
                        <div class="card-body">
                            <!-- button add artikel -->
                            <a href="{{ route('brand-item.create') }}">
                                <button class="btn btn-sm btn-success">
                                    <i class="fas fa-plus"></i> Add Brand
                                </button>
                            </a>
                            <!-- Show list of artikel -->
                            <table id="ex" class="table table-bordered table-hover mt-2">
                                <thead>
                                    <tr>
                                        <th style="width: 1%;">NO</th>
                                        <th>Brand Name</th>
                                        <th>Brand Slug</th>
                                        <th style="width: 15%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Gucci</td>
                                        <td>gucci</td>
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
