@extends('admin/index')
@section('title','Category list')
@section('pageName','Category list')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header">
                <div class="row">
                
                <div class="col-sm-6"><h3 class="card-title">Product category list</h3></div>
                <div class="col-sm-6 text-right"><a href="{{route('productcategory.add')}}"><i class="fas fa-plus"></i> Add</a></div>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if(Session::has('message'))
                    <p id="flashMessage" class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#sl</th>
                                <th>Bangla name</th>
                                <th>English name</th>
                                <th>Category Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($dataList as $data)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$data->bangla_name}} </td>
                                <td>{{$data->english_name}} </td>
                                <td>{{ getCategory($data->parent_id)->bangla_name ?? ''}} </td>
                                <td>
                                    <?php 
                                  if($data->status == 1){ ?>
                                    <span class="span-info ml-2">Active</span>
                                    <?php }else{?>
                                        <span class="span-warning ml-2">Inactive</span>
                                   <?php } ?>
                                </td>
                                <td>
                                    <a href="{{route('productcategory.edit',$data->id)}}" class="pl-3 pr-3"><i class="fas fa-edit"></i></a>
                                    <!-- <a href="{{-- route('admin.equipment.delete',$equipment->id) --}}" ><i class="fas fa-trash"></i></a> -->
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#sl</th>
                                <th>Bangla name</th>
                                <th>English name</th>
                                <th>Category Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->

    </div><!-- /.container-fluid -->


    @endsection