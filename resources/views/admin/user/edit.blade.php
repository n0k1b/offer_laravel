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
            <p id="flashMessage" class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{
                Session::get('message') }}</p>
            @endif
            <h3>Your Affiliation Id is {{ $user->affiliation_id}}</h3>
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
                                                <input required value="{{$user->email}}" type="text"
                                                    class="form-control" name="email" placeholder="Enter ...">
                                                <input value="{{$user->id}}" type="hidden" name="id">
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Status</label><br>
                                                <input type="checkbox" {{ ($user->status =="ACTIVE")? 'checked' :''}}
                                                name="status" class="form-control" data-toggle="toggle" data-on="Active"
                                                data-off="Inactive">
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
                                                <input required type="password" class="form-control" name="password"
                                                    placeholder="Enter ...">
                                            </div>
                                            <input value="{{$user->id}}" type="hidden" name="id">

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
    @if(session()->get('user_type') == 'vendor')
    <!-- /.row -->
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Update vendor Information</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('vendor.list')}}" class="text-right"><i class="fa fas fa-list"></i>
                                list</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm">
                            <div class="card card-primary">
                                @php
                                $datas=\App\Model\Vendor::find(session()->get('user')->id);
                                @endphp
                                <!-- form start -->
                                <form role="form" method="post" action="{{route('vendor.profile.content.submit')}}"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $datas->id}}" />
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">vendor Name*</label>
                                            <input required type="text" class="form-control" name="name"
                                                value="{{ old('name') ? old('name') : $datas->name }}"
                                                placeholder="Enter ...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Website</label>
                                            <input type="text" class="form-control" name="website"
                                                value="{{ old('name') ? old('name') : $datas->website }}"
                                                placeholder="Enter ...">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Change vendor icon*</label>
                                            <input type="file" class="form-control" name="icon">
                                            @if($datas->icon)
                                            <div class="col-md-3 col-sm-12 col-xs-3">
                                                <br>
                                                <img src="{{ asset('/images/'.$datas->icon) }}" width="220"
                                                    height="110" />
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Change vendor banner*</label>
                                            <input type="file" class="form-control" name="banner">
                                            @if($datas->icon)
                                            <div class="col-md-3 col-sm-12 col-xs-3">
                                                <br>
                                                <img src="{{ asset('/images/'.$datas->banner) }}" />
                                            </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> vendor Description</label>
                                            <textarea name="description" class="summernote"
                                                style="height: 300px;">{{$datas->description}}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Status</label><br>
                                            <input type="checkbox" {{( $datas->status =="ACTIVE")? 'checked' :''}}
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
    @endif
    <!-- /.row -->
</div><!-- /.container-fluid -->
@endsection