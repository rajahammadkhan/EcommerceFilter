<div class="col-lg-9 product-grid">
    <div class="toolbox">
        <div class="toolbox-left">
            <div class="toolbox-info">
                Showing <span>{{count($products)}} of {{count($all_products)}}</span> Products
            </div><!-- End .toolbox-info -->
        </div><!-- End .toolbox-left -->
        <div class="toolbox-right">
            <div class="toolbox-sort">
                <label for="sortby">Sort by:</label>
                <div class="select-custom">
                    <select name="sortby" id="sortby" class="form-control">
                        <option value="popularity" selected="selected">Most Popular</option>
                        <option value="rating">Most Rated</option>
                        <option value="date">Date</option>
                    </select>
                </div>
            </div><!-- End .toolbox-sort -->
            <div class="toolbox-layout">
                <a href="c#" class="btn-layout active">
                    <svg width="16" height="10">
                        <rect x="0" y="0" width="4" height="4"/>
                        <rect x="6" y="0" width="10" height="4"/>
                        <rect x="0" y="6" width="4" height="4"/>
                        <rect x="6" y="6" width="10" height="4"/>
                    </svg>
                </a>

                <a href="#" class="btn-layout">
                    <svg width="10" height="10">
                        <rect x="0" y="0" width="4" height="4"/>
                        <rect x="6" y="0" width="4" height="4"/>
                        <rect x="0" y="6" width="4" height="4"/>
                        <rect x="6" y="6" width="4" height="4"/>
                    </svg>
                </a>

                <a href="#" class="btn-layout">
                    <svg width="16" height="10">
                        <rect x="0" y="0" width="4" height="4"/>
                        <rect x="6" y="0" width="4" height="4"/>
                        <rect x="12" y="0" width="4" height="4"/>
                        <rect x="0" y="6" width="4" height="4"/>
                        <rect x="6" y="6" width="4" height="4"/>
                        <rect x="12" y="6" width="4" height="4"/>
                    </svg>
                </a>

                <a href="#" class="btn-layout">
                    <svg width="22" height="10">
                        <rect x="0" y="0" width="4" height="4"/>
                        <rect x="6" y="0" width="4" height="4"/>
                        <rect x="12" y="0" width="4" height="4"/>
                        <rect x="18" y="0" width="4" height="4"/>
                        <rect x="0" y="6" width="4" height="4"/>
                        <rect x="6" y="6" width="4" height="4"/>
                        <rect x="12" y="6" width="4" height="4"/>
                        <rect x="18" y="6" width="4" height="4"/>
                    </svg>
                </a>
            </div><!-- End .toolbox-layout -->
        </div><!-- End .toolbox-right -->
    </div><!-- End .toolbox -->
    <div class="products mb-3">
        @if(count($products)>0)
            @foreach($products as $product)
                <div class="product product-list">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <figure class="product-media">
                                <span class="product-label label-new">New</span>
                                @if ($product->image != null)
                                    @php $image = '/'.$product->image @endphp
                                @else
                                    @php $image = 'galleryimage.png' @endphp
                                @endif
                                <img src="{{ asset('images/media' . '/' . $image) }}" alt="Product image"
                                     class="product-image">
                            </figure><!-- End .product-media -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-6 col-lg-3 order-lg-last">
                            <div class="product-list-action">
                                <div class="product-price">
                                    ${{$product->price}}
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 20%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-list-action -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-lg-6">
                            <div class="product-body product-action-inner">
                                <a href="#" class="btn-product btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                <div class="product-cat">
                                    <a href="#">{{$product->Category->category_name ?? ''}}</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">{{$product->title ?? ''}}
                                    </a></h3><!-- End .product-title -->

                                <div class="product-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus
                                        hendrerit. Pellentesque </p>
                                </div><!-- End .product-content -->

                                <div class="product-nav product-nav-thumbs">
                                    <a href="#" class="active">
                                        <img src="assets/images/products/product-4-thumb.jpg"
                                             alt="product desc">
                                    </a>
                                    <a href="#">
                                        <img src="assets/images/products/product-4-2-thumb.jpg"
                                             alt="product desc">
                                    </a>

                                    <a href="#">
                                        <img src="assets/images/products/product-4-3-thumb.jpg"
                                             alt="product desc">
                                    </a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->
                </div><!-- End .product -->
            @endforeach
        @else
            <div class="product product-list">
                <div class="row">
                    <div class="col-6 col-lg-3 d-flex">
                        <h1 class="text-bold">No Data Found!!!</h1>
                    </div>
                </div>
            </div>
        @endif
    </div><!-- End .products -->
</div>
