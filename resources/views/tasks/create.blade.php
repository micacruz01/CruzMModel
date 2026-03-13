<!DOCTYPE html>
<html>
<head>
<title>Create Task</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">

<style>
body{
font-family:'Poppins',sans-serif;
background:#eaf6ff;
text-align:center;
}

form{
background:white;
width:350px;
margin:auto;
padding:20px;
border-radius:12px;
}

input, textarea{
width:90%;
padding:8px;
margin:5px;
border-radius:6px;
border:1px solid #ccc;
}

button{
background:#9ecfff;
border:none;
padding:8px 16px;
border-radius:8px;
}

a{
display:block;
margin-top:10px;
color:#4a90e2;
}
</style>

</head>

<body>

<h1>Create Task 💙</h1>

<form action="{{ route('tasks.store') }}" method="POST">

@csrf

<label>Title</label><br>
<input type="text" name="title">

<label>Description</label><br>
<textarea name="description"></textarea>

<br>

<label>
<input type="checkbox" name="is_completed" value="1"> Completed
</label>

<br><br>

<button type="submit">Save Task</button>

</form>

<a href="{{ route('tasks.index') }}">Back</a>

</body>
</html>