<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('malefashion/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('malefashion/css/style.css')}}" type="text/css">
</head>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
  

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                    <li></li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="{{asset('malefashion/img/icon/search.png')}}" alt=""></a>
            <a href="#"><img src="{{asset('malefashion/img/icon/heart.png')}}" alt=""></a>
            <a href="#"><img src="{{asset('malefashion/img/icon/cart.png')}}" alt=""> <span>0</span></a>
            <div class="price">${{$totalPrice}}</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                @if(isset($value))
                                    <a href="#"> Hii {{$value}}</a>
                                    <a href="{{route('logout')}}"> Logout</a>
                                @else
                                <a href="{{route('login')}}">Sign in</a>
                                @endif
                                @if(isset($value))
                                <a href="#"data-toggle="modal" data-target="#inquiry_model">Inquiry</a>
                                @else
                                ''
                                @endif
                            </div>
                            <div class="header__top__hover">
                                <span>Usd <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="{{url('/')}}"><img src="{{asset('malefashion/img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active"><a href="{{route('shop')}}">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Shop Details</a></li>
                                    <li><a href="#">Shopping Cart</a></li>
                                    <li><a href="#">Check Out</a></li>
                                    <li><a href="#">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" title="Search" class="search-switch"><img src="{{asset('malefashion/img/icon/search.png')}}" alt=""></a>
                        @if(isset($value))
                        <a href="{{route('wishlist')}}" title="WishList"><img src="{{asset('malefashion/img/icon/heart.png')}}" alt=""></a>
                        <a href="{{route('cart')}}" title="cart"><img src="{{asset('malefashion/img/icon/cart.png')}}" alt=""><span>0</span><span style="padding-left: 20px;font-weight: 700;font-size: small;">${{$totalPrice}}</span></a>
                        <a href="#" title="chat" style="padding: 15px;"><img src="{{asset('malefashion/img/icon/chat.png')}}" alt="" style="max-width: 8%;" data-toggle="modal" data-target="#myModal"></a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->
 
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="{{url('/')}}">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Branding</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__brand">
                                                <ul>
                                                    <li><a href="#">Louis Vuitton</a></li>
                                                    <li><a href="#">Chanel</a></li>
                                                    <li><a href="#">Hermes</a></li>
                                                    <li><a href="#">Gucci</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                         <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__price">
                                                <ul>
                                                    <li><a href="#" data-min-price="0" data-max-price="50.00">$0.00 - $50.00</a></li>
                                                    <li><a href="#" data-min-price="50.01" data-max-price="100.00">$50.00 - $100.00</a></li>
                                                    <li><a href="#" data-min-price="100.01" data-max-price="150.00">$100.00 - $150.00</a></li>
                                                    <li><a href="#" data-min-price="150.01" data-max-price="200.00">$150.00 - $200.00</a></li>
                                                    <li><a href="#" data-min-price="200.01" data-max-price="250.00">$200.00 - $250.00</a></li>
                                                    <li><a href="#" data-min-price="250.01" data-max-price="10000.00">250.00+</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFour">Size</a>
                                    </div>
                                    <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__size" id="shop__sidebar__size">
                                                <form id="sizeForm">
                                                    <label for="xs">xs
                                                        <input type="radio" value="xs" id="xs"name="radioGroup">
                                                    </label>
                                                    <label for="sm">s
                                                        <input type="radio" value="s" id="sm"name="radioGroup">
                                                    </label>
                                                    <label for="md">m
                                                        <input type="radio" value="m" id="md"name="radioGroup">
                                                    </label>
                                                    <label for="xl">xl
                                                        <input type="radio" value="xl" id="xl"name="radioGroup">
                                                    </label>
                                                    <label for="2xl">2xl
                                                        <input type="radio" value="2xl" id="2xl"name="radioGroup">
                                                    </label>
                                                    <label for="xxl">xxl
                                                        <input type="radio" value="xxl" id="xxl"name="radioGroup">
                                                    </label>
                                                    <label for="3xl">3xl
                                                        <input type="radio" value="3xl" id="3xl"name="radioGroup">
                                                    </label>
                                                    <label for="4xl">4xl
                                                        <input type="radio" value="4xl" id="4xl"name="radioGroup">
                                                    </label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFive">Colors</a>
                                    </div>
                                    <div id="collapseFive" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__color">
                                                <label class="c-1" for="sp-1">
                                                    <input type="radio" id="sp-1">
                                                </label>
                                                <label class="c-2" for="sp-2">
                                                    <input type="radio" id="sp-2">
                                                </label>
                                                <label class="c-3" for="sp-3">
                                                    <input type="radio" id="sp-3">
                                                </label>
                                                <label class="c-4" for="sp-4">
                                                    <input type="radio" id="sp-4">
                                                </label>
                                                <label class="c-5" for="sp-5">
                                                    <input type="radio" id="sp-5">
                                                </label>
                                                <label class="c-6" for="sp-6">
                                                    <input type="radio" id="sp-6">
                                                </label>
                                                <label class="c-7" for="sp-7">
                                                    <input type="radio" id="sp-7">
                                                </label>
                                                <label class="c-8" for="sp-8">
                                                    <input type="radio" id="sp-8">
                                                </label>
                                                <label class="c-9" for="sp-9">
                                                    <input type="radio" id="sp-9">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseSix">Tags</a>
                                    </div>
                                    <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__tags">
                                                <a href="#" data-tag="Product">Product</a>
                                                <a href="#" data-tag="Bags">Bags</a>
                                                <a href="#" data-tag="Shoes">Shoes</a>
                                                <a href="#" data-tag="Fashio">Fashio</a>
                                                <a href="#" data-tag="Clothing">Clothing</a>
                                                <a href="#" data-tag="Hats">Hats</a>
                                                <a href="#" data-tag="Accessories">Accessories</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing 1–12 of 126 results</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sort by Price:</p>
                                    <select>
                                        <option value="">Low To High</option>
                                        <option value="">$0 - $55</option>
                                        <option value="">$55 - $100</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($product_data as $value)
                        <div class="col-lg-4 col-md-6 col-sm-6 product__item " data-tags="{{$value->data_tags}}">
                            <div class="product__item {{ $value->status == 0 ? 'disabled-product' : '' }} ">
                                <div class="product__item__pic set-bg" data-setbg="{{asset($value->image)}}">
                                    <ul class="product__hover">
                                        <li><a href="#" class="add-to-wishlist" data-product-id="{{$value->id}}"><img src="{{asset('malefashion/img/icon/heart.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/compare.png')}}" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/search.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>{{$value->name}}</h6>
                                    <!-- {{url('/add_cart/'.$value->id)}} -->
                                    <a href="#" class="add-cart"  data-product-id="{{$value->id}}">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div style="display: flex;">
                                    <p style="font-size: larger;font-weight: 700;color: #0d0d0d;"> $<span class="pprice" style="margin-left: 6px;" >{{$value->price}}</span></p>
                                     <img src="{{asset('malefashion/img/icon/tick.png')}}" id="added_to_cart" class="d-none" style="max-width: 16%;margin-left: 115px;">   
                                    </div>
                                    <div class="product__color__select" style="position: relative;">
                                        <label for="pc-4">
                                            <input type="radio" id="pc-4">
                                        </label>
                                        <label class="active black" for="pc-5">
                                            <input type="radio" id="pc-5">
                                        </label>
                                        <label class="grey" for="pc-6">
                                            <input type="radio" id="pc-6">
                                        </label>
                                    </div>
                                </div>
                            </div>                            
                                @if($value->status == 0)
                                    <p style="color: red; font-weight: 700; text-align: center;">This Product Is Currently Not Available</p>
                                @endif
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span>...</span>
                                <a href="#">21</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->


    <!-- Chat Model  -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Header</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer message-container">
                    <input type="text" class="message-input" name="message" placeholder="Send Message....." id="message-input">
                    <a href="#" class="send-button" onclick="sendMessage()"><img src="{{asset('malefashion/img/icon/sendmessage.png')}}"></a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Chat Model -->

    <!-- Inquiry Model -->
        <div class="modal fade" id="inquiry_model" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Send An Inquiry Request </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                            <select name="resoponse_type" id="resoponse_type"onchange="handleResponseTypeChange(this.value)"> 
                                <option value="" selected disabled> Select A Preffered Response Type</option>
                            @foreach($response as $res)
                                <option value="{{$res->id}}">Preffered Response Type:{{$res->response_medium}}</option>
                            @endforeach
                            </select>
                            </div>
                            <div id="inputFieldsContainer" class="col-lg-6"></div>
                        </div>
                    </div>
                    <div class="modal-footer message-container">
                    <a href="#" class="send-button" onclick="sendInquiery()"><img src="{{asset('malefashion/img/icon/sendmessage.png')}}"></a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Inquiry Model -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="{{asset('malefashion/img/footer-logo.png')}}" alt=""></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                        <a href="#"><img src="{{asset('malefashion/img/payment.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Clothing Store</a></li>
                            <li><a href="#">Trending Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivary</a></li>
                            <li><a href="#">Return & Exchanges</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Be the first to know about new arrivals, look books, sales & promos!</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2020
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{asset('malefashion/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('malefashion/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('malefashion/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('malefashion/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('malefashion/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('malefashion/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('malefashion/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('malefashion/js/mixitup.min.js')}}"></script>
    <script src="{{asset('malefashion/js/owl.carousel.min.j')}}s"></script>
    <script src="{{asset('malefashion/js/main.js')}}"></script>
   
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const sizeForm = document.getElementById("sizeForm");
        const productPrices = document.querySelectorAll(".pprice");
         function updatePrices(){
            const selectedSize =document.querySelector('input[name="radioGroup"]:checked').value;
            let priceModifier=0;
            if (selectedSize ==="xs") {
                priceModifier =10.00;
            }else if(selectedSize === "s"){
                priceModifier =15.00;
            }else if(selectedSize === "m"){
                priceModifier = 18.00
            }else if(selectedSize === "xl"){
                priceModifier = 24.00
            }else if(selectedSize === "2xl"){
                priceModifier = 30.00
            }else if(selectedSize === "xxl"){
                priceModifier = 37.00
            }else if(selectedSize === "3xl"){
                priceModifier = 45.00
            }else if(selectedSize === "4xl"){
                priceModifier = 55.00
            }
            productPrices.forEach((priceElement)=>{
                const existingPrice = parseFloat(priceElement.textContent);
                const updatedPrice =(existingPrice + priceModifier).toFixed(2);
                priceElement.textContent = updatedPrice;
            });
         }
         const radioButtons = document.querySelectorAll('input[name = "radioGroup"]');
         radioButtons.forEach((radioButton)=>{
            radioButton.addEventListener('change',updatePrices);
         });
         updatePrices();
    });
  const productItems = document.querySelectorAll('.product__item');
  const priceRangeLinks = document.querySelectorAll('.shop__sidebar__price ul li a');
  priceRangeLinks.forEach(link => {
    link.addEventListener('click', filterProducts);
  });
  function filterProducts(event) {
    event.preventDefault();
    const selectedRange = event.target.textContent.trim();
    const [minPrice, maxPrice] = selectedRange.split(' - ').map(price => parseFloat(price.replace('$', '').trim()));
    productItems.forEach(item => {
      const productPrice = parseFloat(item.querySelector('.pprice').textContent);
      if (productPrice >= minPrice && productPrice <= maxPrice) {
        item.style.display = 'block';
      } else {
        item.style.display = 'none';
      }
    });
  }
    const tagLinks = document.querySelectorAll('.shop__sidebar__tags a');
    tagLinks.forEach(tagLink => {
        tagLink.addEventListener('click', function (e) {
            e.preventDefault();
            const selectedTag = this.getAttribute('data-tag');
            productItems.forEach(productItem => {
                const productTagsAttribute = productItem.getAttribute('data-tags');

                if (productTagsAttribute) {
                    const productTags = productTagsAttribute.split(' ');

                    if (productTags.includes(selectedTag) || selectedTag === 'All') {
                        productItem.style.display = 'block';
                    } else {
                        productItem.style.display = 'none';
                    }
                }
            });
        });
    });

    $(document).ready(function() {
        $('.add-to-wishlist').click(function(e) {
            e.preventDefault();
            var productId = $(this).data('product-id');
            // Perform the AJAX request
            $.ajax({
                type: 'POST',
                url: 'add_wishlist',
                data: { productId: productId ,_token: '{{ csrf_token() }}' },
                success: function(response) {
                  
                    console.log('Product added to wishlist successfully');
                },
                error: function(error) {
                    
                    console.error('Error adding product to wishlist', error);
                }
            });
        });
    });

    function sendMessage() {
       var messageInput = document.getElementById('message-input');
       var message = messageInput.value;

       $.ajax({
            url:'/sendmessage',
            method:'POST',
            data:{message:message , _token: '{{ csrf_token() }}'},
            success:function(response){
                $('#message-input').val("");
                console.log("Message sent successfully", response);
            },
             error: function(error) {
                console.error("Error sending message", error);
                // Handle error, if needed
            }
       });
    }


   function handleResponseTypeChange(selectedValue) {
        $('#inputFieldsContainer').empty();
        if (selectedValue === '2') {
            $('#inputFieldsContainer').append('<input type="email" name="email" placeholder="Email" value="{{$email}}" disabled style="margin: 15px;margin-left: 0px;">');
            $('#inputFieldsContainer').append('<textarea name="Message"  placeholder="Message"></textarea>');
        } else if (selectedValue === '1') {
            $('#inputFieldsContainer').append('<input type="text"  name="phone_number" placeholder="Phone Number"style="margin: 15px; margin-left: 0px;">');
            $('#inputFieldsContainer').append('<textarea name="Message" placeholder="Message"></textarea>');
        }
    }


    function sendInquiery() {
        var selectedValue = $('#resoponse_type').val();
        var email = $('input[name="email"]').val();
        var phoneNumber = $('input[name="phone_number"]').val();
        var message = $('textarea[name="Message"]').val();

    var data = {
            response_type: selectedValue,
            email: email,
            phone_number: phoneNumber,
            message: message,
        };

          $.ajax({
            type: 'POST',
            url: '/inquiry', 
            data: {data:data ,_token: '{{ csrf_token() }}' },
            success: function(response) {
                $('#inquiry_model').modal('hide');
            },
            error: function(error) {

                console.error('Error sending inquiry:', error);
            }
        });
    }

    $(document).ready(function() {
        $('.add-cart').on('click', function (e) {
            e.preventDefault();
            var productId = $(this).data('product-id');
            $.ajax({
                url: '/add_cart',
                type: 'POST',
                data: { productId: productId, _token: '{{ csrf_token() }}' },
                success: function (response) {
                    console.log(response);               
                    $(this).addClass('added-to-cart');
                    $('#added_to_cart').removeClass('d-none');
                },
                error: function (xhr, status, error) {
                    console.error('AJAX request failed');
                }
            });
        });
    });
</script>

</html>