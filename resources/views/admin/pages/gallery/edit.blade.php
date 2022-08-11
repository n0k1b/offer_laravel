@extends('admin/index')
@section('title','News Edit')
@section('pageName','News Edit')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">News Edit Page </h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('news.list')}}" class="text-right"><i class="fa fas fa-list"></i> News List page</a>
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
                    <form role="form" method="post" action="{{route('news.edit.submit')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $data->id}}" />
                        <div class="row">
                            <div class="col-sm">
                                <div class="card card-primary">

                                    <!-- form start -->
                                        <div class="card-body">
                                             <div class="form-group">
                                                <label for="exampleInputEmail1"> Title  </label>
                                             <input id="title" class="form-control " name="title"   required value="{{ $data->title}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Image  </label>
                                                    <input id="jpg_name" class="form-control " name="jpg_name"   type="file" value="">
                                            </div>
                                             @if($data->image)
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <br>
                                                          <img src="{{ asset('/images/'.$data->image) }}" style="width:100%" /> 
                                                    </div>
                                            @endif

                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Text </label>
                                             <textarea name="text" class="summernote">{{ $data->text}}</textarea>
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