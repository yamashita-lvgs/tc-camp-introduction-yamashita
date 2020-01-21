<!doctype html>

<html lang="ja">
<head>
    <title>Index</title>
</head>
<body>
<h1>User/Add</h1>
<h1>ユーザー登録</h1>
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
    <form action="/users/add" method="post">
        {{ csrf_field() }}
        <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
        <tr><th>mail: </th><td><input type="text" name="email" value="{{old('email')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
</table>
@endsection

</body>
</html>
