@extends('layouts.master')
@section('content')
   <!-- Content Header (Page header) -->
   <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Moving Services</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Moving Services</li>
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
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4" align="right"><a class="btn btn-primary" href="{{route('moving.create')}}" >Add Moving Services</a></div> <br><br>
        </div>
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach ($moving_services as $item)
                    <tr>
                        <th scope="row">{{++$i}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->image}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            <a href="{{route('moving.edit',['id'=>$item->id])}}"><i class="fas fa-edit" style="color:green"></i></a>
                            /
                            <a href="{{route('moving.delete',['id'=>$item->id])}}"><i class="fas fa-trash" style="color:red"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
      </div>

    </section>
@endsection
