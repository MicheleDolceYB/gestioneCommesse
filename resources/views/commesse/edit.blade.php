<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>update</h1>
    <div class="flex">
        <form action="/commesse/{{ $commesse->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="content">
                <input type="int" name="client_id" value="{{ $commesse->client_id }}">
                <input type="text" name="stato" value="{{ $commesse->stato }}">
                <input type="text" name="link" value="{{ $commesse->link }}">
                <input type="text" name="description" value="{{ $commesse->description }}">
                <button type="submit">submit</button>
            </div>
        </form>
    </div>    
</body>
</html>