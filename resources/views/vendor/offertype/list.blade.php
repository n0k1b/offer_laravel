@extends('admin/index')
@section('title','Offer Type list')
@section('pageName','Offer Type list')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">

        <div class="col-sm">
            <div class="card">
                <div class="card-header">
                    <div class="row">

                        <div class="col-sm-6">
                            <h3 class="card-title"> list</h3>
                        </div>
                        <div class="col-sm-6 text-right"><a href="{{ route('offertype.add') }}"><i
                                    class="fas fa-plus"></i>
                                Add</a></div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if(Session::has('message'))
                    <p id="flashMessage" class="alert {{ Session::get('alert-class', 'alert-info') }}">{{
                        Session::get('message') }}</p>
                    @endif
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#sl</th>
                                <th>Title</th>
                                {{-- <th>Image</th> --}}
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($data as $data)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>
                                    <p>{{$data->title}}</p>
                                </td>


                                <td>
                                    <?php 
                                  if($data->status == "ACTIVE"){ ?>
                                    <span class="span-info ml-2">Active</span>
                                    <?php }else{?>
                                    <span class="span-warning ml-2">Inactive</span>
                                    <?php } ?>
                                </td>
                                <td>
                                    {{-- <a target="_blank"
                                        href="{{ route('productdetails',['name'=>$data->title_english_name,'id'=>$data->id])}}"
                                        class="pl-3 pr-3 btn btn-primary"> Details</a> --}}
                                    <a href="{{route('offertype.edit',$data->id)}}"
                                        class="pl-3 pr-3 btn btn-success">Edit</a>
                                    <!-- <a href="{{-- route('admin.equipment.delete',$equipment->id) --}}" ><i class="fas fa-trash"></i></a> -->
                                    {{-- <a href="{{route('product_image.edit',$data->id)}}"
                                        class="pl-3 pr-3 btn btn-warning"> Upload more images</a> --}}

                                </td>
                            </tr>
                            @endforeach


                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->

    </div><!-- /.container-fluid -->


    @endsection