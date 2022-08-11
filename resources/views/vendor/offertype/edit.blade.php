@extends('admin/index')
@section('title','Edit Offer Type')
@section('pageName','Edit Offer Type')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Edit Offer Type</h3>
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
                    <form role="form" method="post" action="{{route('offertype.edit.submit')}}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm">
                                <div class="card card-primary">

                                    <!-- form start -->
                                    <div class="card-body">

                                        <input type="hidden" value="{{ $data->id}}" name="id" />

                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Title</label>
                                                <input type="text" name="title" class="form-control" required="required"
                                                    autocomplete="off" value="{{ $data->title}}">
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
</script>

@endsection