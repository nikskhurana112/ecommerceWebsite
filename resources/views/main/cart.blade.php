@extends('layout')

@section('title', 'login User')

@section('content')

<!-- Cart Start -->
<div class=" cart-page">
  <div class="container">
    <table>
      <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
      </tr>
      <tr>
         <td>
            <div class="cart-info">
                <img src="./images/product-1.jpg" alt="">
                <div>
                  <p>Bambi Print Mini Backpack</p>
                  <span>Price: $500</span>
                  <br>
                  <a href="#">remove</a>
                </div>
            </div>
         </td>
          <td>
              <input type="number" value="1" min="1">
          </td>
          <td>$50.0</td>
      </tr>
      <tr>
          <td>
            <div class="cart-info">
                <img src="./images/product-2.jpg" alt="">
                <div>
                  <p>Bambi Print Mini Backpack</p>
                  <span>Price: $800</span>
                  <br>
                  <a href="#">remove</a>
                </div>
            </div>
          </td>
          <td>
              <input type="number" value="1" min="1">
          </td>
          <td>$80.0</td>
      </tr>
      <tr>
          <td>
            <div class="cart-info">
                <img src="./images/product-3.jpg" alt="">
                <div>
                  <p>Bambi Print Mini Backpack</p>
                  <span>Price: $100</span>
                  <br>
                  <a href="#">remove</a>
                </div>
            </div>
          </td>
          <td>
              <input type="number" value="1" min="1">
          </td>
          <td>$10.0</td>
      </tr>
      <tr>
          <td>
            <div class="cart-info">
                <img src="./images/product-4.jpg" alt="">
                <div>
                  <p>Bambi Print Mini Backpack</p>
                  <span>Price: $900</span>
                  <br>
                  <a href="#">remove</a>
                </div>
            </div>
          </td>
          <td>
              <input type="number" value="1" min="1">
          </td>
          <td>$90.0</td>
      </tr>
      <tr>
          <td>
            <div class="cart-info">
                <img src="./images/product-5.jpg" alt="">
                <div>
                  <p>Bambi Print Mini Backpack</p>
                  <span>Price: $800</span>
                  <br>
                  <a href="#">remove</a>
                </div>
            </div> 
          </td>
          <td>
              <input type="number" value="1" min="1">
          </td>
          <td>$80.0</td>
      </tr>
  </table>
  <div class="total-price">
      <table>
          <tr>
              <td>Subtotal</td>
              <td>$200</td>
          </tr>
          <tr>
              <td>Tax</td>
              <td>$50</td>
          </tr>
          <tr>
              <td>Total</td>
              <td>$250</td>
          </tr>
      </table>
      <li><a href="#" class="checkout btn">Proceed To Checkout</a></li>
  </div>
  </div>
</div>

@endsection