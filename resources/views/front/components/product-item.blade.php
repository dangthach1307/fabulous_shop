<div class="item-inner">
    <div class="item-img">
        <div class="item-img-info">
            <img class="img-responsive" alt="{{ $product->name }}"
                src="{{ asset('front/images/products/' . $product->productImages[0]->path) }}">
            <a href="{{ route('shop.show', $product->id) }}" class="product-link">
            </a>
            @if ($product->discount != null)
                <div class="sale-label sale-top-right">Sale</div>
            @endif
            <div class="mask-shop-white"></div>
            <div class="product-actions">
                <a href="javascript:addToCart({{ $product->id }});">
                    <i class="fa fa-cart-plus"></i>
                    <span> Add to cart</span>
                </a>
                <a href="wishlist.html">
                    <i class="fa fa-heart-o"></i>
                    <span> Add to
                        Wishlist</span>
                </a>
                <a href="compare.html" class="add-to-compare">
                    <i class="fa fa-signal"></i>
                    <span>Compare</span>
                </a>
            </div>
        </div>
    </div>
    <div class="item-info">
        <div class="info-inner">
            <div class="item-title"> <a title="{{ $product->name }}"
                    ref="{{ route('shop.show', $product->id) }}">
                    {{ $product->name }} </a> </div>
            <div class="item-content">
                <div class="rating">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $product->avgRating)
                            <i class="fa fa-star"></i>
                        @else
                            <i class="fa fa-star-o"></i>
                        @endif
                    @endfor
                </div>
                <div class="item-price">
                    @if ($product->discount != null)
                        <p class="special-price">
                            <span class="price-label">Special Price</span>
                            <span class="price">
                                ${{ $product->discount }}
                            </span>
                        </p>
                        <p class="old-price">
                            <span class="price-label">Regular
                                Price:</span>
                            <span class="price">
                                ${{ $product->price }}
                            </span>
                        </p>
                    @else
                        <p class="special-price">
                            <span class="price-label">Regular
                                Price:</span>
                            <span class="price">
                                ${{ $product->price }}
                            </span>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
