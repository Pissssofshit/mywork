<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if(Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md" style="font-size:32px">
                    MJUTECH开发框架工具集
                </div>
				<div class="links">
					相关文档：
                    <a href="https://laravel.com/docs">Laravel官方</a>
                    <a href="https://github.com/laravel/laravel">Laravel的GitHub源码</a>
                    <a href="https://cs.laravel-china.org/">Laravel中文速查表</a>
				</div>
				<div class="links">
					相关工具：
                    <a href="/autophp/gen/entry/databasetoxml.php">数据库转xml</a>
                    <a href="/autophp/gen/entry/index.php">Autophp代码生成</a>
					<a href="/blueprint/entry/index.php">apiblueprint接口文档Demo</a>
					<a href="/autophp">生成的后台入口</a>
				</div>
            </div>
        </div>
    </body>
</html>
