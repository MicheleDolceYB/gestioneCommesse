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
            <h1>Commesse</h1>
        </div>
    </div>
        <div>
            <a href="commesse/create">
             Add commesse   
            </a>
        </div>

    @foreach ($commesse as $c )
        
    
    <div>
        <div>
            <div class="float-right">
                <a href="commesse/{{ $c->id }}/edit">edit</a>
                <form action="commesse/{{ $c->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">
                        delete
                    </button>
                    </form>
            </div>
            <span>  {{ $c->client_id }}</span>
            <span>  {{ $c->stato }}</span>
            <span>  {{ $c->link }}</span>
            <span>  {{ $c->description }}</span>
        </div>
    </div>
    @endforeach
</body>
</html>