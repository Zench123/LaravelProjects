<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>
   
<nav>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/customers">Customers</a>
    <a href="/users">Users</a>
</nav>






<h1>Customers View</h1>
<table>
<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
</tr>


@foreach($customers as $customer)
<tr>

<td>{{$customer['id']}}</td>
<td>{{$customer['name']}}</td>
<td>{{$customer['email']}}</td>
<td>{{$customer['phone']}}</td>


</tr>


@endforeach

</table>




</body>
</html>