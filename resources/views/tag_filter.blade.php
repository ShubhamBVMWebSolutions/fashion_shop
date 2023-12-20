<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Price filter</title>
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
<body>
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

    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 product__item" data-tags="Clothing">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{asset('malefashion/img/product/product-2.jpg')}}">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/heart.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/compare.png')}}" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/search.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Piqué Biker Jacket</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div style="display: flex;">
                                    <p style="font-size: larger;font-weight: 700;color: #0d0d0d;"> $<span class="pprice" style="margin-left: 6px;" >67.32</span></p>
                                    </div>
                                        
                                    <div class="product__color__select">
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
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 product__item" data-tags="Shoes">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="{{asset('malefashion/img/product/product-3.jpg')}}">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/heart.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/compare.png')}}" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/search.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Multi-pocket Chest Bag</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                   <div style="display: flex;">
                                    <p style="font-size: larger;font-weight: 700;color: #0d0d0d;">$<span class="pprice"style="margin-left: 6px;">58.98</span></p>

                                    </div>
                                    <div class="product__color__select">
                                        <label for="pc-7">
                                            <input type="radio" id="pc-7">
                                        </label>
                                        <label class="active black" for="pc-8">
                                            <input type="radio" id="pc-8">
                                        </label>
                                        <label class="grey" for="pc-9">
                                            <input type="radio" id="pc-9">
                                        </label>
                                    </div>
                                </div>
                            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 product__item" data-tags="Clothing">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{asset('malefashion/img/product/product-4.jpg')}}">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/heart.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/compare.png')}}" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/search.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Diagonal Textured Cap</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div style="display: flex;">
                                    <p style="font-size: larger;font-weight: 700;color: #0d0d0d;">$<span class="pprice"style="margin-left: 6px;">48.65</span></p>
                                    </div>
                                    <div class="product__color__select">
                                        <label for="pc-10">
                                            <input type="radio" id="pc-10">
                                        </label>
                                        <label class="active black" for="pc-11">
                                            <input type="radio" id="pc-11">
                                        </label>
                                        <label class="grey" for="pc-12">
                                            <input type="radio" id="pc-12">
                                        </label>
                                    </div>
                                </div>
                            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 product__item" data-tags="Clothing">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="{{asset('malefashion/img/product/product-6.jpg')}}">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/heart.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/compare.png')}}" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/search.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Ankle Boots</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div style="display: flex;">
                                    <p style="font-size: larger;font-weight: 700;color: #0d0d0d;">$<span class="pprice" style="margin-left: 6px;">28.22</span></p>
                                    </div>
                                    <div class="product__color__select">
                                        <label for="pc-16">
                                            <input type="radio" id="pc-16">
                                        </label>
                                        <label class="active black" for="pc-17">
                                            <input type="radio" id="pc-17">
                                        </label>
                                        <label class="grey" for="pc-18">
                                            <input type="radio" id="pc-18">
                                        </label>
                                    </div>
                                </div>
                            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 product__item" data-tags="Bags">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{asset('malefashion/img/product/product-7.jpg')}}">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/heart.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/compare.png')}}" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/search.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>T-shirt Contrast Pocket</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                   <div style="display: flex;">
                                    <p style="font-size: larger;font-weight: 700;color: #0d0d0d;">$<span class="pprice" style="margin-left: 6px;">12.25</span></p>
                                    </div>
                                    <div class="product__color__select">
                                        <label for="pc-19">
                                            <input type="radio" id="pc-19">
                                        </label>
                                        <label class="active black" for="pc-20">
                                            <input type="radio" id="pc-20">
                                        </label>
                                        <label class="grey" for="pc-21">
                                            <input type="radio" id="pc-21">
                                        </label>
                                    </div>
                                </div>
                            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 product__item" data-tags="Clothing">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{asset('malefashion/img/product/product-8.jpg')}}">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/heart.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/compare.png')}}" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/search.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Basic Flowing Scarf</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div style="display: flex;">
                                    <p style="font-size: larger;font-weight: 700;color: #0d0d0d;">$<span class="pprice" style="margin-left: 6px;">47.25</span></p>
                                    </div>
                                    <div class="product__color__select">
                                        <label for="pc-22">
                                            <input type="radio" id="pc-22">
                                        </label>
                                        <label class="active black" for="pc-23">
                                            <input type="radio" id="pc-23">
                                        </label>
                                        <label class="grey" for="pc-24">
                                            <input type="radio" id="pc-24">
                                        </label>
                                    </div>
                                </div>
                            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 product__item" data-tags="Clothing">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{asset('malefashion/img/product/product-9.jpg')}}">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/heart.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/compare.png')}}" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/search.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Piqué Biker Jacket</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div style="display: flex;">
                                    <p style="font-size: larger;font-weight: 700;color: #0d0d0d;">$<span class="pprice" style="margin-left: 6px;">88.32</span></p>
                                    </div>
                                    <div class="product__color__select">
                                        <label for="pc-25">
                                            <input type="radio" id="pc-25">
                                        </label>
                                        <label class="active black" for="pc-26">
                                            <input type="radio" id="pc-26">
                                        </label>
                                        <label class="grey" for="pc-27">
                                            <input type="radio" id="pc-27">
                                        </label>
                                    </div>
                                </div>
                            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 product__item" data-tags="Fashio">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="{{asset('malefashion/img/product/product-10.jpg')}}">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/heart.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/compare.png')}}" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/search.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Multi-pocket Chest Bag</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                   <div style="display: flex;">
                                    <p style="font-size: larger;font-weight: 700;color: #0d0d0d;">$<span class="pprice" style="margin-left: 6px;">55.84</span></p>
                                    </div>
                                    <div class="product__color__select">
                                        <label for="pc-28">
                                            <input type="radio" id="pc-28">
                                        </label>
                                        <label class="active black" for="pc-29">
                                            <input type="radio" id="pc-29">
                                        </label>
                                        <label class="grey" for="pc-30">
                                            <input type="radio" id="pc-30">
                                        </label>
                                    </div>
                                </div>
                            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 product__item" data-tags="Bags">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{asset('malefashion/img/product/product-11.jpg')}}">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/heart.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/compare.png')}}" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/search.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Diagonal Textured Cap</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div style="display: flex;">
                                    <p style="font-size: larger;font-weight: 700;color: #0d0d0d;">$<span class="pprice" style="margin-left: 6px;">75.24</span></p>
                                    </div>
                                    <div class="product__color__select">
                                        <label for="pc-31">
                                            <input type="radio" id="pc-31">
                                        </label>
                                        <label class="active black" for="pc-32">
                                            <input type="radio" id="pc-32">
                                        </label>
                                        <label class="grey" for="pc-33">
                                            <input type="radio" id="pc-33">
                                        </label>
                                    </div>
                                </div>
                            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 product__item" data-tags="Clothing">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="{{asset('malefashion/img/product/product-12.jpg')}}">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/heart.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/compare.png')}}" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/search.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Ankle Boots</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                   <div style="display: flex;">
                                    <p style="font-size: larger;font-weight: 700;color: #0d0d0d;">$<span class="pprice"style="margin-left: 6px;">67.32</span></p>
                                    </div>
                                    <div class="product__color__select">
                                        <label for="pc-34">
                                            <input type="radio" id="pc-34">
                                        </label>
                                        <label class="active black" for="pc-35">
                                            <input type="radio" id="pc-35">
                                        </label>
                                        <label class="grey" for="pc-36">
                                            <input type="radio" id="pc-36">
                                        </label>
                                    </div>
                                </div>
                            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 product__item" data-tags="Bags">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{asset('malefashion/img/product/product-13.jpg')}}">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/heart.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/compare.png')}}" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/search.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>T-shirt Contrast Pocket</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                   <div style="display: flex;">
                                    <p style="font-size: larger;font-weight: 700;color: #0d0d0d;">$<span class="pprice" style="margin-left: 6px;">84.34</span></p>
                                    </div>
                                    <div class="product__color__select">
                                        <label for="pc-37">
                                            <input type="radio" id="pc-37">
                                        </label>
                                        <label class="active black" for="pc-38">
                                            <input type="radio" id="pc-38">
                                        </label>
                                        <label class="grey" for="pc-39">
                                            <input type="radio" id="pc-39">
                                        </label>
                                    </div>
                                </div>
                            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 product__item" data-tags="Accessories">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{asset('malefashion/img/product/product-14.jpg')}}">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/heart.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/compare.png')}}" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{asset('malefashion/img/icon/search.png')}}" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Basic Flowing Scarf</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                   <div style="display: flex;">
                                    <p style="font-size: larger;font-weight: 700;color: #0d0d0d;"> $<span class="pprice" style="margin-left: 6px;">49.32</span></p>
                                    </div>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
        </div>
    </div>


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
    const tagLinks = document.querySelectorAll('.shop__sidebar__tags a');
    console.log(tagLinks);
    const productItems = document.querySelectorAll('.product__item');

    tagLinks.forEach(tagLink => {
        tagLink.addEventListener('click', function (e) {
            e.preventDefault();

            // Get the selected tag
            const selectedTag = this.getAttribute('data-tag');

            // Filter products
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
</script>

</html>