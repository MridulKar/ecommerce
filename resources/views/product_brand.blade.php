@extends('layout')
@section('content')
 
<div class="features_items">
                        <h2 class="title text-center">Features Items</h2>
                         @foreach ($product as $item)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to($item->product_image)}}" style="height:150px; width:150px;">
                                            <h2>{{$item->product_price}}</h2>
                                            <p>{{$item->product_name}}</p>
                                            <a href="/view_product/{{$item->product_id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>{{$item->product_price}}</h2>
                                                <p>{{$item->product_name}}</p>
                                                <a href="/view_product/{{$item->product_id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="/view_product/{{$item->product_id}}"><span style="font-size: 17px;">{{$item->brand_name}}</span></a></li>
                                        <li><a href="/view_product/{{$item->product_id}}">View Product</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div><!--features_items-->
                    

@endsection                    