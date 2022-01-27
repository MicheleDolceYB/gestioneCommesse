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
        <form action="/commesse" method="POST">
            @csrf
            <div class="content">
                <input type="int" name="client_id" placeholder="name...">
                <input type="text" name="stato" placeholder="stato...">
                <input type="text" name="link" placeholder="link...">
                <input type="text" name="description" placeholder="description...">
                <button type="submit">submit</button>
            </div>
        </form>
    </div>    
</body>
</html>