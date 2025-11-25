<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customers</title>
</head>
<body>
  <h1>Coffee Shop - Customers</h1>
  <ul>
    @foreach($customers as $customer)
      <li>{{$customer["name"]}} <a href="/customers/{{$customer["id"]}}">View</a></li>
    @endforeach
  </ul>
</body>
</html>