@extends('admin/index')
@section('title','News ')
@section('pageName','News ')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">News page </h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('news.list')}}" class="text-right"><i class="fa fas fa-list"></i> List</a>
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
                    <form role="form" method="post" action="{{route('bannerimage.add')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm">
                                <div class="card card-primary">

                                    <!-- form start -->
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Title</label>
                                            <textarea name="title" class="summernote">{{ old('title')}}</textarea>
                                            </div>
                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Text</label>
                                                <textarea name="text" class="summernote">{{ old('text')}}</textarea>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Image  </label>
                                                    <input id="jpg_name" class="form-control "  required="required" name="jpg_name"  required type="file" value="">
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
