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
                                            <input type="url" name="offer_url" class="form-control" required="required"
                                                autocomplete="off" value="{{$data->offer_url}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Title</label>
                                            <input type="text" name="title" class="form-control" required="required"
                                                autocomplete="off" value="{{ $data->title}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Amount</label>
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
                                                <label for="exampleInputEmail1">Vendor</label>
                                                <select class="form-control" name="vendor_id" required="required">
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

  
</script>

@endsection