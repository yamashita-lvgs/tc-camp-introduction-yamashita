<!doctype html>

<html lang="ja">
    <head>
        <title>Users/Create</title>
    </head>
    <body>
        <h1>Users/Create</h1>
	    <h1>ユーザー登録</h1>
        <table>
             <form method="post">
             {{ csrf_field() }}
             @if ($errors->has('name'))
                 <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
             @endif
	         <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
	         @if ($errors->has('email'))
                 <tr><th>ERROR</th><td>{{$errors->first('email')}}</td></tr>
             @endif
             <tr><th>mail: </th><td><input type="text" name="email" value="{{old('email')}}"></td></tr>
             <tr><th></th><td><input type="submit" value="send"></td></tr>
             </form>
        </table>
    </body>
</html>
