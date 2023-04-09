<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html{
            width:100%;
            height : 100%;
        }

        body {
            margin:0;
            width:100%;
            height : 100%;
            background-color:#78EEE7;
        }
        header{
            position:fixed;
            top:0%;
            z-index:1;
            height:80px;
            width:100%;
            background-color:#FFFFFF;
        }
        main{
            margin-top:80px;
            width:100%;
            background-color:#78EEE7;
            text-align:center;
        }
    </style>
</head>
<body>
    <header>
    <div class="login" style="height:60px; width:auto; margin-top:10px; margin-right:10px; border-radius:5px; float:right;background-color:#08E4F2;"><a style="display:block; line-height:10px; margin-top:25px; text-decoration: none; letter-spacing: 0.25em; padding-left:10px; padding-right:10px; color:white;" href="{{route('new_register')}}">ユーザー登録</a></div>

        <div class="login" style="height:60px; width:auto; margin-top:10px; margin-right:10px; border-radius:5px; float:right;background-color:#40D2F2;"><a style="display:block; line-height:10px; margin-top:25px; text-decoration: none; letter-spacing: 0.25em; padding-left:10px; padding-right:10px; color:white;" href="#">ログイン</a></div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
