@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Admin Lists</h1>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-right">
                            <a href="{{ url('admin/admin/add') }}" class="btn btn-primary"> Add new Admin</a>
                        </div>

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Search Admin</h3>
                    </div>
                    <form action="" method="get">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" name="name"
                                        value="{{ Request::get('name') }}" placeholder="search by name">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" name="email"
                                        value="{{ Request::get('email') }}" placeholder="search by email">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="date" class="form-control" name="date"
                                        value="{{ Request::get('date') }}" placeholder="search by date added">
                                </div>
                                <div class="form-group col-md-3">
                                    <button class="btn btn-primary" type="submit"> Search </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @include('_message')
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><span class="font-weight-bold">Total Admin Lists :</span>
                                    {{ $getRecord->total() }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Created Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <p class="d-none">{{ $i = 0 }}</p>
                                        @foreach ($getRecord as $value)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>{{ date('F j, Y | H:i A', strtotime($value->created_at)) }}</td>
                                                <td>
                                                    <a href="{{ url('admin/admin/edit/' . $value->id) }}"
                                                        class="btn btn-primary"> Edit</a>
                                                    <a href="{{ url('admin/admin/delete/' . $value->id) }}"
                                                        class="btn btn-danger"> Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="float-left p-10">
                                    {{ $getRecord->links() }}
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>

                <!-- /.row -->

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
