@extends('layout')

@section('title', 'Product Details')

@section('content')
<!-- Product Details -->
<section class="section product-detail">
  <div class="details container">
      <div class="left">
          <div class="main">
                @if($product->imagePath != Null)
                    <img src="{{getImageUrl($product->imagePath)}}" alt="">
                @endif
            </div>


          <div class="head">
            <h4>Similar Products</h4>
          </div>
          <div class="thumbnails">
              <div class="thumbnail">
                  <img src="./images/product-2.jpg" alt="">
              </div>
              <div class="thumbnail">
                  <img src="./images/product-3.jpg" alt="">
              </div>
              <div class="thumbnail">
                  <img src="./images/product-4.jpg" alt="">
              </div>
              <div class="thumbnail">
                  <img src="./images/product-5.jpg" alt="">
              </div>
          </div>
      </div>
      <div class="right">
          <span>$product->category</span>
          <h1>$product->name</h1>
          <div class="price">$product->price</div>
            @if($cart->where('id', $product->id)->count())
            <form action="{{route("user.cart.store")}}" method="post" class="form">
              <input type="hidden" name="product_id" value="{{$product->id}}">
              <h3>Select Quantity in Kgs</h3>  
              <input type="number" name="quantity" placeholder="1">
                <button type="submit" class="addCart">Buy Again</button>
            </form>
            @else
          <form action="{{route("user.cart.store")}}" method="post" class="form">
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <h3>Select Quantity in Kgs</h3>  
            <input type="number" name="quantity" placeholder="1">
              <button type="submit" class="addCart">Add to Cart</button>
          </form>
          @endif
          <h3>Product Details</h3>
          <p>
              $product->description
          </p>
      </div>
    </div>
</section>

@endsection