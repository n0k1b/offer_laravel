@extends('admin/index')
@section('title','Add Product ')
@section('pageName','Add Product ')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Add Product </h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('product.list')}}" class="text-right"><i class="fa fas fa-list"></i>
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
                    <form role="form" method="post" action="{{route('product.submit')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm">
                                <div class="card card-primary">
                                    @if (session()->get('user_type') == 'admin')

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1">Vendor *</label>
                                            <select class="form-control" name="vendor_id" required="required">
                                                @php
                                                $vendor=\App\Model\Vendor::where('status',"ACTIVE")->get();
                                                @endphp
                                                @if ($vendor)
                                                <option value="">--Select--</option>
                                                @foreach ($vendor as $value )
                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    @else
                                    <input type="hidden" name="vendor_id" value="{{session()->get('user')->id}}" />
                                    @endif
                                    <!-- form start -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category Name</label>
                                            <select class="form-control category" name="category_id"
                                                required="required">
                                                <option value="">Seelct Category</option>
                                                @if ($cat)
                                                @foreach ($cat as $val )
                                                <option value="{{ $val->id}}">{{$val->english_name}}</option>
                                                @endforeach
                                                @endif
                                            </select>

                                        </div>
                                        <div class="form-group" id="sub_cat" style="display:none">
                                            <label for="exampleInputEmail1">Sub Category Name</label>
                                            <select class="form-control" name="sub_category_name"
                                                id="sub_category_name">
                                                <option value="">--select--</option>
                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Brand Name </label>
                                            <select class="form-control" name="brand">
                                                <option value="">--select--</option>
                                                @if ($brand)
                                                @foreach ($brand as $val)
                                                <option value="{{$val->id}}">{{$val->name}}</option>
                                                @endforeach

                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Offer </label>
                                            <select class="form-control select2" name="offer">
                                                @if ($offer)
                                                @foreach ($offer as $val)
                                                <option value="{{$val->id}}">{{$val->title}}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group ">
                                            <label for="exampleInputEmail1">Product Title </label>
                                            <input type="text" class="form-control" name="title_english_name" required
                                                placeholder="please enter..">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Sub Title </label>
                                            <input type="text" class="form-control" name="sub_title_english_name"
                                                placeholder="please enter..">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Price</label>
                                            <input type="number" class="form-control" name="price"
                                                placeholder="please enter.." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Main Product Image </label>
                                            <input id="jpg_name" class="form-control " required="required"
                                                name="jpg_name" required type="file" value="">
                                        </div>

                                        {{-- <div class="row">
                                            <div class="form-group p-3 col">
                                                <label for="exampleInputEmail1">উপাদানের নাম </label>
                                                <textarea name="composition_bangla_name" class="summernote"></textarea>
                                            </div>
                                            <div class="form-group p-3 col">
                                                <label for="exampleInputEmail1">Composition Name</label>
                                                <textarea name="composition_english_name" class="summernote"></textarea>
                                            </div>
                                        </div>
                                        --}}
                                        {{-- <div class="row">
                                            <div class="form-group p-3 col">
                                                <label for="exampleInputEmail1">পরিচিতি</label>
                                                <textarea name="familiarity_bangla" class="summernote"></textarea>
                                            </div>
                                            <div class="form-group p-3 col">
                                                <label for="exampleInputEmail1">Familiarity Name</label>
                                                <textarea name="familiarity_english" class="summernote"></textarea>
                                            </div>
                                        </div> --}}

                                        {{-- <div class="row">
                                            <div class="form-group p-3 col">
                                                <label for="exampleInputEmail1">উপদানের বর্ণনা </label>
                                                <textarea name="compound_bangla" class="summernote"></textarea>
                                            </div>
                                            <div class="form-group p-3 col">
                                                <label for="exampleInputEmail1">Compound Name</label>
                                                <textarea name="compound_english" class="summernote"></textarea>
                                            </div>
                                        </div> --}}

                                        {{-- <div class="row">
                                            <div class="form-group p-3 col">
                                                <label for="exampleInputEmail1">প্রয়োগক্ষেত্র </label>
                                                <textarea name="application_bangla" class="summernote"></textarea>
                                            </div>
                                            <div class="form-group p-3 col">
                                                <label for="exampleInputEmail1">Application </label>
                                                <textarea name="application_english" class="summernote"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group p-3 col">
                                                <label for="exampleInputEmail1">কার্যকারিতা </label>
                                                <textarea name="effectiveness_bangla" class="summernote"></textarea>
                                            </div>
                                            <div class="form-group p-3 col">
                                                <label for="exampleInputEmail1">Effectiveness </label>
                                                <textarea name="effectivness_english" class="summernote"></textarea>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group p-3 col">
                                                <label for="exampleInputEmail1">ব্যবহারবিধি </label>
                                                <textarea name="useability_bangla" class="summernote"></textarea>
                                            </div>
                                            <div class="form-group p-3 col">
                                                <label for="exampleInputEmail1">Usebility </label>
                                                <textarea name="useability_english" class="summernote"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group p-3 col">
                                                <label for="exampleInputEmail1">নির্দেশনা </label>
                                                <textarea name="instruction_bangla" class="summernote"></textarea>
                                            </div>
                                            <div class="form-group p-3 col">
                                                <label for="exampleInputEmail1">Instruction </label>
                                                <textarea name="instruction_english" class="summernote"></textarea>
                                            </div>
                                        </div> --}}

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description </label>
                                            <textarea name="description" class="summernote"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Status</label><br>
                                            <input type="checkbox" name="status" class="form-control"
                                                data-toggle="toggle" data-on="Active" data-off="Inactive">
                                            <!-- <input type="checkbox" id="toggle-two"> -->
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
    $(document).ready(function() {
  $('.summernote').summernote();
});
$(document).on('change', '.category', function() {
    // console.log($("#course option:selected").value());

    var cat_id = $(this).find('option:selected').val();
    

    $.ajax
      ({
        type: "POST",
        url: '{{ route('getCategory')}}',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: { 'cat_id': cat_id , "_token": "{{ csrf_token() }}"},
        cache: false,
        success: function (data) {
            if(data.length > 0){
                $("#sub_cat").show();
            }else{
                $("#sub_cat").hide();

            }
            $('#sub_category_name').html('');
            $.each(data, function (i, item) {
            // console.log(item.upazila_name);
            $('#sub_category_name').append($('<option>', { value: item.id, text: item.english_name }));
          });

        },
        dataType: "json"
      });
  });
</script>

@endsection