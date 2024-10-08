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
                            <h1 class="m-0">Users</h1>
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
                                <strong style="font-size: 1.5rem;"> List Users</strong>
                            </h1>
                        </div>
                        <div class="card-body">
                            <!-- button add artikel -->
                            <a href="{{ route('users.create') }}">
                                <button class="btn btn-sm btn-success">
                                    <i class="fas fa-plus"></i> Add User
                                </button>
                            </a>
                            <!-- Show list of artikel -->
                            <table id="ex" class="table table-bordered table-hover mt-2">
                                <thead>
                                    <tr>
                                        <th style="width: 1%;">NO</th>
                                        <th>username</th>
                                        <th style="width: 15%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($users as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $item->username }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Action buttons">
                                                    <a href="{{ route('users.edit', ['user' => $item->id_users]) }}"
                                                        class="btn btn-sm btn-warning"><i
                                                            class="nav-icon fas fa-edit"></i></a>
                                                    <form
                                                        action="{{ route('users.destroy', ['user' => $item->id_users]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger" type="submit">
                                                            <i class="nav-icon fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
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
