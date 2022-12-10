@extends('layouts.master')
@section('content')

   <!-- Content Header (Page header) -->
   <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Create Sensor</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Create Sensor</li>
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
            <form action="{{route('settings_store')}}" method="POST" enctype="multipart/form-data" >
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Logo</label>
                        <input type="file" class="form-control"  placeholder="Enter Name" name="logo"
                        @if(isset($setting->logo))
                        value="{{$setting->logo}}"
                        @else
                        value=''
                        @endif
                        >
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control"  placeholder="Enter Address" name="address"
                        @if(isset($setting->address))
                        value="{{$setting->address}}"
                        @else
                        value=''
                        @endif
                        >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact</label>
                        <input type="text" class="form-control"  placeholder="Enter Contact" name="contact"
                        @if(isset($setting->contact))
                        value="{{$setting->contact}}"
                        @else
                        value=''
                        @endif
                        >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control"  placeholder="Enter email" name="email"

                        @if(isset($setting->email))
                        value="{{$setting->email}}"
                        @else
                        value=''
                        @endif
                        >
                    </div>
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Social Facebook</label>
                    <input type="text" class="form-control"  placeholder="Enter Link" name="social_facebook"
                    @if(isset($setting->social_facebook))
                        value="{{$setting->social_facebook}}"
                        @else
                        value=''
                        @endif
                    >
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Social Instagram</label>
                    <input type="text" class="form-control"  placeholder="Enter Link" name="social_instagram"
                    @if(isset($setting->social_instagram))
                    value="{{$setting->social_instagram}}"
                    @else
                    value=''
                    @endif
                >
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Social Linkedin</label>
                    <input type="text" class="form-control"  placeholder="Enter Link" name="social_linkedin"
                    @if(isset($setting->social_linkedin))
                    value="{{$setting->social_linkedin}}"
                    @else
                    value=''
                    @endif
                >
                </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary">
                </div>
              </form>
            </div>
        </div>

        </div>
      </div>
    </section>
   @endsection
