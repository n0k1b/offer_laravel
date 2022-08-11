@extends('admin/index')
@section('title','Category list')
@section('pageName','Category list')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header bg-danger">
                    <div class="row">

                        <div class="col-sm-6">
                            <h3 class="card-title"> Category </h3>
                        </div>
                        <div class="col-sm-6 text-right text-white"><a href="{{route('productcategory.add')}}"
                                class="text-white"><i class="fas fa-plus"></i> Add</a></div>
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
                                {{-- <th>Bangla name</th> --}}
                                <th> name</th>
                                {{-- <th>Image</th> --}}

                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($cat as $data)
                            <tr>
                                <td>{{$i++}}</td>
                                {{-- <td>{{$data->bangla_name}} </td> --}}
                                <td>{{$data->english_name}} </td>
                                {{-- <td><img src="{{ asset('/images/'.$data->image ?? 'placeholder.png') }}"
                                        width="100" height="100" /> </td> --}}
                                <td>
                                    <?php 
                                  if($data->status == 1){ ?>
                                    <span class="span-info ml-2">Active</span>
                                    <?php }else{?>
                                    <span class="span-warning ml-2">Inactive</span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="{{route('productcategory.edit',$data->id)}}" class="pl-3 pr-3"><i
                                            class="fas fa-edit"></i></a>
                                    <!-- <a href="{{-- route('admin.equipment.delete',$equipment->id) --}}" ><i class="fas fa-trash"></i></a> -->
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

    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header bg-warning">
                    <div class="row">

                        <div class="col-sm-6">
                            <h3 class="card-title">Product Sub Category list</h3>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#sl</th>
                                <th> name</th>
                                <th>Category Name</th>
                                {{-- <th>Image</th> --}}

                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($subcat as $data)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$data->english_name}} </td>
                                <td>{{ getCategory($data->parent_id)->english_name ?? ''}} </td>
                                {{-- <td><img src="{{ asset('/images/'.$data->image ?? 'placeholder.png') }}"
                                        width="100" height="100" /> </td> --}}
                                <td>
                                    <?php 
                                    if($data->status == 1){ ?>
                                    <span class="span-info ml-2">Active</span>
                                    <?php }else{?>
                                    <span class="span-warning ml-2">Inactive</span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="{{route('productcategory.edit',$data->id)}}" class="pl-3 pr-3"><i
                                            class="fas fa-edit"></i></a>
                                    <!-- <a href="{{-- route('admin.equipment.delete',$equipment->id) --}}" ><i class="fas fa-trash"></i></a> -->
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
    </div>

</div><!-- /.container-fluid -->

@endsection