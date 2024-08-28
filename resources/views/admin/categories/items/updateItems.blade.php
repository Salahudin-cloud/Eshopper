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
                            <h1 class="m-0">Categories Items</h1>
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
                                <i class="fas fa-layer-group" style="font-size: 1.5rem;"></i>
                                <strong style="font-size: 1.5rem;">Update Categories</strong>
                            </h1>
                        </div>
                        <div class="card-body">

                            {{-- alert error --}}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Form add new user accoiunt -->
                            <form
                                action="{{ Route('categories-item.update', ['categories_item' => $dataItemCategories->id_categories]) }}"
                                method="post">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="item">Categories Name</label>
                                        <input type="text" class="form-control" id="item" name="item"
                                            value="{{ old('categories_name', $dataItemCategories) }}">
                                    </div>
                                    <button type="submit" class="btn btn-success form-control">Update</button>
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
