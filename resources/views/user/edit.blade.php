<!doctype html>

<html lang="ja">
    <head>
        <title>Users/Edit</title>
    </head>
    <body>
        <h1>ユーザー編集</h1>
        <table>
            <form method="post">
                {{ csrf_field() }}
               <tr>
		    <input type="hidden" name="id" value="{{$form->id}}">
                    <th>name: </th>
                    <td><input type="text" name="name" value="{{$form->name}}"></td>
                    @if ($errors->has('name'))
                        <td>{{$errors->first('name')}}</td>
                    @endif
                <tr>
                </tr>
                    <th>mail: </th>
                    <td><input type="text" name="email" value="{{$form->email}}"></td>
                    @if ($errors->has('email'))
                        <td>{{$errors->first('email')}}</td>
                    @endif
                </tr>
                <tr><th></th><td><input type="submit" value="send"></td></tr>
            </form>
        </table>
    </body>
</html>
