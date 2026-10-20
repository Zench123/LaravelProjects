<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
  
<nav>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/customers">Customers</a>
    <a href="/users">Users</a>
</nav>






<h1>Users View</h1>
<table>
<tr>

<th>ID</th>
<th>UserName</th>
<th>FullName</th>
<th>email</th>
</tr>


@foreach($users as $user)
<tr>

<td>{{$user['id']}}</td>
<td>{{$user['username']}}</td>
<td>{{$user['full_name']}}</td>
<td>{{$user['email']}}</td>


</tr>


@endforeach

</table>




</body>
</html>