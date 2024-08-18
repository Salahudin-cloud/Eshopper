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
                            <!-- title  -->
                            <h1 class="card-title ">
                                <i class="fas fa-archive" style="font-size: 1.5rem;"></i>
                                <strong style="font-size: 1.5rem;">Update Item</strong>
                            </h1>
                        </div>


                        <div class="card-body">

                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="article_title">Item Name</label>
                                            <input type="text" class="form-control" id="items_name" name="items_name"
                                                placeholder="input name item">
                                        </div>

                                        <div class="form-group">
                                            <label for="description_item">Description</label>
                                            <div id="_desc" name="_desc"></div>
                                            <input type="hidden" id="description_item" name="description_item">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <!-- Left position -->
                                        <div class="form-group">
                                            <label for="">Gender</label>
                                            <select class="form-control" id="" name="">
                                                <option selected="selected">Select a gender</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Select a brand</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Color)</label>
                                            <div class="select2-dark">
                                                <select class="select2" multiple="multiple"
                                                    data-placeholder="Select a State"
                                                    data-dropdown-css-class="select2-dark" style="width: 100%;">
                                                    <option>Alabama</option>
                                                    <option>Alaska</option>
                                                    <option>California</option>
                                                    <option>Delaware</option>
                                                    <option>Tennessee</option>
                                                    <option>Texas</option>
                                                    <option>Washington</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Size</label>
                                            <div class="select2-dark">
                                                <select class="select2" multiple="multiple"
                                                    data-placeholder="Select a State"
                                                    data-dropdown-css-class="select2-dark" style="width: 100%;">
                                                    <option>Alabama</option>
                                                    <option>Alaska</option>
                                                    <option>California</option>
                                                    <option>Delaware</option>
                                                    <option>Tennessee</option>
                                                    <option>Texas</option>
                                                    <option>Washington</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Price</label>
                                            <input type="text" class="form-control" id="" name=""
                                                placeholder="input price ">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Cover</label>
                                            <input type="file" class="form-control-file" id=""
                                                name="" multiple>
                                        </div>
                                        <div class="d-flex justify-content-end flex-column">
                                            <button class="btn btn-success" type="submit" name="artikel_status"
                                                value="publish">Update</button>
                                        </div>
                                    </div>
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

        $(document).ready(function() {
            $('#_desc').summernote({
                height: 380,
                callbacks: {
                    onChange: function(contents) {
                        // Update nilai input tersembunyi dengan isi editor Summernote
                        $('#description_item').val(contents);
                    }
                }
            });
        });

        //Initialize Select2 Elements
        $(document).ready(function() {
            $('.select2').select2({
                width: 'resolve' // This resolves the width to the parent element
            });
        });
    </script>

</body>

</html>
