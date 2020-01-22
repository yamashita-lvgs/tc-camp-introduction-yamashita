<!doctype html>
<html lang="ja">
<head>
    <title>Index</title>
</head>
<body>
<h1>User/Index</h1>

<a href="users/add">新規ユーザー登録</a>

<h1>ユーザー一覧</h1>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>mail</th>
        <th></th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><a href="users/edit/{{$user->id}}">編集</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>
