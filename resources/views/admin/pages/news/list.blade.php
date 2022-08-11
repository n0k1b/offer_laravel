@extends('admin/index')
@section('title','News List Page')
@section('pageName','News List Page')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header">
                <div class="row">
                
                <div class="col-sm-6"><h3 class="card-title">News List</h3></div>
                <div class="col-sm-6 text-right">
                   
                    <a href="{{route('news.add')}}"><i class="fas fa-plus"></i> Add</a>
                </div>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if(Session::has('message'))
                    <p id="flashMessage" class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    <table id="example1" class="table table-bordered table-striped">
                        
                       <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#sl</th>
                                <th>Title</th>
                                <th>Text</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($dataList as $data)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>
                                    <p>{!!$data->title!!}</p>
                                    
                                 </td>
                                 <td>
                                    <p>{!!$data->text!!}</p>
                                    
                                 </td>
                                <td>
                                <img src="{{ asset('/images/'.$data->image) }}" width="100" height="100" /> 
                                </td>
                               
                                <td>
                                    <a href="{{route('news.edit',$data->id)}}" class="pl-3 pr-3"><i class="fas fa-edit"></i></a>
                                    <!-- <a href="{{-- route('admin.equipment.delete',$equipment->id) --}}" ><i class="fas fa-trash"></i></a> -->
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                      
                    </table>
                       
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->

    </div><!-- /.container-fluid -->


    @endsection