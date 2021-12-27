@include('admin.components.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add New Page</h1>
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
                <h3 class="card-title">New Page</h3>
            </div>

            <form action="{{ route('save-new-page') }}" method="POST" id="newPageForm">
                @csrf
            <!-- /.card-header -->
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <label for="pageName">Page Name</label>
                        <input type="text" class="form-control" name="pageName" id="pageName" placeholder="Page Name" required/>
                    </div>
                </div>
                <hr>

                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Page Content
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
              <textarea id="summernote" name="pageContent">
                    <strong>Page Content Goes Here</strong>
              </textarea>
                        </div>

                    </div>
                </div>
{{--                <textarea hidden name="pageContent" id="pageContent"></textarea>--}}
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary" type="submit">Create Page</button>
                    </div>
                </div>



            </div>
            </form>
            <!-- /.card-body -->
        </div>

    </div>
</div>






@include('admin.components.footer')
