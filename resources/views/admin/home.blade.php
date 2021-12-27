@include('admin.components.header')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pages</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content-body">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Pages  | <a href="{{ route('add-new-page') }}" target="_blank"><button class="btn btn-success"><span class="fa fa-plus"></span> Add New Page</button></a></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Page Name</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach(\App\Models\Pages::all() as $page)
                        <tr>
                            <td>{{ $page->pageName }}</td>
                            <td>{{ \Carbon\Carbon::parse($page->createdAt)->format('D, d F, Y') }}</td>
                            <td>
                                <button class="btn btn-info"><span class="fa fa-edit"></span></button>
                                <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                            </td>
                        </tr>
                        @endforeach


                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Page Name</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>

        </div>
    </div>





@include('admin.components.footer')
