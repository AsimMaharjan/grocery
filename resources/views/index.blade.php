@extends('layouts.main')

@section('content')

<div class="mobile-menu"><a href="index.html" title="Home Page"><i
                class="fas fa-home"></i><span>Home</span></a><button class="cate-btn" title="Category List"><i
                class="fas fa-list"></i><span>category</span></button><button class="cart-btn" title="Cartlist"><i
                class="fas fa-shopping-basket"></i><span>cartlist</span><sup>9+</sup></button><a href="wishlist.html"
            title="Wishlist"><i class="fas fa-heart"></i><span>wishlist</span><sup>0</sup></a><a href="compare.html"
            title="Compare List"><i class="fas fa-random"></i><span>compare</span><sup>0</sup></a></div>
    <div class="modal fade" id="product-view">
        <div class="modal-dialog">
            <div class="modal-content"><button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="view-gallery">
                                <div class="view-label-group"><label class="view-label new">new</label><label
                                        class="view-label off">-10%</label></div>
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                </ul>
                                <ul class="thumb-slider">
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="product-video.html">existing product name</a></h3>
                                <div class="view-meta">
                                    <p>SKU:<span>1234567</span></p>
                                    <p>BRAND:<a href="#">radhuni</a></p>
                                </div>
                                <div class="view-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3 reviews)</a></div>
                                <h3 class="view-price"><del>$38.00</del><span>$24.00<small>/per kilo</small></span></h3>
                                <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora
                                    magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos
                                    reprehenderit fuga</p>
                                <div class="view-list-group"><label class="view-list-title">tags:</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">organic</a></li>
                                        <li><a href="#">vegetable</a></li>
                                        <li><a href="#">chilis</a></li>
                                    </ul>
                                </div>
                                <div class="view-list-group"><label class="view-list-title">Share:</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>
                                <div class="view-add-group"><button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add to cart</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                                <div class="view-action-group"><a class="view-wish wish" href="#"
                                        title="Add Your Wishlist"><i class="icofont-heart"></i><span>add to
                                            wish</span></a><a class="view-compare" href="compare.html"
                                        title="Compare This Item"><i class="fas fa-random"></i><span>Compare
                                            This</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="home-index-slider slider-arrow slider-dots">
        <div class="banner-part banner-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-content">
                            <h1>free home delivery within 24 hours now.</h1>
                            <p>Lorem ipsum dolor consectetur adipisicing elit modi consequatur eaque expedita porro
                                necessitatibus eveniet voluptatum quis pariatur Laboriosam molestiae architecto
                                excepturi</p>
                            <div class="banner-btn"><a class="btn btn-inline" href="shop-4column.html"><i
                                        class="fas fa-shopping-basket"></i><span>shop now</span></a><a
                                    class="btn btn-outline" href="offer.html"><i
                                        class="icofont-sale-discount"></i><span>get offer</span></a></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-img"><img src="images/home/index/01.png" alt="index"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-part banner-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-img"><img src="images/home/index/02.png" alt="index"></div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-content">
                            <h1>free home delivery within 24 hours now.</h1>
                            <p>Lorem ipsum dolor consectetur adipisicing elit modi consequatur eaque expedita porro
                                necessitatibus eveniet voluptatum quis pariatur Laboriosam molestiae architecto
                                excepturi</p>
                            <div class="banner-btn"><a class="btn btn-inline" href="shop-4column.html"><i
                                        class="fas fa-shopping-basket"></i><span>shop now</span></a><a
                                    class="btn btn-outline" href="offer.html"><i
                                        class="icofont-sale-discount"></i><span>get offer</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section suggest-part">
        <div class="container">
            <ul class="suggest-slider slider-arrow">
                <li><a class="suggest-card" href="shop-4column.html"><img src="images/suggest/01.jpg" alt="suggest">
                        <h5>vegetables <span>34 items</span></h5>
                    </a></li>
                <li><a class="suggest-card" href="shop-4column.html"><img src="images/suggest/02.jpg" alt="suggest">
                        <h5>fruits <span>89 items</span></h5>
                    </a></li>
                <li><a class="suggest-card" href="shop-4column.html"><img src="images/suggest/03.jpg" alt="suggest">
                        <h5>groceries <span>45 items</span></h5>
                    </a></li>
                <li><a class="suggest-card" href="shop-4column.html"><img src="images/suggest/04.jpg" alt="suggest">
                        <h5>dairy farm <span>83 items</span></h5>
                    </a></li>
                <li><a class="suggest-card" href="shop-4column.html"><img src="images/suggest/05.jpg" alt="suggest">
                        <h5>sea foods <span>40 items</span></h5>
                    </a></li>
                <li><a class="suggest-card" href="shop-4column.html"><img src="images/suggest/06.jpg" alt="suggest">
                        <h5>vegan foods <span>57 items</span></h5>
                    </a></li>
                <li><a class="suggest-card" href="shop-4column.html"><img src="images/suggest/07.jpg" alt="suggest">
                        <h5>dry foods <span>23 items</span></h5>
                    </a></li>
                <li><a class="suggest-card" href="shop-4column.html"><img src="images/suggest/08.jpg" alt="suggest">
                        <h5>fast foods <span>97 items</span></h5>
                    </a></li>
            </ul>
        </div>
    </section>
    <section class="section recent-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>recently sold items</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/01.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label><label
                                    class="label-text new">new</label></div><button class="product-wish wish"><i
                                    class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/02.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/03.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/04.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/05.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/06.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/07.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/08.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/09.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text sale">sale</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                                href="product-video.html"><img src="images/product/10.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25"><a href="shop-4column.html" class="btn btn-outline"><i
                                class="fas fa-eye"></i><span>show more</span></a></div>
                </div>
            </div>
        </div>
    </section>
    <div class="section promo-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="promo-img"><a href="#"><img src="images/promo/home/03.jpg" alt="promo"></a></div>
                </div>
            </div>
        </div>
    </div>
    <section class="section feature-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>our featured items</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><button
                                class="feature-wish wish"><i class="fas fa-heart"></i></button><a class="feature-image"
                                href="product-video.html"><img src="images/product/09.jpg" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.html">fresh organic green chilis</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3 Reviews)</a></div>
                            <h6 class="feature-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><button
                                class="feature-wish wish"><i class="fas fa-heart"></i></button><a class="feature-image"
                                href="product-video.html"><img src="images/product/10.jpg" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.html">fresh organic green chilis</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3 Reviews)</a></div>
                            <h6 class="feature-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><button
                                class="feature-wish wish"><i class="fas fa-heart"></i></button><a class="feature-image"
                                href="product-video.html"><img src="images/product/11.jpg" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.html">fresh organic green chilis</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3 Reviews)</a></div>
                            <h6 class="feature-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><button
                                class="feature-wish wish"><i class="fas fa-heart"></i></button><a class="feature-image"
                                href="product-video.html"><img src="images/product/12.jpg" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.html">fresh organic green chilis</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3 Reviews)</a></div>
                            <h6 class="feature-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><button
                                class="feature-wish wish"><i class="fas fa-heart"></i></button><a class="feature-image"
                                href="product-video.html"><img src="images/product/13.jpg" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.html">fresh organic green chilis</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3 Reviews)</a></div>
                            <h6 class="feature-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><button
                                class="feature-wish wish"><i class="fas fa-heart"></i></button><a class="feature-image"
                                href="product-video.html"><img src="images/product/14.jpg" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.html">fresh organic green chilis</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3 Reviews)</a></div>
                            <h6 class="feature-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25"><a href="shop-4column.html" class="btn btn-outline"><i
                                class="fas fa-eye"></i><span>show more</span></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section countdown-part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto">
                    <div class="countdown-content">
                        <h3>special discount offer for vegetable items</h3>
                        <p>Reprehenderit sed quod autem molestiae aut modi minus veritatis iste dolorum suscipit quis
                            voluptatum fugiat mollitia quia minima</p>
                        <div class="countdown countdown-clock" data-countdown="2022/12/22"><span
                                class="countdown-time"><span>00</span><small>days</small></span><span
                                class="countdown-time"><span>00</span><small>hours</small></span><span
                                class="countdown-time"><span>00</span><small>minutes</small></span><span
                                class="countdown-time"><span>00</span><small>seconds</small></span></div><a
                            href="shop-4column.html" class="btn btn-inline"><i
                                class="fas fa-shopping-basket"></i><span>shop now</span></a>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="countdown-img"><img src="images/countdown.png" alt="countdown">
                        <div class="countdown-off"><span>20%</span><span>off</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section newitem-part">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-heading">
                        <h2>collected new items</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="new-slider slider-arrow">
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="images/product/15.jpg"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="images/product/16.jpg"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="images/product/17.jpg"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="images/product/18.jpg"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="images/product/19.jpg"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="images/product/20.jpg"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="section-btn-25"><a href="shop-4column.html" class="btn btn-outline"><i
                                class="fas fa-eye"></i><span>show more</span></a></div>
                </div>
            </div>
        </div>
    </section>
    <div class="section promo-part">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 px-xl-3">
                    <div class="promo-img"><a href="#"><img src="images/promo/home/01.jpg" alt="promo"></a></div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 px-xl-3">
                    <div class="promo-img"><a href="#"><img src="images/promo/home/02.jpg" alt="promo"></a></div>
                </div>
            </div>
        </div>
    </div>
    <section class="section niche-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Browse by Top Niche</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs">
                        <li><a href="#top-order" class="tab-link active" data-bs-toggle="tab"><i
                                    class="icofont-price"></i><span>top order</span></a></li>
                        <li><a href="#top-rate" class="tab-link" data-bs-toggle="tab"><i
                                    class="icofont-star"></i><span>top rating</span></a></li>
                        <li><a href="#top-disc" class="tab-link" data-bs-toggle="tab"><i
                                    class="icofont-sale-discount"></i><span>top discount</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade show active" id="top-order">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/01.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/02.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/03.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/04.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/05.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/06.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card product-disable">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/07.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/08.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/09.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/10.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="top-rate">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/11.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/12.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/13.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/14.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/15.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/16.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card product-disable">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/17.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/18.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/19.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/20.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="top-disc">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/06.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/07.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/08.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/09.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/10.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/11.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/12.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/13.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/14.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="images/product/15.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25"><a href="shop-4column.html" class="btn btn-outline"><i
                                class="fas fa-eye"></i><span>show more</span></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section brand-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>shop by brands</h2>
                    </div>
                </div>
            </div>
            <div class="brand-slider slider-arrow">
                <div class="brand-wrap">
                    <div class="brand-media"><img src="images/brand/01.jpg" alt="brand">
                        <div class="brand-overlay"><a href="brand-single.html"><i class="fas fa-link"></i></a></div>
                    </div>
                    <div class="brand-meta">
                        <h4>natural greeny</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media"><img src="images/brand/02.jpg" alt="brand">
                        <div class="brand-overlay"><a href="brand-single.html"><i class="fas fa-link"></i></a></div>
                    </div>
                    <div class="brand-meta">
                        <h4>vegan lover</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media"><img src="images/brand/03.jpg" alt="brand">
                        <div class="brand-overlay"><a href="brand-single.html"><i class="fas fa-link"></i></a></div>
                    </div>
                    <div class="brand-meta">
                        <h4>organic foody</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media"><img src="images/brand/04.jpg" alt="brand">
                        <div class="brand-overlay"><a href="brand-single.html"><i class="fas fa-link"></i></a></div>
                    </div>
                    <div class="brand-meta">
                        <h4>ecomart limited</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media"><img src="images/brand/05.jpg" alt="brand">
                        <div class="brand-overlay"><a href="brand-single.html"><i class="fas fa-link"></i></a></div>
                    </div>
                    <div class="brand-meta">
                        <h4>fresh fortune</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media"><img src="images/brand/06.jpg" alt="brand">
                        <div class="brand-overlay"><a href="brand-single.html"><i class="fas fa-link"></i></a></div>
                    </div>
                    <div class="brand-meta">
                        <h4>econature</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-50"><a href="brand-list.html" class="btn btn-outline"><i
                                class="fas fa-eye"></i><span>view all brands</span></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section testimonial-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>client's feedback</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider slider-arrow">
                        <div class="testimonial-card"><i class="fas fa-quote-left"></i>
                            <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati
                                magnam doloribus magni provident ipsam</p>
                            <h5>mahmud hasan</h5>
                            <ul>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul><img src="images/avatar/01.jpg" alt="testimonial">
                        </div>
                        <div class="testimonial-card"><i class="fas fa-quote-left"></i>
                            <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati
                                magnam doloribus magni provident ipsam</p>
                            <h5>mahmud hasan</h5>
                            <ul>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul><img src="images/avatar/02.jpg" alt="testimonial">
                        </div>
                        <div class="testimonial-card"><i class="fas fa-quote-left"></i>
                            <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati
                                magnam doloribus magni provident ipsam</p>
                            <h5>mahmud hasan</h5>
                            <ul>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul><img src="images/avatar/03.jpg" alt="testimonial">
                        </div>
                        <div class="testimonial-card"><i class="fas fa-quote-left"></i>
                            <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati
                                magnam doloribus magni provident ipsam</p>
                            <h5>mahmud hasan</h5>
                            <ul>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul><img src="images/avatar/04.jpg" alt="testimonial">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section blog-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Read our articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-slider slider-arrow">
                        <div class="blog-card">
                            <div class="blog-media"><a class="blog-img" href="#"><img src="images/blog/01.jpg"
                                        alt="blog"></a></div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fas fa-user"></i><span>admin</span></li>
                                    <li><i class="fas fa-calendar-alt"></i><span>february 02, 2021</span></li>
                                </ul>
                                <h4 class="blog-title"><a href="blog-details.html">Voluptate blanditiis provident Lorem
                                        ipsum dolor sit amet</a></h4>
                                <p class="blog-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias
                                    autem recusandae deleniti nam dignissimos sequi ... </p><a class="blog-btn"
                                    href="#"><span>read more</span><i class="icofont-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-card">
                            <div class="blog-media"><a class="blog-img" href="#"><img src="images/blog/02.jpg"
                                        alt="blog"></a></div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fas fa-user"></i><span>admin</span></li>
                                    <li><i class="fas fa-calendar-alt"></i><span>february 02, 2021</span></li>
                                </ul>
                                <h4 class="blog-title"><a href="blog-details.html">Voluptate blanditiis provident Lorem
                                        ipsum dolor sit amet</a></h4>
                                <p class="blog-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias
                                    autem recusandae deleniti nam dignissimos sequi ... </p><a class="blog-btn"
                                    href="#"><span>read more</span><i class="icofont-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-card">
                            <div class="blog-media"><a class="blog-img" href="#"><img src="images/blog/03.jpg"
                                        alt="blog"></a></div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fas fa-user"></i><span>admin</span></li>
                                    <li><i class="fas fa-calendar-alt"></i><span>february 02, 2021</span></li>
                                </ul>
                                <h4 class="blog-title"><a href="blog-details.html">Voluptate blanditiis provident Lorem
                                        ipsum dolor sit amet</a></h4>
                                <p class="blog-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias
                                    autem recusandae deleniti nam dignissimos sequi ... </p><a class="blog-btn"
                                    href="#"><span>read more</span><i class="icofont-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-card">
                            <div class="blog-media"><a class="blog-img" href="#"><img src="images/blog/04.jpg"
                                        alt="blog"></a></div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fas fa-user"></i><span>admin</span></li>
                                    <li><i class="fas fa-calendar-alt"></i><span>february 02, 2021</span></li>
                                </ul>
                                <h4 class="blog-title"><a href="blog-details.html">Voluptate blanditiis provident Lorem
                                        ipsum dolor sit amet</a></h4>
                                <p class="blog-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias
                                    autem recusandae deleniti nam dignissimos sequi ... </p><a class="blog-btn"
                                    href="#"><span>read more</span><i class="icofont-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25"><a href="blog-grid.html" class="btn btn-outline"><i
                                class="fas fa-eye"></i><span>view all blog</span></a></div>
                </div>
            </div>
        </div>
  

@endsection