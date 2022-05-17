@extends('layouts.layout')
@section('content')

    <main class="main-content">

        <section class="product-area product-single-area">
            <div class="container pt-60 pb-0">
                <div class="row">
                    <div class="col-12">
                        <div class="product-single-item" data-margin-bottom="63">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!--== Start Product Thumbnail Area ==-->
                                    <div class="product-thumb">
                                        <div class="zoom zoom-hover">
                                            <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/3.jpg">
                                                <img src="{!! $product->image !!}" class="img-fluid" width="100%" alt="Image-HasTech">
                                            </a>
                                        </div>
                                    </div>
                                    <!--== End Product Thumbnail Area ==-->
                                </div>
                                <div class="col-lg-6">
                                    <!--== Start Product Info Area ==-->
                                    <div class="product-single-info">
                                        <h4 class="title">Flower Print dress</h4>
                                        <div class="prices">
                                            <span class="price">$50.00</span>
                                            <span class="price-old">$20.00</span>
                                        </div>
                                        <div class="rating-box-wrap">
                                            <div class="rating-box">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="review-status">
                                                <a href="javascript:void(0)">( 1 Customer Review )</a>
                                            </div>
                                        </div>
                                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>
                                        <div class="product-action-simple">
                                            <div class="product-quick-action">
                                                <div class="product-quick-qty">
                                                    <div class="pro-qty">
                                                        <input type="text" id="quantity" title="Quantity" value="1">
                                                    </div>
                                                </div>
                                                <a class="btn-product-add" href="#/">Add to cart</a>
                                            </div>
                                            <div class="product-wishlist">
                                                <a href="wishlist.html" class="btn-wishlist">Add to wishlist</a>
                                            </div>
                                            <div class="payment-button">
                                                <a href="#/" class="btn-payment">Buy it now</a>
                                            </div>
                                            <div class="social-sharing">
                                                <span>Share:</span>
                                                <div class="social-icons">
                                                    <a href="#/"><i class="fa fa-facebook"></i></a>
                                                    <a href="#/"><i class="fa fa-twitter"></i></a>
                                                    <a href="#/"><i class="fa fa-pinterest"></i></a>
                                                    <a href="#/"><i class="fa fa-google-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Info Area ==-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!--== End Footer Area Wrapper ==-->



<script>
    // Images Zoom
    $('.zoom-hover').zoom();
</script>

</main>
@endsection

