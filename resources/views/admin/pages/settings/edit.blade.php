@extends('admin/index')
@section('title','Site settings page')
@section('pageName','Site settings page')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Site settings page </h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('settings.list')}}" class="text-right"><i class="fa fas fa-list"></i> Site settings page</a>
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
                    <form role="form" method="post" action="{{route('settings.edit.submit')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $data->id}}" />
                        <div class="row">
                            <div class="col-sm">
                                <div class="card card-primary">

                                    <!-- form start -->
                                         <div class="card-body">
                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Site name</label>
                                             <textarea name="site_name" class="summernote">{{ $data->site_name}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Contact</label>
                                                <textarea name="contact" class="summernote">{{ $data->contact}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Address</label>
                                                <textarea name="address" class="summernote">{{ $data->address}}</textarea>
                                            </div>
                                         
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                            <input type="text" name="email" class="form-control" value="{{ $data->email}}"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Facebook link</label>
                                                <input type="text" name="facebook_link" class="form-control" value="{{ $data->facebook_link}}"/>
                                            </div>
                                        
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Hot Line</label>
                                                <input type="text" name="hot_line" class="form-control" value="{{ $data->hot_line}}"/> 
                                            </div>
                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Info mail</label>
                                                <input type="text" name="info_mail" class="form-control" value="{{ $data->info_mail }}"/> 
                                            </div>
                                            <div class="form-group">

                                                <label for="exampleInputEmail1">Change Mobile Logo Image  </label>
                                                    <input id="jpg_name" class="form-control " name="jpg_name"   type="file" value="">
                                                    <img src="{{ asset('/images/'.$data->image) }}" style="height:200px;widht:300px;" />  </td>

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