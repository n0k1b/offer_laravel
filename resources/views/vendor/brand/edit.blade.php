@extends('vendor/index')
@section('title','Edit Brand')
@section('pageName','Edit Brand')
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
            <p id="flashMessage" class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{
                Session::get('message') }}</p>
            @endif
        </div>
    </div>
    <div class="row">

        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Change Paswword</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('vendor.list')}}" class="text-right"><i class="fa fas fa-list"></i>
                                list</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">


                    <form role="form" method="post" action="{{route('brand.edit.submit')}}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm">
                                <div class="card card-primary">

                                    <!-- form start -->
                                    <form role="form">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input required type="password" class="form-control" name="password"
                                                    placeholder="Enter ...">
                                            </div>
                                            <input value="{{$data->id}}" type="hidden" name="id">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Confirm Password</label>
                                                <input required type="password" class="form-control"
                                                    name="password_confirmation" placeholder="Enter ...">
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
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Update Brand Information</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('brand.list')}}" class="text-right"><i class="fa fas fa-list"></i> list</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm">
                            <div class="card card-primary">

                                <!-- form start -->
                                <form role="form" method="post" action="{{route('brand.content.submit')}}"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $data->id}}" />
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Brand Name*</label>
                                            <input required type="text" class="form-control" name="name"
                                                value="{{ old('name') ? old('name') : $data->name }}"
                                                placeholder="Enter ...">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Change Brand icon*</label>
                                            <input type="file" class="form-control" name="icon">
                                            @if($data->icon)
                                            <div class="col-md-3 col-sm-12 col-xs-3">
                                                <br>
                                                <img src="{{ asset('/images/'.$data->icon) }}" width="220"
                                                    height="110" />
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Change Brand banner*</label>
                                            <input type="file" class="form-control" name="banner">
                                            @if($data->icon)
                                            <div class="col-md-3 col-sm-12 col-xs-3">
                                                <br>
                                                <img src="{{ asset('/images/'.$data->banner) }}" />
                                            </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Brand Description</label>
                                            <textarea name="description" class="summernote"
                                                style="height: 300px;">{{$data->description}}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Status</label><br>
                                            <input type="checkbox" {{( $data->status =="ACTIVE")? 'checked' :''}}
                                            name="status"
                                            class="form-control" data-toggle="toggle" data-on="Active"
                                            data-off="Inactive">

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
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    <!-- /.row -->

</div><!-- /.container-fluid -->
@endsection