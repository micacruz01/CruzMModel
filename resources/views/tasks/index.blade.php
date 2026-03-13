<!DOCTYPE html>
<html>
<head>
    <title>Tasks List</title>

    <!-- Cute Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Poppins', sans-serif;
            background-color:#eaf6ff;
            text-align:center;
        }

        h1{
            color:#4a90e2;
        }

        table{
            margin:auto;
            border-collapse:collapse;
            width:80%;
            background:white;
            border-radius:10px;
            overflow:hidden;
        }

        th{
            background:#b6dcff;
            padding:10px;
        }

        td{
            padding:10px;
        }

        a, button{
            background:#9ecfff;
            border:none;
            padding:6px 12px;
            border-radius:8px;
            text-decoration:none;
            color:black;
            font-size:14px;
        }

        button:hover, a:hover{
            background:#7fb8f7;
        }

        .create-btn{
            display:inline-block;
            margin:15px;
        }
    </style>
</head>

<body>

<h1>My Tasks 💙</h1>

<a class="create-btn" href="{{ route('tasks.create') }}">+ Create Task</a>

<table border="1">
<tr>
<th>ID</th>
<th>Title</th>
<th>Description</th>
<th>Completed</th>
<th>Actions</th>
</tr>

@foreach($tasks as $task)
<tr>
<td>{{ $task->id }}</td>
<td>{{ $task->title }}</td>
<td>{{ $task->description }}</td>
<td>{{ $task->is_completed ? 'Yes' : 'No' }}</td>

<td>
<a href="{{ route('tasks.show',$task->id) }}">View</a>
<a href="{{ route('tasks.edit',$task->id) }}">Edit</a>

<form action="{{ route('tasks.destroy',$task->id) }}" method="POST" style="display:inline;">
@csrf
@method('DELETE')
<button type="submit">Delete</button>
</form>

</td>
</tr>
@endforeach

</table>

</body>
</html>