<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="container">
            <h1>Client</h1>
        </div>
    </div>
        <div>
            <a href="client/create">
             Add client   
            </a>
        </div>

    @foreach ($client as $c )
        
    
    <div>
        <div>
            <div class="float-right">
                <a href="client/{{ $c->id }}/edit">edit</a>
                <form action="client/{{ $c->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">
                        delete
                    </button>
                    </form>
            </div>
            <span> Name: {{ $c->name }}</span>
        </div>
    </div>
    @endforeach
</body>
</html>