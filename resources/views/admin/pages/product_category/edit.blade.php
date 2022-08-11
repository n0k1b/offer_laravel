@extends('admin/index')
@section('title','Edit Category ')
@section('pageName','Edit Category')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header {{ $data->parent_id != 0 ? 'bg-warning' : 'bg-primary'}}">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Edit {{ $data->parent_id != 0 ? 'sub' : 'main'}} category input
                            </h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('productcategory.list')}}" class="text-right"><i
                                    class="fa fas fa-list"></i> list</a>
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
                    <form role="form" method="post" action="{{route('productcategory.edit.submit')}}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$data->id}}" />
                        <div class="row">
                            <div class="col-sm">
                                <div class="card card-primary">

                                    <!-- form start -->
                                    <form role="form">
                                        <div class="card-body">
                                            {{-- <div class="form-group" style="display: none;">
                                                <label for="exampleInputEmail1">Category Name ( Bangla )</label>
                                                <input type="text" class="form-control" name="bangla_name"
                                                    value="{{ $data->english_name}}">
                                                <input type="hidden" class="form-control" name="id"
                                                    value="{{ $data->id}}">
                                            </div> --}}
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Category Name </label>
                                                <input type="text" class="form-control" name="english_name"
                                                    value="{{ $data->english_name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Category Type</label>
                                                <select class="form-control" name="parent_id">
                                                    <option selected value="0" @if ($data->parent_id == 0)
                                                        selected
                                                        @endif>Parent</option>

                                                    @if ($cat)
                                                    @foreach ($cat as $val )
                                                    <option value="{{ $val->id}}" @if ($data->parent_id == $val->id)
                                                        selected
                                                        @endif>{{$val->english_name}}</option>
                                                    @endforeach
                                                    @endif


                                                </select>
                                            </div>
                                            <div class="form-group" id="imgss">
                                                <label for="exampleInputEmail1"> Image </label>
                                                <input id="jpg_name" class="form-control " name="jpg_name" type="file"
                                                    value="">
                                            </div>
                                            @if($data->parent_id != 0)
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <br>
                                                <img src="{{ asset('/images/'.$data->image) }}" style="height:200px" />
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
@section('footer_css_js')
<script>
    console.log($("#parent_id").val());
    if($("#parent_id").val() == 0){
        $("#bim").show();
        $("#im").hide();
    }else{
         $("#bim").hide();
        $("#im").show();
    }
    $("#parent_id").on( "change",function(){
        if($("#parent_id").val() == 0){
            $("#bim").show();
            $("#im").hide();    
        }else{
            $("#bim").hide();
            $("#im").show();
        }
    })
</script>
@endsection