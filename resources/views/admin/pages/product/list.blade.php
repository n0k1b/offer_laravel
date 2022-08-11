@extends('admin/index')
@section('title','Product list')
@section('pageName','Product list')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">

        <div class="col-sm">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        @if(Session::has('message'))
                        <p id="flashMessage" class="alert {{ Session::get('alert-class', 'alert-info') }}">{{
                            Session::get('message') }}</p>
                        @endif
                        <div class="col-sm-6">
                            <h3 class="card-title">Product list</h3>
                        </div>
                        <div class="col-sm-6 text-right"><a href="{{ route('product.add') }}"><i
                                    class="fas fa-plus"></i> Add</a></div>
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
                                <th>Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Curren Discount</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($dataList as $data)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>
                                    <p>{{$data->title_english_name}}</p>
                                    <p>{{$data->sub_title_english_name}}</p>
                                    {{-- <span class="span-warning ml-2">{{@$data->getBrand->name}}</span> --}}
                                </td>
                                <td>{{$data->price}} TK</td>
                                <td>
                                    {{$data->category_id && $data->category_id !== '' ?
                                    @$data->getCategory->english_name
                                    :
                                    'n/a'}}
                                </td>
                                <td>
                                    {{$data->offer && $data->offer !== '' ? $data->getOffer->title : 'n/a'}}
                                </td>
                                <td>
                                    <img src="{{ asset('/thumbnails/'.$data->thumb_image) }}" width="200"
                                        height="200" /> <br>
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
                                    <a href="{{route('product.edit',$data->id)}}" class="pl-3 pr-3 btn btn-success">Edit
                                        products</a>
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
                <!-- /.card-header -->

                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->

    </div><!-- /.container-fluid -->


    @endsection