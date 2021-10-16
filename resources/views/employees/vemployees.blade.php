
@include('includes.header')
@include('includes.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Employees</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Employees</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Employees</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ url('eupdate') }}">
                            @csrf
                            <input name="id" type="hidden" value="{{$vcomp->id}}" class="form-control">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input name="first_name" type="text" class="form-control" value="{{$vcomp->first_name}}" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input name="last_name" type="text" class="form-control" value="{{$vcomp->last_name}}" placeholder="Enter last">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Company</label>
                                    <input name="company" type="text" class="form-control" value="{{$vcomp->company}}" placeholder="Enter company">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">email</label>
                                    <input name="email" type="text" class="form-control" value="{{$vcomp->email}}" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone</label>
                                    <input name="phone_number" type="text" class="form-control" value="{{$vcomp->phone_number}}" placeholder="website">
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->



                </div>
                <!--/.col (left) -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('includes.footer')