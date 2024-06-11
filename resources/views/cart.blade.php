@include('header');
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Shopping Cart</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->



 <!--shopping cart area start -->
<div class="shopping_cart_area">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="#"> 
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="cart_page table-responsive">
                            <table>
                        <thead>
                            <tr>
                                {{-- <th class="product_remove">ID</th>  --}}
                                <th class="product_remove">Delete</th>
                                <th class="product_thumb">Image</th>
                                <th class="product_name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product_quantity">Quantity</th>
                                <th class="product_total">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($cart)
                                @foreach($cart as $id => $details)
                                    <tr> 
                                        {{-- <td scope="row">{{ $id }}</td> --}}
                                        <td class="product_remove"><a href="{{ route('cart.remove', $id) }}"><i class="fa fa-trash-o"></i></a></td>
                                        <td>{{ $details['name'] }}</td>
                                        <td><img src="{{ asset('image/product/' . $details['image']) }}" class="img-fluid" style="max-width: 100px;" alt="{{ $details['name'] }}"></td>
                                        <td>{{ number_format($details['price'], 0, ',', '.') }}đ</td>
                                       
                                        <td>
                                            <div class="input-group">
                                                <input type="number" class="form-control" value="{{ $details['quantity'] }}" min="1" max="100" data-id="{{ $id }}">
                                              
                                            </div>
                                        </td>
                                        <td class="item-total">{{ number_format($details['price'] * $details['quantity'], 0, ',', '.') }}đ</td>
                                      
                                    </tr>
                                @endforeach
                                {{-- <tr>
                                    <td colspan="5" class="text-right"><strong>Tổng cộng:</strong></td>
                                    <td colspan="2" id="total">{{ number_format($total, 0, ',', '.') }}đ</td>
                                </tr> --}}
                                {{-- <tr>
                                    <td colspan="5"></td>
                                    <td colspan="1">  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Đặt hàng
                                       </button></td>
                                </tr> --}}
                                
                            @else
                                <tr>
                                    <td colspan="7" class="text-center">Giỏ hàng trống</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>   
                        </div>  
                        <div class="cart_submit">
                            <button type="submit">update cart</button>
                        </div>      
                    </div>
                 </div>
             </div>
             <!--coupon code area start-->
            <div class="coupon_area">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code">
                            <h3>Coupon</h3>
                            <div class="coupon_inner">   
                                <p>Enter your coupon code if you have one.</p>                                
                                <input placeholder="Coupon code" type="text">
                                <button type="submit">Apply coupon</button>
                            </div>    
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                               <div class="cart_subtotal">
                                   <p>Subtotal</p>
                                   <p class="cart_amount">{{ number_format($total, 0, ',', '.') }}đ</p>
                               </div>
                               <div class="cart_subtotal ">
                                   <p>Shipping</p>
                                   <p class="cart_amount"><span>Flat Rate:</span> {{}}</p>
                               </div>
                               <a href="#">Calculate shipping</a>

                               <div class="cart_subtotal">
                                   <p>Total</p>
                                   <p class="cart_amount">{{ number_format($total, 0, ',','.')}}</p>
                               </div>
                               <div class="checkout_btn">
                                   <a href="#">Proceed to Checkout</a>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area end-->
        </form> 
 </div>
 <!--shopping cart area end -->

</div>
<!--pos page inner end-->
</div>
</div>
<!--pos page end-->
@include('footer');