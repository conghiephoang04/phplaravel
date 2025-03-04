@include('header')
<?php
    $showcate = DB::table('categories')->select('id','name')->get();
?>
                    <!--pos home section-->
                    <div class=" pos_home_section">
                        <div class="row pos_home">
                                <div class="col-lg-3 col-md-12">
                                   <!--layere categorie"-->
                                   <div class="">
                                    <h3>Categories</h3>
                                    <ul>
                                        @foreach ($showcate as $cute)
                                      <li style="font-size: 17px"; >
                                            <a href="{{url('/product',[$cute->id])}}">
                                                {{$cute->name}}
                                            </a>
                                        
                                        </li>
                                        @endforeach
                                       
                                    </ul>
                                </div>
                                    <!--layere categorie end-->

                                    <!--color area start-->  
                                    <div class="sidebar_widget color">
                                        <h2>Color</h2>
                                         <div class="widget_color">
                                            <ul>

                                                <li><a href="#">Black <span>(10)</span></a></li>

                                                <li><a href="#">Orange <span>(12)</span></a></li>

                                                <li> <a href="#">Blue <span>(14)</span></a></li>

                                                <li><a href="#">Yellow <span>(15)</span></a></li>

                                                <li><a href="#">pink <span>(16)</span></a></li>

                                                <li><a href="#">green <span>(11)</span></a></li>

                                            </ul>
                                        </div>
                                    </div>                 
                                    <!--color area end--> 

                                    <!--price slider start-->                                     
                                    <div class="sidebar_widget price">
                                        <h2>Price</h2>
                                        <div class="ca_search_filters">

                                            <input type="text" name="text" id="amount">  
                                            <div id="slider-range"></div> 
                                        </div>
                                    </div>                                                       
                                    <!--price slider end-->

                                    <!--wishlist block start-->
                                    <div class="sidebar_widget wishlist mb-30">
                                        <div class="block_title">
                                            <h3><a href="#">Wishlist</a></h3>
                                        </div>
                                        <div class="cart_item">
                                           <div class="cart_img">
                                               <a href="#"><img src="{{asset('image\cart\cart.jpg')}}" alt=""></a>
                                           </div>
                                            <div class="cart_info">
                                                <a href="#">lorem ipsum dolor</a>
                                                <span class="cart_price">$115.00</span>
                                                <span class="quantity">Qty: 1</span>
                                            </div>
                                            <div class="cart_remove">
                                                <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                           <div class="cart_img">
                                               <a href="#"><img src="{{asset('image\cart\cart2.jpg')}}" alt=""></a>
                                           </div>
                                            <div class="cart_info">
                                                <a href="#">Quisque ornare dui</a>
                                                <span class="cart_price">$105.00</span>
                                                <span class="quantity">Qty: 1</span>
                                            </div>
                                            <div class="cart_remove">
                                                <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                            </div>
                                        </div>
                                        <div class="block_content">
                                            <p>2  products</p>
                                            <a href="#">» My wishlists</a>
                                        </div>
                                    </div>
                                    <!--wishlist block end-->

                                    <!--popular tags area-->
                                    <div class="sidebar_widget tags  mb-30">
                                        <div class="block_title">
                                            <h3>popular tags</h3>
                                        </div>
                                        <div class="block_tags">
                                            <a href="#">ipod</a>
                                            <a href="#">sam sung</a>
                                            <a href="#">apple</a>
                                            <a href="#">iphone 5s</a>
                                            <a href="#">superdrive</a>
                                            <a href="#">shuffle</a>
                                            <a href="#">nano</a>
                                            <a href="#">iphone 4s</a>
                                            <a href="#">canon</a>
                                        </div>
                                    </div>
                                    <!--popular tags end-->

                                    <!--newsletter block start-->
                                    <div class="sidebar_widget newsletter mb-30">
                                        <div class="block_title">
                                            <h3>newsletter</h3>
                                        </div> 
                                        <form action="#">
                                            <p>Sign up for your newsletter</p>
                                            <input placeholder="Your email address" type="text">
                                            <button type="submit">Subscribe</button>
                                        </form>   
                                    </div>
                                    <!--newsletter block end--> 

                                    <!--special product start-->
                                    <div class="sidebar_widget special">
                                        <div class="block_title">
                                            <h3>Special Products</h3>
                                        </div>
                                        <div class="special_product_inner mb-20">
                                            <div class="special_p_thumb">
                                                <a href="single-product.html"><img src="{{asset('image\cart\cart3.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="small_p_desc">
                                                <div class="product_ratting">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                   </ul>
                                               </div>
                                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                <div class="special_product_proce">
                                                    <span class="old_price">$124.58</span>
                                                    <span class="new_price">$118.35</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="special_product_inner">
                                            <div class="special_p_thumb">
                                                <a href="single-product.html"><img src="{{asset('image\cart\cart4.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="small_p_desc">
                                                <div class="product_ratting">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                   </ul>
                                               </div>
                                                <h3><a href="single-product.html">Printed Summer</a></h3>
                                                <div class="special_product_proce">
                                                    <span class="old_price">$124.58</span>
                                                    <span class="new_price">$118.35</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--special product end-->


                                </div>
                                <div class="col-lg-9 col-md-12">
                                    <!--banner slider start-->
                                    <div class="banner_slider mb-35">
                                        <img src="{{asset('image\banner\bannner10.jpg')}}" alt="">
                                    </div> 
                                    <!--banner slider start-->

                                    <!--shop toolbar start-->
                                    <div class="shop_toolbar mb-35">
                                       
                                        <div class="list_button">
                                            <ul class="nav" role="tablist">
                                                <li>
                                                    <a class="active" data-toggle="tab" href="#large" role="tab" aria-controls="large" aria-selected="true"><i class="fa fa-th-large"></i></a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="page_amount">
                                            <p>Showing 1–9 of 21 results</p>
                                        </div>
                                        
                                        <div class="select_option">
                                            <form action="#">
                                                <label>Sort By</label>
                                                <select name="orderby" id="short">
                                                    <option selected="" value="1">Position</option>
                                                    <option value="1">Price: Lowest</option>
                                                    <option value="1">Price: Highest</option>
                                                    <option value="1">Product Name:Z</option>
                                                    <option value="1">Sort by price:low</option>
                                                    <option value="1">Product Name: Z</option>
                                                    <option value="1">In stock</option>
                                                    <option value="1">Product Name: A</option>
                                                    <option value="1">In stock</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                    <!--shop toolbar end-->

                                    <!--shop tab product-->
                                    <div class="shop_tab_product">   
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="large" role="tabpanel">
                                                <div class="row">
                                                    @foreach($listpro as $pro)
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="single_product">
                                                            <div class="product_thumb">
                                                                <a href="{{route('sanpham.show',$pro->id)}}">
                                                                    <img src="{{asset('image/product/' .$pro->image)}}" alt="">
                                                                </a>
                                                                <div class="img_icone">
                                                                    <img src="{{ asset('image/cart/span-new.png') }}" alt="">
                                                                </div>
                                                                <div class="product_action">
                                                                    <a href="{{ route('cart.add', $pro->id) }}"> 
                                                                        <i class="fa fa-shopping-cart"></i> Add to cart
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product_content">
                                                                <span class="product_price">${{ $pro->price }}</span>
                                                                <h3 class="product_title">
                                                                    <a href="{{ url ('/SingleProduct/'. $pro->id) }}">{{ $pro->title }}</a>
                                                                </h3>
                                                            </div>
                                                            <div class="product_info">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" title="Add to Wishlist">Add to Wishlist</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                   
                                                 
                                    
                                                </div>                        
                                            </div>

                                        </div>
                                    </div>    
                                    <!--shop tab product end-->

                                    <!--pagination style start--> 
                                    <div class="pagination_style">
                                        <div class="item_page">
                                            <form action="#">
                                                <label for="page_select">show</label>
                                                <select id="page_select">
                                                    <option value="1">9</option>
                                                    <option value="2">10</option>
                                                    <option value="3">11</option>
                                                </select>
                                                <span>Products by page</span>
                                            </form>
                                        </div>
                                        <div class="page_number">
                                            <span>Pages: </span>
                                            <ul>
                                                <li>«</li>
                                                <li class="current_number">1</li>
                                                <li><a href="#">2</a></li>
                                                <li>»</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--pagination style end--> 
                                </div>
                            </div>  
                    </div>
                    <!--pos home section end-->
                </div>
                <!--pos page inner end-->
            </div>    
        </div>
        <!--pos page end-->
                   
@include('footer')