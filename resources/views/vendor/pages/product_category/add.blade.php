@extends('admin/index')
@section('title','Add Category ')
@section('pageName','Add Category ')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Add Category </h3>
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
                    <form role="form" method="post" action="{{route('productcategory.submit')}}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm">
                                <div class="card card-primary">

                                    <!-- form start -->
                                    <form role="form">
                                        <div class="card-body">
                                            {{-- <div class="form-group" style="display:none;">
                                                <label for="exampleInputEmail1">Category Name ( Bangla )</label>
                                                <input type="text" class="form-control" name="bangla_name"
                                                    placeholder="please enter...">
                                            </div> --}}
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Category Name </label>
                                                <input type="text" class="form-control" name="english_name"
                                                    placeholder="please enter..">
                                            </div>
                                            <div class="form-group" id="">
                                                <label for="exampleInputEmail1">
                                                    <span style="display: none;" id="bim">Background Image</span>
                                                    <span style="display: none;" id="im"> Image</span>
                                                </label>
                                                <input id="jpg_name" class="form-control " name="jpg_name" type="file"
                                                    value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Category Type</label>
                                                <select class="form-control" name="parent_id" id="parent_id">
                                                    <option selected value="0">Parent</option>
                                                    @if ($cat)
                                                    @foreach ($cat as $val )
                                                    <option value="{{ $val->id}}">{{$val->english_name}}</option>
                                                    @endforeach
                                                    @endif


                                                </select>


                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Status</label><br>
                                                <input type="checkbox" name="status" class="form-control"
                                                    data-toggle="toggle" data-on="Active" data-off="Inactive">
                                                <!-- <input type="checkbox" id="toggle-two"> -->
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