@extends('layouts.layout')
@section('content')

<main>
<!--wrapper start-->
<div class="wrapper">
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="page-header-content">
              <h4 class="title mt-0">Your Shopping Cart</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area shopping-cart-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="shopping-cart-wrap">
              <div class="cart-table table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="indecor-product-remove">Remove</th>
                      <th class="indecor-product-thumbnail">Image</th>
                      <th class="indecor-product-name">Product</th>
                      <th class="indecor-product-price">Price</th>
                      <th class="indecor-product-quantity">Quantity</th>
                      <th class="indecor-product-subtotal">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="indecor-product-remove">
                        <a href="#/"><i class="fa fa-times"></i></a>
                      </td>
                      <td class="indecor-product-thumbnail">
                        <a href="#/"><img src="assets/img/shop/cart/table1.jpg" alt="Image-HasTech"></a>
                      </td>
                      <td class="indecor-product-name">
                        <h4 class="title"><a href="single-product.html">Meta Slevless Dresss</a></h4>
                      </td>
                      <td class="indecor-product-price"><span class="price">$70.00</span></td>
                      <td class="indecor-product-quantity">
                        <div class="pro-qty">
                          <input type="text" id="quantity" title="Quantity" value="1">
                        </div>
                      </td>
                      <td class="product-subtotal"><span class="price">$70.00</span></td>
                    </tr>
                    <tr>
                      <td class="indecor-product-remove">
                        <a href="#/"><i class="fa fa-times"></i></a>
                      </td>
                      <td class="indecor-product-thumbnail">
                        <a href="#/"><img src="assets/img/shop/cart/table2.jpg" alt="Image-HasTech"></a>
                      </td>
                      <td class="indecor-product-name">
                        <h4 class="title"><a href="single-product.html">Literature Classicals</a></h4>
                      </td>
                      <td class="indecor-product-price"><span class="price">$79.00  </span></td>
                      <td class="indecor-product-quantity">
                        <div class="pro-qty">
                          <input type="text" id="quantity5" title="Quantity" value="1">
                        </div>
                      </td>
                      <td class="product-subtotal"><span class="price">$79.00 </span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row">
                <div class="col-md-12 col-lg-7 col-12">
                  <div class="coupon-all">
                    <div class="coupon">
                      <a class="button" href="shop.html">Continue Shopping</a>
                      <a class="button" href="#/">Clear Cart</a>
                      <div class="cart-coupon">
                        <h3>Special instructions for seller</h3>
                        <label for="Textarea1" class="form-label visually-hidden">Instructions Seller</label>
                        <textarea class="form-control" id="Textarea1"></textarea>
                      </div>
                    </div>
                    <div class="coupon2">
                      <a class="button" href="#/">Update Cart</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-5 col-12">
                  <div class="cart-page-total">
                    <h3>Cart Totals</h3>
                    <ul>
                      <li>Subtotal <span class="money">$219.00</span></li>
                      <li>Total <span class="money">$219.00</span></li>
                    </ul>
                    <a class="proceed-to-checkout-btn" href="checkout.html">Proceed to Checkout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->
  </main>

  <!--== Scroll Top Button ==-->



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
</main>
@endsection
