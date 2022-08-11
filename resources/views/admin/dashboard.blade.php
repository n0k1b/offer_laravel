@extends('admin/index')
@section('title','admin dashboard')
@section('pageName','admin dashboard')
@section('content')
<div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  @if (session()->get('user_type') == 'admin')

  @php
  $order=\App\Model\Order::get();
  $offer=\App\Model\Offer::get();
  $product=\App\Model\Product::get();
  @endphp

  @else

  @php
  $order=\App\Model\Order::where('affiliation_id',session()->get('user')->affiliation_id)->get();
  $offer=\App\Model\Offer::where('vendor_id',session()->get('user')->id)->get();
  $product=\App\Model\Offer::where('vendor_id',session()->get('user')->id)->get();
  @endphp

  @endif
  <div class="row">
    <div class="col-sm">

      <h1> {{ session()->get('user_type') == 'admin' ? 'Admin' : 'Vendor'}} Dashboard</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{$product->count()}}</h3>

          <p>Total Products</p>
        </div>
        <div class="icon">
          <i class="fa fa-list"></i>
        </div>
        <a href="{{ route('product.list')}}" class="small-box-footer">More info <i
            class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$offer->count()}}</h3>

          <p>Total Offers</p>
        </div>
        <div class="icon">
          <i class="fa fa-gift"></i>
        </div>
        <a href="{{ route('offer.list')}}" class="small-box-footer">More info <i
            class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    @if (session()->get('user_type') == 'admin')

    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ mainCategory() ?? 0}}</h3>

          <p>Main Category</p>
        </div>
        <div class="icon">
          <i class="fas fa-bars"></i>
        </div>
        <a href="{{ route('productcategory.list')}}" class="small-box-footer">More info <i
            class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ subCategory() ?? 0}}</h3>

          <p>Sub Category</p>
        </div>
        <div class="icon">
          <i class="fa fa-list-alt"></i>
        </div>
        <a href="{{ route('productcategory.list')}}" class="small-box-footer">More info <i
            class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    @endif
    <!-- ./col -->

    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{$order->count()}}</h3>
          <p>Total Order</p>
        </div>
        <div class="icon">
          <i class="fas fa-sitemap"></i>
        </div>
        <a href="{{ route('inbox')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->

    <!-- ./col -->
  </div>

  <!-- /.row -->

</div><!-- /.container-fluid -->
@endsection