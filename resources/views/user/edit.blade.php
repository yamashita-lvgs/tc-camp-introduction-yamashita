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
        <tr><th>name: </th><td><input type="hidden" name="name" value="{{$form->id}}"></td></tr>
        <tr><th>mail: </th><td><input type="hidden" name="email" value="{{$form->name}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
</table>

</body>
</html>
