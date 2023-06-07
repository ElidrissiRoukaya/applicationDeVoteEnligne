<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @livewireStyles

</head>
<style> 
.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f5f0e1;
    border-radius: 5px;
}

h1 {
    text-align: center;
    color: #29138b;
    margin-bottom: 20px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: 1px solid #29138b;
}

label {
    font-weight: bold;
    color: #29138b;
}

.alert-danger {
    color: #6087b4;
    background-color:  #6087b4;
    border: 1px solid #6087b4;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
}

.btn-warning {
    display: block;
    width: 100%;
    padding: 10px;
    text-align: center;
    background-color: #29138b;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-warning:hover {
    background-color: #394e92;
}

</style>

<body style="background-color: rgb(224, 224, 224);">
<br><br>
    {{ $slot }}

    <!-- Latest compiled JavaScript -->
    <script src=" {{ asset('js/bootstrap.min.css') }}"></script>
    @livewireScripts
</body>

</html>
