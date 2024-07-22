<div class="contain-product layout-default">
    <div class="product-thumb">
        <a href="{{route('product.details', ['slug'=>$slug])}}" class="link-to-product">
            <img src="{{asset('assets/images/products/p-'.$item.'.jpg')}}" alt="dd" width="270" height="270" class="product-thumnail">
        </a>
    </div>
    <div class="info">
        {{-- <b class="categories">{{$category}}</b> --}}
        <h4 class="product-title"><a href="#" class="pr-name">{{Str::limit($name, config('biolife.prod_title_limit'))}}</a></h4>
        <div class="price">
            <ins><span class="price-amount"><span class="currencySymbol">Bs </span>{{$currentPrice}}</span></ins>
            <del><span class="price-amount"><span class="currencySymbol">Bs </span>{{$previousPrice}}</span></del>
        </div>
        {{-- <div class="shipping-info">
            <p class="shipping-day">3-Day Shipping</p>
            <p class="for-today">Pree Pickup Today</p>
        </div> --}}
        {{-- <div class="slide-down-box">
            <p class="message">All products are carefully selected to ensure food safety.</p>
            <div class="buttons">
                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
            </div>
        </div> --}}
    </div>
</div>