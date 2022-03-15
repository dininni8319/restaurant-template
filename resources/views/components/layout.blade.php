<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>
        {{$title ?? ''}}
    </title>
</head>
<body>

    {{$slot}}
    
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://kit.fontawesome.com/8b2d718081.js" crossorigin="anonymous"></script>
</body>
</html>