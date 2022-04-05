<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- Bootstrap CSS --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Add Products</title>

</head>
<body>
<div class="container">
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>Id</th>
            <th>Product Name</th>
            <th>Image</th>
            <th>Product Description</th>
            <th>Product Price</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Delete Product</th>
            <th>Edit Product</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>
                @if ($product->imagePath != null)
                    <img src="{{getImageUrl($product->ImagePath)}}" alt="" width="100px">
                @endif
            </td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->category}}</td>
            <td>
                <a href="{{route("admin.product.delete_product", ['id' => $product->id])}}" class="btn btn-danger btn-sm">Delete</a>
            </td>
            <td>
                <a href="{{route("admin.product.edit_product", ['id' => $product->id])}}" class="btn btn-success btn-sm">Edit</a>
            </td>
        </tr>
        @endforeach
        </table>
       
    </div>
  </body>
</html>