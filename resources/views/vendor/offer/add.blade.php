@extends('admin/index')
@section('title','Add Offer ')
@section('pageName','Add Offer ')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Add Offer </h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('offer.list')}}" class="text-right"><i class="fa fas fa-list"></i>
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
                    <form role="form" method="post" action="{{route('offer.submit')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm">
                                <div class="card card-primary">

                                    <!-- form start -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1">Redirect To website</label>
                                                <select class="form-control" name="has_website" required="required"
                                                    id="has_website">
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group" style="display: none;" id="offer_url">
                                            <label for="exampleInputEmail1"> URL</label>
                                            <input type="url" name="offer_url" class="form-control" required="required"
                                                autocomplete="off" value="{{old('offer_url')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Title</label>
                                            <input type="text" name="title" class="form-control" required="required"
                                                autocomplete="off" value="{{old('title')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Amount ( in percentage ) </label>
                                            <input type="number" name="amount" class="form-control" required="required"
                                                autocomplete="off" value="{{old('amount')}}">
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1">Offer Type</label>
                                                <select class="form-control" name="type" required="required">
                                                    @if ($type)
                                                    @foreach ($type as $value )
                                                    <option value="{{$value->id}}">{{$value->title}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1">Vendor</label>
                                                <select class="form-control" name="vendor_id" required="required">
                                                    @php
                                                    $vendor=\App\Model\Vendor::where('status',"ACTIVE")->get();
                                                    @endphp
                                                    @if ($vendor)
                                                    <option value="">--Select--</option>
                                                    @foreach ($vendor as $value )
                                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Status</label><br>
                                            <input type="checkbox" name="status" class="form-control"
                                                data-toggle="toggle" data-on="Active" data-off="Inactive">
                                            <!-- <input type="checkbox" id="toggle-two"> -->
                                        </div>


                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
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
<style>
    .drp-selected {
        display: none !important;
    }
</style>
<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
    
    $(document).on('change', '#has_website', function() {
    // console.log($("#course option:selected").value());
    var cat_id = $(this).find('option:selected').val();
    if(cat_id == "yes"){
        $("#offer_url").show();
    }else
        $("#offer_url").hide();
    });
</script>

@endsection