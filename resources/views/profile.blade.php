
<h1>Profile</h1>
<nav>
    <a href="/">Home</a>
    <a href="/tasks">Task List</a>
    <a href="/profile">Profile</a>
    <a href="/about">About</a>
</nav>
<table border="1">
    <thead>
        <tr>
            <th>username</th>
            <th>full_name</th>
            <th>email</th>
        </tr>
    </thead>

    <tbody>
      @if($user)
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->full_name }}</td>
                <td>{{ $user->email }}</td>
            </tr>


        @else
            <tr>
                <td colspan="3">no users found</td>
            </tr>
       @endif
    </tbody>
</table>
