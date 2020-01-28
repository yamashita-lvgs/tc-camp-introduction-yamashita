<!doctype html>

<html lang="ja">
    <head>
        <title>Users/Create</title>
    </head>
    <body>
        <h1>ユーザー登録</h1>
        <table>
            <form method="post">
                {{ csrf_field() }}
                <tr>
                    <th>name: </th>
                    <td><input type="text" name="name" value="{{old('name')}}"></td>
                    @if ($errors->has('name'))
                        <td>{{$errors->first('name')}}</td>
                    @endif
                <tr>
                </tr>
                    <th>mail: </th>
                    <td><input type="text" name="mail" value="{{old('mail')}}"></td>
                    @if ($errors->has('mail'))
                        <td>{{$errors->first('mail')}}</td>
                    @endif
                </tr>
                <tr><th></th><td><input type="submit" value="send"></td></tr>
            </form>
        </table>
    </body>
</html>

