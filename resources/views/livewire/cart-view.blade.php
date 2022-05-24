<div>
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
                                @if(is_countable($cart) && count($cart) > 0)
                                    @foreach($cart as $product)
                                        <tr>
                                            <td class="indecor-product-remove">
                                                <a wire:click="remove({{$product['id']}})"><i class="fa fa-times"></i></a>
                                            </td>
                                            <td class="indecor-product-thumbnail">
                                                <a href="#/"><img src="{{ $product['image'] }}" alt="Image-HasTech"></a>
                                            </td>
                                            <td class="indecor-product-name">
                                                <h4 class="title"><a href="single-product.html">{{ $product['title'] }}</a></h4>
                                            </td>
                                            <td class="indecor-product-price"><span class="price">{{$product['cost']}}</span></td>
                                            <td class="indecor-product-quantity">
                                                <div class="btn-group">
                                                    <button wire:click="decrement"({{$product['id']}})>-</button>
                                                    <input type="text" id="quantity" title="Quantity" value="{{$product['count']}}">
                                                    <button wire:click="increment"({{$product['id']}})>+</button>
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span class="price">$70.00</span></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <div>
                                        <h3>
                                            Пусто
                                        </h3>
                                    </div>
                                @endif
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
</div>
