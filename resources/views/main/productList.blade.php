@extends('layout')

@section('title', 'Product')

@section('content')
product-list
<section class="product-list">
    <div class="container">
        {{-- <section class="side-bar col-3">
            <div class="block">
                <div class="block-title">
                    <h1>Category</h1>
                </div>
                <ul class="block-content">
                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                            <span>Veggies</span>
                            <small>(100)</small>
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                            <span>Fruits</span>
                            <small>(120)</small>
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                            <span>Juices</span>
                            <small>(150)</small>
                        </label>
                    </li>
                </ul>
            </div>
            <div class="block">
                <div class="block-title">
                    <h1>Brands</h1>
                </div>
                <ul class="block-content">
                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                            <span>Delmonte</span>
                            <small>(150)</small>
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                            <span>365 Organic</span>
                            <small>(29)</small>
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                            <span>Marketside</span>
                            <small>(200)</small>
                        </label>
                    </li>
                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                            <span>Harvest Farms</span>
                            <small>(45)</small>
                        </label>    
                    </li>
                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                            <span>Your Local Farmers</span>
                            <small>(59)</small>
                        </label>    
                    </li>
                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                            <span>Cascadian Farms</span>
                            <small>(30)</small>
                        </label>    
                    </li>
                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                            <span>Sunripe</span>
                            <small>(49)</small>
                        </label>    
                    </li>
                    <li>
                        <input type="checkbox" name="" id="">
                        <label for="">
                            <span>Tropicana</span>
                            <small>(23)</small>
                        </label>    
                    </li>
                </ul>
            </div>
          </section> --}}
          {{-- <section class="filter">
            <form action="">
                <div class="item sort">
                    <label for="sort-by">Sort By</label>
                    <select name="sort-by" id="sort-by">
                        <option value="title" selected ="selected">Name</option>
                        <option value="number">Price</option>
                        <option value="search_api_relevance">Relevance</option>
                        <option value="created">Newness</option>
                    </select>
                </div>
                <div class="item order">
                    <label for="order-by">Order</label>
                    <select name="order-by" id="order-by">
                        <option value="ASC" selected ="selected">ASC</option>
                        <option value="DESC">DESC</option>
                    </select>
                </div>
                <button>Apply</button>
            </form>
          </section> --}}
          <section class="section products col-9">
              @foreach($products as $product)
            <div class="product-layout container">
                <div class="product">
                    <div class="img-container">
                        
                        <div class="addCart">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
          
                    @if($product->imagePath != null)
                            <img src="{{getImageUrl($product->imagePath)}}" alt="">
                        @endif    
                        <ul class="side-icons">
                            <span><i class="fas fa-search"></i></span>
                            <span><i class="far fa-heart"></i></span>
                            <span><i class="fas fa-sliders-h"></i></span>
                        </ul>
                    </div>
                    <div class="bottom">
                        <a href="">$product->name</a>
                        <div class="price">
                            <span>$product->price</span>
                        </div>
                    </div>
                </div>
            </div> 
            @endforeach
          </section>
    </div>
</section>
@endsection