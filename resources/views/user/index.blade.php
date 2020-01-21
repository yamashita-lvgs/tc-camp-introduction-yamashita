<!doctype html>
<html lang="ja">
<head>
    <title>Index</title>
</head>
<body>
<h1>User/Index</h1>
<h1>ユーザー一覧</h1>
    <table>
        <tr>
	        <th>id</th>
	        <th>name</th>
	        <th>mail</th>
        </tr>
        <tr>
            @foreach($users as $user)
            <td>{{$user->id}}}}</td>
            <td>{{$user->name}}}}</td>
            <td>{{$user->email}}}}</td>
            <td>hanako@flower.jp</td>
	    </tr>
    </table>
</body>
</html>
