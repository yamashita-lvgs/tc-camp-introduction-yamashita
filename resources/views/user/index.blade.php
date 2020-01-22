<!doctype html>
<html lang="ja">
<head>
    <title>Index</title>
</head>
<body>
<h1>User/Index</h1>

<a href="users/add">新規ユーザー登録</a>

<h1>ユーザー一覧</h1>

@if (Session::has('message'))
    <p>{{ session('message') }}</p>
@endif

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>mail</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><a href="users/edit/{{$user->id}}">編集</a></td>
            <td><a href="users/delete/{{$user->id}}">論理削除</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>
