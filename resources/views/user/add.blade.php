<!doctype html>

<html lang="ja">
<head>
    <title>Index</title>
</head>
<body>
<h1>User/Add</h1>
<h1>ユーザー登録</h1>

<table>
    <form method="post">
        {{ csrf_field() }}
        <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
        <tr><th>mail: </th><td><input type="text" name="email" value="{{old('email')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
</table>

</body>
</html>
