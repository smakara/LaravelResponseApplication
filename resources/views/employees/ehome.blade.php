@include('includes.header')
@include('includes.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Employees</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Employees</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Employees</h3> 
                            <br>   
                            <br>  
                            <a  href="{{url('/new/employee')}}" type="button" class="btn btn-block btn-outline-primary col-sm-1">New <i class='fa fa-plus'></i></a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>

                                        <th>Name</th>
                                        <th>Last Name</th>
                                        <th>Company</th>
                                        <th>Email</th>
                                        <th>phone</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach($employees as $data)

                                        <td><a href="{{url('/view/employee/'.$data->id)}}"> {{$data->first_name}}</a></td>
                                        <td>{{$data->last_name}}</td>
                                        <td>{{$data->company}}</td>
                                        <td> {{$data->email}}</td>
                                        <td> {{$data->phone_number}}</td>
                                        <td> <a  class="btn btn-danger btn-sm"  href="{{url('/delete/employee/'.$data->id)}}" >
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a></td>
                                    </tr>
                                    @endforeach



                                </tbody>
<!--                                            <tfoot>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                </tfoot>-->
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('includes.footer')