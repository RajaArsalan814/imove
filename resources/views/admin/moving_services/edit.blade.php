@extends('layouts.master')
@section('content')
   <!-- Content Header (Page header) -->
   <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Moving Service</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Moving Service</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
  </div>
  <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

            <div class="card card-primary">
            <form action="{{route('moving.update',['id' => $moving_service->id])}}" method="POST" enctype="multipart/form-data" >
              <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control"  placeholder="Enter Name" value="{{$moving_service->name}}" name="name" >
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" class="form-control"   name="image" >
                </div>
              @csrf

              <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea name="description" id="" class="form-control" >{{$moving_service->description}}</textarea>
            </div>


            </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Update">
                </div>
              </form>
            </div>
        </div>

        </div>
      </div>
    </section>
   @endsection
