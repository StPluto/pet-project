<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>vAvito</title>
    <style>
        a,
        a:visited,
        a:hover,
        a:active {
            color: inherit;
            text-decoration: none;
        }

        header {
            width: 100%;
            position: absolute;
        }

        header h1 {
            position: absolute;
            left: 25%;
            text-align: center;
            width: 50%;
            height: 40px;
            margin-top: auto;
        }

        .reg {
            position: absolute;
            right: 0px;
            text-align: center;
            font-size: 24px;
            width: 25%;
            height: 40px;
        }

        .home {
            position: absolute;
            left: 0px;
            text-align: center;
            font-size: 24px;
            width: 25%;
            height: 40px;
        }

        .box {
            height: 256px;
            width: 256px;
            border: 5px solid orangered;
            padding: 50px;
            margin: 20px;
        }

        .posts {
            position: absolute;
            top: 40px;
        }

        .input-center {
            width: 25%;
            margin: 0 auto;
        }

        .form {
            width: 50%;
            height: 400px;
            position: relative;
            left: 25%;
            right: 25%;

        }

        .form header {
            font-size: 2rem;
            font-weight: 500;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .form input {
            height: 60px;
            width: 200px;
            padding: 0 15px;
            font-size: 17px;
            margin-bottom: 1.3rem;
            border: 3px solid #ddd;
            border-radius: 6px;
        }

        .form input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
        }

        .form a {
            font-size: 16px;
            color: #009579;
            text-decoration: none;
        }

        .form a:hover {
            text-decoration: underline;
        }

        .form input.button {
            color: #fff;
            background: #009579;
            font-size: 1.2rem;
            font-weight: 500;
            letter-spacing: 1px;
            margin-top: 1.7rem;
            cursor: pointer;
            transition: 0.4s;

        }

        .form input.button:hover {
            background: #006653;
        }

        .signup {
            font-size: 17px;
            text-align: center;
            left: 10px;
        }

        .signup label {
            color: #009579;
            cursor: pointer;
        }

        .signup label:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header>
        <div class="home"><a href="{{route('/')}}">Главная</a></div>
        <h1>vAvito</h1>
        <div class="reg"><a href="{{ route('registrationForm')}}">Регистрация</a></div>
    </header>
    @yield('content')
</body>

</html>