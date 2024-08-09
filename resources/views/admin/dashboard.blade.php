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
            @include('template.backend.contentHeader')

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>20</h3>
                                    <p>Artikel</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>30</h3>
                                    <p>Program</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-flag"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>21</h3>
                                    <p>Users</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>22</h3>
                                    <p>Kategori</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-layer-group"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header  bg-dark">
                                    <h1 class="card-title">
                                        <i class="fa fa-home" style="font-size: 1.5rem;"> Dashboard</i>
                                    </h1>
                                </div>
                                <div class="card-body">
                                    <h3>Selamat Datang !</h3>
                                    <div class="table-responsive">
                                        <table class="table table-borderless ">
                                            <tr>
                                                <th width="10%">Nama</th>
                                                <th width="1%">:</th>
                                                <td>
                                                    <p>admin</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="10%">Username</th>
                                                <th width="1%">:</th>
                                                <td>
                                                    <p>admin</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="10%">Hak Akses</th>
                                                <th width="1%">:</th>
                                                <td>
                                                    <p>admin</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div> <!--card body  -->
                            </div>
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
</body>

</html>
