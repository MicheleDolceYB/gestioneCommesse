<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create</h1>
    <div class="flex">
        <form action="/client" method="POST">
            @csrf
            <div class="content">
                <input type="text" name="name" placeholder="name...">
                <button type="submit">submit</button>
            </div>
        </form>
    </div>    
</body>
</html>