@extends('admin/index')
@section('title','Add Offer Type ')
@section('pageName','Add Offer Type')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Add Offer Type</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('offertype.list')}}" class="text-right"><i class="fa fas fa-list"></i>
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
                    <form role="form" method="post" action="{{route('offertype.submit')}}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm">
                                <div class="card card-primary">

                                    <!-- form start -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Title</label>
                                            <input type="text" name="title" class="form-control" required="required"
                                                autocomplete="off">
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

</script>

@endsection