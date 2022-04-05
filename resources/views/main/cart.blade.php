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
      @foreach(Cart::content() as $cartItem)
      <tr>
         <td>
            <div class="cart-info">
                {{-- @if($product->imagePath != Null)
                  
                @endif --}}
                <div>
                  <p>$cartItem->name</p>
                  <span>Price: $cartItem->price</span>
                  <br>
                  <a href="{{ route('user.cart.remove', [ "id" => $cartItem->rowId ]) }}">remove</a>
                </div>
            </div>
         </td>
          <td>
              <input type="number" value="$cartItem->quantity" min="1">
          </td>
          <td>{{number_format(Cart::subtotal(), 2)}} USD</td>
      </tr>
      @endforeach
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