@extends('admin/index')
@section('title','vendor ')
@section('pageName','vendor list')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header">
                    <div class="row">

                        <div class="col-sm-6">
                            <h3 class="card-title">vendor List</h3>
                        </div>
                        <div class="col-sm-6 text-right"><a href="{{route('vendor.add')}}"><i class="fas fa-plus"></i>
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
                                <th>name/Icon</th>
                                <th>Description</th>
                                <th>Banner</th>
                                <th>status</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($userData as $user)
                            <tr>
                                <td>{{$i++}}</td>
                                <td style="text-align: center">
                                    {{$user->name}}<br>
                                    <img src="{{ asset('/images/'.$user->icon) }}" width="220" height="110" />
                                </td>
                                <td style="max-height: 200px;">{!!$user->description!!}</td>
                                <td>
                                    <img src="{{ asset('/images/'.$user->banner) }}" width="220" height="110" />
                                </td>
                                <td>
                                    <?php 
                                  if($user->status == "ACTIVE"){ ?>
                                    <span class="span-info ml-2">Active</span>
                                    <?php }else{?>
                                    <span class="span-warning ml-2">Inactive</span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="{{route('vendor.edit',$user->id)}}" class="pl-3 pr-3"><i
                                            class="fas fa-edit"></i></a>
                                    <!-- <a href="{{-- route('admin.equipment.delete',$user->id) --}}" ><i class="fas fa-trash"></i></a> -->
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