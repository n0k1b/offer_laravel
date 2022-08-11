@extends('admin/index')
@section('title','About us')
@section('pageName','About us')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header">
                <div class="row">
                
                <div class="col-sm-6"><h3 class="card-title">About us</h3></div>
                <div class="col-sm-6 text-right">
                    @if (isset($data) && $data->id)
                    <a href="{{route('aboutus.edit',$data->id)}}"><i class="fas fa-edit"></i> Edit</a>
                    @else 
                    <a href="{{route('aboutus.add')}}"><i class="fas fa-plus"></i> Add</a>
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
                                {{-- <td>
                                    <img src="{{ asset('/images/'.$data->image) }}" style="width:100%" /> 
                                 </td> --}}
                            </tr>
                            <tr>
                                <td>{!!$data->text??''!!} </td>
                            </tr>
                            {{-- <tr>
                                <td>{!!$data->text_english??''!!} </td>
                            </tr> --}}


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