@extends('layouts.main')

@section('content')

<aside class="cart-sidebar">
        <div class="cart-header">
            <div class="cart-total"><i class="fas fa-shopping-basket"></i><span>total item (5)</span></div><button
                class="cart-close"><i class="icofont-close"></i></button>
        </div>
        <ul class="cart-list">
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="images/product/01.jpg" alt="product"></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="images/product/02.jpg" alt="product"></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="images/product/03.jpg" alt="product"></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="images/product/04.jpg" alt="product"></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="images/product/05.jpg" alt="product"></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
        </ul>
        <div class="cart-footer"><button class="coupon-btn">Do you have a coupon code?</button>
            <form class="coupon-form"><input type="text" placeholder="Enter your coupon code"><button
                    type="submit"><span>apply</span></button></form><a class="cart-checkout-btn"
                href="checkout.html"><span class="checkout-label">Proceed to Checkout</span><span
                    class="checkout-price">$369.78</span></a>
        </div>
    </aside>
    <aside class="nav-sidebar">
        <div class="nav-header"><a href="#"><img src="images/logo.png" alt="logo"></a><button class="nav-close"><i
                    class="icofont-close"></i></button></div>
        <div class="nav-content">
            <div class="nav-btn"><a href="login.html" class="btn btn-inline"><i class="fa fa-unlock-alt"></i><span>join
                        here</span></a></div>
            <div class="nav-select-group">
                <div class="nav-select"><i class="icofont-world"></i><select class="select">
                        <option value="english" selected>English</option>
                        <option value="bangali">Bangali</option>
                        <option value="arabic">Arabic</option>
                    </select></div>
                <div class="nav-select"><i class="icofont-money"></i><select class="select">
                        <option value="english" selected>Doller</option>
                        <option value="bangali">Pound</option>
                        <option value="arabic">Taka</option>
                    </select></div>
            </div>
            <ul class="nav-list">
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-home"></i>Home</a>
                    <ul class="dropdown-list">
                        <li><a href="home-grid.html">Home grid</a></li>
                        <li><a href="index.html">Home index</a></li>
                        <li><a href="home-classic.html">Home classic</a></li>
                        <li><a href="home-standard.html">Home standard</a></li>
                        <li><a href="home-category.html">Home category</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>shop</a>
                    <ul class="dropdown-list">
                        <li><a href="shop-5column.html">shop 5 column</a></li>
                        <li><a href="shop-4column.html">shop 4 column</a></li>
                        <li><a href="shop-3column.html">shop 3 column</a></li>
                        <li><a href="shop-2column.html">shop 2 column</a></li>
                        <li><a href="shop-1column.html">shop 1 column</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-page"></i>product</a>
                    <ul class="dropdown-list">
                        <li><a href="product-tab.html">product tab</a></li>
                        <li><a href="product-grid.html">product grid</a></li>
                        <li><a href="product-video.html">product video</a></li>
                        <li><a href="product-simple.html">product simple</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-bag-alt"></i>my account</a>
                    <ul class="dropdown-list">
                        <li><a href="profile.html">profile</a></li>
                        <li><a href="wallet.html">wallet</a></li>
                        <li><a href="wishlist.html">wishlist</a></li>
                        <li><a href="compare.html">compare</a></li>
                        <li><a href="checkout.html">checkout</a></li>
                        <li><a href="orderlist.html">order history</a></li>
                        <li><a href="invoice.html">order invoice</a></li>
                        <li><a href="email-template.html">email template</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-lock"></i>authentic</a>
                    <ul class="dropdown-list">
                        <li><a href="login.html">login</a></li>
                        <li><a href="register.html">register</a></li>
                        <li><a href="reset-password.html">reset password</a></li>
                        <li><a href="change-password.html">change password</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-book-alt"></i>blogs</a>
                    <ul class="dropdown-list">
                        <li><a href="blog-grid.html">blog grid</a></li>
                        <li><a href="blog-standard.html">blog standard</a></li>
                        <li><a href="blog-details.html">blog details</a></li>
                        <li><a href="blog-author.html">blog author</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="offer.html"><i class="icofont-sale-discount"></i>offers</a></li>
                <li><a class="nav-link" href="about.html"><i class="icofont-info-circle"></i>about us</a></li>
                <li><a class="nav-link" href="faq.html"><i class="icofont-support-faq"></i>need help</a></li>
                <li><a class="nav-link" href="contact.html"><i class="icofont-contacts"></i>contact us</a></li>
                <li><a class="nav-link" href="privacy.html"><i class="icofont-warning"></i>privacy policy</a></li>
                <li><a class="nav-link" href="coming-soon.html"><i class="icofont-options"></i>coming soon</a></li>
                <li><a class="nav-link" href="error.html"><i class="icofont-ui-block"></i>404 error</a></li>
                <li><a class="nav-link" href="login.html"><i class="icofont-logout"></i>logout</a></li>
            </ul>
            <div class="nav-info-group">
                <div class="nav-info"><i class="icofont-ui-touch-phone"></i>
                    <p><small>call us</small><span>(+880) 183 8288 389</span></p>
                </div>
                <div class="nav-info"><i class="icofont-ui-email"></i>
                    <p><small>email us</small><span>support@example.com</span></p>
                </div>
            </div>
            <div class="nav-footer">
                <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
            </div>
        </div>
    </aside>
    @foreach($product_array as $product)
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
                                <h3 class="view-name"><a href="product-video.html">{{$product->name}}</a></h3>
                                <div class="view-meta">
                                    <p>SKU:<span>1234567</span></p>
                                    <p>BRAND:<a href="#">radhuni</a></p>
                                </div>
                                <div class="view-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3 reviews)</a></div>
                                <h3 class="view-price"><del>${{$product->price}}</del><span>$24.00<small>/per kilo</small></span></h3>
                                <p class="view-desc">{{$product->description}}</p>
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
    <section class="single-banner inner-section" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>product video</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="shop-4column.html">shop-4column</a></li>
                <li class="breadcrumb-item active" aria-current="page">product-video</li>
            </ol>
        </div>
    </section>
    <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="details-gallery">
                        <div class="details-label-group"><label class="details-label new">new</label><label
                                class="details-label off">-10%</label></div>
                        <ul class="details-preview">
                            <li><img src="images/product/01.jpg" alt="product"></li>
                            <li><img src="images/product/01.jpg" alt="product"></li>
                            <li><img src="images/product/01.jpg" alt="product"></li>
                            <li><img src="images/product/01.jpg" alt="product"></li>
                            <li><img src="images/product/01.jpg" alt="product"></li>
                        </ul>
                        <ul class="details-thumb">
                            <li><img src="images/product/01.jpg" alt="product"></li>
                            <li><img src="images/product/01.jpg" alt="product"></li>
                            <li><img src="images/product/01.jpg" alt="product"></li>
                            <li><img src="images/product/01.jpg" alt="product"></li>
                            <li><img src="images/product/01.jpg" alt="product"></li>
                        </ul>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-6">
                    <ul class="product-navigation">
                        <li class="product-nav-prev"><a href="#"><i class="icofont-arrow-left"></i>prev product <span
                                    class="product-nav-popup"><img src="images/product/02.jpg"
                                        alt="product"><small>green chilis</small></span></a></li>
                        <li class="product-nav-next"><a href="#">next product <i class="icofont-arrow-right"></i><span
                                    class="product-nav-popup"><img src="images/product/03.jpg"
                                        alt="product"><small>green chilis</small></span></a></li>
                    </ul>
                    <div class="details-content">
                        <h3 class="details-name"><a href="#">existing product name</a></h3>
                        <div class="details-meta">
                            <p>SKU:<span>1234567</span></p>
                            <p>BRAND:<a href="#">radhuni</a></p>
                        </div>
                        <div class="details-rating"><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="icofont-star"></i><a href="#">(3 reviews)</a>
                        </div>
                        <h3 class="details-price"><del>$38.00</del><span>$24.00<small>/per kilo</small></span></h3>
                        <p class="details-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit facere harum
                            natus amet soluta fuga consectetur alias veritatis quisquam ab eligendi itaque eos maiores
                            quibusdam.</p>
                        <div class="details-list-group"><label class="details-list-title">tags:</label>
                            <ul class="details-tag-list">
                                <li><a href="#">organic</a></li>
                                <li><a href="#">fruits</a></li>
                                <li><a href="#">chilis</a></li>
                            </ul>
                        </div>
                        <div class="details-list-group"><label class="details-list-title">Share:</label>
                            <ul class="details-share-list">
                                <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                            </ul>
                        </div>
                        <div class="details-add-group"><button class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add to cart</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                        <div class="details-action-group"><a class="details-wish wish" href="#"
                                title="Add Your Wishlist"><i class="icofont-heart"></i><span>add to wish</span></a><a
                                class="details-compare" href="compare.html" title="Compare This Item"><i
                                    class="fas fa-random"></i><span>Compare This</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs">
                        <li><a href="#tab-desc" class="tab-link active" data-bs-toggle="tab">descriptions</a></li>
                        <li><a href="#tab-spec" class="tab-link" data-bs-toggle="tab">Specifications</a></li>
                        <li><a href="#tab-reve" class="tab-link" data-bs-toggle="tab">reviews (2)</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade show active" id="tab-desc">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-details-frame">
                            <div class="tab-descrip">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae delectus natus
                                    quasi aperiam. Nulla perspiciatis ullam ipsa, magni animi eligendi quis mollitia
                                    dolor omnis alias ut aspernatur est voluptatem illo totam iste consequatur vitae
                                    laborum ipsam facilis! Ipsa, voluptatum neque dolor facere autem maiores pariatur,
                                    eveniet veritatis vero iure obcaecati</p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                                    <li>labore possimus architecto, saepe nobis ex mollitia</li>
                                    <li>mollitia soluta magni placeat. Eaque sit praesentium</li>
                                    <li>distinctio ab a exercitationem officiis labore possimus</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details-frame">
                            <div class="tab-descrip"><img src="images/video.jpg" alt="video"><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-spec">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-details-frame">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row">Product code</th>
                                        <td>SKU: 101783</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Weight</th>
                                        <td>1kg, 2kg</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Styles</th>
                                        <td>@Girly</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Properties</th>
                                        <td>Short Dress</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-reve">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-details-frame">
                            <ul class="review-list">
                                <li class="review-item">
                                    <div class="review-media"><a class="review-avatar" href="#"><img
                                                src="images/avatar/01.jpg" alt="review"></a>
                                        <h5 class="review-meta"><a href="#">miron mahmud</a><span>June 02, 2020</span>
                                        </h5>
                                    </div>
                                    <ul class="review-rating">
                                        <li class="icofont-ui-rating"></li>
                                        <li class="icofont-ui-rating"></li>
                                        <li class="icofont-ui-rating"></li>
                                        <li class="icofont-ui-rating"></li>
                                        <li class="icofont-ui-rate-blank"></li>
                                    </ul>
                                    <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque
                                        blanditiis dolores nulla excepturi ea nobis!</p>
                                    <form class="review-reply"><input type="text"
                                            placeholder="reply your thoughts"><button><i
                                                class="icofont-reply"></i>reply</button></form>
                                    <ul class="review-reply-list">
                                        <li class="review-reply-item">
                                            <div class="review-media"><a class="review-avatar" href="#"><img
                                                        src="images/avatar/02.jpg" alt="review"></a>
                                                <h5 class="review-meta"><a href="#">labonno khan</a><span><b>author
                                                            -</b>June 02, 2020</span></h5>
                                            </div>
                                            <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Ducimus hic amet qui velit, molestiae suscipit perferendis, autem
                                                doloremque blanditiis dolores nulla excepturi ea nobis!</p>
                                            <form class="review-reply"><input type="text"
                                                    placeholder="reply your thoughts"><button><i
                                                        class="icofont-reply"></i>reply</button></form>
                                        </li>
                                        <li class="review-reply-item">
                                            <div class="review-media"><a class="review-avatar" href="#"><img
                                                        src="images/avatar/03.jpg" alt="review"></a>
                                                <h5 class="review-meta"><a href="#">tahmina bonny</a><span>June 02,
                                                        2020</span></h5>
                                            </div>
                                            <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Ducimus hic amet qui velit, molestiae suscipit perferendis, autem
                                                doloremque blanditiis dolores nulla excepturi ea nobis!</p>
                                            <form class="review-reply"><input type="text"
                                                    placeholder="reply your thoughts"><button><i
                                                        class="icofont-reply"></i>reply</button></form>
                                        </li>
                                    </ul>
                                </li>
                                <li class="review-item">
                                    <div class="review-media"><a class="review-avatar" href="#"><img
                                                src="images/avatar/04.jpg" alt="review"></a>
                                        <h5 class="review-meta"><a href="#">shipu shikdar</a><span>June 02, 2020</span>
                                        </h5>
                                    </div>
                                    <ul class="review-rating">
                                        <li class="icofont-ui-rating"></li>
                                        <li class="icofont-ui-rating"></li>
                                        <li class="icofont-ui-rating"></li>
                                        <li class="icofont-ui-rating"></li>
                                        <li class="icofont-ui-rate-blank"></li>
                                    </ul>
                                    <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque
                                        blanditiis dolores nulla excepturi ea nobis!</p>
                                    <form class="review-reply"><input type="text"
                                            placeholder="reply your thoughts"><button><i
                                                class="icofont-reply"></i>reply</button></form>
                                </li>
                            </ul>
                        </div>
                        <div class="product-details-frame">
                            <h3 class="frame-title">add your review</h3>
                            <form class="review-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="star-rating"><input type="radio" name="rating" id="star-1"><label
                                                for="star-1"></label><input type="radio" name="rating"
                                                id="star-2"><label for="star-2"></label><input type="radio"
                                                name="rating" id="star-3"><label for="star-3"></label><input
                                                type="radio" name="rating" id="star-4"><label
                                                for="star-4"></label><input type="radio" name="rating"
                                                id="star-5"><label for="star-5"></label></div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group"><textarea class="form-control"
                                                placeholder="Describe"></textarea></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"><input type="text" class="form-control"
                                                placeholder="Name"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"><input type="email" class="form-control"
                                                placeholder="Email"></div>
                                    </div>
                                    <div class="col-lg-12"><button class="btn btn-inline"><i
                                                class="icofont-water-drop"></i><span>drop your review</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-heading">
                        <h2>related this items</h2>
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
                    <div class="product-card product-disable">
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
                                class="fas fa-eye"></i><span>view all related</span></a></div>
                </div>
            </div>
        </div>
    </section>

@endsection