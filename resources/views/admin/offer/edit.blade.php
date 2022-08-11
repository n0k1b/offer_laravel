@extends('admin/index')
@section('title','Edit Offer ')
@section('pageName','Edit Offer')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Edit Offer Input</h3>
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
                    <form role="form" method="post" action="{{route('offer.edit.submit')}}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $data->id}}" id="id" />

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
                                                    <option value="no" {{$data->has_website == 0 ? 'selected' : ''}}>No
                                                    </option>
                                                    <option value="yes" {{$data->has_website == 1 ? 'selected' :
                                                        ''}}>Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group"
                                            style="display: {{$data->has_website == 1 ? 'block' : 'none'}};"
                                            id="offer_url">
                                            <label for="exampleInputEmail1"> URL</label>
                                            <input type="url" name="offer_url" class="form-control" autocomplete="off"
                                                value="{{$data->offer_url}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Title*</label>
                                            <input type="text" name="title" class="form-control" required="required"
                                                autocomplete="off" value="{{ $data->title}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Amount*</label>
                                            <input type="number" name="amount" class="form-control" required="required"
                                                autocomplete="off" value="{{ $data->amount}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Offer Type</label>
                                            <select class="form-control category" name="type">
                                                @if ($type)
                                                @foreach ($type as $val )
                                                <option value="{{ $val->id}}" @if ($data->type == $val->id)
                                                    selected
                                                    @endif>{{$val->title}}</option>
                                                @endforeach
                                                @endif
                                            </select>

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
                                                    <option value="{{$value->id}}" {{ $data->category_id == $value->id ?
                                                        'selected' : ''
                                                        }}>{{$value->english_name}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        @if (session()->get('user_type') == 'admin')

                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1">Vendor</label>
                                                <select class="form-control" name="vendor_id" required="required"
                                                    id="vendor_name">
                                                    @php
                                                    $vendor=\App\Model\Vendor::where('status',"ACTIVE")->get();
                                                    @endphp
                                                    @if ($vendor)
                                                    <option value="">--Select--</option>
                                                    @foreach ($vendor as $value )
                                                    <option value="{{$value->id}}" {{$data->vendor_id == $value->id ?
                                                        'selected' : ''}}>
                                                        {{$value->name}}</option>
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
                                            <label for="exampleInputEmail1"> Code </label>
                                            <input type="text" name="code" class="form-control" autocomplete="off"
                                                id="code" value="{{$data->code}}">
                                            <input type="hidden" class="form-control" autocomplete="off" id="code3"
                                                value="{{$data->code}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Expired within ( in hours ) * </label>
                                            <input type="number" name="expired_within" class="form-control"
                                                required="required" autocomplete="off"
                                                value="{{$data->expired_within}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> No of times this code can be applied to
                                                items *
                                            </label>
                                            <input type="number" name="apply_time" class="form-control"
                                                required="required" autocomplete="off" value="{{$data->apply_time}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Change </label>
                                            <input type="file" class="form-control" name="icon">
                                            @if($data->icon)
                                            <div class="col-md-3 col-sm-12 col-xs-3">
                                                <br>
                                                <img src="{{ asset('/images/'.$data->icon_image) }}" />
                                            </div>
                                            @endif
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
    $(document).ready(function() {
        $('.summernote').summernote();
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