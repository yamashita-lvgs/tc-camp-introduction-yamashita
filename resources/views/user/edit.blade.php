<!doctype html>

<html lang="ja">
<head>
    <title>Index</title>
</head>
<body>
<h1>User/Edit</h1>
<h1>ユーザー編集</h1>
@if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<table>
    <form action="/users/edit" method="post">
	{{ csrf_field() }}
	<input type="hidden" name="id" value="{{$form->id}}">
	<tr><th>name: </th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
        <tr><th>mail: </th><td><input type="text" name="email" value="{{$form->email}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
</table>
{{$form->name}}
</body>
</html>
