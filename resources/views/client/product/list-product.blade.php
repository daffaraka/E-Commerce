@extends('client.layout')
@section('content')

<div class="container px-sm-1 py-5 mx-auto">
    <div class="row justify-content-center">
        @foreach ($products as $product)
        <div class="col-lg-4">
            <div class="card card-1 shadow-lg">
                <div class="pr-3 row justify-content-end">
                    <i class="fa fa-heart-o like" aria-hidden="true"></i>
                </div>
                @foreach ($product->images as $image)
                <a href="{{route('productDetail',$image->id)}}">
                    <img class="pic1" src="{{ asset('images/'.$image->image_name) }}"> 
                </a>  
                @endforeach
                <div class="product-pic">
                </div>
                <div class="card p-2 mt-2 shadow">
                    <h5 class="product-name">{{$product->product_name}}</h5>
                    <div class="row px-3 justify-content-between">
                        <p class="price"> <i class="fa fa-money" aria-hidden="true"></i> Rp. {{number_format($product->price,0)}}</p>
                        <span class="sm-text"> <i class="fa fa-clipboard" aria-hidden="true"></i> {{$product->weight}}</span>
                        <hr>
                        <div class="action mb-2">

                            <a href="#" class="btn btn-outline-primary "><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</a>
                            <a href="#" class="btn btn-warning"> <i class="fa fa-money" aria-hidden="true"></i></i>  Checkout</a>
                        </div>
                        {{-- <div class="stars">
                            <span class="fa fa-star star-active"></span>
                            <span class="fa fa-star star-active"></span>
                            <span class="fa fa-star star-active"></span>
                            <span class="fa fa-star-o"></span>
                            <span class="fa fa-star-o"></span>
                        </div> --}}
                    </div>
                </div>
              
            </div>
        </div>
        
        @endforeach
       
    </div>
</div>

@endsection