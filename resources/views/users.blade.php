
<h1>User List</h1>
<nav>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/customers">Customers</a>
    <a href="/users">Users</a>
</nav>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Full Name</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->full_name }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No users found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
