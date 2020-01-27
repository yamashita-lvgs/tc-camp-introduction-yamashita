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
                    <td><input type="text" name="mail" value="{{$form->mail}}"></td>
                    @if ($errors->has('mail'))
                        <td>{{$errors->first('mail')}}</td>
                    @endif
                </tr>
                <tr><th></th><td><input type="submit" value="send"></td></tr>
            </form>
        </table>
    </body>
</html>
