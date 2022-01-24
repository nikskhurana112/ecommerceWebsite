@extends('layout')

@section('title', 'Product Details')

@section('content')
<!-- Product Details -->
<section class="section product-detail">
  <div class="details container">
      <div class="left">
          <div class="main">
                <img src="./images/product-1.jpg" alt="">
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
          <span>Home/Fruits</span>
          <h1>Bambi Print Mini Backpack</h1>
          <div class="price">$50</div>
          <form action="">
              <div>
                  <select name="" id="">
                      <option value="Select Quantity" selected disabled>
                          Select Quantity
                      </option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                  </select>

              </div>
          </form>
          <form class="form">
              <input type="text" placeholder="1">
              <a href="cart.html" class="addCart">Add to Cart</a>
          </form>
          <h3>Product Details</h3>
          <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt reprehenderit natus totam illum officiis veniam iure labore, aut sit quidem deleniti vero doloremque perspiciatis consequatur quod tempore sint, quia sapiente distinctio porro ea maiores dolorem earum. Minima nulla deleniti ipsa! Laborum adipisci cupiditate tempore incidunt dolor qui sapiente odio fugiat.
          </p>
      </div>
    </div>
</section>

@endsection