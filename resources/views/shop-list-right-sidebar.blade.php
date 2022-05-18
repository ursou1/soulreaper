@extends('layouts.layout')
@section('content')


  <main class="main-content">

      <div class="page-header-area">
          <div class="container">
              <div class="row">
                  <div class="col-12 text-center">
                      <div class="page-header-content">
                          <nav class="breadcrumb-area">
                              <ul class="breadcrumb">
                                  <li><a href="/">Home</a></li>
                                  <li class="breadcrumb-sep">/</li>
                                  <li>Products</li>
                              </ul>
                          </nav>
                          <h4 class="title">Products</h4>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--== End Page Header Area Wrapper ==-->


      <section class="product-area product-inner-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
              @include('parts.productListHeader')
            <div class="product-body-wrap">
                  <div class="row">
                      @foreach($products as $product)
                          <div class="col-lg-4">
                              <div class="product-item">
                                  <div class="inner-content">
                                      <div class="product-thumb">
                                          <a href="single-product-simple.html">
                                              <img class="w-100" src="{!! $product->image !!}" alt="Image-HasTech">
                                          </a>
                                          <div class="product-action">
                                              <div class="addto-wrap">
                                                  <a class="add-cart" href="{{ route('single-product', $product->slug) }}">
                                                      <i class="zmdi zmdi-shopping-cart-plus icon"></i>
                                                  </a>
                                                  <a class="add-wishlist" href="wishlist.html">
                                                      <i class="zmdi zmdi-favorite-outline zmdi-hc-fw icon"></i>
                                                  </a>
                                                  <a class="add-quick-view" href="javascript:void(0);">
                                                      <i class="zmdi zmdi-search icon" href="{{ route('single-product', $product->slug) }}"></i>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-desc">
                                          <div class="product-info">
                                              <h4 class="title"><a href="{{ route('single-product', $product->slug) }}"> {!!$product-> title!!} </a></h4>
                                              <div class="star-content">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star-half-o"></i>
                                              </div>
                                              <div class="prices">
                                                  <span class="price">{!!$product-> cost!!}</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>


                      @endforeach
                  </div>
                  <!--== Start Pagination Wrap ==-->
                  <div class="row">
                    <div class="col-12">
                      <div class="pagination-content-wrap border-top">
                        <nav class="pagination-nav">
                          <ul class="pagination justify-content-center">
                            <li><a class="disabled active prev" href="shop.html">Prev</a></li>
                            <li><a class="disabled active" href="shop.html">1</a></li>
                            <li><a href="shop.html">2</a></li>
                            <li><a class="next" href="shop.html">Next</a></li>
                          </ul>
                        </nav>
                      </div>
                    </div>

                  <!--== End Pagination Wrap ==-->


              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <!--== Start Product Sidebar Wrapper ==-->
                @include('parts.productListSidebar')
            <!--== End Product Sidebar Wrapper ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->
  </main>
@endsection
