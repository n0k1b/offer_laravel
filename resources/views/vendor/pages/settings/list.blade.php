@extends('admin/index')
@section('title','Site settings')
@section('pageName','Site settings')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header">
                <div class="row">
                
                <div class="col-sm-6"><h3 class="card-title">Site settings</h3></div>
                <div class="col-sm-6 text-right">
                    @if (isset($data) && $data->id)
                    <a href="{{route('settings.edit',$data->id)}}"><i class="fas fa-edit"></i> Edit</a>
                    @else 
                    <a href="{{route('settings.add')}}"><i class="fas fa-plus"></i> Add</a>
                    @endif
                </div>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if(Session::has('message'))
                    <p id="flashMessage" class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                    <table id="example1" class="table table-bordered table-striped">
                        
                        <tbody>

                            <tr>
                                <td>
                                    <label>Site name</label>
                                {!!$data->site_name??''!!} 
                                 </td>
                            </tr>
                            <tr>
                                <td>  <label>Contact</label>
                                {!!$data->contact??''!!} 
                                </td>
                            </tr>
                            <tr>
                                <td> <label>Address</label>
                                {!!$data->address??''!!} 
                                </td>
                            </tr>
                            <tr>
                                <td> <label>Email Address</label>
                                {!!$data->email??''!!} 
                                </td>
                            </tr>
                            <tr>
                                <td> <label>Facebook link</label>
                                {!!$data->facebook_link??''!!} 
                                </td>
                            </tr>
                             <tr>
                                <td> <label>Hot Line</label>
                                {!!$data->hot_line??''!!} 
                                </td>
                            </tr>
                             <tr>
                                <td> <label>Info mail</label>
                                {!!$data->info_mail??''!!} 
                                </td>
                            </tr>
                            <tr>
                                <td> <label>Mobile Logo Image</label>
                           <img src="{{ asset('/images/'.$data->image) }}" style="height:200px;widht:300px;" />  </td>
                                </td>
                            </tr>


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