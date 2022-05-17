<div class="col-lg-4">
<div class="product-item">
    <div class="inner-content">
        <div class="product-thumb">
            <a href="single-product-simple.html">
                <img class="w-100" src="{!! $product->image !!}" alt="Image-HasTech">
            </a>
            <div class="product-action">
                <div class="addto-wrap">
                    <a class="add-cart" href="cart.html">
                        <i class="zmdi zmdi-shopping-cart-plus icon"></i>
                    </a>
                    <a class="add-wishlist" href="wishlist.html">
                        <i class="zmdi zmdi-favorite-outline zmdi-hc-fw icon"></i>
                    </a>
                    <a class="add-quick-view" href="javascript:void(0);">
                        <i class="zmdi zmdi-search icon"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="product-desc">
            <div class="product-info">
                <h4 class="title"><a href="single-product-simple.html"> {!!$product-> title!!} </a></h4>
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

