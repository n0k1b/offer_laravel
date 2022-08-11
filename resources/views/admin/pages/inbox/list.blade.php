@extends('admin/index')
@section('title','Inbox list')
@section('pageName','Inbox list')
@section('content')
<div class="container-fluid">
    @php
    $orderPnding=\App\Model\Order::where('order_status','Pending')->get();
    $orde=\App\Model\Order::where('order_status','!=','Pending')->get();
    @endphp
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(Session::has('message'))
                <p id="flashMessage" class="alert {{ Session::get('alert-class', 'alert-info') }}">{{
                    Session::get('message') }}</p>
                @endif
                <div class="card-header bg-danger">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title"> All Pending Request </h3>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#sl</th>
                                {{-- <th>Bangla name</th> --}}
                                <th> Product</th>
                                <th> Offer </th>
                                <th> Contact </th>
                                {{-- <th>Image</th> --}}

                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @if ($orderPnding)

                        @foreach ($orderPnding as $key=>$val)


                        <tr>
                            <td>{{++$key}}</td>
                            <td>
                                Item name: {{$val->item_name}}<br>
                                Item sku: {{$val->item_sku}}<br>
                                Link: <a href="{{$val->request_url}}" target="_blank">Click here</a>
                            </td>
                            <td>
                                <p class="text-danger"> {{$val->name}}</p>
                                <p class="text-danger"> {{$val->after_price}} TK
                                    <span style="text-decoration: line-through"> {{$val->item_price}} TK</span>
                                </p>
                            </td>
                            <td>
                                mobile: {{$val->mobile_no}}<br>
                                Address: {{$val->contact_address}}<br>
                            </td>
                            <td>
                                <p class="badge bg-warning"> {{$val->order_status}} </p>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary change_status" data-id="{{$key}}">Change Status
                                </a>
                            </td>
                            <input type="hidden" id="affiliation_val_{{$key}}" value="{{$val->affiliation_id}}" />
                            <input type="hidden" id="order_val_{{$key}}" value="{{$val->id}}" />
                        </tr>

                        @endforeach

                        @endif
                        <tbody>



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
                <div class="card-header bg-success">
                    <div class="row">

                        <div class="col-sm-6">
                            <h3 class="card-title">All Confirmed Order</h3>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#sl</th>
                                {{-- <th>Bangla name</th> --}}
                                <th> Product</th>
                                <th> Offer </th>
                                <th> Contact </th>
                                <th> Comment </th>
                                {{-- <th>Image</th> --}}

                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @if ($orde)
                        @php
                        $x=time();
                        @endphp
                        @foreach ($orde as $key=>$val)


                        <tr>
                            <td>{{++$key}}</td>
                            <td>
                                Item name: {{$val->item_name}}<br>
                                Item sku: {{$val->item_sku}}<br>
                                Link: <a href="{{$val->request_url}}" target="_blank">Click here</a>
                            </td>
                            <td>
                                <p class="text-danger"> {{$val->name}}</p>
                                <p class="text-danger"> {{$val->after_price}} TK
                                    <span style="text-decoration: line-through"> {{$val->item_price}} TK</span>
                                </p>
                            </td>
                            <td>
                                mobile: {{$val->mobile_no}}<br>
                                Address: {{$val->contact_address}}<br>
                            </td>
                            <td>{{$val->comment}}</td>
                            <td>
                                <p class="badge bg-success"> {{$val->order_status}} </p>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary change_status" data-id="{{$x}}">Change Status
                                </a>
                            </td>
                            <input type="hidden" id="affiliation_val_{{$x}}" value="{{$val->affiliation_id}}" />
                            <input type="hidden" id="order_val_{{$x}}" value="{{$val->id}}" />
                        </tr>
                        @php
                        $x++;
                        @endphp
                        @endforeach

                        @endif
                        <tbody>



                        </tbody>


                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" data-backdrop="static"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Product Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('updateStatus')}}" method="POST" id="buy_out">
                    <div class="modal-body">
                        {{ csrf_field() }}

                        @if(Session::has('user'))
                        <input type="hidden" name="user_id" value="{{session()->get('user')->id}}" />
                        @endif

                        <input type="hidden" id="form_affiliation_val" name="affiliation_id" />
                        <input type="hidden" id="form_order_val" name="order_id" />

                        <div class="form-group">
                            <label for="contact_address" class="col-form-label">Change Status <span
                                    class="text-danger">*</span></label>
                            <select class="form-control" required name="order_status">
                                <Option value="On Process">On Process</option>
                                <Option value="Approved">Approved</option>
                                <Option value="Reject">Reject</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Additional Notes <span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control" id="message-text" name="message" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="submit_click">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div><!-- /.container-fluid -->

@endsection
@section('footer_css_js')
<script>
    $(document).on("click", '.change_status', function(event) {
        $("#exampleModal").modal();
        let id =$(this).attr("data-id");
        console.log($("#affiliation_val_"+id).val());

        let aff=$("#affiliation_val_"+id).val();
        let ord=$("#order_val_"+id).val();

        $('#form_affiliation_val').val(aff);
        $('#form_order_val').val(ord);
    });
    //     $(document).on("click", '#submit_click', function(event) {
    //     $('#cover-spin').show();
    //     let dataString = $("#buy_out").serialize();
    //     let url = $("#buy_out").attr("action");
    //     $.ajax({
    //         url     : `${url}`,
    //         type    : 'POST',
    //         data    : dataString,
    //         success: function (json) {
    //             if(json.success){
    //                     Swal.fire({
    //                         position: 'top-end',
    //                         icon: 'success',
    //                         title: 'Your request sent successfully!',
    //                         showConfirmButton: false,
    //                         timer: 4000
    //                     });
    //                     location.reload();
    //             }else{
    //                 Swal.fire({
    //                         position: 'top-end',
    //                         icon: 'error',
    //                         title: 'Please check the input!',
    //                         showConfirmButton: false,
    //                         timer: 4000
    //                     });
    //             }
    //             $('#cover-spin').hide();
    //         },
    //         beforeSend: function(){
    //             $('#cover-spin').show();
    //         },
    //         error: function(json) {
    //             $('#cover-spin').hide();
    //             return json;
    //         }
    //     });
    // });
</script>

@endsection