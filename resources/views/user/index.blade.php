<!doctype html>

<html lang="ja">
    <head>
        <title>Users/Index</title>
    </head>
    <body>
        <h1>ユーザー一覧</h1>
        <a href="users/create">新規ユーザー登録</a>
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
                <th></th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->mail}}</td>
                <td><a href="users/{{$user->id}}/edit">編集</a></td>
                <td><a href="users/{{$user->id}}/delete">論理削除</a></td>
                <td><a href="users/{{$user->id}}/physicalDelete">物理削除</a></td>
            </tr>
            @endforeach
        </table>
    </body>
</html>

