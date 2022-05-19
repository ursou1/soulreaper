<a class="action-item" href="#/">
    <i class="zmdi zmdi-shopping-cart-plus icon"></i>
    <span class="cart-quantity">2</span>
</a>
<div class="mini-cart-dropdown">

    @if(is_countable($cart) && count($cart) > 0)
    @foreach($cart as $product)
    <div class="cart-item">
        <div class="thumb">
            <img class="w-100" src="{{$product['image']}}" alt="Image-HasTech">
        </div>
        <div class="content">
            <h5 class="title"><a href="#/">{{$product['title']}}</a></h5>
            <span class="product-quantity">{{$product['count']}} ×</span>
            <span class="product-price">{{$product['cost']}} $</span>
            <a class="cart-trash" wire:click="remove({{ $product['id'] }})" ><i class="fa fa-trash"></i></a>
        </div>
    </div>
    @endforeach
    @else
        <div>
        <h3>Корзина пуста</h3>
        </div>
    @endif
    <div class="cart-total-money">
        <h5>Total: <span class="money">$159.00</span></h5>
    </div>
    <div class="cart-btn">
        <a href="cart">View Cart</a>
        <a href="checkout.html">Checkout</a>
    </div>
</div>
