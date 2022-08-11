@extends('admin/index')
@section('title','Edit Admin')
@section('pageName','Edit Admin')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col">
               @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(Session::has('message'))
                <p id="flashMessage" class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
            @endif
        </div>
    </div>
    <div class="row">
        
        <div class="col">
           
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Edit Email</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('admin.list')}}" class="text-right"><i class="fa fas fa-list"></i> list</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                 
                    <form role="form" method="post" action="{{route('admin.edit.submit')}}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm">
                                <div class="card card-primary">

                                    <!-- form start -->
                                    <form role="form">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input required value="{{$user->email}}" type="text"  class="form-control" name="email" placeholder="Enter ...">
                                                <input  value="{{$user->id}}" type="hidden" name="id" >
                                            </div>
                                            
                                        
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Status</label><br>
                                                <input type="checkbox" {{ ($user->status ==1)? 'checked' :''}} name="status" class="form-control" data-toggle="toggle" data-on="Active" data-off="Inactive">
                                                <!-- <input required type="checkbox" id="toggle-two"> -->
                                            </div>

                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
         <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Change Paswword</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('admin.list')}}" class="text-right"><i class="fa fas fa-list"></i> list</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  
                  
                    <form role="form" method="post" action="{{route('admin.edit.submit')}}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm">
                                <div class="card card-primary">

                                    <!-- form start -->
                                    <form role="form">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input required type="password" class="form-control" name="password" placeholder="Enter ...">
                                            </div>
                                                <input  value="{{$user->id}}" type="hidden" name="id" >
                                        
                                           <div class="form-group">
                                                <label for="exampleInputEmail1">Confirm Password</label>
                                                <input required type="password" class="form-control" name="password_confirmation" placeholder="Enter ...">
                                            </div>

                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    <!-- /.row -->

</div><!-- /.container-fluid -->
@endsection