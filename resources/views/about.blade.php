@extends('layouts.layout')
@section('content')

    @include('parts.header')
<!--wrapper start-->
<div class="wrapper">
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="page-header-content">
              <nav class="breadcrumb-area">
                <ul class="breadcrumb">
                  <li><a href="/">Home</a></li>
                  <li class="breadcrumb-sep">/</li>
                  <li>about</li>
                </ul>
              </nav>
              <h4 class="title">about</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start About Area Wrapper ==-->
    <section class="about-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="about-thumb">
              <a href="#/"><img class="w-100" src="assets/img/about/1.jpg" alt="Image-HasTech"></a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about-content">
              <h4 class="title">Our company</h4>
              <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet, condimentum id nunc. Donec ornare mattis suscipit. Praesent fermentum accumsan vulputate.</p>
              <a class="btn-theme" href="#/">read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End About Area Wrapper ==-->

    <!--== Start Team Area Wrapper ==-->
    <section class="team-area">
      <div class="container pt-2">
        <div class="row">
          <div class="col-lg-12 m-auto">
            <div class="section-title section-title-style-two text-center"  >
              <h2 class="sub-title">HAND WORK</h2>
              <h2 class="title">our expert team</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-4">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="inner-content">
                <div class="thumb">
                  <a href="#/"><img class="w-100" src="assets/img/team/1.jpg" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="title"><a href="#/">Marcos Alonso</a></h4>
                </div>
              </div>
            </div>
            <!--== End Team Item ==-->
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="inner-content">
                <div class="thumb">
                  <a href="#/"><img class="w-100" src="assets/img/team/2.jpg" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="title"><a href="#/">Farhan</a></h4>
                </div>
              </div>
            </div>
            <!--== End Team Item ==-->
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="inner-content">
                <div class="thumb">
                  <a href="#/"><img class="w-100" src="assets/img/team/3.jpg" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <h4 class="title"><a href="#/">Marcos Alonso</a></h4>
                </div>
              </div>
            </div>
            <!--== End Team Item ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Team Area Wrapper ==-->
  </main>

  <!--== Start Quick View Menu ==-->
  <aside class="product-quick-view-modal">
    <div class="product-quick-view-inner">
      <div class="product-quick-view-content">
        <button type="button" class="btn-close">
          <span class="close-icon"><i class="fa fa-close"></i></span>
        </button>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="thumb">
              <img src="assets/img/shop/quick-view1.jpg" alt="Alan-Shop">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="content">
              <h4 class="title">Meta Slevless Dress</h4>
              <div class="prices">
                <del class="price-old">$85.00</del>
                <span class="price">$70.00</span>
              </div>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
              <div class="quick-view-select">
                <div class="quick-view-select-item">
                  <label for="forSizes" class="form-label">Size:</label>
                  <select class="form-select" id="forSizes" required>
                    <option selected value="">s</option>
                    <option>m</option>
                    <option>l</option>
                    <option>xl</option>
                  </select>
                </div>
                <div class="quick-view-select-item">
                  <label for="forColors" class="form-label">Color:</label>
                  <select class="form-select" id="forColors" required>
                    <option selected value="">red</option>
                    <option>green</option>
                    <option>blue</option>
                    <option>yellow</option>
                    <option>white</option>
                  </select>
                </div>
              </div>
              <div class="action-top">
                <div class="pro-qty">
                  <input type="text" id="quantity4" title="Quantity" value="1" />
                </div>
                <button class="btn btn-black">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="canvas-overlay"></div>
  </aside>
  <!--== End Quick View Menu ==-->

  <!--== Start Side Menu ==-->
  <aside class="off-canvas-wrapper">
    <div class="off-canvas-inner">
      <div class="off-canvas-overlay"></div>
      <!-- Start Off Canvas Content Wrapper -->
      <div class="off-canvas-content">
        <!-- Off Canvas Header -->
        <div class="off-canvas-header">
          <div class="close-action">
            <button class="btn-menu-close">menu <i class="fa fa-chevron-left"></i></button>
          </div>
        </div>

        <div class="off-canvas-item">
          <!-- Start Mobile Menu Wrapper -->
          <div class="res-mobile-menu menu-active-one">
            <!-- Note Content Auto Generate By Jquery From Main Menu -->
          </div>
          <!-- End Mobile Menu Wrapper -->
        </div>
      </div>
      <!-- End Off Canvas Content Wrapper -->
    </div>
  </aside>
  <!--== End Side Menu ==-->
</div>
