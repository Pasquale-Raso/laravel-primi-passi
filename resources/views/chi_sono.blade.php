<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi sono</title>
</head>
<body>
    <h1>Chi sono</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat saepe inventore sapiente ratione cum quasi asperiores impedit! Similique quaerat molestias assumenda sunt harum ipsum consectetur? Eum quia animi quo consequatur.</p>
    <div class="link">
    <a href="{{ route('home') }}   "> Home </a>
    <a href="{{ route('portfolio') }}   "> portfolio </a>
    <a href="{{ route('contatti') }}   "> contatti </a>
    </div>

    <style>
    .link{
        margin-left: 20px;
        font-size: 40px;
    }
    .link a{
        color: red;
        margin-left: 20px;
    }

</style>

</body>
</html>