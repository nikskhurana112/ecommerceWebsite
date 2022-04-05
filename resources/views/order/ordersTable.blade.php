<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   {{-- Bootstrap CSS --}}
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Orders Table</title>

</head>
<body>
  <div class="container">
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>Id</th>
            <th>Product ID</th>
            <td>Product Name</td>
            <th>User ID</th>
            <th>User Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Order Created At</th>
        </tr>
        @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->product->name}}</td>
            <td>{{$order->product->name}}</td>
            <td>{{$order->user->id}}</td>
            <td>{{$order->user->name}}</td>
            <td>{{$order->product->price}}</td>
            <td>{{$order->product->quantity}}</td>
            <td>{{$order->created_at}}</td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>