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
    <form action="{{route("admin.product.update_product")}}" method="post">
      {{csrf_field()}}
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="">Product Name</label>
            <input type="text" name="product_name" value="{{$product->name}}" class="form-control" placeholder="Enter Product Name" required>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="">Product Category</label>
            <select name="category">
              <option value="veggies">Veggies</option>
              <option value="fruits">Fruits</option>
              <option value="juices">Juices</option>
            </select>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="">Quantity Available in Kgs</label>
            <input type="text" required class="form-control" value="  kgs"placeholder="Quantity in Kgs available">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="">Product Description</label>
            <input type="textarea" name="product_description" value="{{$product->description}}" width="200px" height="100px" class="form-control" placeholder="Enter Product Description" required>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="">Product Image</label>
            <input name="image_path" type="file" accept="images/*">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="">Product Price</label>
            <input type="number" name="product_price" value="{{$product->price}}"class="form-control" placeholder="Enter Product Description" required>
          </div>
        </div>
        <div><input type="hidden" name="id" value="{{$product->id}}"></div>
        <div class="col-md-12">
          <div class="form-group">
            <button class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>
</html>