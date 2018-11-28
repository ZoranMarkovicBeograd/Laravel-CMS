<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--Laravel Assets-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>

    <!-- Main Js file -->
    <script src="{{asset('js/app.js')}}"></script>



</head>
<body>
    <div class="container-fluid">
        <div class="row">

            @yield('main-row')

        </div>
    </div>

</body>
</html>