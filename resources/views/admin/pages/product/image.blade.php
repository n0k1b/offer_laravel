@extends('admin/index')
@section('title','Edit  Product ')
@section('pageName','Edit  Product')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">Edit Product Images</h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('product.list')}}" class="text-right"><i class="fa fas fa-list"></i> list</a>
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
                     <form role="form" method="post" action="{{route('product_image_submit.submit')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                     <input type="hidden" name="id" value="{{ $data->id}}" id="product_id" />
                     
                        <div class="row">
                            <div class="col-sm">
                                <div class="card card-primary">

                                    <!-- form start -->
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

                                            @if(Session::has('message'))
                                                <p id="flashMessage" class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                            @endif

                                            <div class="form-group col p-3">
                                                <label for="exampleInputEmail1">Upload  Image ( you can upload multiple images) </label>
                                                <input id="jpg_name" class="form-control "   name="jpg_name[]"  required type="file" value=""  multiple="multiple">
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
                    {{-- <p>Main Image</p>
                     @if($data->thumb_image)

                            <div>

                            <a class="example-image-link" href="{{ asset('/images/'.$data->main_image) }}" data-lightbox="example-1">
                                <img class="example-image" src="{{ asset('/thumbnails/'.$data->thumb_image) }}" alt="image-1" height="200" width="200"/>
                            </a>

                            </div>                                                   
                    @endif --}}
                     @if($productImage)
                     <form role="form" method="post" action="{{route('product_image_delete')}}">
                                                {{ csrf_field() }}

  <div>
                     @foreach ($productImage as $img)
                            <input type="checkbox"  name="image_id[]" value="{{ $img->id}}"  style="width: 20px; height: 20px;"/>
                            <a class="example-image-link  " href="{{ asset('/images/'.$img->main_image) }}" data-lightbox="example-set">
                                <img class="example-image border border-primary m-2" src="{{ asset('/thumbnails/'.$img->thumb_image) }}" width="200"/>
                            </a>
                            
                     @endforeach
</div> 

                        <input type="submit" id="submit_prog" class="btn btn-danger" value='Delete Images' />
                     </form>
                                                                             
                    @endif
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


    var $submit = $("#submit_prog").hide(),
        $cbs = $('input[name="image_id[]"]').click(function() {
            $submit.toggle( $cbs.is(":checked") );
        });

  $('.summernote').summernote();

  var cat_id = $(this).find('option:selected').val();
  var productId = $("#product_id").val();
    

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
            $('#sub_category_name').append($('<option>', { value: item.id, text: item.bangla_name }));
          });

          $("#sub_category_name option").each(function(){
            if ($(this).val() == $("#cat_data").val())
                $(this).attr("selected","selected");
            });

        },
        dataType: "json"
      });
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
            $('#sub_category_name').append($('<option>', { value: item.id, text: item.bangla_name }));
          });

        },
        dataType: "json"
      });
  });
  
</script>

@endsection