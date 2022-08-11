@extends('admin/index')
@section('title','Add Offer ')
@section('pageName','Add Offer ')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">

            <div class="card ">
                <div class="card-header bg-warning">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Add BULK offer </h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('offer.list')}}" class="text-right"><i class="fa fas fa-list"></i>
                                list</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if(Session::has('message'))
                    <p id="flashMessage" class="alert {{ Session::get('alert-class', 'alert-info') }}">{{
                        Session::get('message') }}</p>
                    @endif
                    <form class="form-horizontal" method="post" action="{{route('offer.bulk.submit')}}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row mb-3">
                            <div class="col mt-3">
                                <label class="col-form-label"> XL <span style="color:red"> *
                                    </span></label>
                                <input type="file" class="form-control " required="required" name="file_xl">
                                {{-- <a href="{{route('download')}}">Example file</a> --}}
                            </div>
                            <div class=" col mt-5">
                                <input type="submit" class="btn btn-success btn-lg" value="Upload">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card ">
                <div class="card-header bg-info">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Add Single Offer </h3>
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
                                                <label for="exampleInputEmail1">Redirect To website * </label>
                                                <select class="form-control" name="has_website" required="required"
                                                    id="has_website">
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group" style="display: none;" id="offer_url">
                                            <label for="exampleInputEmail1"> URL</label>
                                            <input type="url" name="offer_url" class="form-control" autocomplete="off"
                                                value="{{old('offer_url')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Title*</label>
                                            <input type="text" name="title" class="form-control" required="required"
                                                autocomplete="off" value="{{old('title')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Amount * </label>
                                            <input type="number" name="amount" class="form-control" required="required"
                                                autocomplete="off" value="{{old('amount')}}">
                                        </div>

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1">Offer Type*</label>
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
                                                <label for="exampleInputEmail1">Category</label>
                                                <select class="form-control" name="category_id" id="cat">
                                                    @php
                                                    $category=\App\Model\Category::where('status',1)->where('parent_id',0)->get();
                                                    @endphp
                                                    @if ($category)
                                                    <option value="">--Select--</option>
                                                    @foreach ($category as $value )
                                                    <option value="{{$value->id}}">{{$value->english_name}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        @if (session()->get('user_type') == 'admin')

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1">Vendor *</label>
                                                <select class="form-control" name="vendor_id" required="required"
                                                    id="vendor_name">
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
                                        @else
                                        <input type="hidden" name="vendor_id" value="{{session()->get('user')->id}}" />
                                        <input type="hidden" id="vendor_name"
                                            value="{{session()->get('user')->name}}" />
                                        @endif

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Code *</label>
                                            <input type="text" name="code" class="form-control" autocomplete="off"
                                                id="code" value="{{random_int(1000000, 9999999)}}">
                                            <input type="hidden" class="form-control" autocomplete="off"
                                                value="{{random_int(1000000, 9999999)}}" id="code3">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Expired within ( in hours ) * </label>
                                            <input type="number" name="expired_within" class="form-control"
                                                required="required" autocomplete="off"
                                                value="{{old('expired_within')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> No of times this code can be applied to
                                                items *
                                            </label>
                                            <input type="number" name="apply_time" class="form-control"
                                                required="required" autocomplete="off" value="{{old('apply_time')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> icon*</label>
                                            <input required type="file" class="form-control" name="icon"
                                                placeholder="Enter ...">
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
    $(document).on('change', '#cat,#vendor_name ', function() {
        let cat_name='';
        let vendor_name='';

    $("#code").val('');
    if($('#cat').val() ){
         cat_name = $('#cat').find('option:selected').text().replace(/\s/g, '').substring(0, 4).toUpperCase();
    }
    if($('#vendor_name').val() ){
      vendor_name = $('#vendor_name').find('option:selected').text().replace(/\s/g, '').substring(0, 4).toUpperCase();
    }
    let code = $("#code3").val();
    $("#code").val(vendor_name+'-'+cat_name+"-"+code);
    });
</script>

@endsection