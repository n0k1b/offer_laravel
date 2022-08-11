@extends('vendor/index')
@section('title','vendor dashboard')
@section('pageName','vendor dashboard')
@section('content')
<div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-sm">

      <h1> Vendor Dashboard</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{allProduct() ??0}}</h3>

          <p>Total Offers</p>
        </div>
        <div class="icon">
          <i class="fas fa-sitemap"></i>
        </div>
        <a href="{{ route('product.list')}}" class="small-box-footer">More info <i
            class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
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
    <!-- ./col -->

    <!-- ./col -->
  </div>

  <!-- /.row -->

</div><!-- /.container-fluid -->
@endsection