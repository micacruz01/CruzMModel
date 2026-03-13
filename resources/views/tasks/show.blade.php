<!DOCTYPE html>
<html>
<head>
<title>View Task</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">

<style>
body{
font-family:'Poppins',sans-serif;
background:#eaf6ff;
text-align:center;
}

.card{
background:white;
width:350px;
margin:auto;
padding:20px;
border-radius:12px;
}

h1{
color:#4a90e2;
}
</style>

</head>

<body>

<h1>Task Details 💙</h1>

<div class="card">

<p><b>ID:</b> {{ $task->id }}</p>

<p><b>Title:</b> {{ $task->title }}</p>

<p><b>Description:</b> {{ $task->description }}</p>

<p><b>Completed:</b> {{ $task->is_completed ? 'Yes' : 'No' }}</p>

<br>

<a href="{{ route('tasks.index') }}">Back to Tasks</a>

</div>

</body>
</html>