@extends('admin/index')
@section('title','Banner Image Edit')
@section('pageName','Banner Image Edit')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Banner Image Edit Input</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('bannerimage.list')}}" class="text-right"><i class="fa fas fa-list"></i>
                                list</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form role="form" method="post" action="{{route('bannerimage.edit.submit')}}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm">
                                <div class="card card-primary">

                                    <!-- form start -->
                                    <form role="form">
                                        <div class="card-body">
                                            <input type="hidden" class="form-control" name="id" required
                                                value="{{ $data->id}}">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Image </label>
                                                <input id="jpg_name" class="form-control " name="jpg_name" type="file"
                                                    value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Name </label>
                                                <input id="name" class="form-control " required="required" name="name"
                                                    required type="text" value="{{ $data->name ?? ''}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Description </label>
                                                <textarea name="description"
                                                    class="form-control">{{ $data->description ?? ''}}</textarea>
                                            </div>
                                            {{-- <div class="form-group">
                                                <label for="exampleInputEmail1"> Add Category </label>
                                                <select class=" form-control" name="main_category" required>
                                                    @if ($cat)
                                                    @foreach ($cat as $val)
                                                    @if ($val->parent_id == 0)
                                                    <option value="{{ $val->id}}" {{$data->main_category == $val->id ?
                                                        'selected' : '' }}> {{ $val->english_name}}</option>
                                                    @endif
                                                    @endforeach

                                                    @endif
                                                </select>
                                            </div> --}}

                                            @php
                                            if(isset($data->category)){
                                            $arr = json_decode($data->category);
                                            }else{
                                            $arr=array();
                                            }

                                            @endphp
                                            {{-- <div class="form-group">
                                                <label for="exampleInputEmail1"> Add Category </label>
                                                <select class="select2 col-md-6" name="category[]" multiple="multiple">
                                                    @if ($cat)
                                                    @foreach ($cat as $val)
                                                    @if ($val->parent_id != 0)
                                                    <option value="{{ $val->id}}" {{ (!empty($arr) && in_array($val->
                                                        id,$arr)) ? 'selected' : '' }} > {{ $val->english_name}}
                                                    </option>
                                                    @endif
                                                    @endforeach

                                                    @endif
                                                </select>
                                            </div> --}}


                                            @if($data->image)
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <br>
                                                <img src="{{ asset('/images/'.$data->image) }}" style="width:100%" />
                                            </div>
                                            @endif


                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Status</label><br>
                                                <input type="checkbox" {{( $data->status ==1)? 'checked' :''}}
                                                name="status" class="form-control" data-toggle="toggle" data-on="Active"
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


                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    <!-- /.row -->

</div><!-- /.container-fluid -->
@endsection