<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Todo List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    @include('inc.navbar')
    <div class="container">
    @include('inc.messages')
        @yield('content')
    </div>

    <footer id="footer" class="text-center">
        <p> Copyright &copy; 2019 TodoList </p>
    </footer>
</body>
</html>