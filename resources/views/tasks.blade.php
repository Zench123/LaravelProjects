
<h1>Task list</h1>
<nav>
    <a href="/">Home</a>
    <a href="/tasks">Task List</a>
    <a href="/profile">Profile</a>
    <a href="/about">About</a>
</nav>
<table border="1">
    <thead>
        <tr>
            <th>title</th>
            <th>status</th>
            <th>task_date</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->title}}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->task_date }}</td>
            </tr> @endforeach
        @if($tasks-> isEmpty())
            <tr>
                <td>no task due available</td>
            </tr>
       @endif
    </tbody>
</table>
