@extends('admin/index')
@section('title','Brand Add')
@section('pageName','Add Brand')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Add</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('admin.list')}}" class="text-right"><i class="fa fas fa-list"></i> list</a>
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
                    @if(Session::has('message'))
                    <p id="flashMessage" class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{
                        Session::get('message') }}</p>
                    @endif

                    <div class="row">
                        <div class="col-sm">
                            <div class="card card-primary">

                                <!-- form start -->
                                <form role="form" method="post" action="{{route('brand.add.submit')}}"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Brand Name*</label>
                                            <input required type="text" class="form-control" name="name"
                                                value="{{ old('name') }}" placeholder="Enter ...">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="exampleInputEmail1">Brand Email*</label>
                                            <input required type="text" class="form-control" name="email"
                                                value="{{ old('email') }}" placeholder="Enter ...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Password*</label>
                                            <input required type="password" class="form-control" name="password"
                                                placeholder="Enter ...">
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Brand icon*</label>
                                            <input required type="file" class="form-control" name="icon"
                                                placeholder="Enter ...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Banner*</label>
                                            <input required type="file" class="form-control" name="banner"
                                                placeholder="Enter ...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description </label>
                                            <textarea name="description" class="summernote"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Status</label><br>
                                            <input type="checkbox" name="status" class="form-control"
                                                data-toggle="toggle" data-on="Active" data-off="Inactive">
                                            <!-- <input required type="checkbox" id="toggle-two"> -->
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

</script>

@endsection